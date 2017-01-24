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
                                    <form action="<?=base_url('A_struktur/insert_data_struktur_inti')?>" method="post" enctype="multipart/form-data">
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Nama Lengkap</label>
                                                <div class="col-sm-10"><input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Anggota" required></div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Jabatan</label>
                                                <div class="col-sm-10">
                                                    <select name="jabatan" class="form-control" required>
                                                    <?php for($i=0;$i<count($jabatan);$i++){?>
                                                        <option value="<?=$jabatan[$i]?>"><?=$jabatan[$i]?></option>
                                                    <?php } ?>  
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="tbl" value="<?=$this->uri->segment(3)?>">
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Angkatan</label>
                                                <div class="col-sm-10"><input type="text" name="angkatan" class="form-control" placeholder="Ex. 8" required></div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Jurusan</label>
                                                <div class="col-sm-10">
                                                    <select name="jurusan" class="form-control" required>
                                                        <option value="Teknik-Informatika">Teknik Informatika</option>
                                                        <option value="Sistem-Informasi">Sistem Informasi</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Keterangan</label>
                                                <div class="col-sm-10">
                                                    <textarea name="keterangan" class="form-control" maxlength="150" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Foto Resmi</label>
                                                <div class="col-sm-10">
                                                    <input type="file" name="foto" class="form-control" required>
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

                