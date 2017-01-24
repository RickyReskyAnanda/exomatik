        <span ng-app="exoapp"ng-controller="anggotactrl">
           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Data Anggota</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Beranda</a>
                        </li>
                        <li>
                            Data Anggota
                        </li>
                        <li>
                            Data Table Anggota
                        </li>
                        <li class="active">
                            <strong>{{status}} </strong>
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
                            <div class="tabs-container">
                                <ul class="nav nav-tabs">
                                    <li class="{{aktif1}}">
                                        <a ng-click="viewdatasemua()">
                                            Semua <span class="label label-info">{{jumlahstatusText.semua}}</span>
                                        </a>
                                    </li>
                                    <li class="{{aktif2}}">
                                        <a ng-click="viewdata(1)">
                                            Pengurus <span class="label label-warning">{{jumlahstatusText.pengurus}}</span>
                                        </a>
                                    </li>
                                    <li class="{{aktif3}}">
                                        <a ng-click="viewdata(2)">
                                            Anggota <span class="label label-primary">{{jumlahstatusText.anggota}}</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div  class="tab-pane active">
                                        <div class="panel-body">
                                            <div class="ibox-content">

                                                <a href="<?=base_url('A_anggota/tambah_data_anggota')?>">
                                                    <button class="btn btn-info btn-rounded">
                                                        <i class="fa fa-plus"></i> Tambah Data Anggota
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
                                                            <th>No. Induk</th>
                                                            <th>Nama Lengkap</th>
                                                            <th>No HP</th>
                                                            <th>Status</th>
                                                            <th>Angkatan</th>
                                                            <th>JK</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr ng-repeat="val in anggotaText | filter:pencarian">
                                                            <td>{{$index+1}}</td>
                                                            <td>{{val.nik}}</td>
                                                            <td>{{val.nama}}</td>
                                                            <td>{{val.no_hp}}</td>
                                                            <td>{{val.status}}</td>
                                                            <td>{{val.angkatan}}</td>
                                                            <td>{{val.jk}}</td>
                                                            <td>
                                                                <button class="btn btn-info btn-rounded" ng-click="detaildata(val)" data-toggle="modal" data-target="#myModal5">Detail Anggota</button>
                                                                <a href="<?=base_url()?>A_anggota/edit_data_anggota/{{val.id_anggota}}">
                                                                    <button class="btn btn-primary btn-rounded">Edit</button>
                                                                </a>
                                                                <button class="btn btn-danger btn-rounded" ng-click="hapusdata(val.id_anggota,$index)">Hapus</button>
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
                                                                <h4 class="modal-title">Detail Data Anggota</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row" style="margin-bottom: 10px;">
                                                                            <div class="col-md-2"></div>
                                                                            <div class="col-md-8">
                                                                                <img src="<?=base_url()?>gambar_anggota/{{detail.foto}}" class="img-responsive">
                                                                            </div>
                                                                            <div class="col-md-2"></div>
                                                                        </div>
                                                                        <div class="row" style="margin-bottom: 10px;">
                                                                            <div class="form-group"><label class="col-sm-3 control-label">Nama Lengkap</label>
                                                                                <div class="col-sm-9">
                                                                                    <div class="form-control">{{detail.nama}}</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row" style="margin-bottom: 10px;">
                                                                            <div class="form-group"><label class="col-sm-3 control-label">ID</label>
                                                                                <div class="col-sm-9">
                                                                                    <div class="form-control">{{detail.nik}}</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row" style="margin-bottom: 10px;">
                                                                            <div class="form-group"><label class="col-sm-3 control-label">TTL</label>
                                                                                <div class="col-sm-9">
                                                                                    <div class="form-control">{{detail.tempat}},{{detail.tgl_lahir}}</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row" style="margin-bottom: 10px;">
                                                                            <div class="form-group"><label class="col-sm-3 control-label">JK</label>
                                                                                <div class="col-sm-9">
                                                                                    <div class="form-control">{{detail.jk}}</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row" style="margin-bottom: 10px;">
                                                                            <div class="form-group"><label class="col-sm-3 control-label">Nomor HP</label>
                                                                                <div class="col-sm-9">
                                                                                    <div class="form-control">{{detail.no_hp}}</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row" style="margin-bottom: 10px;">
                                                                            <div class="form-group"><label class="col-sm-3 control-label">Angkatan</label>
                                                                                <div class="col-sm-9">
                                                                                    <div class="form-control">{{detail.angkatan}}</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>    <!-- /. view modal -->          

                                            </div>
                                        </div>
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

            app.controller('anggotactrl',function($scope,$http){

                    $http.post("<?= base_url('A_dashboard/select_jumlah_widget');?>"   //jumlah berita
                      ).success(function(data){
                        $scope.jumlahText = data;
                    });

                    $http.post("<?= base_url('A_anggota/select_jumlah_anggota');?>"   //jumlah berita
                      ).success(function(data){
                        $scope.jumlahstatusText = data;
                    });


                    $http.post("<?= base_url('A_anggota/select_data_anggota');?>"   //jumlah berita
                      ).success(function(result){
                        $scope.anggotaText = result;
                    });

                    $scope.aktif1 = "active";
                    $scope.aktif2 = "";
                    $scope.aktif3 = "";
                    $scope.status = "Semua";

                    $scope.viewdatasemua = function(){
                        $scope.aktif1 = "active";
                        $scope.aktif2 = "";
                        $scope.aktif3 = "";
                        $scope.status = "Semua";

                        $http.post("<?= base_url('A_anggota/select_data_anggota');?>"   //jumlah berita
                          ).success(function(result){
                            $scope.anggotaText = result;
                        });
                    }

                    $scope.viewdata = function(data){
                        if(data==1){
                            $scope.aktif1 = "";
                            $scope.aktif2 = "active";
                            $scope.aktif3 = "";
                            $scope.status = "pengurus";
                        }
                        if(data==2){
                            $scope.aktif1 = "";
                            $scope.aktif2 = "";
                            $scope.aktif3 = "active";
                            $scope.status = "anggota";
                        }

                        $http.post("<?=base_url('A_anggota/select_data_anggota_status');?>",
                            {
                              status: $scope.status
                            }
                          ).success(function(result){
                            $scope.anggotaText = result;
                        });
                    }

                    $scope.detail={};
                    $scope.detaildata = function(val){
                        $scope.detail = val;
                    }


                    /**
              |-----------------------------------------------------------------------------------------------
              |                               Hapus Data
              |-----------------------------------------------------------------------------------------------
              */
                $scope.hapusdata = function(id,index){
                    if (confirm("Apakah anda ingin menghapus ? ")){
                        $http.post(
                          "<?=base_url('A_anggota/delete_data_anggota')?>",
                          {
                            id:id
                          }
                        ).success(function(data){
                            $scope.anggotaText.splice(index,1);
                            $scope.jumlahText.anggota--;
                            $scope.jumlahstatusText.semua--;
                          alert(data);
                        }).error(function(){
                          alert("Gagal menghapus data");
                        });
                    }
                };
            });

        </script>

                