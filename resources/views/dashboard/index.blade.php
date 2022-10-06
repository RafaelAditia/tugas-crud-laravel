@extends('./template/master')
@section('title', 'Dashboard')
@section('content')
<!-- Main content -->
<section class="content">
    <!-- /.card -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Penduduk</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table
                id="tbl_penduduk"
                class="table table-bordered table-striped"
            >
                <thead>
                    <tr>
                        <th>NIK</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Status Perkawinan</th>
                        <th>Pekerjaan</th>
                        <th>Kewarganegaraan</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>Golongan Darah</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{$item->NIK}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->gender}}</td>
                            <td>{{$item->alamat}}</td>
                            <td>{{$item->status}}</td>
                            <td>{{$item->pekerjaan}}</td>
                            <td>{{$item->warga_negara}}</td>
                            <td>{{$item->tempat_lahir}}, {{$item->tanggal_lahir}}</td>
                            <td>{{$item->gol_darah}}</td>
                            <td><a href="/home/{{$item->NIK}}/edit" class="badge bg-success">Edit</a></td>
                            <td><form action="/home/{{$item->NIK}}" method="POST">@method('DELETE')@csrf<button type="submit" class="btn badge bg-danger">Delete</button></form></td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot></tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</section>
<!-- /.content -->
@endsection
