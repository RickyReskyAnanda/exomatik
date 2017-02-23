
        <span ng-app="exoapp" ng-controller="kontenctrl">
           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Data Konten</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Beranda</a>
                        </li>
                        <li>
                            Data Konten
                        </li>
                        <li class="active">
                            <strong>Data Tabel Konten </strong>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Table Konten</h5>
                            </div>
                            <div class="ibox-content">
                                <a href="<?=base_url('admin/konten/tambah')?>">
                                    <button class="btn btn-info btn-rounded">
                                        <i class="fa fa-plus"></i> Tambah Konten
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
                                            <th>Judul Konten</th>
                                            <th>Penulis</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr ng-repeat="val in kontenText | filter:pencarian">
                                            <td>{{$index+1}}</td>
                                            <td>{{val.tgl_rilis}}</td>
                                            <td>{{val.judul_konten}}</td>
                                            <td>{{val.nama_user}}</td>
                                            <td>
                                                <a href="<?=base_url()?>A_konten/edit_data_konten/{{val.id_konten}}">
                                                    <button class="btn btn-primary btn-rounded">Edit</button>
                                                </a>
                                                <button class="btn btn-danger btn-rounded" ng-click="hapusdata(val.id_konten,$index)">Hapus</button>
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

            app.controller('kontenctrl',function($scope,$http){

                    $scope.jumlahText = {};
                    $http.post("<?= base_url('A_dashboard/select_jumlah_widget');?>"   //jumlah berita
                      ).success(function(data){
                        $scope.jumlahText = data;
                    });

                    $scope.kontenText=[];
                    $http.post("<?= base_url('A_konten/select_data_konten');?>"   //jumlah berita
                      ).success(function(result){
                        $scope.kontenText = result;
                    });

            /**
              |-----------------------------------------------------------------------------------------------
              |                               Hapus Data
              |-----------------------------------------------------------------------------------------------
              */
                $scope.hapusdata = function(id,index){
                    if (confirm("Apakah anda ingin menghapus ? ")){
                        $http.post(
                          "<?=base_url('A_konten/delete_data_konten')?>",
                          {
                            id:id
                          }
                        ).success(function(data){
                            $scope.kontenText.splice(index,1);
                            $scope.jumlahText.konten--;
                          alert(data);
                        }).error(function(){
                          alert("Gagal menghapus data");
                        });
                    }
                };
            });

        </script>

                