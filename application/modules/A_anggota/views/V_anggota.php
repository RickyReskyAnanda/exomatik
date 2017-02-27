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
        <div class="col-md-12">
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="active" onclick="dataAnggota('anggota','#anggotaLoop')"><a data-toggle="tab" href="#tab-1"><i class="fa fa-users"></i> Anggota</a></li>
                    <li class="" onclick="dataAnggota('pengurus','#pengurusLoop')"><a data-toggle="tab" href="#tab-2"><i class="fa fa-user"></i> Pengurus</a></li>
                    <li class="" onclick="dataAdmin()"><a data-toggle="tab" href="#tab-3"><i class="fa fa-user"></i> Admin</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">
                            <a href="<?=base_url('admin/anggota/tambah')?>">
                                <button class="btn btn-info btn-rounded" style="margin-bottom: 10px ">
                                    <i class="fa fa-plus"></i> Tambah Data Anggota
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
                                            <th>Foto</th>
                                            <th>NIK</th>
                                            <th>Nama Lengkap</th>
                                            <th>Status</th>
                                            <th>Angkatan</th>
                                            <th>Gender</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="anggotaLoop">
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Foto</th>
                                            <th>NIK</th>
                                            <th>Nama Lengkap</th>
                                            <th>Status</th>
                                            <th>Angkatan</th>
                                            <th>Gender</th>
                                            <th>Ubah Status</th>
                                        </tr>
                                    </thead>
                                    <tbody id="pengurusLoop">
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Foto</th>
                                            <th>NIK</th>
                                            <th>Nama Lengkap</th>
                                            <th>User Level</th>
                                            <th>Angkatan</th>
                                            <th>Gender</th>
                                        </tr>
                                    </thead>
                                    <tbody id="adminLoop">
                                        
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
    function dataAnggota(status,ids){
        $(ids).html('');
         $.ajax({
            type:"POST",
            url: "<?=base_url('A_anggota/select_data_anggota')?>",
            data:"sts="+status,
            success: function(hasil) {
                var Janggota = $.parseJSON(hasil);

                for (var i=0;i<Janggota.length;++i){
                    if(ids == '#anggotaLoop'){
                        $('#anggotaLoop').append('<tr><td>'+(i+1)+'</td><td><img width="150px" class="img-responsive" src="'+Janggota[i].foto+'"></td><td>'+Janggota[i].nik+'</td><td>'+Janggota[i].nama+'</td><td>'+Janggota[i].status+'</td><td>'+Janggota[i].angkatan+'</td><td>'+Janggota[i].jk+'</td><td><a href="'+Janggota[i].edit+'"><button class="btn btn-primary btn-rounded">Edit</button></a><button class="btn btn-danger btn-rounded" onclick="deleteData('+Janggota[i].id_anggota+')">Hapus</button><button class="btn btn-info btn-rounded" onclick=ubahData("pengurus","#anggotaLoop",'+Janggota[i].id_anggota+',"anggota")>Pengurus</button></td></tr>');
                    }else if(ids == '#pengurusLoop'){
                        $('#pengurusLoop').append('<tr><td>'+(i+1)+'</td><td><img width="150px" class="img-responsive" src="'+Janggota[i].foto+'"></td><td>'+Janggota[i].nik+'</td><td>'+Janggota[i].nama+'</td><td>'+Janggota[i].status+'</td><td>'+Janggota[i].angkatan+'</td><td>'+Janggota[i].jk+'</td><td><button class="btn btn-info btn-rounded" onclick=ubahData("anggota","#pengurusLoop",'+Janggota[i].id_anggota+',"pengurus")>Anggota</button></a></td></tr>');
                    }
                }
            }
        });
    }
    dataAnggota('anggota','#anggotaLoop');
    function dataAdmin(){
        $('#adminLoop').html('');
         $.ajax({
            url: "<?=base_url('A_anggota/select_data_admin')?>",
            success: function(hasil) {
                var Janggota = $.parseJSON(hasil);

                for (var i=0;i<Janggota.length;++i){
                    $('#adminLoop').append('<tr><td>'+(i+1)+'</td><td><img width="150px" class="img-responsive" src="'+Janggota[i].foto+'"></td><td>'+Janggota[i].nik+'</td><td>'+Janggota[i].nama+'</td><td>'+Janggota[i].userlevel+'</td><td>'+Janggota[i].angkatan+'</td><td>'+Janggota[i].jk+'</td></tr>');
                }
                }
            
        });
    }

    

    function deleteData(id){
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
                    url:"<?=base_url()?>admin/anggota/delete",
                    data:"id="+id,
                    success:function(){
                        dataAnggota('anggota','#anggotaLoop');
                        swal("Berhasil!", "Data telah dihapus !", "success");
                    },error:function(){
                        alert('Gagal Menghapus Data');
                    }
                });
            });
    }
    function ubahData(status,ids,id,fel){
         swal({
                title: "Apakah anda mengubah status ?",
                text: "Data akan dipindahkan ke tabel "+status+" !",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ya, Ubah !",
                closeOnConfirm: false
            }, function () {
                $.ajax({
                    type:"POST",
                    url:"<?=base_url()?>admin/anggota/status",
                    data:"sts="+status+"&id="+id,
                    success:function(){
                        dataAnggota(fel,ids);
                        swal("Berhasil!", "Data telah dihapus !", "success");
                    },error:function(){
                        alert('Gagal Menghapus Data');
                    }
                });
            });
    }

</script>
