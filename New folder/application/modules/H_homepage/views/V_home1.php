<span ng-app="exoapp" ng-controller="exoctrl">
  <section id="main-slider" class="no-margin" ng-cloak>
    <div class="carousel slide">
      <ol class="carousel-indicators">
        <li data-target="#main-slider" data-slide-to="0" class="active"></li>
        <?php for($i=1;$i<count($proker);$i++){?>
        <li data-target="#main-slider" data-slide-to="<?=$i?>"></li>
        <?php } ?>
      </ol>
      <div class="carousel-inner">


      <?php 
      $aktif=0;
      foreach($proker as $row){?>
        <div class="item <?php if($aktif==0){echo 'active';}?>" style="background-image: url(<?=base_url()?>gambar_proker/<?=$row->foto?>); height: 520px">
          <div class="container">
            <div class="row slide-margin">
              <div class="col-sm-6">
                <div class="carousel-content">
                  <h1 class="animation animated-item-1"><?=strtoupper($row->nama_kegiatan)?></h1>
                  <h2 class="animation animated-item-2"><?=substr($row->tujuan_kegiatan,0,70)?>...</h2>
                  <a class="btn-slide animation animated-item-3" href="<?=base_url()?>program-kerja/<?=$row->id_proker?>/<?=$row->link?>">Baca Selengkapnya</a>
                </div>
              </div>
              <div class="col-sm-6 hidden-xs animation animated-item-4">
                <div class="slider-img">
               <!--  <img src="images/slider/img1.png" class="img-responsive"> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php 
      $aktif=1;
      } ?>
        

      </div>
    </div>
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
      <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
      <i class="fa fa-chevron-right"></i>
    </a>
  </section>
  <div class="row"></div>
  <section id="middle" ng-cloak>
    <div class="container">
      <div class="row">
        <div class="col-sm-8 wow fadeInDown">
          <div class="accordion">
            <div class="panel panel-default">
              <div class="panel-body">
              <h4>Konten</h4>
              <hr>
            </div>


            <!-- per daftar konten -->
              <div class="panel-body" ng-repeat="val in kontenText">
                <div class="media accordion-inner">
                  <div class="row">
                    <div class="col-sm-3">
                      <img class="img-responsive" src="<?=base_url()?>gambar_konten/{{val.gambar}}">
                    </div>
                    <div class="col-sm-9">
                      <h4>{{val.judul_konten}}</h4><a href="#" class="alert-info" ng-repeat="nat in val.tag">{{nat}}</a>
                      <p>{{val.deskripsi}}</p>
                      <a href="<?php base_url();?>konten/{{val.id_konten}}/{{val.link}}"><button type="button" class="btn btn-primary btn-sm">Baca Selengkapnya...</button></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel-body" ng-hide="tampil">
                <div class="media accordion-inner">
                  <div class="row">
                    <div class="col-sm-12">
                      <h3 align="center"><strong> LOADING ..... </strong></h3>
                    </div>
                  </div>
                </div>
              </div>
              <!-- batas per daftar konten -->
              <div class="panel-body">
                <button class="btn btn-primary col-md-12" ng-click="loaddata()">Selanjutnya..</button>
              </div>



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
                    <li class=""><a aria-expanded="false" href="#profile" data-toggle="tab">Tutorial Terbaru</a>
                    </li>
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
                    <div class="tab-pane fade" id="profile">
                         <div class="panel-body">
                          <div class="media accordion-inner">
                            
                            <?php for($i=0;$i<count($tutorial);$i++){?>
                            <div class="media-body">
                              <a href="<?=base_url()?>tutorial/<?=$tutorial[$i]->id_tutorial;?>/<?=$tutorial[$i]->link;?>">
                                <h5><?=$tutorial[$i]->judul_tutorial;?></h5>
                              </a>
                            </div>
                            <hr>
                            <?php } ?>

                          </div>
                        </div>
                    </div>
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
  <section id="services" class="service-item">
  <div class="container">
    <div class="center wow fadeInDown" style="margin-top: 20px">
      <h2>Departemen-departemen EXOMATIK</h2>
      <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
    </div>
      <div class="row">
          <div class="col-sm-6 col-md-4">
              <div class="media services-wrap wow fadeInDown">
                  <div class="pull-left">
                    <img class="img-responsive" src="<?=base_url()?>assets/homepage/images/services/services1.png">
                  </div>
                  <div class="media-body">
                      <h3 class="media-heading">Departemen Pendidikan</h3>
                      <p>Pendidikan tidak hanya soal belajar</p>
                  </div>
              </div>
          </div>
          <div class="col-sm-6 col-md-4">
              <div class="media services-wrap wow fadeInDown">
                  <div class="pull-left">
                    <img class="img-responsive" src="<?=base_url()?>assets/homepage/images/services/services2.png">
                  </div>
                  <div class="media-body">
                      <h3 class="media-heading">Departemen Kreatif dan Inovatif</h3>
                      <p>Menjadi Pemuda kreatif dan inovatif </p>
                  </div>
              </div>
          </div>
          <div class="col-sm-6 col-md-4">
              <div class="media services-wrap wow fadeInDown">
                  <div class="pull-left">
                    <img class="img-responsive" src="<?=base_url()?>assets/homepage/images/services/services3.png">
                  </div>
                  <div class="media-body">
                      <h3 class="media-heading">Departemen Kesekretariatan</h3>
                      <p>Tanggung Jawab adalah tugas kami</p>
                  </div>
              </div>
          </div>
        <div class="col-sm-6 col-md-4  col-md-offset-2">
              <div class="media services-wrap wow fadeInDown">
                  <div class="pull-left">
                    <img class="img-responsive" src="<?=base_url()?>assets/homepage/images/services/services4.png">
                  </div>
                  <div class="media-body">
                      <h3 class="media-heading">Departemen Keuangan</h3>
                      <p>Kejujuran dan Kerja keras</p>
                  </div>
              </div>
          </div>
          <div class="col-sm-6 col-md-4 ">
              <div class="media services-wrap wow fadeInDown">
                  <div class="pull-left">
                    <img class="img-responsive" src="<?=base_url()?>assets/homepage/images/services/services5.png">
                  </div>
                  <div class="media-body">
                      <h3 class="media-heading">Departemen <br/> Humas</h3>
                      <p>Manusia adalah makhluk sosial</p>
                  </div>
              </div>
        </div>
    </div>
  </section>
  </span>
<script type="text/javascript">
  var app=angular.module('exoapp',[]);

  app.controller('exoctrl',function($scope,$http){
            
                
      
    /**
      |-----------------------------------------------------------------------------------------------
      |                               Pengaturan Default
      |-----------------------------------------------------------------------------------------------
      */  $scope.tampil=true;
          $scope.level=5;
          $http.post("<?= base_url('H_homepage/select_data_konten');?>",
                {
                  level : $scope.level //data kembalian
                } 
            ).success(function(data){
              $scope.level=$scope.level+5;
              $scope.kontenText = data;
          });

          $scope.loaddata = function(){
          $scope.tampil=false;
          $http.post("<?= base_url('H_homepage/select_data_konten');?>",
                {
                  level: $scope.level //data kembalian
                } 
            ).success(function(data){
              $scope.tampil=true;
              $scope.level = $scope.level + 5;
              $scope.kontenText = data;
          });
        }
    
  });

</script>
    
  