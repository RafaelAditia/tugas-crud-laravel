@extends('./template/master')
@section('title', 'Dashboard')
@section('content')
        <!-- /.card -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Form Data Kependudukan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @foreach ($data as $item)
                <form action="/home/{{$item->NIK}}"} method="POST" class="row">
                    @method('PUT')
                    @csrf
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input
                                type="number"
                                class="form-control"
                                id="nik"
                                name="nik"
                               value="{{$item->NIK}}"
                               disabled
                            />
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input
                                type="text"
                                class="form-control"
                                id="nama"
                                name="nama"
                                value="{{$item->nama}}"
                            />
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="gender"
                                    id="kelamin1"
                                    value="Laki-laki"
                                    @php
                                        if($item->gender=="Laki-laki") echo "checked"
                                    @endphp
                                />
                                <label
                                    class="form-check-label"
                                    for="kelamin1"
                                >
                                    Laki-laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="gender"
                                    id="kelamin2"
                                    value="Perempuan"
                                    @php
                                        if($item->gender=="Perempuan") echo "checked"
                                    @endphp
                                />
                                <label
                                    class="form-check-label"
                                    for="kelamin2"
                                >
                                    Perempuan
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea
                                class="form-control"
                                id="alamat"
                                placeholder="Masukkan Alamat"
                                name="alamat"
                                rows="4"
                            >{{$item->alamat}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Status Perkawinan</label>
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="status"
                                    id="status1"
                                    value="Sudah Kawin"
                                    @php
                                        if($item->status=="Sudah Kawin") echo "checked"
                                    @endphp
                                />
                                <label
                                    class="form-check-label"
                                    for="status1"
                                >
                                    Kawin
                                </label>
                            </div>
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="status"
                                    id="status2"
                                    value="Belum Kawin"
                                    @php
                                        if($item->status=="Belum Kawin") echo "checked"
                                    @endphp
                                />
                                <label
                                    class="form-check-label"
                                    for="status2"
                                >
                                    Belum Kawin
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label>
                            <input
                                type="text"
                                class="form-control"
                                id="pekerjaan"
                                name="pekerjaan"
                                value="{{$item->pekerjaan}}"
                            />
                        </div>
                        <div class="form-group">
                            <label for=""
                                >Status Kewarganegaraan</label
                            >
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="warga"
                                    id="warga1"
                                    value="WNI"
                                    @php
                                        if($item->warga_negara=="WNI") echo "checked"
                                    @endphp
                                />
                                <label
                                    class="form-check-label"
                                    for="warga1"
                                >
                                    WNI
                                </label>
                            </div>
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="warga"
                                    id="warga2"
                                    value="WNA"
                                    @php
                                        if($item->warga_negara=="WNA") echo "checked"
                                    @endphp
                                />
                                <label
                                    class="form-check-label"
                                    for="warga2"
                                >
                                    WNA
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tempatLahir"
                                >Tempat Lahir</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                id="tempatLahir"
                                name="tempatLahir"
                                value="{{$item->tempat_lahir}}"
                            />
                        </div>
                        <div class="form-group">
                            <label for="tanggalLahir"
                                >Tanggal Lahir</label
                            >
                            <input
                                type="date"
                                class="form-control"
                                id="tanggalLahir"
                                name="tanggalLahir"
                                value="{{$item->tanggal_lahir}}"
                            />
                        </div>
                        <div class="form-group">
                            <label for="darah"
                                >Golongan Darah</label
                            >
                            <select
                                id="darah"
                                name="darah"
                                class="form-control select2"
                            >
                                <option value="A" @php
                                    if($item->gol_darah=="A") echo "selected"
                                @endphp>A</option>
                                <option value="B" @php
                                if($item->gol_darah=="B") echo "selected"
                            @endphp>B</option>
                                <option value="AB" @php
                                if($item->gol_darah=="AB") echo "selected"
                            @endphp>AB</option>
                                <option value="O" @php
                                if($item->gol_darah=="O") echo "selected"
                            @endphp>O</option>
                            </select>
                        </div>
                        <button
                            type="submit"
                            class="btn btn-danger px-5 mt-4"
                        >
                            <i class="fas fa-upload"></i>
                            <span>Upload data</span>
                        </button>
                    </div>
                        
                </form>
                @endforeach
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->    
@endsection
