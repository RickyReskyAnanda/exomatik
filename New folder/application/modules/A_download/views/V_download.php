        <span ng-app="exoapp"ng-controller="downloadctrl">
           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Data Download</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Beranda</a>
                        </li>
                        <li>
                            Data Download
                        </li>
                        <li>
                            Data Table Download
                        </li>
                        <li class="active">
                            <strong>{{status}}</strong>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="widget style1 red-bg">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <i class="fa fa-newspaper-o fa-5x"></i>
                                    </div>
                                    <div class="col-xs-8 text-right">
                                        <span> Konten </span>
                                        <h2 class="font-bold">{{jumlahText.konten}}</h2>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget style1 navy-bg">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-child fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <span> Anggota </span>
                                    <h2 class="font-bold">{{jumlahText.anggota}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget style1 lazur-bg">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-file-pdf-o fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <span> Program Kerja </span>
                                    <h2 class="font-bold">{{jumlahText.proker}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget style1 yellow-bg">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-send fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <span> Portofolio </span>
                                    <h2 class="font-bold">{{jumlahText.portofolio}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">

                            <div class="panel-body">
                                <div class="ibox-title">
                                    <h5>Table Download</h5>
                                </div>
                                <div class="ibox-content">

                                    <button class="btn btn-info btn-rounded" ng-click="viewmodal()" data-toggle="modal" data-target="#myModal5">
                                        <i class="fa fa-plus"></i> Tambah Data Download
                                    </button>
                                    <div class="col-sm-3 pull-right">
                                        <div class="input-group"><input type="text" ng-model="pencarian" placeholder="Search" class="input-sm form-control"> <span class="input-group-btn">
                                            <button type="button" class="btn btn-sm btn-primary"> Go!</button> </span>
                                        </div>
                                    </div>

                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Download</th>
                                                <th>link</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr ng-repeat="val in downloadText | filter:pencarian">
                                                <td>{{$index+1}}</td>
                                                <td>{{val.nama}}</td>
                                                <td>{{val.link}}</td>
                                                <td>
                                                    <button class="btn btn-info btn-rounded" ng-click="ubah(val)" data-toggle="modal" data-target="#myModal5">Edit</button>
                                                    <button class="btn btn-danger btn-rounded" ng-click="hapusdata(val.id,$index)">Hapus</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- Modal -->
                                    <div class="modal inmodal " id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content animated flipInY">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                    <h4 class="modal-title">{{judul}} Data Download</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                
                                                            <div class="row" style="margin-bottom: 10px;">
                                                                <div class="form-group"><label class="col-sm-3 control-label">Nama Download</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" ng-model="download.nama">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row" style="margin-bottom: 10px;">
                                                                <div class="form-group"><label class="col-sm-3 control-label">Link</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" ng-model="download.link">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-white" ng-click="simpandata()">Simpan</button>
                                                </div>
                                            </div>
                                        </div><!-- /. view modal -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </span>

        <script type="text/javascript">
            var app=angular.module('exoapp',[]);

            app.controller('downloadctrl',function($scope,$http){

                    $http.post("<?= base_url('A_dashboard/select_jumlah_widget');?>"   //jumlah berita
                      ).success(function(data){
                        $scope.jumlahText = data;
                    });

                    $http.post("<?= base_url('A_download/select_data_download');?>"   //jumlah berita
                      ).success(function(result){
                        $scope.downloadText = result;
                    });

            /**
              |-----------------------------------------------------------------------------------------------
              |                               INSERT DATA
              |-----------------------------------------------------------------------------------------------
              */    
                    $scope.viewmodal = function(){
                      $scope.judul                  = "Tambah";
                      $scope.aksi                   = "tambah";
                      $scope.download               = {};
                    }
            
                    $scope.tambahdata = function(){
                      $http.post(
                        "<?=base_url('A_download/insert_data_download');?>",
                        {
                          data: $scope.download //data kembalian
                        }
                      ).success(function(data){
                        alert("Berhasil Menyimpan data");
                        $scope.downloadText.push({
                            "id"            :data,
                            "nama"          :$scope.download.nama,
                            "link"          :$scope.download.link
                        });
                      }).error(function(){
                        alert("Gagal menyimpan data -_-");
                      });
                    };

                    
            /**
              |-----------------------------------------------------------------------------------------------
              |                               EDIT DATA
              |-----------------------------------------------------------------------------------------------
              */
                  $scope.ubah = function(val){
                    $scope.judul            = "edit";
                    $scope.aksi             = "ubah";
                    $scope.idYgAkanDiUbah   = val.id;
                    $scope.download         = val;
                  };


                  $scope.ubahdata = function(){
                    $http.post(
                      "<?=base_url('A_download/update_data_download');?>",
                      {
                        id  : $scope.idYgAkanDiUbah,
                        data: $scope.download
                      }
                    ).success(function(data){
                      alert(data);
                    }).error(function(){
                      alert("Gagal mengubah data");
                    });
                  };


                  $scope.simpandata = function(){
                    switch($scope.aksi){
                      case "tambah":
                        $scope.tambahdata();
                      break;
                      
                      case "ubah":
                        $scope.ubahdata();
                      break;
                    }
                  };


            /**
              |-----------------------------------------------------------------------------------------------
              |                               Hapus Data
              |-----------------------------------------------------------------------------------------------
              */
                $scope.hapusdata = function(id,index){
                    if (confirm("Apakah anda ingin menghapus ? ")){
                        $http.post(
                          "<?=base_url('A_download/delete_data_download')?>",
                          {
                            id:id
                          }
                        ).success(function(data){
                            $scope.downloadText.splice(index,1);
                            alert(data);
                        }).error(function(){
                          alert("Gagal menghapus data");
                        });
                    }
                };
            });

        </script>

                