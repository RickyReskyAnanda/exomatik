           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Data Program Kerja</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Beranda</a>
                        </li>
                        <li>
                            Data Program Kerja
                        </li>
                        <li class="active">
                            <strong>Tambah Data Program Kerja </strong>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrapper wrapper-content">               
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col-md-12">
                        <a href="<?=base_url('A_proker')?>">
                            <button class="btn btn-info btn-rounded col-md-3" >Kembali </button>
                        </a>
                    </div>
                </div>
                <div class="row">

                <!-- awal form portofolio -->
                    <div class="col-md-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Form Edit Data Program Kerja</h5>
                            </div>
                            <div>
                                <div class="ibox-content">
                                    <form action="<?=base_url('A_proker/update_data_proker')?>" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="id_proker" value="<?=$data['id_proker']?>">
                                        <input type="hidden" name="foto_dp_lama" value="<?=$data['foto_dp_k']?>">
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Nama Kegiatan</label>
                                                <div class="col-sm-10"><input type="text" class="form-control" name="nama_kegiatan" value="<?=$data['nama_kegiatan']?>" placeholder="Masukkan Nama Kegiatan.." required></div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Tujuan Kegiatan</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="tujuan_kegiatan" placeholder="Tujuan Kegiatan" rows="5" required><?=$data['tujuan_kegiatan']?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Sasaran Kegiatan</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="sasaran_kegiatan" placeholder="Sasaran Kegiatan" rows="5" required><?=$data['sasaran_kegiatan']?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Waktu Kegiatan</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="waktu_kegiatan" placeholder="Waktu Pelaksanaan" rows="5" required><?=$data['waktu_kegiatan']?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Sumber Dana</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="sumber_dana" placeholder="Sumber Dana" rows="5" required><?=$data['sumber_dana']?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom: 10px;" >
                                            <div class="form-group"><label class="col-sm-2 control-label">Status</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="status" required>
                                                        <option value="daftar" <?php if($data['status_kegiatan']=='daftar')echo 'selected';?>>Daftar</option>
                                                        <option value="terlaksana" <?php if($data['status_kegiatan']=='terlaksana')echo 'selected';?>>Terlaksana</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Divisi</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="divisi" required>
                                                        <option value="kesekretariatan" <?php if($data['divisi_kegiatan']=='kesekretariatan')echo 'selected';?>>Kesekretariatan</option>
                                                        <option value="ki" <?php if($data['divisi_kegiatan']=='ki')echo 'selected';?>>Kreatif & Inovatif</option>
                                                        <option value="pendidikan" <?php if($data['divisi_kegiatan']=='pendidikan')echo 'selected';?>>Pendidikan</option>
                                                        <option value="humas" <?php if($data['divisi_kegiatan']=='humas')echo 'selected';?>>Hubungan Masyarakat</option>
                                                        <option value="keuangan" <?php if($data['divisi_kegiatan']=='keuangan')echo 'selected';?>>Keuangan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;" >
                                            <div class="form-group"><label class="col-sm-2 control-label">Foto DP</label>
                                                <div class="col-sm-6">
                                                    <input type="file" class="form-control" name="foto_dp">
                                                    * input jika ingin mengganti foto dp
                                                </div>
                                                <div class="col-sm-4">
                                                    <img src="<?=$data['foto_dp']?>" class="img-responsive img-thumbnail">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;" >
                                            <div class="form-group"><label class="col-sm-2 control-label">Foto Kegiatan Terlaksana</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" name="foto_k[]" multiple>
                                                    * input jika ingin mengganti foto kegiatan
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;" >
                                            <?php for($i=0;$i<count($data['gambar']);$i++){ ?>
                                            <div class="col-md-3">
                                                <img src="<?=$data['gambar'][$i]['nama_foto']?>" class="img-thumbnail img-responsive">
                                            </div>
                                        <?php if(($i+1)%4==0){?>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;" >
                                            <?php } }?>
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