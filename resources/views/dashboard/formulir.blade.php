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
                <form action="/home" method="POST" class="row">
                    @csrf
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input
                                type="number"
                                class="form-control"
                                id="nik"
                                name="nik"
                                placeholder="Masukkan NIK"
                            />
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input
                                type="text"
                                class="form-control"
                                id="nama"
                                name="nama"
                                placeholder="Masukkan Nama Lengkap"
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
                            ></textarea>
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
                                placeholder="Masukkan Nama Pekerjaan"
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
                                placeholder="Masukkan Tempat Lahir"
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
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="AB">AB</option>
                                <option value="O">O</option>
                            </select>
                        </div>
                        <button
                            type="submit"
                            name="uploadData"
                            class="btn btn-danger px-5 mt-4"
                        >
                            <i class="fas fa-upload"></i>
                            <span>Upload data</span>
                        </button>
                    </div>

                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->    
@endsection