        <span ng-app="exoapp" ng-controller="portofolioctrl">
           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Data Portofolio</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Beranda</a>
                        </li>
                        <li>
                            Data Portofolio
                        </li>
                        <li class="active">
                            <strong>Data Tabel Portofolio </strong>
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
                                        <span> Jaringan </span>
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
                                    <span> Program </span>
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
                                    <span> Desain </span>
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
                                    <span> Lainnya </span>
                                    <h2 class="font-bold">{{jumlahText.portofolio}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col-md-12">
                        <a href="<?=base_url('A_portofolio/tambah_data_portofolio')?>"><button class="btn btn-info btn-rounded col-md-12" >Tambah Portofolio</button>
                        </a>
                    </div>
                </div>
                <div class="row">

                <!-- awal setting portofolio -->
                    <div class="col-md-4" ng-repeat="val in portofolioText | filter:pencarian">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>{{val.nama_portofolio}}</h5>
                            </div>
                            <div>
                                <div class="ibox-content no-padding border-left-right">
                                    <img alt="image" class="img-responsive" src="<?=base_url()?>gambar_project/{{val.gambar_utama}}">
                                </div>
                                <div class="ibox-content profile-content">
                                    <h4><strong>{{val.jenis}}</strong></h4>
                                    <p><i class="fa fa-map-marker"></i> Nama : </p>
                                        <li ng-repeat="dat in val.nama_anggota">{{dat.nama}}</li><br>
                                    <h5>
                                        Ket :
                                    </h5>
                                    <p>
                                        {{val.keterangan}}
                                    </p>
                                    <div class="user-button">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <a href="<?=base_url()?>A_portofolio/edit_data_portofolio/{{val.id_portofolio}}">
                                                    <button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-edit"></i> Edit Portofolio</button>
                                                </a>
                                            </div>
                                            <div class="col-md-6">
                                                <button type="button" class="btn btn-danger btn-sm btn-block" ng-click="hapusdata(val.id_portofolio,$index)"><i class="fa fa-trash"></i> Hapus Portofolio</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- batas setting  -->
                </div>
            </div>
        </span>

        <script type="text/javascript">
            var app=angular.module('exoapp',[]);

            app.controller('portofolioctrl',function($scope,$http){

                    $http.post("<?= base_url('A_dashboard/select_jumlah_widget');?>"   //jumlah berita
                      ).success(function(data){
                        $scope.jumlahText = data;
                    });


                    $http.post("<?= base_url('A_portofolio/select_data_portofolio');?>"   //jumlah berita
                      ).success(function(result){
                        $scope.portofolioText = result;
                    });

                      /**
              |-----------------------------------------------------------------------------------------------
              |                               Hapus Data
              |-----------------------------------------------------------------------------------------------
              */
                $scope.hapusdata = function(id,index){
                    if (confirm("Apakah anda ingin menghapus ? ")){
                        $http.post(
                          "<?=base_url('A_portofolio/delete_data_portofolio')?>",
                          {
                            id:id
                          }
                        ).success(function(data){
                            $scope.portofolioText.splice(index,1);
                            $scope.jumlahText.portofolio--;
                          alert(data);
                        }).error(function(){
                          alert("Gagal menghapus data");
                        });
                    }
                };
            });

        </script>

                