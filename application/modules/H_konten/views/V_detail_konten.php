      <!-- bagian  --> 
        <section class="page-header">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <ul class="breadcrumb">
                  <li><a href="<?=base_url()?>">Home</a></li>
                  <li><a href="<?=base_url('konten')?>">Konten</a></li>
                  <li class="active"><?=$konten['judul_konten']?></li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h1>Konten</h1>
              </div>
            </div>
          </div>
        </section>
      <!-- batas  -->
      <!-- Bagian isi  -->
      <div class="container">
          <div class="row">
            <div class="col-md-9">
              <div class="blog-posts single-post">
                <article class="post post-large blog-single-post">
                  <div class="post-image">
                    <div>
                      <div class="img-thumbnail">
                        <img class="img-responsive" src="<?=base_url()?>image/gambar_konten/<?=$konten['gambar']?>" alt="">
                      </div>
                    </div>
                  </div>
                  <div class="post-date">
                    <span class="day"><?=$konten['hari']?></span>
                    <span class="month"><?=$konten['bulan']?></span>
                  </div>
                  <div class="post-content">
                    <h2><?=$konten['judul_konten']?></h2>
                    <div class="post-meta">
                      <span><i class="fa fa-user"></i> By <a href="#"><?=$konten['nama']?></a> </span>
                      <span><i class="fa fa-tag"></i> <?=$konten['tag']?></span>
                    </div>
                    <div class="addthis_inline_share_toolbox"></div>
                    <p><?=$konten['isi_konten']?></p>
                    <div class="addthis_inline_share_toolbox"></div>
                    <div class="fb-comments" data-href="<?=base_url().'konten/'.$this->uri->segment(2).'/'.$this->uri->segment(3)?>" data-width="700" data-numposts="20"></div>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-md-3">
              <aside class="sidebar">
                <div class="tabs mb-xlg">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#popularPosts" data-toggle="tab"><i class="fa fa-star"></i> Popular</a></li>
                    <li><a href="#recentPosts" data-toggle="tab">Terbaru</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="popularPosts">
                      <ul class="simple-post-list">
                        <?php for($i=0;$i<count($populer);$i++){ ?>
                        <li>
                          <div class="post-image">
                            <div class="img-thumbnail">
                              <a href="<?=$populer[$i]['link']?>">
                                <img src="<?=$populer[$i]['gambar']?>" class="img-responsive" style="width:50px;" alt="Thumb">
                              </a>
                            </div>
                          </div>
                          <div class="post-info">
                            <a href="<?=$populer[$i]['link']?>"><?=$populer[$i]['judul_konten']?></a>
                            <div class="post-meta">
                               <?=$populer[$i]['tgl_rilis']?>
                            </div>
                          </div>
                        </li>
                        <?php } ?>
                      </ul>
                    </div>
                    <div class="tab-pane" id="recentPosts">
                      <ul class="simple-post-list">
                        <?php for($i=0;$i<count($terbaru);$i++){ ?>
                        <li>
                          <div class="post-image">
                            <div class="img-thumbnail">
                              <a href="<?=$terbaru[$i]['link']?>">
                                <img src="<?=$terbaru[$i]['gambar']?>" class="img-responsive" style="width:50px;" alt="Thumb">
                              </a>
                            </div>
                          </div>
                          <div class="post-info">
                            <a href="<?=$terbaru[$i]['link']?>"><?=$terbaru[$i]['judul_konten']?></a>
                            <div class="post-meta">
                               <?=$terbaru[$i]['tgl_rilis']?>
                            </div>
                          </div>
                        </li>
                        <?php } ?>
                      </ul>
                    </div>
                  </div>
                </div>
              </aside>
            </div>
          </div>
        </div>
      </div>
      <!-- batas sejarah -->  
