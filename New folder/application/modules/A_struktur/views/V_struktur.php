        <span ng-app="exoapp" ng-controller="strukturctrl">
           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Data Struktur</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Beranda</a>
                        </li>
                        <li>
                            Data Struktur
                        </li>
                        <li>
                            Data Tabel Struktur
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
                                        <a ng-click="viewdata(1)">
                                            DPO
                                        </a>
                                    </li>
                                    <li class="{{aktif2}}">
                                        <a ng-click="viewdata(2)">
                                            BPO
                                        </a>
                                    </li>
                                    <li class="{{aktif3}}">
                                        <a ng-click="viewdata(3)">
                                            Pendidikan
                                        </a>
                                    </li>
                                    <li class="{{aktif4}}">
                                        <a ng-click="viewdata(4)">
                                            Kreatif & Inovatif
                                        </a>
                                    </li>
                                    <li class="{{aktif5}}">
                                        <a ng-click="viewdata(5)">
                                            Kesekretariatan
                                        </a>
                                    </li>
                                    <li class="{{aktif6}}">
                                        <a ng-click="viewdata(6)">
                                            Hubungan Masyarakat
                                        </a>
                                    </li>
                                    <li class="{{aktif7}}">
                                        <a ng-click="viewdata(7)">
                                            Keuangan
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div  class="tab-pane active">
                                        <div class="panel-body">
                            
                            <div class="ibox-content">
                                <a href="<?=base_url()?>A_struktur/tambah_data_struktur/{{tbl}}">
                                    <button class="btn btn-info btn-rounded">
                                        <i class="fa fa-plus"></i> Tambah Data Struktur
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
                                            <th>Nama Lengkap</th>
                                            <th>Jabatan</th>
                                            <th>Jurusan</th>
                                            <th>Angkatan </th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr ng-repeat="val in strukturText | filter:pencarian">
                                            <td>{{$index+1}}</td>
                                            <td>{{val.nama}}</td>
                                            <td>{{val.jabatan}}</td>
                                            <td>{{val.jurusan}}</td>
                                            <td>{{val.angkatan}}</td>
                                            <td>
                                                <button class="btn btn-primary btn-rounded" ng-click="viewdetail(val)"  data-toggle="modal" data-target="#myModal5">Detail</button>
                                                <a href="<?=base_url()?>A_struktur/edit_data_struktur/{{tbl}}/{{val.id_struktur}}">
                                                    <button class="btn btn-info btn-rounded">Edit</button>
                                                </a>
                                                <button class="btn btn-danger btn-rounded" ng-click="hapusdata(val.id_struktur,$index)">Hapus</button>
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
                                                                <h4 class="modal-title">Detail {{divisi}}</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row" style="margin-bottom: 10px;">
                                                                            <div class="col-md-2"></div>
                                                                            <div class="col-md-8">
                                                                                <img src="<?=base_url()?>gambar_struktur/{{detail.foto}}" class="img-responsive">
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
                                                                            <div class="form-group"><label class="col-sm-3 control-label">Jabatan</label>
                                                                                <div class="col-sm-9">
                                                                                    <div class="form-control">{{detail.jabatan}}</div>
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
                                                                        <div class="row" style="margin-bottom: 10px;">
                                                                            <div class="form-group"><label class="col-sm-3 control-label">Jurusan</label>
                                                                                <div class="col-sm-9">
                                                                                    <div class="form-control">{{detail.jurusan}}</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row" style="margin-bottom: 10px;align-content: center;">
                                                                            <div class="col-sm-12" style="padding: 10px;">{{detail.keterangan}}</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
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

            app.controller('strukturctrl',function($scope,$http){
            

                
      
    /**
      |-----------------------------------------------------------------------------------------------
      |                               Pengaturan Default
      |-----------------------------------------------------------------------------------------------
      */            $scope.jumlahText = {};
                    $http.post("<?= base_url('A_dashboard/select_jumlah_widget');?>"   //jumlah berita
                      ).success(function(data){
                        $scope.jumlahText = data;

                    });



                        $scope.aktif1   = "active";
                        $scope.aktif2   = "";
                        $scope.aktif3   = "";
                        $scope.aktif4   = "";
                        $scope.aktif5   = "";
                        $scope.aktif6   = "";
                        $scope.aktif7   = "";
                        $scope.divisi   = "Dewan Pertimbangan Organisasi";
                        $scope.tbl      = "dpo";

                        $scope.strukturText = [];
                        $http.post("<?= base_url('A_struktur/select_data_struktur_dpo');?>"   //jumlah berita
                          ).success(function(result){
                            $scope.strukturText = result;
                        });
    /**
      |-----------------------------------------------------------------------------------------------
      |                               Ambildata
      |-----------------------------------------------------------------------------------------------
      */                     
                $scope.viewdata = function(data){

                    if(data==1){
                        $scope.aktif1 = "active";
                        $scope.aktif2 = "";
                        $scope.aktif3 = "";
                        $scope.aktif4 = "";
                        $scope.aktif5 = "";
                        $scope.aktif6 = "";
                        $scope.aktif7 = "";
                        $scope.divisi = "Dewan Pertimbangan Organisasi";
                        $scope.tbl    = "dpo";

                        $http.post("<?= base_url('A_struktur/select_data_struktur_dpo');?>"   //jumlah berita
                          ).success(function(result){
                            $scope.strukturText = result;
                        });


                    }
                    if(data==2){
                        $scope.aktif1 = "";
                        $scope.aktif2 = "active";
                        $scope.aktif3 = "";
                        $scope.aktif4 = "";
                        $scope.aktif5 = "";
                        $scope.aktif6 = "";
                        $scope.aktif7 = "";
                        $scope.divisi = "Badan Pengurus Organisasi";
                        $scope.tbl    = "bpo";

                        $http.post("<?= base_url('A_struktur/select_data_struktur_bpo');?>"   //jumlah berita
                          ).success(function(result){
                            $scope.strukturText = result;
                        });
                    }
                    if(data==3){
                        $scope.aktif1 = "";
                        $scope.aktif2 = "";
                        $scope.aktif3 = "active";
                        $scope.aktif4 = "";
                        $scope.aktif5 = "";
                        $scope.aktif6 = "";
                        $scope.aktif7 = "";
                        $scope.divisi = "Departemen Pendidikan";
                        $scope.tbl    = "departemen";

                        $http.post("<?= base_url('A_struktur/select_data_struktur_departemen/pendidikan');?>"
                          ).success(function(result){
                            $scope.strukturText = result;
                        });
                    }
                    if(data==4){
                        $scope.aktif1 = "";
                        $scope.aktif2 = "";
                        $scope.aktif3 = "";
                        $scope.aktif4 = "active";
                        $scope.aktif5 = "";
                        $scope.aktif6 = "";
                        $scope.aktif7 = "";
                        $scope.divisi = "Departemen Kreatif dan Inovatif";
                        $scope.tbl    = "departemen";

                        $http.post("<?= base_url('A_struktur/select_data_struktur_departemen/ki');?>"
                          ).success(function(result){
                            $scope.strukturText = result;
                        });
                    }
                    if(data==5){
                        $scope.aktif1 = "";
                        $scope.aktif2 = "";
                        $scope.aktif3 = "";
                        $scope.aktif4 = "";
                        $scope.aktif5 = "active";
                        $scope.aktif6 = "";
                        $scope.aktif7 = "";
                        $scope.divisi = "Departemen Kesekretariatan";
                        $scope.tbl    = "departemen";

                        $http.post("<?= base_url('A_struktur/select_data_struktur_departemen/kesekretariatan');?>"
                          ).success(function(result){
                            $scope.strukturText = result;
                        });
                    }
                    if(data==6){
                        $scope.aktif1 = "";
                        $scope.aktif2 = "";
                        $scope.aktif3 = "";
                        $scope.aktif4 = "";
                        $scope.aktif5 = "";
                        $scope.aktif6 = "active";
                        $scope.aktif7 = "";
                        $scope.divisi = "Departemen Hubungan Masyarakat";
                        $scope.tbl    = "departemen";

                        $http.post("<?= base_url('A_struktur/select_data_struktur_departemen/humas');?>"
                          ).success(function(result){
                            $scope.strukturText = result;
                        });
                    }
                    if(data==7){
                        $scope.aktif1 = "";
                        $scope.aktif2 = "";
                        $scope.aktif3 = "";
                        $scope.aktif4 = "";
                        $scope.aktif5 = "";
                        $scope.aktif6 = "";
                        $scope.aktif7 = "active";
                        $scope.divisi = "Departemen Keuangan";
                        $scope.tbl    = "departemen";

                        $http.post("<?= base_url('A_struktur/select_data_struktur_departemen/keuangan');?>"
                          ).success(function(result){
                            $scope.strukturText = result;
                        });
                    }
                }


                $scope.detail={};
                $scope.viewdetail = function(val){
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
                          "<?=base_url('A_struktur/delete_data_struktur')?>",
                          {
                            id:id,
                            tbl: $scope.tbl
                          }
                        ).success(function(data){
                            $scope.strukturText.splice(index,1);
                          alert(data);
                        }).error(function(){
                          alert("Gagal menghapus data");
                        });
                    }
                };
            });

        </script>

                