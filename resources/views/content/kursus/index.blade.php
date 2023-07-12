<x-app>
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title mt-3">Daftar Kursus</h3>
              <x-button.add url="kursus/create"/>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Durasi</th>
                  <th>Materi</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($list_kursus as $kursus)
                <tr>
                  <td>{{$kursus->judul}}</td>
                  <td>{{substr($kursus->deskripsi, 0, 100)}}...</td>
                  <td>{{$kursus->durasi}}</td>
                  <td class="text-center"><a href="{{ url("kursusmateri/$kursus->id") }}" class="btn btn-dark"><i
                    class="fa fa-book"></i></a></td>
                  <td class="text-center">
                    <x-button.show url="kursus" id="{{ $kursus->id }}"/>
                    <x-button.edit url="kursus" id="{{ $kursus->id }}" />
                    <x-button.delete id="{{ $kursus->id }}"/>
                  </td>
                </tr>
                @endforeach
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
</x-app>
