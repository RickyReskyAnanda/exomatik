           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Data Anggota</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Beranda</a>
                        </li>
                        <li>
                            Data Anggota
                        </li>
                        <li class="active">
                            <strong>Tambah Data Anggota </strong>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrapper wrapper-content">               
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col-md-12">
                        <a href="<?=base_url('admin/donatur')?>">
                            <button class="btn btn-info btn-rounded col-md-3" >Kembali </button>
                        </a>
                    </div>
                </div>
                <div class="row">

                <!-- awal form portofolio -->
                    <div class="col-md-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Form Input Data Anggota</h5>
                            </div>
                            <div>
                                <div class="ibox-content">
                                    <form action="<?=base_url('A_anggota/insert_data_anggota')?>" method="post" enctype="multipart/form-data">
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Nama Donatur</label>
                                                <div class="col-sm-10"><input type="text" name="nama_donatur" class="form-control" placeholder="Masukkan Nama Donatur" required></div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Januari</label>
                                                <div class="col-sm-5">
                                                    <select class="form-control" name="jan" required>
                                                        <option value="kosong">Kosong</option>
                                                        <option value="masuk">Masuk</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="date" name="jan" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Februari</label>
                                                <div class="col-sm-5">
                                                    <select class="form-control" name="jan" required>
                                                        <option value="kosong">Kosong</option>
                                                        <option value="masuk">Masuk</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="date" name="jan" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Maret</label>
                                                <div class="col-sm-5">
                                                    <select class="form-control" name="jan" required>
                                                        <option value="kosong">Kosong</option>
                                                        <option value="masuk">Masuk</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="date" name="jan" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">April</label>
                                                <div class="col-sm-5">
                                                    <select class="form-control" name="jan" required>
                                                        <option value="kosong">Kosong</option>
                                                        <option value="masuk">Masuk</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="date" name="jan" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Mei</label>
                                                <div class="col-sm-5">
                                                    <select class="form-control" name="jan" required>
                                                        <option value="kosong">Kosong</option>
                                                        <option value="masuk">Masuk</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="date" name="jan" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Juni</label>
                                                <div class="col-sm-5">
                                                    <select class="form-control" name="jan" required>
                                                        <option value="kosong">Kosong</option>
                                                        <option value="masuk">Masuk</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="date" name="jan" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Juli</label>
                                                <div class="col-sm-5">
                                                    <select class="form-control" name="jan" required>
                                                        <option value="kosong">Kosong</option>
                                                        <option value="masuk">Masuk</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="date" name="jan" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Agustus</label>
                                                <div class="col-sm-5">
                                                    <select class="form-control" name="jan" required>
                                                        <option value="kosong">Kosong</option>
                                                        <option value="masuk">Masuk</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="date" name="jan" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">September</label>
                                                <div class="col-sm-5">
                                                    <select class="form-control" name="jan" required>
                                                        <option value="kosong">Kosong</option>
                                                        <option value="masuk">Masuk</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="date" name="jan" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Oktober</label>
                                                <div class="col-sm-5">
                                                    <select class="form-control" name="jan" required>
                                                        <option value="kosong">Kosong</option>
                                                        <option value="masuk">Masuk</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="date" name="jan" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">November</label>
                                                <div class="col-sm-5">
                                                    <select class="form-control" name="jan" required>
                                                        <option value="kosong">Kosong</option>
                                                        <option value="masuk">Masuk</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="date" name="jan" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Desember</label>
                                                <div class="col-sm-5">
                                                    <select class="form-control" name="jan" required>
                                                        <option value="kosong">Kosong</option>
                                                        <option value="masuk">Masuk</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="date" name="jan" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Tanggal lahir</label>
                                                <div class="col-sm-10">
                                                    <input type="date" name="tgl_lahir" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Pekerjaan</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="pekerjaan" class="form-control" placeholder="Masukkan Pekerjaan" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Gender</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="jk" required>
                                                        <option value="laki-laki">Laki-Laki</option>
                                                        <option value="perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Nomor HP</label>
                                                <div class="col-sm-10">
                                                    <input type="number" name="no_hp" class="form-control" placeholder="Masukkan nomor hp" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Alamat</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" placeholder="Masukkan Alamat"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        

                                        <div class="row">
                                            <div class="pull-right">
                                                <button type="reset" class="btn btn-danger btn-rounded"> Reset </button>
                                                <button type="submit" class="btn btn-info btn-rounded"> Kirim </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- batas form  -->
                </div>

                