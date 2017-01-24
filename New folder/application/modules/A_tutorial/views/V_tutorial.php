
        <span ng-app="exoapp" ng-controller="tutorialctrl">
           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Data Tutorial</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Beranda</a>
                        </li>
                        <li>
                            Data Tutorial
                        </li>
                        <li class="active">
                            <strong>Data Tabel Tutorial </strong>
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
                            <div class="ibox-title">
                                <h5>Table tutorial</h5>
                            </div>
                            <div class="ibox-content">
                                <a href="<?=base_url('A_tutorial/tambah_data_tutorial')?>">
                                    <button class="btn btn-info btn-rounded">
                                        <i class="fa fa-plus"></i> Tambah Tutorial
                                    </button>
                                </a>
                                <div class="col-sm-3 pull-right">
                                    <div class="input-group"><input type="text" ng-model="pencarian" placeholder="Search" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary"> Go!</button> </span></div>
                                </div>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Rilis </th>
                                            <th>Judul Utama</th>
                                            <th>Judul tutorial</th>
                                            <th>Penulis</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr ng-repeat="val in tutorialText | filter:pencarian">
                                            <td>{{$index+1}}</td>
                                            <td>{{val.tgl_rilis}}</td>
                                            <td>{{val.judul_utama}}</td>
                                            <td>{{val.judul_tutorial}}</td>
                                            <td>{{val.nama_user}}</td>
                                            <td>
                                                <a href="<?=base_url()?>A_tutorial/edit_data_tutorial/{{val.id_tutorial}}">
                                                    <button class="btn btn-primary btn-rounded">Edit</button>
                                                </a>
                                                <button class="btn btn-danger btn-rounded" ng-click="hapusdata(val.id_tutorial,$index)">Hapus</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </span>

        <script type="text/javascript">
            var app=angular.module('exoapp',[]);

            app.controller('tutorialctrl',function($scope,$http){

                    $scope.jumlahText = {};
                    $http.post("<?= base_url('A_dashboard/select_jumlah_widget');?>"   //jumlah berita
                      ).success(function(data){
                        $scope.jumlahText = data;
                    });

                    $scope.tutorialText=[];
                    $http.post("<?= base_url('A_tutorial/select_data_tutorial');?>"   //jumlah berita
                      ).success(function(result){
                        $scope.tutorialText = result;
                    });

            /**
              |-----------------------------------------------------------------------------------------------
              |                               Hapus Data
              |-----------------------------------------------------------------------------------------------
              */
                $scope.hapusdata = function(id,index){
                    if (confirm("Apakah anda ingin menghapus ? ")){
                        $http.post(
                          "<?=base_url('A_tutorial/delete_data_tutorial')?>",
                          {
                            id:id
                          }
                        ).success(function(data){
                            $scope.tutorialText.splice(index,1);
                          alert(data);
                        }).error(function(){
                          alert("Gagal menghapus data");
                        });
                    }
                };
            });

        </script>

                