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
                    <?php for ($i=0; $i < count($data); $i++) { ?>
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="ibox-content product-box">

                                <div class="product-imitation">
                                    [ INFO ]
                                </div>
                                <div class="product-desc">
                                    
                                    <small class="text-muted">Category</small>
                                    <a href="" class="product-name"> Product</a>



                                    <div class="small m-t-xs">
                                        Many desktop publishing packages and web page editors now.
                                    </div>
                                    <div class="m-t text-righ">

                                        <a href="#" class="btn btn-xs btn-primary">Detail <i class="fa fa-long-arrow-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

       

                