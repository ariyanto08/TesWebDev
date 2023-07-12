<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use App\Models\Materi;

class MateriController extends Controller
{
    function index($id)
    {
        $data['list_materi'] = Materi::all();
        $data['kursus'] = Kursus::find($id);
        return view('content.kursus.materi.index', $data);
    }

    function create()
    {
        return view('content.kursus.materi.index');
    }
    function store()
    {
        $materi = new Materi();
        $materi->id_kursus = request('id_kursus');
        $materi->judul = request('judul');
        $materi->deskripsi = request('deskripsi');
        $materi->link = request('link');
        $materi->save();

        return back();
    }
    function show(Materi $materi){
        $data['materi'] = $materi;
        return view('content.kursus.materi.show',$data);
    }
    function edit(Materi $materi)
    {
        $data['materi'] =  $materi;
        return view('content.kursus.materi.edit', $data);
    }
    function update(Materi $materi){
        $materi->judul = request('judul');
        $materi->deskripsi = request('deskripsi');
        $materi->link = request('link');
        $materi->save();

        return redirect()->to('kursusmateri/' . $materi->id_kursus);
    }
    function destroy(Materi $materi)
    {
        $materi->delete();

        return back();
    }
}
