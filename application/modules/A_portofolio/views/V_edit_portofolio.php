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
                <?php for($i=0;$i<count($data['gambar']);$i++){ ?>
                    <div class="col-md-3">
                        <img src="<?=$data['gambar'][$i]['nama_foto']?>" class="img-responsive img-thumbnail">
                    </div>
                <?php if(($i+1)%4==0){ ?>
                </div>
                <div class="row" style="margin-top: 10px;">
                <?php } }?>
                </div>
                <div class="row">

                <!-- awal form portofolio -->
                    <div class="col-md-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Form Data Input Portofolio</h5>
                            </div>
                            <div>
                                <div class="ibox-content">
                                <form action="<?=base_url('A_portofolio/insert_data_portofolio')?>" method="post" enctype="multipart/form-data">
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="form-group"><label class="col-sm-2 control-label">Nama Project</label>
                                            <div class="col-sm-10"><input type="text" name="nama_portofolio" class="form-control" placeholder="Nama Project" required></div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="form-group"><label class="col-sm-2 control-label">Jenis Project</label>
                                            <div class="col-sm-10">
                                                <select name="jenis" class="form-control">
                                                    <option value="Jaringan">Jaringan</option>
                                                    <option value="Program">Program</option>
                                                    <option value="Desain">Desain</option>
                                                    <option value="Iot">Internet of Thing</option>
                                                    <option value="Lainnya">Lainnya</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="form-group"><label class="col-sm-2 control-label">Gambar DP</label>
                                            <div class="col-sm-6">
                                                <input type="file" name="gambar_dp" class="form-control">
                                                * input jika ingin mengganti gambar dp
                                            </div>
                                            <div class="col-sm-4">
                                                <img src="<?=base_url().'image/gambar_portofolio/dp/'.$data['foto_dp_p']?>" class="img-thumbnail img-responsive">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="form-group"><label class="col-sm-2 control-label">Gambar Project</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="gambar[]" multiple class="form-control">
                                                * input jika ingin mengganti gambar
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="form-group"><label class="col-sm-2 control-label">Keterangan Gambar</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="deskripsi" placeholder="Deskripsi Portofolio" rows="5" required></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="form-group"><label class="col-sm-2 control-label">Tahun Pembuatan</label>
                                            <div class="col-sm-10">
                                                <input type="year" name="tahun" class="form-control" placeholder="Tahun Pembuatan" value="<?=date('Y')?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="form-group"><label class="col-sm-2 control-label">Penjelasan</label>
                                            <div class="col-sm-10">
                                                <textarea id="summernote" name="content">
                                                </textarea>
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
            </div>

       