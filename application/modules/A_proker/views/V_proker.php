           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Data Proker</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Beranda</a>
                        </li>
                        <li>
                            Proker Organisasi
                        </li>
                        
                        <li class="active">
                            <strong>{{divisi}}</strong>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrapper wrapper-content">
                <?php if($this->session->flashdata('pesan_sukses')!=''){ ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success alert-dismissable">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                            <?=$this->session->flashdata('pesan_sukses');?>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="tabs-container">
                            <ul class="nav nav-tabs">
                                <li class="active" id="dvsp" onclick="pindahTab('pendidikan');"><a>Pendidikan</a></li>
                                <li class="" id="dvsi" onclick="pindahTab('ki');"><a >Kino</a></li>
                                <li class="" id="dvsh" onclick="pindahTab('humas');"><a >Humas</a></li>
                                <li class="" id="dvsk" onclick="pindahTab('kesekretariatan');"><a >Kesekretariatan</a></li>
                                <li class="" id="dvsu" onclick="pindahTab('keuangan');"><a >Keuangan</a></li>
                            </ul>
                            <div class="tab-content">
                                <div  class="tab-pane active">
                                    <div class="panel-body">
                                        <a href="<?=base_url('admin/proker/tambah')?>">
                                            <button class="btn btn-info btn-rounded" style="margin-bottom: 10px;">
                                                <i class="fa fa-plus"></i> Tambah Program Kerja
                                            </button>
                                        </a>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Foto DP</th>
                                                        <th>Nama Kegiatan</th>
                                                        <th>Tujuan Kegiatan</th>
                                                        <th>Sasaran Kegiatan</th>
                                                        <th>Waktu </th>
                                                        <th>Sumber Dana</th>
                                                        <th>Status</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="prokerLoop">
                                                    
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
                var divisi='pendidikan';
                function dataProker(){
                    $('#prokerLoop').html('');
                     $.ajax({
                        type:"POST",
                        url: "<?=base_url('A_proker/select_data_proker')?>",
                        data:"dpt="+divisi,
                        success: function(hasil) {
                            var Jproker = $.parseJSON(hasil);

                            for (var i=0;i<Jproker.length;++i){
                                    $('#prokerLoop').append('<tr><td>'+(i+1)+'</td><td><img width="150px" class="img-responsive" src="'+Jproker[i].foto_dp_k+'"></td><td>'+Jproker[i].nama_kegiatan+'</td><td>'+Jproker[i].tujuan_kegiatan+'</td><td>'+Jproker[i].sasaran_kegiatan+'</td><td>'+Jproker[i].waktu_kegiatan+'</td><td>'+Jproker[i].sumber_dana+'</td><td>'+Jproker[i].status_kegiatan+'</td><td><a href="'+Jproker[i].edit+'"><button class="btn btn-success btn-rounded">Edit</button></a><button class="btn btn-danger btn-rounded" onclick="deleteProker('+Jproker[i].id_proker+')">Hapus</button></td></tr>');
                            }
                        }
                    });
                }
                dataProker();


                function pindahTab(departemen){
                    divisi=departemen;
                    if(departemen=='pendidikan'){
                        $('#dvsp').addClass('active');
                        $('#dvsi').removeClass('active');
                        $('#dvsh').removeClass('active');
                        $('#dvsk').removeClass('active');
                        $('#dvsu').removeClass('active');
                    }else if(departemen=='ki'){
                        $('#dvsi').addClass('active');
                        $('#dvsp').removeClass('active');
                        $('#dvsh').removeClass('active');
                        $('#dvsk').removeClass('active');
                        $('#dvsu').removeClass('active');
                    }else if(departemen=='humas'){
                        $('#dvsh').addClass('active');
                        $('#dvsp').removeClass('active');
                        $('#dvsi').removeClass('active');
                        $('#dvsk').removeClass('active');
                        $('#dvsu').removeClass('active');
                    }else if(departemen=='kesekretariatan'){
                        $('#dvsk').addClass('active');
                        $('#dvsp').removeClass('active');
                        $('#dvsi').removeClass('active');
                        $('#dvsh').removeClass('active');
                        $('#dvsu').removeClass('active');
                    }else if(departemen=='keuangan'){
                        $('#dvsu').addClass('active');
                        $('#dvsp').removeClass('active');
                        $('#dvsi').removeClass('active');
                        $('#dvsh').removeClass('active');
                        $('#dvsk').removeClass('active');
                    }
                    dataProker();
                }

                function deleteProker(id_proker){
                    swal({
                            title: "Apakah anda ingin menghapus data ?",
                            text: "Data tidak dapat dikembalikan setelah terhapus !",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#DD6B55",
                            confirmButtonText: "Ya, Hapus !",
                            closeOnConfirm: true
                        }, function (){
                            $.ajax({
                                type:"POST",
                                url:"<?=base_url('A_proker/delete_data_proker')?>",
                                data:"id="+id_proker,
                                success:function(){
                                    dataProker();
                                    swal("Berhasil!", "Data telah dihapus !", "success");
                                },error:function(){
                                    swal("Gagal!", "Data gagal dihapus !", "warning");
                                }
                            });
                        });
                }
            </script>
        