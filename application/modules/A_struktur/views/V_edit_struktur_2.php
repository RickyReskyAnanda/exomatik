           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Data Struktur</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Beranda</a>
                        </li>
                        <li>
                            Data Struktur
                        </li>
                        <li class="active">
                            <strong>Tambah Data Struktur </strong>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrapper wrapper-content">
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col-md-12">
                        <a href="<?=base_url('A_struktur')?>">
                            <button class="btn btn-info btn-rounded col-md-3" >Kembali </button>
                        </a>
                    </div>
                </div>
                <div class="row">

                <!-- awal form portofolio -->
                    <div class="col-md-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Form Input Data Struktur</h5>
                            </div>
                            <div>
                                <div class="ibox-content">
                                    <form action="<?=base_url('A_struktur/update_data_struktur_departemen')?>" method="post" enctype="multipart/form-data">
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Nama Lengkap</label>
                                                <div class="col-sm-10"><input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Anggota" value="<?=$data['nama']?>" required></div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Jabatan</label>
                                                <div class="col-sm-10">
                                                    <select name="jabatan" class="form-control" required>
                                                    <?php for($i=0;$i<count($jabatan);$i++){?>
                                                        <option value="<?=$jabatan[$i]?>" <?php if($data['jabatan']==$jabatan[$i]){echo "selected";}?>><?=$jabatan[$i]?></option>
                                                    <?php } ?>  
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="id" value="<?=$data['id_struktur']?>">
                                        <input type="hidden" name="img" value="<?=$data['foto']?>">
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Angkatan</label>
                                                <div class="col-sm-10">
                                                    <input type="text"  name="angkatan" 
                                                                        class="form-control" 
                                                                        placeholder="Ex. 8" 
                                                                        value="<?=$data['angkatan']?>" 
                                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Jurusan</label>
                                                <div class="col-sm-10">
                                                    <select name="jurusan" class="form-control" required>
                                                        <option value="Teknik-Informatika" <?php if($data['jurusan']=="Teknik-Informatika"){echo "selected";}?>>Teknik Informatika</option>
                                                        <option value="Sistem-Informasi" <?php if($data['jurusan']=="Sistem-Informasi"){echo "selected";}?>>Sistem Informasi</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Departemen</label>
                                                <div class="col-sm-10">
                                                    <select name="departemen" class="form-control" required>
                                                        <option value="kesekretariatan" <?php if($data['departemen']=="kesekretariatan"){echo "selected";}?>>Kesekretariatan</option>
                                                        <option value="ki" <?php if($data['departemen']=="ki"){echo "selected";}?>>Kreatif & Inovatif</option>
                                                        <option value="pendidikan" <?php if($data['departemen']=="pendidikan"){echo "selected";}?>>Pendidikan</option>
                                                        <option value="humas" <?php if($data['departemen']=="humas"){echo "selected";}?>>Hubungan Masyarakat</option>
                                                        <option value="keuangan" <?php if($data['departemen']=="keuangan"){echo "selected";}?>>Keuangan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Keterangan</label>
                                                <div class="col-sm-10">
                                                    <textarea name="keterangan" class="form-control" maxlength="150" required><?=$data['keterangan']?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Foto Resmi</label>
                                                <div class="col-sm-10">
                                                    <input type="file" name="foto" class="form-control">
                                                    *input foto untuk mengganti foto
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

                