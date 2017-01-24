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
                            <strong>Edit Data Anggota </strong>
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
                                <h5>Form Edit Data Anggota</h5>
                            </div>
                            <div>
                                <div class="ibox-content">
                                    <form action="<?=base_url('A_anggota/update_data_anggota')?>" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="id_anggota" value="<?=$data['id_anggota']?>">
                                        <input type="hidden" name="img" value="<?=$data['foto']?>">
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Nomor Induk</label>
                                                <div class="col-sm-10"><input type="text" name="nik" class="form-control" placeholder="Masukkan Nomor Induk Anggota" value="<?=$data['nik']?>" required></div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Nama Lengkap</label>
                                                <div class="col-sm-10"><input type="text" name="nama_lengkap" class="form-control" placeholder="Masukkan Nama Anggota" value="<?=$data['nama']?>" required></div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Jenis Kelamin</label>
                                                <div class="col-sm-10">
                                                    <select name="jk" class="form-control">
                                                        <option value="laki-laki" <?php if($data['jk']=="laki-laki"){echo "selected";}?>>Laki-Laki</option>
                                                        <option value="perempuan" <?php if($data['jk']=="perempuan"){echo "selected";}?>>Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Tempat Lahir</label>
                                                <div class="col-sm-10"><input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Daerah Lahir" value="<?=$data['tempat_lahir']?>" required></div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Tanggal Lahir</label>
                                                <div class="col-sm-10"><input type="date"  name="tgl_lahir" class="form-control" placeholder="Contoh 2016-12-31" value="<?=$data['tgl_lahir']?>" required></div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Nomor HP</label>
                                                <div class="col-sm-10"><input type="text" name="no_hp" class="form-control" placeholder="Masukkan Nomor Handphone " value="<?=$data['no_hp']?>" required></div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Angkatan</label>
                                                <div class="col-sm-10">
                                                    <select name="angkatan" class="form-control" required>
                                                    <?php for($i=1;$i<=$angkatan+1;$i++){?>
                                                        <option value="<?=$i?>" <?php if($data['angkatan']==$i){echo "selected";}?>><?=$i?></option>
                                                    <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Status Keanggotaan</label>
                                                <div class="col-sm-10">
                                                    <select name="status" class="form-control" required>
                                                        <option value="anggota" <?php if($data['status']=="anggota"){echo "selected";}?>>Anggota</option>
                                                        <option value="pengurus" <?php if($data['status']=="pengurus"){echo "selected";}?>>Pengurus</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Foto Resmi</label>
                                                <div class="col-sm-10">
                                                    <input type="file" name="foto" class="form-control">
                                                    <p>* input gambar jika ingin mengganti gambar</p>
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

                