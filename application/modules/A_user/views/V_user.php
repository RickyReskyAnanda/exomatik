        <span ng-app="exoapp" ng-controller="userctrl">
           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Manajemen User</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Beranda</a>
                        </li>
                        <li>
                            Data User
                        </li>
                        <li class="active">
                            <strong>{{level}}</strong>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="widget style1 red-bg">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                    <i class="fa fa-newspaper-o fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <span> Semua </span>
                                    <h2 class="font-bold">{{jumlahText.semua}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="widget style1 navy-bg">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-child fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <span> Admin </span>
                                    <h2 class="font-bold">{{jumlahText.admin}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="widget style1 lazur-bg">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                    <i class="fa fa-newspaper-o fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <span> User </span>
                                    <h2 class="font-bold">{{jumlahText.user}}</h2>
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
                                            Semua <span class="label label-info">{{jumlahText.semua}}</span>
                                        </a>
                                    </li>
                                    <li class="{{aktif2}}">
                                        <a ng-click="viewdata(1)">
                                            Admin <span class="label label-warning">{{jumlahText.admin}}</span>
                                        </a>
                                    </li>
                                    <li class="{{aktif3}}">
                                        <a ng-click="viewdata(2)">
                                            User <span class="label label-primary">{{jumlahText.user}}</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div  class="tab-pane active">
                                        <div class="panel-body">
                            
                            <div class="ibox-content">
                                <button class="btn btn-info btn-rounded" ng-click="viewtambahdata()" data-toggle="modal" data-target="#myModal5">
                                    <i class="fa fa-plus"></i> Tambah User
                                </button>
                                <div class="col-sm-3 pull-right">
                                    <div class="input-group"><input type="text" ng-model="pencarian" placeholder="Search" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary"> Go!</button> </span></div>
                                </div>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lengkap</th>
                                            <th>Level User</th>
                                            <th>Email</th>
                                            <th>Nomor HP </th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr ng-repeat="val in userText | filter:pencarian">
                                            <td>{{$index+1}}</td>
                                            <td>{{val.nama_lengkap}}</td>
                                            <td>{{val.level}}</td>
                                            <td>{{val.email}}</td>
                                            <td>{{val.no_hp}}</td>
                                            <td>
                                                <button class="btn btn-primary btn-rounded" ng-click="viewubahdata(val)" data-toggle="modal" data-target="#myModal5">Edit</button>
                                                <button class="btn btn-danger btn-rounded" ng-click="hapusdata(val.id_user,$index)">Hapus</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <!-- Modal -->
                                <div class="modal inmodal " id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content animated flipInY">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title">{{pengaturan.title}}</h4>
                                                <small class="font-bold">Masukkanlah data dengan benar. Jangan kosongkan form</small>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row" style="margin-bottom: 10px;">
                                                            <div class="form-group"><label class="col-sm-2 control-label">Nama Lengkap</label>
                                                                <div class="col-sm-10"><input type="text" ng-model="user.nama_lengkap" class="form-control" placeholder="Nama Lengkap"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="margin-bottom: 10px;">
                                                            <div class="form-group"><label class="col-sm-2 control-label">Email</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" ng-model="user.email" placeholder="Email">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row" style="margin-bottom: 10px;">
                                                            <div class="form-group"><label class="col-sm-2 control-label">Password</label>
                                                                <div class="col-sm-10">
                                                                    <input type="password" class="form-control" ng-model="user.ps" placeholder="Masukkan Password">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row" style="margin-bottom: 10px;">
                                                            <div class="form-group"><label class="col-sm-2 control-label">Nomor HP</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" ng-model="user.no_hp" placeholder="Nomor HP">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row" style="margin-bottom: 10px;">
                                                            <div class="form-group"><label class="col-sm-2 control-label">Level User</label>
                                                                <div class="col-sm-10">
                                                                    <select class="form-control" ng-model="user.level">
                                                                        <option value="admin">Admin</option>
                                                                        <option value="user">User</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" ng-click="simpandata()">Simpan</button>
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
                    </div>
                </div>
            </div>
        </span>

        <script type="text/javascript">
            var app=angular.module('exoapp',[]);

            app.controller('userctrl',function($scope,$http){
            

            $scope.level="Semua";
                
      
    /**
      |-----------------------------------------------------------------------------------------------
      |                               Pengaturan Default
      |-----------------------------------------------------------------------------------------------
      */
                    $http.post("<?= base_url('A_user/select_jumlah_user');?>"   //jumlah berita
                      ).success(function(data){
                        $scope.jumlahText = data;

                    });



                    $http.post("<?= base_url('A_user/select_data_user');?>"   //jumlah berita
                      ).success(function(result){
                        $scope.userText = result;
                    });

    /**
      |-----------------------------------------------------------------------------------------------
      |                               Ambildata
      |-----------------------------------------------------------------------------------------------
      */        $scope.aktif1 = "active";
                $scope.aktif2 = "";
                $scope.aktif3 = "";
                

                $scope.viewdatasemua = function(){
                    $scope.aktif1 = "active";
                    $scope.aktif2 = "";
                    $scope.aktif3 = "";
                    $scope.level = "Semua";

                    $http.post("<?= base_url('A_user/select_data_user');?>"   //jumlah berita
                      ).success(function(result){
                        $scope.userText = result;
                    });
                }


             
                $scope.viewdata = function(data){

                    if(data==1){
                        $scope.aktif1 = "";
                        $scope.aktif2 = "active";
                        $scope.aktif3 = "";
                        $scope.level = "admin";
                    }
                    if(data==2){
                        $scope.aktif1 = "";
                        $scope.aktif2 = "";
                        $scope.aktif3 = "active";
                        $scope.level = "user";
                    }

                    $http.post("<?=base_url('A_user/select_data_user_level');?>",
                        {
                          level: $scope.level
                        }
                      ).success(function(result){
                        $scope.userText = result;
                    });
                }



                    


    /**
      |-----------------------------------------------------------------------------------------------
      |                               INSERT KATEGORI
      |-----------------------------------------------------------------------------------------------
      */
            
            $scope.user         = {};
            $scope.pengaturan   = {};
            $scope.viewtambahdata   = function(){
                $scope.user     = {}; //penampung value form
                $scope.pengaturan.title = "Tambah Data";
                $scope.aksi     = "tambah";
            }

            $scope.tambahdata = function(){
              $http.post(
                "<?=base_url('A_user/insert_data_user');?>",
                {
                  user: $scope.user //data kembalian
                }
              ).success(function(id){
                alert("Berhasil Menyimpan Data :)");
                $scope.jumlahText.semua++;
                $scope.userText.push({
                        "id_user"       :id,
                        "nama_lengkap"  :$scope.user.nama_lengkap,
                        "email"         :$scope.user.email,
                        "no_hp"         :$scope.user.no_hp,
                        "level"         :$scope.user.level
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
                  $scope.viewubahdata = function(val){
                    $scope.user             = {};
                    $scope.aksi             = "ubah";
                    $scope.pengaturan.title = "Edit Data";
                    $scope.idYgAkanDiUbah   = val.id_user;
                    $scope.user             = val;
                  };


                  $scope.ubahdata = function(){
                    $http.post(
                      "<?=base_url('A_user/update_data_user');?>",
                      {
                        id  : $scope.idYgAkanDiUbah,
                        user: $scope.user
                      }
                    ).success(function(data){
                      alert(data);
                    }).error(function(){
                      alert("Gagal mengubah data");
                    });
                  };
                  
            /**
              |-----------------------------------------------------------------------------------------------
              |                               PILIHAN SIMPAN DATA
              |-----------------------------------------------------------------------------------------------
              */
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
                          "<?=base_url('A_user/delete_data_user')?>",
                          {
                            id:id
                          }
                        ).success(function(data){
                            $scope.userText.splice(index,1);
                            $scope.jumlahText.semua--;
                          alert(data);
                        }).error(function(){
                          alert("Gagal menghapus data");
                        });
                    }
                };
            });

        </script>

                