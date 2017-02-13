           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Data Struktur</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Beranda</a>
                        </li>
                        <li>
                            Struktur Organisasi
                        </li>
                        
                        <li class="active">
                            <strong>{{divisi}}</strong>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tabs-container">
                            <ul class="nav nav-tabs">
                                <li class="active" onclick="dataPengurus('dpo','#dpoLoop');"><a data-toggle="tab" href="#tab-1"> DPO</a></li>
                                <li class="" onclick="dataPengurus('bpo','#bpoLoop');"><a data-toggle="tab" href="#tab-2">BPO</a></li>
                                <li class="" onclick="dataPengurus('pendidikan','#pendidikanLoop');"><a data-toggle="tab" href="#tab-3">Pendidikan</a></li>
                                <li class="" onclick="dataPengurus('ki','#kinoLoop');"><a data-toggle="tab" href="#tab-4">Kino</a></li>
                                <li class="" onclick="dataPengurus('humas','#humasLoop');"><a data-toggle="tab" href="#tab-5">Humas</a></li>
                                <li class="" onclick="dataPengurus('kesekretariatan','#kesekretariatanLoop');"><a data-toggle="tab" href="#tab-6">Kesekretariatan</a></li>
                                <li class="" onclick="dataPengurus('keuangan','#keuanganLoop');"><a data-toggle="tab" href="#tab-7">Keuangan</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Foto</th>
                                                        <th>NIK</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>Jabatan</th>
                                                        <th>Angkatan</th>
                                                        <th>Gender</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="dpoLoop">
                                                    
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
                                                        <th>Jabatan</th>
                                                        <th>Angkatan</th>
                                                        <th>Gender</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="bpoLoop">
                                                    
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
                                                        <th>Jabatan</th>
                                                        <th>Angkatan</th>
                                                        <th>Gender</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="pendidikanLoop">
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-4" class="tab-pane">
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Foto</th>
                                                        <th>NIK</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>Jabatan</th>
                                                        <th>Angkatan</th>
                                                        <th>Gender</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="kinoLoop">
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-5" class="tab-pane">
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Foto</th>
                                                        <th>NIK</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>Jabatan</th>
                                                        <th>Angkatan</th>
                                                        <th>Gender</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="humasLoop">
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-6" class="tab-pane">
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Foto</th>
                                                        <th>NIK</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>Jabatan</th>
                                                        <th>Angkatan</th>
                                                        <th>Gender</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="kesekretariatanLoop">
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-7" class="tab-pane">
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Foto</th>
                                                        <th>NIK</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>Jabatan</th>
                                                        <th>Angkatan</th>
                                                        <th>Gender</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="keuanganLoop">
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col-md-12">
                        <div class="tabs-container">
                            <div class="panel-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Foto</th>
                                            <th>NIK</th>
                                            <th>Nama Lengkap</th>
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
                </div>
            </div>
            <script type="text/javascript">
                var divisi = 'dpo';
                var id_divisi = 'dpo';
                function dataPengurus(departemen,ids){
                    divisi=departemen;
                    id_divisi=ids;
                    $(ids).html('');
                     $.ajax({
                        type:"POST",
                        url: "<?=base_url('A_struktur/select_data_struktur')?>",
                        data:"dpt="+departemen,
                        success: function(hasil) {
                            var Janggota = $.parseJSON(hasil);

                            for (var i=0;i<Janggota.length;++i){
                                    $(ids).append('<tr><td>'+(i+1)+'</td><td><img width="150px" class="img-responsive" src="'+Janggota[i].foto+'"></td><td>'+Janggota[i].nik+'</td><td>'+Janggota[i].nama+'</td><td>'+Janggota[i].jabatan+'</td><td>'+Janggota[i].angkatan+'</td><td>'+Janggota[i].jk+'</td><td><button class="btn btn-danger btn-rounded" onclick="deletePengurus('+Janggota[i].id_struktur+','+Janggota[i].id_anggota+')">Hapus</button></td></tr>');
                            }
                        }
                    });
                }
                dataPengurus('dpo','#dpoLoop');

                function dataAnggota(){
                    $("#anggotaLoop").html('');
                     $.ajax({
                        url: "<?=base_url('A_struktur/select_data_anggota')?>",
                        success: function(hasil){
                            var Janggota = $.parseJSON(hasil);
                            for (var i=0;i<Janggota.length;i++){
                                    $('#anggotaLoop').append('<tr><td>'+(i+1)+'</td><td><img width="150px" class="img-responsive" src="'+Janggota[i].foto+'"></td><td>'+Janggota[i].nik+'</td><td>'+Janggota[i].nama+'</td><td>'+Janggota[i].angkatan+'</td><td>'+Janggota[i].jk+'</td><td><div class="btn-group"><button data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle">Posisi <span class="caret"></span></button><ul class="dropdown-menu"><li><a href="#" onclick=inputPengurus("ketua",'+Janggota[i].id_anggota+')>Ketua</a></li><li><a href="#" onclick=inputPengurus("sekretaris",'+Janggota[i].id_anggota+')>Sekteraris</a></li><li><a href="#" onclick=inputPengurus("bendahara",'+Janggota[i].id_anggota+')>Bendahara</a></li><li><a href="#" onclick=inputPengurus("anggota",'+Janggota[i].id_anggota+')>Anggota</a></li></ul></div></td></tr>');
                            }
                        }
                    });
                }
                dataAnggota();

                function inputPengurus(jbt,id_anggota){
                    swal({
                            title: "Apakah anda ingin menginput data ?",
                            text: "Data akan dipindahkan ke tabel "+divisi+" !",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#DD6B55",
                            confirmButtonText: "Ya, Input !",
                            closeOnConfirm: false
                        }, function () {
                            $.ajax({
                                type:"POST",
                                url:"<?=base_url('A_struktur/insert_data_struktur')?>",
                                data:"jbt="+jbt+"&idg="+id_anggota+"&dpt="+divisi,
                                success:function(hasil){
                                    dataAnggota();
                                    dataPengurus(divisi,id_divisi);
                                    swal("Berhasil!", "Data telah diinput !", "success");
                                },error:function(){
                                    alert('Gagal Menghapus Data');
                                }
                            });
                        });
                }
                function deletePengurus(id_struktur,id_anggota){
                    swal({
                            title: "Apakah anda ingin menghapus data ?",
                            text: "Data akan dipindahkan ke tabel pengurus !",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#DD6B55",
                            confirmButtonText: "Ya, Hapus !",
                            closeOnConfirm: false
                        }, function (){
                            $.ajax({
                                type:"POST",
                                url:"<?=base_url('A_struktur/delete_data_struktur')?>",
                                data:"ids="+id_struktur+"&idg="+id_anggota,
                                success:function(hasil){
                                    dataAnggota();
                                    dataPengurus(divisi,id_divisi);
                                    swal("Berhasil!", "Data telah dihapus !", "success");
                                },error:function(){
                                    alert('Gagal Menghapus Data');
                                }
                            });
                        });
                }
            </script>
        