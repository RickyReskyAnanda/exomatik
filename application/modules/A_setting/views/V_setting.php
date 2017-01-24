
        <span ng-app="exoapp" ng-controller="settingctrl">
           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Data Konten</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Beranda</a>
                        </li>
                        <li class="active">
                            <strong>Setting Web </strong>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Pengaturan Website</h5>
                            </div>
                            <div class="ibox-content">
                            <form method="post" action="<?=base_url('A_setting/update_data_setting')?>">
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="form-group"><label class="col-sm-2 control-label">Nomor Telpon </label>
                                        <div class="col-sm-10"><input type="text" name="no_telp" class="form-control" placeholder="Masukkan Nomor Induk Anggota" value="<?=$data['no_telp']?>" required></div>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="form-group"><label class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="email" class="form-control" value="<?=$data['email']?>" required>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row" style="margin-bottom: 15px; " align="center">
                                    <strong>Sosial Media</strong>
                                </div>
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="form-group"><label class="col-sm-2 control-label">URL Facebook</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="facebook" class="form-control" value="<?=$data['facebook']?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="form-group"><label class="col-sm-2 control-label">URL Twitter</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="twitter" class="form-control" value="<?=$data['twitter']?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="form-group"><label class="col-sm-2 control-label">URL Instagram</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="instagram" class="form-control" value="<?=$data['instagram']?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="form-group"><label class="col-sm-2 control-label">ID Line</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="line" class="form-control" value="<?=$data['line']?>" required>
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="row">
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-info btn-rounded"> Simpan Pengaturan </button>
                                    </div>
                                </div>
                            </form>
                            <hr>
                                <h5>Our Partners</h5>
                                <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-info btn-rounded" ng-click="viewmodal()" data-toggle="modal" data-target="#myModal5">
                                        <i class="fa fa-plus"></i> Tambah Data Partners
                                    </button>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama partners</th>
                                                <th>link</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr ng-repeat="val in partnersText | filter:pencarian">
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
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal inmodal " id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-md">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title">{{judul}} Data partners</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                        
                                                    <div class="row" style="margin-bottom: 10px;">
                                                        <div class="form-group"><label class="col-sm-3 control-label">Nama partners</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" ng-model="partners.nama">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="margin-bottom: 10px;">
                                                        <div class="form-group"><label class="col-sm-3 control-label">Link</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" ng-model="partners.link">
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
        </span>         
        <script type="text/javascript">
            var app=angular.module('exoapp',[]);

            app.controller('settingctrl',function($scope,$http){

                    $http.post("<?= base_url('A_setting/select_data_partners');?>"   //jumlah berita
                      ).success(function(result){
                        $scope.partnersText = result;
                    });

            /**
              |-----------------------------------------------------------------------------------------------
              |                               INSERT DATA
              |-----------------------------------------------------------------------------------------------
              */    
                    $scope.viewmodal = function(){
                      $scope.judul                  = "Tambah";
                      $scope.aksi                   = 1;
                      $scope.partners               = {};
                    }
            
                    $scope.tambahdata = function(){
                      $http.post(
                        "<?=base_url('A_setting/insert_data_partners');?>",
                        {
                          data: $scope.partners //data kembalian
                        }
                      ).success(function(data){
                        alert("Berhasil Menyimpan data");
                        $scope.partnersText.push({
                            "id"            :data,
                            "nama"          :$scope.partners.nama,
                            "link"          :$scope.partners.link
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
                    $scope.aksi             = 2;
                    $scope.idYgAkanDiUbah   = val.id;
                    $scope.partners         = val;
                  };


                  $scope.ubahdata = function(){
                    $http.post(
                      "<?=base_url('A_setting/update_data_partners');?>",
                      {
                        id  : $scope.idYgAkanDiUbah,
                        data: $scope.partners
                      }
                    ).success(function(data){
                      alert(data);
                    }).error(function(){
                      alert("Gagal mengubah data");
                    });
                  };


                  $scope.simpandata = function(){
                    switch($scope.aksi){
                      case 1:
                        $scope.tambahdata();
                      break;
                      
                      case 2:
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
                          "<?=base_url('A_setting/delete_data_partners')?>",
                          {
                            id:id
                          }
                        ).success(function(data){
                            $scope.partnersText.splice(index,1);
                            alert(data);
                        }).error(function(){
                          alert("Gagal menghapus data");
                        });
                    }
                };
            });

        </script>       