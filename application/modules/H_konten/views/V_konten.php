      <!-- Bagian   -->
        <section class="section" style="background: #20231E url('<?=base_url('image/gambar_page/konten.png')?>') center 0 no-repeat ; margin:0 0 50px 0; ">
          <div class="container" style="padding-top: 50px;padding-bottom: 50px;">
            <div class="row">
              <div class="col-md-12" align="center" >
                <h1 style="color: #fff">Berbagi Pengetahuan</h1>
                <h4 style="color: #fff;font-size: 20px;">Saling berbagi pengetahuan seputar dunia teknologi</h4>
                <h4 style="color: #fff;font-size: 24px;">"Kita bisa jika semua terlibat dan saling memberi manfaat"</h4>
              </div>
            </div>
          </div>
        </section>
      <!-- batas  -->  
      <!-- awal isi -->
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <div class="blog-posts">
              <?php for($i=0;$i<count($terbaru);$i++){?>
                <article class="post post-medium">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="post-image">
                        <div class="img-thumbnail">
                          <img class="img-responsive" src="<?=$terbaru[$i]['gambar']?>" alt="Gambar Thumb">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="post-content">
                        <h2><a href="<?=$terbaru[$i]['link']?>"><?=$terbaru[$i]['judul_konten']?></a></h2>
                        <p><?=$terbaru[$i]['deskripsi']?> [...]</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="post-meta">
                        <span><i class="fa fa-calendar"></i> <?=$terbaru[$i]['tgl_rilis']?></span>
                        <span><i class="fa fa-user"></i> By <?=$terbaru[$i]['nama']?> </span>
                        <span><i class="fa fa-comments"></i> <?=$terbaru[$i]['komentar']?> Comments</span>
                        <span><i class="fa fa-tag"></i><?=$terbaru[$i]['tag']?></span>
                        <a href="<?=$terbaru[$i]['link']?>" class="btn btn-xs btn-primary pull-right">Read more...</a>
                      </div>
                    </div>
                  </div>
                </article>
              <?php } ?>
              </div>
            </div>
            <div class="col-md-3">
                <div class="tabs mb-xlg">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#popularPosts" data-toggle="tab"><i class="fa fa-star"></i> Popular</a></li>
                    <li><a href="#recentPosts" data-toggle="tab">Terkomentari</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="popularPosts">
                      <ul class="simple-post-list">
                        <?php for($i=0;$i<count($populer);$i++){?>
                        <li>
                          <div class="post-image">
                            <div class="img-thumbnail">
                              <a href="<?=$populer[$i]['link']?>">
                                <img src="<?=base_url()?>gambar_konten/thumb/<?=$populer[$i]['gambar']?>" alt="">
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
                        <?php for($i=0;$i<count($terkomentari);$i++){?>
                        <li>
                          <div class="post-image">
                            <div class="img-thumbnail">
                              <a href="<?=$terkomentari[$i]['link']?>">
                                <img src="<?=base_url()?>gambar_konten/thumb/<?=$terkomentari[$i]['gambar']?>" alt="">
                              </a>
                            </div>
                          </div>
                          <div class="post-info">
                            <a href="<?=$terkomentari[$i]['link']?>"><?=$terkomentari[$i]['judul_konten']?></a>
                            <div class="post-meta">
                               <?=$populer[$i]['tgl_rilis']?>
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
      <!-- batas isi -->