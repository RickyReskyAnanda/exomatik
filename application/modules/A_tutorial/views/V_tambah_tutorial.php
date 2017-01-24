           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Data Tutorial</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Beranda</a>
                        </li>
                        <li>
                            Data tutorial
                        </li>
                        <li class="active">
                            <strong>Edit Data tutorial </strong>
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
                                <h5>Form Input Data tutorial</h5>
                            </div>
                            <div>
                                <div class="ibox-content">
                                    
                                    <form action="<?=base_url('A_tutorial/insert_data_tutorial')?>" method="post" enctype="multipart/form-data" onsubmit="return postForm()">
                                        
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Judul Utama Lama</label>
                                                <div class="col-sm-10" >
                                                    <select name="judul_utama_lama" class="form-control">
                                                        <option value="0">Pilih Judul Utama Lama</option>
                                                    <?php for($i=0;$i<count($data);$i++){?>
                                                        <option value="<?=$data[$i]->judul_utama?>"><?=$data[$i]->judul_utama?></option>
                                                    <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Judul Utama Baru</label>
                                                <div class="col-sm-10"><input type="text" name="judul_utama_baru" class="form-control" placeholder="Masukkan Judul Utama Baru">
                                                *kosongkan jika memilih judul utama lama</div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Judul tutorial</label>
                                                <div class="col-sm-10"><input type="text" name="judul_tutorial" class="form-control" placeholder="Masukkan Judul tutorial" required></div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Deskripsi Singkat</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="deskripsi" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="ibox-content no-padding">
                                                <textarea id="summernote" name="content">
                                                </textarea>
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
 