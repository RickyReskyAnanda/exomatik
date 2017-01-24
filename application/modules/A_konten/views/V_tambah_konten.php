           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Data Anggota</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Beranda</a>
                        </li>
                        <li>
                            Data Konten
                        </li>
                        <li class="active">
                            <strong>Tambah Data Konten </strong>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrapper wrapper-content">
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col-md-12">
                        <a href="<?=base_url('A_konten')?>">
                            <button class="btn btn-info btn-rounded col-md-3" >Kembali </button>
                        </a>
                    </div>
                </div>
                <div class="row">

                <!-- awal form portofolio -->
                    <div class="col-md-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Form Input Data Konten</h5>
                            </div>
                            <div>
                                <div class="ibox-content">
                                    
                                    <form action="<?=base_url('A_konten/insert_data_konten')?>" method="post" enctype="multipart/form-data" onsubmit="return postForm()">
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Judul Konten</label>
                                                <div class="col-sm-10"><input type="text" name="judul_konten" class="form-control" placeholder="Masukkan Judul Konten.." required></div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Deskripsi Singkat</label>
                                                <div class="col-sm-10">
                                                    <textarea name="deskripsi" class="form-control" placeholder="Masukkan Deskripsi Singkat.." maxlength="250" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Gambar Konten</label>
                                                <div class="col-sm-10">
                                                    <input type="file" name="gambar" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Tag</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="tag" class="form-control">
                                                    *Tag pisah dengan koma (,)
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

                