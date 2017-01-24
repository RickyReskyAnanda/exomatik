        <span ng-app="exoapp" ng-controller="portofolioctrl">
           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Data Portofolio</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Beranda</a>
                        </li>
                        <li>
                            Portofolio
                        </li>
                        <li class="active">
                            <strong>Tambah Data Portofolio </strong>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrapper wrapper-content">
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col-md-12">
                        <a href="<?=base_url('A_portofolio')?>">
                            <button class="btn btn-info btn-rounded col-md-3" >Kembali </button>
                        </a>
                    </div>
                </div>
                <div class="row">

                <!-- awal form portofolio -->
                    <div class="col-md-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Form Data Input Portofolio</h5>
                            </div>
                            <div>
                                <div class="ibox-content">
                                <form action="<?=base_url('A_portofolio/insert_data_portofolio')?>" method="post" enctype="multipart/form-data">
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="form-group"><label class="col-sm-2 control-label">Nama Project</label>
                                            <div class="col-sm-10"><input type="text" name="nama_portofolio" class="form-control" placeholder="Nama Project" required></div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="form-group"><label class="col-sm-2 control-label">Jenis Project</label>
                                            <div class="col-sm-10">
                                                <select name="jenis" class="form-control">
                                                    <option value="Jaringan">Jaringan</option>
                                                    <option value="Program">Program</option>
                                                    <option value="Desain">Desain</option>
                                                    <option value="Lainnya">Lainnya</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="row" style="margin-bottom: 10px;">
                                        <div class="form-group"><label class="col-sm-2 control-label">Gambar Utama Project</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="gambar" class="form-control" >
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="form-group"><label class="col-sm-2 control-label">Gambar Tambahan Project</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="userfile[]" multiple="" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="form-group"><label class="col-sm-2 control-label">Keterangan Project</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="keterangan" placeholder="Tujuan Kegiatan" rows="5" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="form-group"><label class="col-sm-2 control-label">Tanggal Pembuatan</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="tgl_pembuatan" class="form-control" placeholder="Contoh : 16-9-2016 sampai 16-10-2017" required>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="id_anggota" value="{{idText}}">
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="form-group"><label class="col-sm-2 control-label">Pemilik Portofolio</label>
                                            <div class="col-sm-10">
                                                <select multiple class="form-control">
                                                    <option ng-repeat="val in namaText" ng-click="clickhapus($index)">{{val.nama}}</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="pull-right">
                                            <button type="reset" class="btn btn-danger btn-rounded"> Reset </button>
                                            <button type="submit" class="btn btn-info btn-rounded"> Kirim </button>
                                        </div>
                                    </div>
                                    </form>
                                    <hr>
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="form-group"><label class="col-sm-2 control-label">Pencarian Nama</label>
                                            <div class="col-sm-4">
                                                <select class="form-control" ng-model="nama.angkatan">
                                                    <option value="0">Pilih Angkatan</option>
                                                    <?php for($i=1;$i<=$data['angkatan'];$i++){?>
                                                    <option value="<?=$i?>"><?=$i?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <select class="form-control" ng-model="nama.jk">
                                                    <option value="0">Pilih Jenis Kelamin</option>
                                                    <option value="laki-laki">Laki Laki</option>
                                                    <option value="perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-2">
                                                <button class="btn btn-warning" ng-click="carinama()">Cari</button>
                                                <button class="btn btn-info"    ng-click="pushnama()">+</button>
                                                <button class="btn btn-danger"  ng-click="splicenama()">----</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="form-group"><label class="col-sm-2 control-label"></label>
                                            <div class="col-sm-10">
                                                <select multiple class="form-control">
                                                    <option ng-repeat="val in hasilText" value="{{val.id_anggota}}" ng-click="clicktambah(val)">{{val.nama}}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- batas form  -->
                </div>
            </div>
        </span>

        <script type="text/javascript">
            var app=angular.module('exoapp',[]);

            app.controller('portofolioctrl',function($scope,$http){

                    // $http.post("<?= base_url('A_dashboard/select_jumlah_widget');?>"   //jumlah berita
                    //   ).success(function(data){
                    //     $scope.jumlahText = data;
                    // });


                    // $http.post("<?= base_url('A_konten/select_data_konten');?>"   //jumlah berita
                    //   ).success(function(result){
                    //     $scope.kontenText = result;
                    // });

                    $scope.nama             = {};
                    $scope.nama.angkatan    = "0";
                    $scope.nama.jk          = "0";

                    $scope.carinama = function(){
                        $http.post("<?=base_url('A_portofolio/select_data_nama_anggota');?>",
                            {
                              data: $scope.nama
                            }
                          ).success(function(result){
                            $scope.hasilText = result;
                        });
                    }

                    //------ tambah nama -----------
                    $scope.datatambah    = {};
                    $scope.clicktambah = function(val){
                        $scope.datatambah.nama       = val.nama;
                        $scope.datatambah.id_anggota = val.id_anggota;

                    }

                    $scope.namaText = [];
                    $scope.idText   = []; 
                    $scope.pushnama = function(){
                        $scope.namaText.push({
                            "nama"     :$scope.datatambah.nama
                        });

                        $scope.idText.push({
                            "id_anggota"     :$scope.datatambah.id_anggota
                        });
                    }

                    //------ hapus nama -----------

                    $scope.clickhapus = function(index){
                        $scope.datakurang = index;
                       
                    }
                    $scope.splicenama = function(){
                        $scope.namaText.splice($scope.datakurang,1);
                        $scope.idText.splice($scope.datakurang,1);
                    }
            });

        </script>

                