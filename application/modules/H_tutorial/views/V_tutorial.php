    <!-- Bagian   -->
        <section class="section" style="background: #20231E url('<?=base_url('image/gambar_page/tutorial.png')?>') center 0 no-repeat ; margin:0 0 50px 0; ">
          <div class="container" style="padding-top: 50px;padding-bottom: 50px;">
            <div class="row">
              <div class="col-md-12" align="center" >
                <h1 style="color: #fff">Mencari Ilmu</h1>
                <h4 style="color: #fff;font-size: 20px;">Belajar pemrograman, jaringan dan desain</h4>
                <h4 style="color: #fff;font-size: 24px;">"Ilmu yang baik adalah Ilmu yang bermanfaat"</h4>
              </div>
            </div>
          </div>
        </section>
      <!-- batas  -->  
      <!-- bagian slider -->
      <div class="container">
        <div class="row">
          <div class="col-md-12 ">
            <h2>Tutorial Terbaru</h2>
            <div class="lightbox" data-plugin-options='{"delegate": ".img-thumbnail", "type": "image", "gallery": {"enabled": true}, "mainClass": "mfp-with-zoom", "zoom": {"enabled": true, "duration": 300}}'>
              <div class="owl-carousel owl-theme stage-margin" data-plugin-options='{"items": 6, "margin": 10, "loop": false, "nav": true, "dots": false, "stagePadding": 40}'>
                <?php for ($i=0; $i < count($terbaru); $i++) { ?>
                <div>
                  <a class="img-thumbnail img-thumbnail-hover-icon mb-xs mr-xs" href="<?=base_url()?>image/gambar_tutorial/<?=$terbaru[$i]['gambar_tutorial']?>" style="border: 0px">
                    <img class="img-responsive" src="<?=base_url()?>image/gambar_tutorial/thumb/<?=$terbaru[$i]['gambar_tutorial']?>" alt="Project Image">
                  </a>
                  <h6><a href="<?=$terbaru[$i]['link']?>"><?=$terbaru[$i]['judul_tutorial']?></a></h6>
                  <div class="post-meta">
                    <span><i class="fa fa-calendar"></i> <small><?=$terbaru[$i]['tgl_rilis'];?></small></span>
                  </div>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>

        <div class="container bulat">
        <!-- awal -->
        <?php for ($i=0; $i < count($data); $i++) { ?>
          <div class="divider pattern divider-style-4 divider-quaternary taller">
            <i class="fa fa-chevron-down"></i>
          </div>
          <div class="row">
            <h2 align="center"><?=$data[$i]['nama_jenis_tutorial']?></h2>
            <?php for ($a=0; $a < count($data[$i]['data_kategori']); $a++) { ?>
            <div class="col-md-3">
              <img class="img-responsive img-circle mb-lg" src="<?=base_url()?>image/gambar_kt/<?=$data[$i]['data_kategori'][$a]['gambar_kt']?>" alt="Project Image">
              <h5><a href="<?=$data[$i]['data_kategori'][$a]['link']?>"><?=$data[$i]['data_kategori'][$a]['nama_kt']?></a></h5>
            </div>
            <?php } ?>

          </div>
        <?php } ?>
        <!-- akhir -->
          
        </div>
      </div>
      <!-- batas slider --> 