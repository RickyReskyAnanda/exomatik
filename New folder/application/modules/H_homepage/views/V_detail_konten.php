<section id="middle">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 wow fadeInDown">
          <div class="accordion">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="media accordion-inner">
                
                    <h4 class="title-float"><?=$konten['judul_konten']?></h4>
                    <h3 class="writer"><i>By <?=$konten['penulis']?></i></h3>
                  <div class="media-body">
                   <img class="img-main img-responsive" src="<?=base_url()?>gambar_konten/<?=$konten['gambar']?>">
                    <?=$konten['isi_konten']?>
                  </div>
                  <?php for($i=0;$i<count($konten['tag']);$i++){?>
                  <a href="#" class="alert-info"><?=$konten['tag'][$i]?></a>
                  <?php } ?>
                  <br>
                </div>
              </div>
              <!-- Satu Postingan -->




             <!-- Buttons start here. Copy this ul to your document. -->
  <div class="share-button">
    <ul class="rrssb-buttons">
      <li class="rrssb-facebook">
        <!--  Replace with your URL. For best results, make sure you page has the proper FB Open Graph tags in header:
              https://developers.facebook.com/docs/opengraph/howtos/maximizing-distribution-media-content/ -->
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?=base_url()?>konten/<?=$this->uri->segment(2)?>/<?=$this->uri->segment(3)?>" class="popup">
          <span class="rrssb-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 29"><path d="M26.4 0H2.6C1.714 0 0 1.715 0 2.6v23.8c0 .884 1.715 2.6 2.6 2.6h12.393V17.988h-3.996v-3.98h3.997v-3.062c0-3.746 2.835-5.97 6.177-5.97 1.6 0 2.444.173 2.845.226v3.792H21.18c-1.817 0-2.156.9-2.156 2.168v2.847h5.045l-.66 3.978h-4.386V29H26.4c.884 0 2.6-1.716 2.6-2.6V2.6c0-.885-1.716-2.6-2.6-2.6z"/></svg>
          </span>
          <span class="rrssb-text">facebook</span>
        </a>
      </li>
      <li class="rrssb-twitter">
        <!-- Replace href with your Meta and URL information  -->
        <a href="https://twitter.com/intent/tweet?text=Ridiculously%20Responsive%20Social%20Sharing%20Buttons%20by%20%40dbox%20and%20%40joshuatuscan%3A%20http%3A%2F%2Fkurtnoble.com%2Flabs%2Frrssb%20%7C%20http%3A%2F%2Fkurtnoble.com%2Flabs%2Frrssb%2Fmedia%2Frrssb-preview.png"
        class="popup">
          <span class="rrssb-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M24.253 8.756C24.69 17.08 18.297 24.182 9.97 24.62a15.093 15.093 0 0 1-8.86-2.32c2.702.18 5.375-.648 7.507-2.32a5.417 5.417 0 0 1-4.49-3.64c.802.13 1.62.077 2.4-.154a5.416 5.416 0 0 1-4.412-5.11 5.43 5.43 0 0 0 2.168.387A5.416 5.416 0 0 1 2.89 4.498a15.09 15.09 0 0 0 10.913 5.573 5.185 5.185 0 0 1 3.434-6.48 5.18 5.18 0 0 1 5.546 1.682 9.076 9.076 0 0 0 3.33-1.317 5.038 5.038 0 0 1-2.4 2.942 9.068 9.068 0 0 0 3.02-.85 5.05 5.05 0 0 1-2.48 2.71z"/></svg>
          </span>
          <span class="rrssb-text">twitter</span>
        </a>
      </li>
      <li class="rrssb-googleplus">
        <!-- Replace href with your meta and URL information.  -->
        <a href="https://plus.google.com/share?url=Check%20out%20how%20ridiculously%20responsive%20these%20social%20buttons%20are%20<?=base_url()?>konten/<?=$this->uri->segment(2)?>/<?=$this->uri->segment(3)?>" class="popup">
          <span class="rrssb-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 8.29h-1.95v2.6h-2.6v1.82h2.6v2.6H21v-2.6h2.6v-1.885H21V8.29zM7.614 10.306v2.925h3.9c-.26 1.69-1.755 2.925-3.9 2.925-2.34 0-4.29-2.016-4.29-4.354s1.885-4.353 4.29-4.353c1.104 0 2.014.326 2.794 1.105l2.08-2.08c-1.3-1.17-2.924-1.883-4.874-1.883C3.65 4.586.4 7.835.4 11.8s3.25 7.212 7.214 7.212c4.224 0 6.953-2.988 6.953-7.082 0-.52-.065-1.104-.13-1.624H7.614z"/></svg>            </span>
          <span class="rrssb-text">google+</span>
        </a>
      </li>
      <li class="rrssb-pinterest">
        <!-- Replace href with your meta and URL information.  -->
        <a href="http://pinterest.com/pin/create/button/?url=<?=base_url()?>konten/<?=$this->uri->segment(2)?>/<?=$this->uri->segment(3)?>&amp;media=<?=base_url()?>gambar_konten/<?=$konten['gambar']?>&amp;description=Ridiculously%20responsive%20social%20sharing%20buttons%20by%20KNI%20Labs.">
          <span class="rrssb-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M14.02 1.57c-7.06 0-12.784 5.723-12.784 12.785S6.96 27.14 14.02 27.14c7.062 0 12.786-5.725 12.786-12.785 0-7.06-5.724-12.785-12.785-12.785zm1.24 17.085c-1.16-.09-1.648-.666-2.558-1.22-.5 2.627-1.113 5.146-2.925 6.46-.56-3.972.822-6.952 1.462-10.117-1.094-1.84.13-5.545 2.437-4.632 2.837 1.123-2.458 6.842 1.1 7.557 3.71.744 5.226-6.44 2.924-8.775-3.324-3.374-9.677-.077-8.896 4.754.19 1.178 1.408 1.538.49 3.168-2.13-.472-2.764-2.15-2.683-4.388.132-3.662 3.292-6.227 6.46-6.582 4.008-.448 7.772 1.474 8.29 5.24.58 4.254-1.815 8.864-6.1 8.532v.003z"/></svg>
          </span>
          <span class="rrssb-text">pinterest</span>
        </a>
      </li>      
    </ul>
    <!-- Buttons end here -->
<b><center><h2>Masukkan Komentar anda</h2></center></b>
<div id="comment">
<form name="submitcomment" method="post" action="<?=base_url('input-komentar')?>">Nama:<br>
<input name="nama" type="text" required><br>
Email(optional):<br><input type="email" name="email" type="text"><br><input type="hidden" name="id_konten" value="<?=$konten['id_konten']?>"><input type="hidden" name="pindah" value="<?=base_url()?>konten/<?=$this->uri->segment(2)?>/<?=$this->uri->segment(3)?>">
Komentar:<br><textarea name="komentar" rows="6" cols="100" class="form-control" required></textarea><br>
<input name="tombol" value="Kirim" class="btn btn-info" type="submit"></form></div>
  </div>
  <div id="disqus_thread"></div>
    <script>
        /**
         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
         */
        
        var disqus_config = function () {
            this.page.url = file:///E:/Kampus/Exo/frontendWebstiteExo/fullview.html  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        
        (function() {  // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            
            s.src = '//exomatiksc.disqus.com/embed.js';
            
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
  </div>
  </div>
  </div>
        <div class="col-sm-4 wow fadeInDown">
            <div class="panel panel-default">
            <!-- /.panel-heading -->
            <div class="panel-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a aria-expanded="true" href="#home" data-toggle="tab">Konten Terkomentari</a>
                    </li>
                    <!-- <li class=""><a aria-expanded="false" href="#profile" data-toggle="tab">Popular Post</a>
                    </li> -->
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="home">
                        <div class="panel-body">
                          <div class="media accordion-inner">
                            <?php for($i=0;$i<count($komentar);$i++){?>
                            <div class="media-body">
                              <a href="<?=base_url()?>konten/<?=$komentar[$i]->id_konten;?>/<?=$komentar[$i]->link;?>">
                                <h5><?=$komentar[$i]->judul_konten;?></h5>
                              </a>
                            </div>
                            <hr>
                            <?php } ?>
                          </div>
                        </div>
                    </div>
                    <!-- <div class="tab-pane fade" id="profile">
                         <div class="panel-body">
                          <div class="media accordion-inner">
                            
                            <?php for($i=0;$i<10;$i++){?>
                            <div class="media-body">
                              <a href="#">
                                <h5>Android Semakin Menanjak dan IOS Tak Mau Kalah</h5>
                              </a>
                            </div>
                            <hr>
                            <?php } ?>

                          </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
        <div class="panel panel-default">
            
            <div class="panel-body">
              <div class="tag-artikel">
                <h4>Tag Artikel</h4>
                <ul class="tag-list">
                  <li><a href="#">Security</a></li>
                  <li><a href="#">Andro</a></li>
                  <li><a href="#">NSFW</a></li>
                  <li><a href="#">PHP</a></li>
                  <li><a href="#">JS</a></li>
                  <li><a href="#">PC</a></li>
                  <li><a href="#">Security</a></li>
                  <li><a href="#">Andro</a></li>
                  <li><a href="#">NSFW</a></li>
                  <li><a href="#">PHP</a></li>
                  <li><a href="#">JS</a></li>
                  <li><a href="#">PC</a></li>
                </ul>
              </div>
            </div>
            
        </div>

      </div>
    </div>
  </section>