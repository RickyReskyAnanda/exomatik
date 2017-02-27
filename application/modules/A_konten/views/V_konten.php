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
                                            <th>Status</th>
                                            <th>Viewers</th>
                                            <th>Likers</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="kontenLoop">
                                    </tbody>
                                </table>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-white" id="btn_awal" onclick="awal()"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-left"></i></button>
                                    <button class="btn btn-white " id="btn_sblm" onclick="sebelumnya()"><i class="fa fa-chevron-left"></i></button>
                                    <button class="btn btn-white" id="btn_sljt" onclick="selanjutnya()"><i class="fa fa-chevron-right"></i></button>
                                    <button type="button" class="btn btn-white" id="btn_akhir" onclick="akhir()"><i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> </button>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            <script type="text/javascript">
                var paginasi=0;
                var Jkonten=null;
                var nomor = 0;
                var jumlah=0;
                function dataKonten(mulai){
                    if(paginasi>0){
                        nomor=paginasi*10;
                    }else{
                        nomor=0;
                    }
                    $('#kontenLoop').html('');
                     $.ajax({
                        url: "<?=base_url('A_konten/select_data_konten')?>",
                        dataType: "text",
                        type:"POST",
                        data:"mulai="+mulai,
                        success: function(hasil) {
                            Jkonten = $.parseJSON(hasil);

                            for (var i=0;i<Jkonten.length;++i){
                                $('#kontenLoop').append('<tr><td>'+(++nomor)+'</td><td>'+Jkonten[i].tgl_rilis+'</td><td>'+Jkonten[i].judul_konten+'</td><td>'+Jkonten[i].nama+'</td><td>'+Jkonten[i].status+'</td><td>'+Jkonten[i].viewers+'</td><td>'+Jkonten[i].likers+'</td><td><a href="<?=base_url()?>admin/konten/edit/'+Jkonten[i].id_konten+'"><button class="btn btn-primary btn-rounded">Edit</button></a><button class="btn btn-danger btn-rounded" onclick="deleteKonten('+Jkonten[i].id_konten+')">Hapus</button></td></tr>');
                            }
                            if(Jkonten.length<=9){
                                $('#btn_sljt').addClass('disabled');
                                $('#btn_akhir').addClass('disabled');   
                            }
                        }
                    });
                }
                $.ajax({
                    url: "<?=base_url('A_konten/select_data_jumlah_konten')?>",
                    dataType: "text",
                    success: function(hasil) {
                        jumlah = hasil;
                    }
                });

                dataKonten(0);
                $("#btn_awal").addClass('disabled');
                $("#btn_sblm").addClass('disabled');
                function awal(){
                    paginasi=0;
                    dataKonten(paginasi);
                    $("#btn_awal").addClass('disabled');
                    $("#btn_sblm").addClass('disabled');
                    $ ('#btn_sljt').removeClass('disabled');
                    $('#btn_akhir').removeClass('disabled');
                }
                function sebelumnya(){
                    if(paginasi>0){
                        paginasi--;
                        dataKonten(paginasi);
                        if(paginasi<1){
                            $("#btn_awal").addClass('disabled');
                            $("#btn_sblm").addClass('disabled');
                        }
                        $('#btn_sljt').removeClass('disabled');
                        $('#btn_akhir').removeClass('disabled');
                    }
                } 
                function selanjutnya(){
                    paginasi++;
                    dataKonten(paginasi);
                    $('#btn_awal').removeClass('disabled');
                    $('#btn_sblm').removeClass('disabled');
                }
                function akhir(){
                    paginasi = parseInt(parseInt(jumlah)/10);
                    dataKonten(paginasi);
                    $('#btn_awal').removeClass('disabled');
                    $('#btn_sblm').removeClass('disabled');
                    $('#btn_sljt').addClass('disabled');
                    $('#btn_akhir').addClass('disabled');   
                }

                function deleteKonten(id){
                 swal({
                        title: "Ingin menghapus konten ?",
                        text: "Data tidak dapat dikembalikan setelah terhapus !",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Ya, Hapus !",
                        closeOnConfirm: true,
                    }, function () {
                        $.ajax({
                            type:"POST",
                            url:"<?=base_url('A_konten/delete_data_konten')?>",
                            data:"id="+id,
                            success:function(){
                                dataKonten(paginasi);
                                swal("Berhasil!", "Data telah dihapus !", "success");
                            },error:function(){
                                swal("Gagal!", "Data gagal dihapus !", "danger");
                            }
                        });
                    });
                }
            </script>
        