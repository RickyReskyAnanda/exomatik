      <!-- bagian  --> 
        <section class="page-header">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <ul class="breadcrumb">
                  <li><a href="beranda.html">Home</a></li>
                  <li><a href="blog-kontent.html">Kontent</a></li>
                  <li class="active">Berita</li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h1>Post</h1>
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
                      <span><i class="fa fa-comments"></i> <a href="#"><?=$konten['komentar']?> Komentar</a></span>
                    </div>
                    <p><?=$konten['isi_konten']?></p>
                    <span class="thumb-info-social-icons" style="border-top: 0px; margin-bottom: -30px">
                        <a target="_blank" href="#" style="background-color: #0a628e"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                        <a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                        <a href="#" style="background-color: #c71603"><i class="fa fa-google-plus"></i><span>Twitter</span></a>
                  </span>
                    <!-- <div class="post-block post-comments clearfix">
                      <h3 class="heading-primary"><i class="fa fa-comments"></i>Comments (3)</h3>
                      <ul class="comments">
                        <li>
                          <div class="comment">
                            <div class="img-thumbnail">
                              <img class="avatar" alt="" src="../sets/img/avatar-2.jpg">
                            </div>
                            <div class="comment-block">
                              <div class="comment-arrow"></div>
                              <span class="comment-by">
                                <strong>John Doe</strong>
                                <span class="pull-right">
                                  <span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
                                </span>
                              </span>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui.</p>
                              <span class="date pull-right">November 12, 2016 at 1:38 pm</span>
                            </div>
                          </div>

                          <ul class="comments reply">
                            <li>
                              <div class="comment">
                                <div class="img-thumbnail">
                                  <img class="avatar" alt="" src="../sets/img/avatar-3.jpg">
                                </div>
                                <div class="comment-block">
                                  <div class="comment-arrow"></div>
                                  <span class="comment-by">
                                    <strong>John Doe</strong>
                                    <span class="pull-right">
                                      <span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
                                    </span>
                                  </span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
                                  <span class="date pull-right">November 12, 2016 at 1:38 pm</span>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="comment">
                                <div class="img-thumbnail">
                                  <img class="avatar" alt="" src="../sets/img/avatar-4.jpg">
                                </div>
                                <div class="comment-block">
                                  <div class="comment-arrow"></div>
                                  <span class="comment-by">
                                    <strong>John Doe</strong>
                                    <span class="pull-right">
                                      <span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
                                    </span>
                                  </span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
                                  <span class="date pull-right">November 12, 2016 at 1:38 pm</span>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </li>
                        <li>
                          <div class="comment">
                            <div class="img-thumbnail">
                              <img class="avatar" alt="" src="../sets/img/avatar.jpg">
                            </div>
                            <div class="comment-block">
                              <div class="comment-arrow"></div>
                              <span class="comment-by">
                                <strong>John Doe</strong>
                                <span class="pull-right">
                                  <span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
                                </span>
                              </span>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              <span class="date pull-right">November 12, 2016 at 1:38 pm</span>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="comment">
                            <div class="img-thumbnail">
                              <img class="avatar" alt="" src="../sets/img/avatar.jpg">
                            </div>
                            <div class="comment-block">
                              <div class="comment-arrow"></div>
                              <span class="comment-by">
                                <strong>John Doe</strong>
                                <span class="pull-right">
                                  <span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
                                </span>
                              </span>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              <span class="date pull-right">November 12, 2016 at 1:38 pm</span>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="post-block post-leave-comment">
                      <h3 class="heading-primary">Tinggalkan Komentar</h3>
                      <form action="" method="post">
                        <div class="row">
                          <div class="form-group">
                            <div class="col-md-6">
                              <label>Your name *</label>
                              <input type="text" value="" maxlength="100" class="form-control" name="name" id="name">
                            </div>
                            <div class="col-md-6">
                              <label>Your email address *</label>
                              <input type="email" value="" maxlength="100" class="form-control" name="email" id="email">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group">
                            <div class="col-md-12">
                              <label>Comment *</label>
                              <textarea maxlength="5000" rows="10" class="form-control" name="comment" id="comment"></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <input type="submit" value="Post Comment" class="btn btn-primary btn-lg" data-loading-text="Loading...">
                          </div>
                        </div>
                      </form>
                    </div> -->
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
