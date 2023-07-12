<x-app>
    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Detail Data Materi
                </div>
            </div>
            <div class="card-body">
                <h5>Judul: {{ $materi->judul }}</h5>
                <hr>
                Deskripsi:
                <p>
                    {!! nl2br($materi->deskripsi) !!}
                </p>
                <hr>
                <embed src="{{$materi->link}}" width="100%" height="500px">
            </div>
        </div>
    </div>
</div>
</x-app>

