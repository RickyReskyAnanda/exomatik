  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/homepage/css/fullviewportofolio.css" />

<section id="middle">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 wow fadeInDown">
        <div class="accordion">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="media accordion-inner">
                <h2 class="title-float"><?=$data['divisi']?></h2>
                <h3 class="title-float"><?=$data['nama_kegiatan']?></h3>
                <h3 class="title-float">Keterangan : <?=strtoupper($data['status'])?></h3>
                <div class="media-body">
                <?php if($data['status']!="daftar"){ ?>
                  <div id=slidercontainer>
                    <div id=css3slider>
                      <div class="row">
                        <div class="col-md-12">
                          <?php for($i=0;$i<count($data['foto']);$i++){?>
                          <img src="<?=base_url()?>gambar_proker/<?=$data['foto'][$i];?>" alt="Square-tailed kite">
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                  <br><b>Waktu : <br><p><?=$data['waktu']?></p></b></br>
                  <br><b>Tujuan : </b></br>
                  <br>
                    <p><?=$data['tujuan_kegiatan']?></p>

                  <br><b>Dokumentasi Kegiatan : </b></br> <br>
                  <div class="row">
                      <?php 
                        if($data['status']!="daftar"){for($i=0;$i<count($data['foto']);$i++){?>
                    <div class="col-sm-4">
                          <img src="<?=base_url()?>gambar_proker/<?=$data['foto'][$i];?>" alt="Square-tailed kite" class="img-responsive">

                    </div>
                          <?php }} ?>

                  </div>
                </div>
              </div>
            </div>
            <!-- Satu Postingan -->
           <!-- Buttons start here. Copy this ul to your document. -->

            <div id="disqus_thread"></div>
  
          </div>
        </div>
      </div>
      <div class="col-sm-4 wow fadeInDown">
        <div class="panel panel-default">
        <!-- /.panel-heading -->
        <div class="panel-body">
            <!-- Nav tabs -->
       <h2><p>Program Kerja Lainnya</p></h2>

       <?php for($i=0;$i<count($data['menu']);$i++){
       $a=$i+1;?>
        <p><a href="<?=base_url()?>program-kerja/<?=$data['menu'][$i]['id_proker']?>/<?=$data['menu'][$i]['link']?>"><?=$a.". ".$data['menu'][$i]['nama_kegiatan']?></a></p>
        <?php } ?>
        </div>
        <!-- /.panel-body -->
      </div>
      <div class="panel panel-default">
          
                      
      </div>

    </div>
  </div>
</section>