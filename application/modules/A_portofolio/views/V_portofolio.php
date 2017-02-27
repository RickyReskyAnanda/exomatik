           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Data Portofolio</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Beranda</a>
                        </li>
                        <li>
                            Data Portofolio
                        </li>
                        <li class="active">
                            <strong>Data Tabel Portofolio </strong>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrapper wrapper-content">
                
                <div class="row">
                    <div class="col-md-3">
                        <a href="<?=base_url('admin/portofolio/tambah')?>">
                            <div class="ibox">
                                <div class="ibox-content product-box">
                                    <div class="product-imitation">
                                        <i class="fa fa-plus fa-4x"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php for ($i=0; $i < count($data); $i++) { if($i==3)break; ?>
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="ibox-content product-box">

                                    <img src="<?=$data[$i]['image']?>" class="img-responsive">
                                
                                <div class="product-desc">
                                    
                                    <small class="text-muted"><?=ucfirst($data[$i]['jenis_p'])?></small>
                                    <a href="<?=$data[$i]['link']?>" class="product-name"> <?=ucfirst($data[$i]['nama_portofolio'])?></a>



                                    <div class="small m-t-xs">
                                        <?=ucfirst($data[$i]['deskripsi_singkat_p'])?>
                                    </div>
                                    <div class="m-t text-righ">

                                        <a href="<?=$data[$i]['link']?>" class="btn btn-xs btn-primary">Edit <i class="fa fa-long-arrow-right"></i> </a>
                                        <a href="<?=$data[$i]['delete']?>" class="btn btn-xs btn-danger">Hapus <i class="fa fa-long-arrow-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="row">
                    <?php for ($i=3; $i < count($data); $i++) { ?>
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="ibox-content product-box">

                                    <img src="<?=$data[$i]['image']?>" class="img-responsive">
                                
                                <div class="product-desc">
                                    
                                    <small class="text-muted"><?=ucfirst($data[$i]['jenis_p'])?></small>
                                    <a href="<?=$data[$i]['link']?>" class="product-name"> <?=ucfirst($data[$i]['nama_portofolio'])?></a>



                                    <div class="small m-t-xs">
                                        <?=ucfirst($data[$i]['deskripsi_singkat_p'])?>
                                    </div>
                                    <div class="m-t text-righ">

                                        <a href="<?=$data[$i]['link']?>" class="btn btn-xs btn-primary">Edit <i class="fa fa-long-arrow-right"></i> </a>
                                   

                                        <a href="<?=$data[$i]['delete']?>" class="btn btn-xs btn-danger">Hapus <i class="fa fa-long-arrow-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(($i+1)%4==0 && $i!=3){?>
                    </div>
                    <div class="row">
                    <?php } }?>
                </div>
            </div>

       

                