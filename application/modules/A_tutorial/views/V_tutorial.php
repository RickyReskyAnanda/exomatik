
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
                    <div class="col-sm-12">
                        <div class="tabs-container">
                            <ul class="nav nav-tabs">
                                <li class="active" onclick="dataTutorial()"><a data-toggle="tab" href="#tab-1" aria-expanded="true">Tutorial</a></li>
                                <li class=""  onclick="dataKategori()"><a data-toggle="tab" href="#tab-2" aria-expanded="false">Kategori</a></li>
                                <li class="" onclick="dataJenis()"><a data-toggle="tab" href="#tab-3" aria-expanded="false">Jenis</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="panel-body">
                                        <a href="<?=base_url('admin/tutorial/tambah')?>" >
                                            <button class="btn btn-info btn-rounded" style="margin-bottom: 10px">
                                                <i class="fa fa-plus"></i> Tambah Tutorial
                                            </button>
                                        </a>
                                        <div class="col-sm-3 pull-right">
                                            <div class="input-group"><input type="text" ng-model="pencarian" placeholder="Search" class="input-sm form-control"> <span class="input-group-btn">
                                                <button type="button" class="btn btn-sm btn-primary"> Go!</button> </span></div>
                                        </div>
                                        <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tanggal Rilis </th>
                                                    <th>Jenis</th>
                                                    <th>Kategori</th>
                                                    <th>Judul tutorial</th>
                                                    <th>Penulis</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tutorialLoop">
                                                
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-2" class="tab-pane">
                                    <div class="panel-body">
                                        <a href="<?=base_url('admin/tutorial/kategori/tambah')?>" >
                                            <button class="btn btn-info btn-rounded" style="margin-bottom: 10px">
                                                <i class="fa fa-plus"></i> Tambah Kategori Tutorial
                                            </button>
                                        </a>
                                        <div class="col-sm-3 pull-right">
                                            <div class="input-group"><input type="text" ng-model="pencarian" placeholder="Search" class="input-sm form-control"> <span class="input-group-btn">
                                                <button type="button" class="btn btn-sm btn-primary"> Go!</button> </span></div>
                                        </div>
                                        <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Gambar Icon</th>
                                                    <th>Nama Kategori </th>
                                                    <th>Waktu  </th>
                                                    <th>Keterangan</th>
                                                    <th>Jenis</th>
                                                    <th>Nonaktif</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody id="kategoriLoop">
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-3" class="tab-pane">
                                    <div class="panel-body">
                                        <a href="<?=base_url('admin/tutorial/jenis/tambah')?>" >
                                            <button class="btn btn-info btn-rounded" style="margin-bottom: 10px">
                                                <i class="fa fa-plus"></i> Tambah Jenis Tutorial
                                            </button>
                                        </a>
                                        <div class="col-sm-3 pull-right">
                                            <div class="input-group"><input type="text" ng-model="pencarian" placeholder="Search" class="input-sm form-control"> <span class="input-group-btn">
                                                <button type="button" class="btn btn-sm btn-primary"> Go!</button> </span></div>
                                        </div>
                                        <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Jenis Tutorial </th>
                                                    <th>Waktu</th>
                                                    <th>Keterangan</th>
                                                    <th>Nonaktif</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody id="jenisLoop">
                                                
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

        <script type="text/javascript">
            function dataTutorial(){
                $('#tutorialLoop').html('');
                 $.ajax({
                    url: "<?=base_url('A_tutorial/select_data_tutorial')?>",
                    //force to handle it as text
                    dataType: "text",
                    success: function(data) {
                        var Jtutorial = $.parseJSON(data);

                        for (var i=0;i<Jtutorial.length;++i){
                            $('#tutorialLoop').append('<tr><td>'+(i+1)+'</td><td>'+Jtutorial[i].tgl_rilis+'</td><td>'+Jtutorial[i].nama_jenis_tutorial+'</td><td>'+Jtutorial[i].nama_kt+'</td><td>'+Jtutorial[i].judul_tutorial+'</td><td>'+Jtutorial[i].nama_lengkap+'</td><td><a href="<?=base_url()?>admin/tutorial/edit/'+Jtutorial[i].id_tutorial+'"><button class="btn btn-primary btn-rounded">Edit</button></a><button class="btn btn-danger btn-rounded" onclick="deleteData('+Jtutorial[i].id_tutorial+',1)">Hapus</button></td></tr>');
                        }
                    }
                });
            }
            dataTutorial();

            function deleteData(id,url){
                var urls="";

                if(url==1){
                    urls="delete";
                }else if(url==2){
                    urls="kategori/delete";
                }else{
                    urls="jenis/delete";
                }

                 swal({
                        title: "Apakah anda ingin menghapus data ?",
                        text: "Data tidak dapat dikembalikan setelah terhapus !",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Ya, Hapus !",
                        closeOnConfirm: false
                    }, function () {
                        $.ajax({
                            type:"POST",
                            url:"<?=base_url()?>admin/tutorial/"+urls,
                            data:"id="+id,
                            success:function(){
                                dataTutorial();
                                swal("Berhasil!", "Data telah dihapus !", "success");
                            },error:function(){
                                alert('Gagal Menghapus Data');
                            }
                        });
                    });
            }

            // --------------- Kategori -------------------
            function dataKategori(){
                $('#kategoriLoop').html('');
                 $.ajax({
                    url: "<?=base_url('A_tutorial/select_data_kategori')?>",
                    //force to handle it as text
                    dataType: "text",
                    success: function(data) {
                        var Jkategori = $.parseJSON(data);

                        for (var i=0;i<Jkategori.length;++i){
                            $('#kategoriLoop').append('<tr><td>'+(i+1)+'</td><td><img src="<?=base_url()?>image/gambar_kt/'+Jkategori[i].gambar_kt+'" class="img-responsive img-circle"></td><td>'+Jkategori[i].nama_kt+'</td><td>'+Jkategori[i].waktu_kt+'</td><td>'+Jkategori[i].keterangan_kt+'</td><td>'+Jkategori[i].nama_jenis_tutorial+'</td><td>'+Jkategori[i].nonaktif_kt+'</td><td><a href="<?=base_url()?>admin/tutorial/kategori/edit/'+Jkategori[i].id_kt+'"><button class="btn btn-primary btn-rounded">Edit</button></a><button class="btn btn-danger btn-rounded" onclick="deleteKategori('+Jkategori[i].id_kt+',2)">Hapus</button></td></tr>');
                        }
                    }
                });
            }
            function deleteKategori(id){
                 swal({
                        title: "Ingin menghapus kategori ?",
                        text: "Data tidak dapat dikembalikan setelah terhapus !",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Ya, Hapus !",
                        closeOnConfirm: false
                    }, function () {
                        $.ajax({
                            type:"POST",
                            url:"<?=base_url('admin/tutorial/kategori/delete')?>",
                            data:"id="+id,
                            success:function(){
                                dataKategori();
                                swal("Berhasil!", "Data telah dihapus !", "success");
                            },error:function(){
                                swal("Gagal!", "Data gagal dihapus !", "danger");
                            }
                        });
                    });
            }



            // --------------- Jenis -------------------
            function dataJenis(){
                $('#jenisLoop').html('');
                 $.ajax({
                    url: "<?=base_url('A_tutorial/select_data_jenis')?>",
                    //force to handle it as text
                    dataType: "text",
                    success: function(data) {
                        var Jjenis = $.parseJSON(data);

                        for (var i=0;i<Jjenis.length;++i){
                            $('#jenisLoop').append('<tr><td>'+(i+1)+'</td><td>'+Jjenis[i].nama_jenis_tutorial+'</td><td>'+Jjenis[i].waktu+'</td><td>'+Jjenis[i].keterangan+'</td><td>'+Jjenis[i].nonaktif+'</td><td><a href="<?=base_url()?>admin/tutorial/jenis/edit/'+Jjenis[i].id_jenis_tutorial+'"><button class="btn btn-primary btn-rounded">Edit</button></a><button class="btn btn-danger btn-rounded" onclick="deleteJenis('+Jjenis[i].id_jenis_tutorial+')">Hapus</button></td></tr>');
                        }
                    }
                });
            }
            function deleteJenis(id){
                 swal({
                        title: "Ingin menghapus Jenis ?",
                        text: "Data tidak dapat dikembalikan setelah terhapus !",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Ya, Hapus !",
                        closeOnConfirm: false
                    }, function () {
                        $.ajax({
                            type:"POST",
                            url:"<?=base_url('admin/tutorial/jenis/delete')?>",
                            data:"id="+id,
                            success:function(){
                                dataJenis();
                                swal("Berhasil!", "Data telah dihapus !", "success");
                            },error:function(){
                                swal("Gagal!", "Data gagal dihapus !", "danger");
                            }
                        });
                    });
            }
        </script>

                