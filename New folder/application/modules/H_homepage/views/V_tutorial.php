   <span ng-app="exoapp" ng-controller="exoctrl">
   <section id="middle">
    <div class="container" ng-cloak>
      <div class="row">
        <div class="col-sm-8 wow fadeInDown">
          <div class="accordion">
            <div class="panel panel-default">
            <div class="panel-body">
              <h4>Random Tutorial</h4>
              <hr>
            </div>
            
              <div class="panel-body" ng-repeat="val in tutorialText | filter:pencarian">
                <div class="media accordion-inner">
                  <div class="media-body col-md-9">
                    <h4>{{val.judul_tutorial}}</h4><a href="#" class="alert-info">{{val.judul_utama}}</a>
                    <p>{{val.deskripsi}}</p>
                    <a href="<?=base_url()?>tutorial/{{val.id_tutorial}}/{{val.link}}"><button type="button" class="btn btn-primary btn-sm">Baca Selengkapnya...</button></a>
                  </div>
                </div>
              </div>
              <!-- Satu Postingan -->
              <div class="panel-body" ng-hide="tampil">
                <div class="media accordion-inner">
                  <div class="row">
                    <div class="col-sm-12">
                      <h3 align="center"><strong> LOADING ..... </strong></h3>
                    </div>
                  </div>
                </div>
              </div>
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
               <h2><p>List Tutorial</p></h2>
               <hr>
               <?php for($i=0;$i<count($data['judul']);$i++){?>
                 <h5><?=$data['judul'][$i]['judul_utama']?></h5>
                  <ol type="1">
                  <?php for($a=0;$a<count($data['menu']);$a++){
                  if($data['menu'][$a]['judul_utama']==$data['judul'][$i]['judul_utama']){?>
                    <li><a href="<?=base_url()?>tutorial/<?=$data['menu'][$a]['id_tutorial']?>/<?=$data['menu'][$a]['link']?>"><?=$data['menu'][$a]['judul_tutorial']?></a></li>
                    <?php }} ?>
                  </ol>
                <?php }?>
            </div>
            <!-- /.panel-body -->
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
          $http.post("<?= base_url('H_homepage/select_data_tutorial');?>",
                {
                  level: $scope.level //data kembalian
                } 
            ).success(function(data){
              $scope.level = $scope.level + 5;
              $scope.tutorialText = data;
          });


        $scope.loaddata = function(){
          $scope.tampil=false;
          $http.post("<?= base_url('H_homepage/select_data_tutorial');?>",
                {
                  level: $scope.level //data kembalian
                } 
            ).success(function(data){
              $scope.tampil=true;
              $scope.level = $scope.level + 5;
              $scope.tutorialText = data;
          });
        }
    
  });

</script>