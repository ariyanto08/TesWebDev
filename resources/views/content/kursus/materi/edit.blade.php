<x-app>
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Edit Data Materi
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ url('materi', $materi->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="" class="control-label">Judul</label>
                            <input type="text" name="judul" class="form-control" value="{{ $materi->judul }}">
                        </div>

                        <div class="form-group">
                            <label for="" class="control-label">Deskripsi</label>
                            <textarea name="deskripsi"class="form-control">{{$materi->deskripsi}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="" class="control-label">Link</label>
                            <input type="text" name="link" class="form-control" value="{{ $materi->link }}">
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
