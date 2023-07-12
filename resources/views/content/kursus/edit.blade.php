<x-app>
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Edit Data Kursus
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ url('kursus', $kursus->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="" class="control-label">Judul</label>
                            <input type="text" name="judul" class="form-control" value="{{ $kursus->judul }}">
                        </div>

                        <div class="form-group">
                            <label for="" class="control-label">Deskripsi</label>
                            <textarea name="deskripsi"class="form-control">{{$kursus->deskripsi}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="" class="control-label">Durasi</label>
                            <input type="text" name="durasi" class="form-control" value="{{ $kursus->durasi }}">
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
</x-app>
