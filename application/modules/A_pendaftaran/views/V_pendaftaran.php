
           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Data Pendaftaran</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Beranda</a>
                        </li>
                        <li>
                            Data Pendaftaran
                        </li>
                        <li class="active">
                            <strong>Data Tabel Pendaftaran </strong>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Daftar Pendaftar</h5>
                            </div>
                            <div class="ibox-content">
                        
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Lengkap</th>
                                                <th>Nama Panggilan</th>
                                                <th>Gender</th>
                                                <th>Angkatan</th>
                                                <th>Jurusan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="pendaftaranLoop">
                                            
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <script type="text/javascript">
            function dataPendaftar(){
                $('#pendaftaranLoop').html('');
                 $.ajax({
                    url: "<?=base_url('A_pendaftaran/select_data_pendaftaran')?>",
                    dataType: "text",
                    success: function(data) {
                        var Jpendaftar = $.parseJSON(data);

                        for (var i=0;i<Jpendaftar.length;++i){
                            $('#pendaftaranLoop').append('<tr><td>'+(i+1)+'</td><td>'+Jpendaftar[i].nama_lengkap+'</td><td>'+Jpendaftar[i].nama_panggilan+'</td><td>'+Jpendaftar[i].jk+'</td><td>'+Jpendaftar[i].angkatan+'</td><td>'+Jpendaftar[i].jurusan+'</td><td><button class="btn btn-danger btn-rounded" onclick="deleteData('+Jpendaftar[i].id_pendaftaran+')">Hapus</button><a href="<?=base_url()?>admin/pendaftaran/print/'+Jpendaftar[i].id_pendaftaran+'" class="btn btn-primary btn-rounded">Cetak</a></td></tr>');
                        }
                    }
                });
            }
            dataPendaftar();
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
                            url:"<?=base_url()?>A_pendaftaran/delete_data_pendaftaran/",
                            data:"id="+id,
                            success:function(){
                                dataPendaftar();
                                swal("Berhasil!", "Data telah dihapus !", "success");
                            },error:function(){
                                alert('Gagal Menghapus Data');
                            }
                        });
                    });
            }

          
        </script>

                