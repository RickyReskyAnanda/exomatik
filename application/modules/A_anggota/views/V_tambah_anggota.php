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
                        <a href="<?=base_url('A_anggota')?>">
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
                                            <div class="form-group"><label class="col-sm-2 control-label">Nomor Induk</label>
                                                <div class="col-sm-10"><input type="text" name="nik" class="form-control" placeholder="Masukkan Nomor Induk Anggota" required></div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Nama Lengkap</label>
                                                <div class="col-sm-10"><input type="text" name="nama_lengkap" class="form-control" placeholder="Masukkan Nama Anggota" required></div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Jenis Kelamin</label>
                                                <div class="col-sm-10">
                                                    <select name="jk" class="form-control">
                                                        <option value="laki-laki">Laki-Laki</option>
                                                        <option value="perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Tempat Lahir</label>
                                                <div class="col-sm-10"><input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Daerah Lahir " required></div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Tanggal Lahir</label>
                                                <div class="col-sm-10"><input type="date"  name="tgl_lahir" class="form-control" placeholder="Contoh 2016-12-31" required></div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Nomor HP</label>
                                                <div class="col-sm-10"><input type="text" name="no_hp" class="form-control" placeholder="Masukkan Nomor Handphone " required></div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Angkatan</label>
                                                <div class="col-sm-10">
                                                    <select name="angkatan" class="form-control">
                                                    <?php for($i=1;$i<=$angkatan+1;$i++){?>
                                                        <option value="<?=$i?>"><?=$i?></option>
                                                    <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Status Keanggotaan</label>
                                                <div class="col-sm-10">
                                                    <select name="status" class="form-control">
                                                        <option value="anggota">Anggota</option>
                                                        <option value="pengurus">Pengurus</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Foto Resmi</label>
                                                <div class="col-sm-10">
                                                    <input type="file" name="foto" class="form-control">
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

                