<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use App\Http\Controllers\Controller;

class KursusController extends Controller
{
    function index(){
        $data['list_kursus'] = Kursus::all();
        return view('content.kursus.index', $data);
    }
    function create(){
        return view('content.kursus.create');
    }
    function store()
    {
        $kursus = new Kursus();
        $kursus->judul = request('judul');
        $kursus->deskripsi = request('deskripsi');
        $kursus->durasi = request('durasi');
        $kursus->save();

        return redirect('kursus');
    }
    function show(Kursus $kursus){
        $data['kursus'] = $kursus;
        return view('content.kursus.show',$data);
    }
    function edit(Kursus $kursus)
    {
        $data['kursus'] =  $kursus;
        return view('content.kursus.edit', $data);
    }

    function update(Kursus $kursus)
    {
        $kursus->judul = request('judul');
        $kursus->deskripsi = request('deskripsi');
        $kursus->durasi = request('durasi');
        $kursus->save();

        return redirect('kursus');
    }
    function destroy(Kursus $kursus)
    {
        $kursus->delete();
        return back();
    }
}
