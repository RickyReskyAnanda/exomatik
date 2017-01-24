        <span ng-app="exoapp" ng-controller="prokerctrl">
           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Data Program Kerja</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Beranda</a>
                        </li>
                        <li>
                            Data Program Kerja
                        </li>
                        <li>
                            Data Tabel Program Kerja
                        </li>
                        <li class="active">
                            <strong>{{divisi}}</strong>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="col-lg-3">
                        <a href="<?=base_url('A_konten')?>">
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
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="<?=base_url('A_anggota')?>">
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
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="<?=base_url('A_proker')?>">
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
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="<?=base_url('A_portofolio')?>">
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
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="tabs-container">
                                <ul class="nav nav-tabs">
                                    <li class="{{aktif1}}">
                                        <a ng-click="viewdatasemua()">
                                            Semua <span class="label label-info">{{jumlahText.proker}}</span>
                                        </a>
                                    </li>
                                    <li class="{{aktif2}}">
                                        <a ng-click="viewdata(1)">
                                            Kesekretariatan <span class="label label-warning">1</span>
                                        </a>
                                    </li>
                                    <li class="{{aktif3}}">
                                        <a ng-click="viewdata(2)">
                                            Kreatif & Inovatif <span class="label label-primary">1</span>
                                        </a>
                                    </li>
                                    <li class="{{aktif4}}">
                                        <a ng-click="viewdata(3)">
                                            Pendidikan <span class="label label-success">1</span>
                                        </a>
                                    </li>
                                    <li class="{{aktif5}}">
                                        <a ng-click="viewdata(4)">
                                            Hubungan Masyarakat <span class="label label-danger">1</span>
                                        </a>
                                    </li>
                                    <li class="{{aktif6}}">
                                        <a ng-click="viewdata(5)">
                                            Keuangan <span class="label">1</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div  class="tab-pane active">
                                        <div class="panel-body">
                            
                            <div class="ibox-content">
                                <a href="<?=base_url('A_proker/tambah_data_proker')?>">
                                <button class="btn btn-info btn-rounded">
                                    <i class="fa fa-plus"></i> Tambah Program Kerja
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
                                            <th>Nama Kegiatan</th>
                                            <th>Tujuan Kegiatan</th>
                                            <th>Sasaran Kegiatan</th>
                                            <th>Waktu </th>
                                            <th>Sumber Dana</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr ng-repeat="val in prokerText | filter:pencarian">
                                            <td>{{$index+1}}</td>
                                            <td>{{val.nama_kegiatan}}</td>
                                            <td>{{val.tujuan_kegiatan}}</td>
                                            <td>{{val.sasaran_kegiatan}}</td>
                                            <td>{{val.waktu}}</td>
                                            <td>{{val.sumber_dana}}</td>
                                            <td>{{val.status}}</td>
                                            <td>
                                                <a href="<?=base_url()?>A_proker/edit_data_proker/{{val.id_proker}}">
                                                    <button class="btn btn-primary btn-rounded">Edit</button>
                                                </a>
                                                <button class="btn btn-danger btn-rounded" ng-click="hapusdata(val.id_proker,$index)">Hapus</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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

            app.controller('prokerctrl',function($scope,$http){
            

            $scope.divisi="Semua";
                
      
    /**
      |-----------------------------------------------------------------------------------------------
      |                               Pengaturan Default
      |-----------------------------------------------------------------------------------------------
      */
                    $http.post("<?= base_url('A_dashboard/select_jumlah_widget');?>"   //jumlah berita
                      ).success(function(data){
                        $scope.jumlahText = data;

                    });



                    $http.post("<?= base_url('A_proker/select_data_proker');?>"   //jumlah berita
                      ).success(function(result){
                        $scope.prokerText = result;
                    });

    /**
      |-----------------------------------------------------------------------------------------------
      |                               Ambildata
      |-----------------------------------------------------------------------------------------------
      */        $scope.aktif1 = "active";
                $scope.aktif2 = "";
                $scope.aktif3 = "";
                $scope.aktif4 = "";
                $scope.aktif5 = "";
                $scope.aktif6 = "";
                

                $scope.viewdatasemua = function(){
                    $scope.aktif1 = "active";
                    $scope.aktif2 = "";
                    $scope.aktif3 = "";
                    $scope.aktif4 = "";
                    $scope.aktif5 = "";
                    $scope.aktif6 = "";
                    $scope.divisi = "Semua";

                    $http.post("<?= base_url('A_proker/select_data_proker');?>"   //jumlah berita
                      ).success(function(result){
                        $scope.prokerText = result;
                    });
                }


             
                $scope.viewdata = function(data){

                    if(data==1){
                        $scope.aktif1 = "";
                        $scope.aktif2 = "active";
                        $scope.aktif3 = "";
                        $scope.aktif4 = "";
                        $scope.aktif5 = "";
                        $scope.aktif6 = "";
                        $scope.divisi = "kesekretariatan";
                    }
                    if(data==2){
                        $scope.aktif1 = "";
                        $scope.aktif2 = "";
                        $scope.aktif3 = "active";
                        $scope.aktif4 = "";
                        $scope.aktif5 = "";
                        $scope.aktif6 = "";
                        $scope.divisi = "ki";
                    }
                    if(data==3){
                        $scope.aktif1 = "";
                        $scope.aktif2 = "";
                        $scope.aktif3 = "";
                        $scope.aktif4 = "active";
                        $scope.aktif5 = "";
                        $scope.aktif6 = "";
                        $scope.divisi = "pendidikan";
                    }
                    if(data==4){
                        $scope.aktif1 = "";
                        $scope.aktif2 = "";
                        $scope.aktif3 = "";
                        $scope.aktif4 = "";
                        $scope.aktif5 = "active";
                        $scope.aktif6 = "";
                        $scope.divisi = "humas";
                    }
                    if(data==5){
                        $scope.aktif1 = "";
                        $scope.aktif2 = "";
                        $scope.aktif3 = "";
                        $scope.aktif4 = "";
                        $scope.aktif5 = "";
                        $scope.aktif6 = "active";
                        $scope.divisi = "keuangan";
                    }

                    $http.post("<?=base_url('A_proker/select_data_proker_divisi');?>",
                        {
                          divisi: $scope.divisi
                        }
                      ).success(function(result){
                        $scope.prokerText = result;
                    });
                }



                    


    /**
      |-----------------------------------------------------------------------------------------------
      |                               INSERT KATEGORI
      |-----------------------------------------------------------------------------------------------
      */
            
            $scope.proker       = {};
            $scope.pengaturan   = {};
            $scope.viewtambahdata   = function(){
                $scope.proker   = {}; //penampung value form
                $scope.pengaturan.title = "Tambah Data";
                $scope.aksi     = "tambah";
                $scope.tampil   = false;
            }

            $scope.tambahdata = function(){
              $http.post(
                "<?=base_url('A_proker/insert_data_proker');?>",
                {
                  proker: $scope.proker //data kembalian
                }
              ).success(function(id){
                alert("Berhasil Menyimpan Data :)");
                $scope.jumlahText.proker++;
                $scope.prokerText.push({
                        "id_proker"         :id,
                        "nama_kegiatan"     :$scope.proker.nama_kegiatan,
                        "sasaran_kegiatan"  :$scope.proker.sasaran_kegiatan,
                        "tujuan_kegiatan"   :$scope.proker.tujuan_kegiatan,
                        "waktu"             :$scope.proker.waktu,
                        "sumber_dana"       :$scope.proker.sumber_dana,
                        "status"            :"daftar"
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
                    $scope.proker           = {};
                    $scope.aksi             = "ubah";
                    $scope.pengaturan.title = "Edit Data";
                    $scope.idYgAkanDiUbah   = val.id_proker;
                    $scope.proker           = val;
                    $scope.tampil           = true;
                  };


                  $scope.ubahdata = function(){
                    $http.post(
                      "<?=base_url('A_proker/update_data_proker');?>",
                      {
                        id  : $scope.idYgAkanDiUbah,
                        proker: $scope.proker
                      }
                    ).success(function(data){
                      alert(data);
                      $scope.aksi   = "tambah";
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
                          "<?=base_url('A_proker/delete_data_proker')?>",
                          {
                            id:id
                          }
                        ).success(function(data){
                            $scope.prokerText.splice(index,1);
                            $scope.jumlahText.proker--;
                          alert(data);
                        }).error(function(){
                          alert("Gagal menghapus data");
                        });
                    }
                };
            });

        </script>

                