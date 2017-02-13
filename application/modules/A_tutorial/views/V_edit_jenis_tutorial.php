           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Data Tutorial</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Beranda</a>
                        </li>
                        <li>
                            Tutorial
                        </li>
                        <li class="active">
                            <strong>Input Jenis Tutorial </strong>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrapper wrapper-content">
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col-md-12">
                        <a href="<?=base_url('A_tutorial')?>">
                            <button class="btn btn-info btn-rounded col-md-3" >Kembali </button>
                        </a>
                    </div>
                </div>
                <div class="row">

                <!-- awal form portofolio -->
                    <div class="col-md-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Input Jenis Tutorial</h5>
                            </div>
                            <div>
                                <div class="ibox-content">
                                    <form action="<?=base_url('admin/tutorial/jenis/update')?>" method="post">
                                        <input type="hidden" name="id_jenis_tutorial" value="<?=$data['id_jenis_tutorial']?>">
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Nama Jenis Tutorial</label>
                                                <div class="col-sm-10"><input type="text" name="nama_jenis_tutorial" class="form-control" placeholder="Masukkan Nama Jenis Tutorial" value="<?=$data['nama_jenis_tutorial']?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Keterangan</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="keterangan" placeholder="Masukkan keterangan" maxlength="250" required><?=$data['keterangan']?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Nonaktif</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="nonaktif" required>
                                                        <option value="ya" <?php if($data['nonaktif']=='ya')echo'selected';?>>Ya</option>
                                                        <option value="tidak" <?php if($data['nonaktif']=='tidak')echo'selected';?>>Tidak</option>
                                                    </select>
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
 