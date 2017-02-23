           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Data Portofolio</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Beranda</a>
                        </li>
                        <li>
                            Portofolio
                        </li>
                        <li class="active">
                            <strong>Edit Data Portofolio </strong>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrapper wrapper-content">
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col-md-12">
                        <a href="<?=base_url('admin/portofolio')?>">
                            <button class="btn btn-info col-md-3" >Kembali </button>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <img src="<?=base_url('image/gambar_portofolio/default.png')?>" class="img-responsive img-thumbnail">
                    </div>
                    <div class="col-md-3">
                        <img src="<?=base_url('image/gambar_portofolio/default.png')?>" class="img-responsive img-thumbnail">
                    </div>
                    <div class="col-md-3">
                        <img src="<?=base_url('image/gambar_portofolio/default.png')?>" class="img-responsive img-thumbnail">
                    </div>
                    <div class="col-md-3">
                        <img src="<?=base_url('image/gambar_portofolio/default.png')?>" class="img-responsive img-thumbnail">
                    </div>
                </div>
                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-3">
                        <img src="<?=base_url('image/gambar_portofolio/default.png')?>" class="img-responsive img-thumbnail">
                    </div>
                    <div class="col-md-3">
                        <img src="<?=base_url('image/gambar_portofolio/default.png')?>" class="img-responsive img-thumbnail">
                    </div>
                    <div class="col-md-3">
                        <img src="<?=base_url('image/gambar_portofolio/default.png')?>" class="img-responsive img-thumbnail">
                    </div>
                </div>
                <div class="row" style="margin-top: 15px;">

                <!-- awal form portofolio -->
                    <div class="col-md-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Form Data Input Portofolio</h5>
                            </div>
                            <div>
                                <div class="ibox-content">
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="form-group"><label class="col-sm-2 control-label">Nama Project</label>
                                            <div class="col-sm-10">
                                                <label class="control-label"><?=$data['']?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="form-group"><label class="col-sm-2 control-label">Jenis Project</label>
                                            <div class="col-sm-10">
                                                <select name="jenis" ng-model="anggota.jenis" class="form-control">
                                                    <option value="Jaringan">Jaringan</option>
                                                    <option value="Program">Program</option>
                                                    <option value="Desain">Desain</option>
                                                    <option value="Lainnya">Lainnya</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="form-group"><label class="col-sm-2 control-label">Gambar Tambahan Project</label>
                                            <div class="col-sm-10">
                                                <label class="control-label"></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="form-group"><label class="col-sm-2 control-label">Keterangan Project</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="keterangan" placeholder="Tujuan Kegiatan" rows="5" required>{{anggota.keterangan}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="form-group"><label class="col-sm-2 control-label">Tanggal Pembuatan</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="tgl_pembuatan" class="form-control" placeholder="Contoh : 16-9-2016 sampai 16-10-2017" value="{{anggota.tgl_pembuatan}}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="pull-right">
                                            <button type="reset" class="btn btn-danger btn-rounded"> Reset </button>
                                            <button type="submit" class="btn btn-info btn-rounded"> Kirim </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- batas form  -->
                </div>
            </div>

       