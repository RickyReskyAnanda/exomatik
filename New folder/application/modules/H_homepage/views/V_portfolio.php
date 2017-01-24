<span ng-app="exoapp" ng-controller="exoctrl">
<section id="portfolio">
  <div class="container">
    <div class="center">
      <h2>Portfolio</h2>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
    </div>
    <?php $aktif=$this->uri->segment(2);?>
    <ul class="portfolio-filter text-center">
      <a href="<?=base_url('portfolio');?>"><button class="btn btn-default <?php if($aktif==null){echo 'active';}?>">All Works</button></a>
      <a href="<?=base_url('portfolio/program');?>"><button class="btn btn-default <?php if($aktif=='program'){echo 'active';}?>">Program</button></a>
      <a href="<?=base_url('portfolio/desain');?>"><button class="btn btn-default <?php if($aktif=='desain'){echo 'active';}?>">Desain</button></a>
      <a href="<?=base_url('portfolio/jaringan');?>"><button class="btn btn-default <?php if($aktif=='jaringan'){echo 'active';}?>">Jaringan</button></a>
      <a href="<?=base_url('portfolio/lainnya');?>"><button class="btn btn-default <?php if($aktif=='lainnya'){echo 'active';}?>">Lainnya</button></a>

    </ul> 
<?php $jumlah=count($data);$a=0?>

  <?php while($a<$jumlah){ ?>
      <div class="row clearfix">
      <?php for($i=1;$i<=3;$i++){ ?>

        <div class="col-md-4 col-sm-5">
        
          <div class="thumbnail wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms" style="padding: 0">
            <img src="<?=base_url()?>gambar_project/<?=$data[$a]->foto?>">
              <div class="caption" style="margin: 10px;">
                <h4><?=$data[$a]->nama_portofolio?></h4>
                <p>
                  <p><b>Jenis : </b> <?=$data[$a]->jenis?></p>
                  <p><b>Tanggal : </b> <?=$data[$a]->tgl_pembuatan?> </p>
                  <p><b>Pembuat :</b></p>
                  <p><ul type="circle">
                    <?php foreach($data[$a]->nama_anggota as $row){?>
                      <li><?=$row->nama?>
                    <?php } ?>
                    </ul></p>
                  <p><b>Ket:</b></p>
                  <p><?=$data[$a]->keterangan;?></p>
                  <!-- <a href="<?=base_url();?>portfolio/<?=$data[$a]->id_portofolio;?>/<?=$data[$a]->link;?>" class="alert-info">Baca Selengkapnya..</a> -->
                </p>
            </div>
          </div>
        </div>
      <?php
            $a++;
            if($a==$jumlah){
            break;
            }

       } ?>
      </div><!--/row-->
<?php } ?>
    </div>
  </div><!--/container -->
  
</section> 
</span>