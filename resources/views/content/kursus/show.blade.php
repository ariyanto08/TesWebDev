<x-app>

    <div class="row">
        <div class="col-md-12 mt-5">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Detail Data Kursus
                </div>
            </div>
            <div class="card-body">
                <h5>Judul: {{ $kursus->judul }}</h5>
                <h6>Durasi: {{$kursus->durasi}}</h6>
                <hr>
                Deskripsi: 
                <p>
                    {!! nl2br($kursus->deskripsi) !!}
                </p>
            </div>
        </div>
    </div>
</div>
</x-app>

