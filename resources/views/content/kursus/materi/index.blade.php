<x-app>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Data Materi
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ url('materi/store') }}">
                            @csrf
                            <input type="text" name="id_kursus" value="{{$kursus->id}}" hidden>
                            <div class="form-group">
                                <label for="" class="control-label">Judul</label>
                                <input type="text" name="judul" class="form-control" placeholder="Masukkan Judul">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" placeholder="Masukkan Deskripsi"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Masukkan Link Embed</label>
                                <input type="text" name="link" class="form-control"
                                    placeholder="Masukkan hanya link nya saja">
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-primary float-right">
                                        <i class="fas fa-save"> Simpan</i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Link Embed</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_materi as $materi)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $materi->judul }}</td>
                                        <td>{{ $materi->deskripsi }}</td>
                                        <td>{{ $materi->link }}</td>
                                        <td>
                                            <x-button.show url="materi" id="{{ $materi->id }}"/>
                                            <x-button.edit url="materi" id="{{ $materi->id }}" />
                                            <x-button.delete path="materi" id="{{ $materi->id }}"/>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
