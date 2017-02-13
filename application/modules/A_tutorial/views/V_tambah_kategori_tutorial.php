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
                            <strong>Input Kategori Tutorial </strong>
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
                                <h5>Input Kategori Tutorial</h5>
                            </div>
                            <div>
                                <div class="ibox-content">
                                    
                                    <form action="<?=base_url('admin/tutorial/kategori/insert')?>" method="post" enctype="multipart/form-data" onsubmit="return postForm()">
                                        
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Jenis Tutorial</label>
                                                <div class="col-sm-10" >
                                                    <select name="id_jenis_tutorial" class="form-control" required>
                                                        <option value="0">Pilih Kategori</option>
                                                    <?php for($i=0;$i<count($jenis);$i++){?>
                                                        <option value="<?=$jenis[$i]['id_jenis_tutorial']?>"><?=$jenis[$i]['nama_jenis_tutorial']?></option>
                                                    <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Nama Kategori</label>
                                                <div class="col-sm-10"><input type="text" name="nama_kt" class="form-control" placeholder="Masukkan Judul Utama Baru">
                                                *kosongkan jika memilih judul utama lama</div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Gambar Ikon</label>
                                                <div class="col-sm-10"><input type="file" name="gambar_kt" class="form-control" required></div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Keterangan</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="keterangan_kt" placeholder="Masukkan keterangan" maxlength="250" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Nonaktif</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="nonaktif_kt" required>
                                                        <option value="tidak">Tidak</option>
                                                        <option value="ya">Ya</option>
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
 