           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Data Download</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Beranda</a>
                        </li>
                        <li>
                            Data Download
                        </li>
                        <li class="active">
                            <strong>{{status}}</strong>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">

                            <div class="panel-body">
                                <div class="ibox-title">
                                    <h5>Table Download</h5>
                                </div>
                                <div class="ibox-content">

                                    <button class="btn btn-info btn-rounded" onclick="viewinput()" data-toggle="modal" data-target="#myModal5">
                                        <i class="fa fa-plus"></i> Tambah Data Download
                                    </button>
                                    <div class="col-sm-3 pull-right">
                                        <div class="input-group"><input type="text" ng-model="pencarian" placeholder="Search" class="input-sm form-control"> <span class="input-group-btn">
                                            <button type="button" class="btn btn-sm btn-primary"> Go!</button> </span>
                                        </div>
                                    </div>

                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Download</th>
                                                <th>link</th>
                                                <th>Tanggal Input</th>
                                                <th>Nonaktif</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="downloadLoop">
                                            
                                        </tbody>
                                    </table>
                                    <!-- Modal -->
                                    <div class="modal inmodal " id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content animated flipInY">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                    <h4 class="modal-title">Download Data</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                
                                                            <div class="row" style="margin-bottom: 10px;">
                                                                <div class="form-group"><label class="col-sm-3 control-label">Nama Download</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="namaX">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row" style="margin-bottom: 10px;">
                                                                <div class="form-group"><label class="col-sm-3 control-label">Link</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="linkX">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row" style="margin-bottom: 10px;">
                                                                <div class="form-group"><label class="col-sm-3 control-label">Nonaktif</label>
                                                                    <div class="col-sm-9">
                                                                        <select class="form-control" id="nonaktifX">
                                                                            <option value="tidak" selected>Tidak</option>
                                                                            <option value="Ya" >Ya</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-warning" data-dismiss="modal" onclick="simpanDownload()">Simpan</button>
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
            <script type="text/javascript">
                var metode = 'input';
                var Jdownload = '';
                var nomor = '';
                function dataDownload(){
                    $('#downloadLoop').html('');
                     $.ajax({
                        url: "<?=base_url('A_download/select_data_download')?>",
                        success: function(hasil) {
                            Jdownload = $.parseJSON(hasil);

                            for (var i=0;i<Jdownload.length;++i){
                                    $('#downloadLoop').append('<tr><td>'+(i+1)+'</td><td>'+Jdownload[i].nama+'</td><td>'+Jdownload[i].link+'</td><td>'+Jdownload[i].tgl_input+'</td><td>'+Jdownload[i].nonaktif+'</td><td><button class="btn btn-info btn-rounded"  data-toggle="modal" data-target="#myModal5" onclick=viewedit('+i+')>Edit</button><button class="btn btn-danger btn-rounded" onclick="deleteData('+Jdownload[i].id+')">Hapus</button></td></tr>');
                            }
                        }
                    });
                }
                dataDownload();

                function inputDownload(){
                    var namaY=$('#namaX').val();
                    var linkY=$('#linkX').val();
                    var nonaktifY=$('#nonaktifX').val();
                    $.ajax({
                        type:"POST",
                        url:"<?=base_url('A_download/insert_data_download')?>",
                        data:"nama="+namaY+"&link="+linkY+"&nonaktif="+nonaktifY,
                        success:function(hasil){
                            dataDownload();
                            swal("Berhasil!", "Data telah dihapus !", "success");
                        },error:function(){
                            swal("Gagal!", "Data gagal dihapus !", "danger");
                        }
                    });
                    
                }
                function editDownload(){
                    $('#namaX').val(Jdownload[nomor].nama);
                    // var linkY=$('#linkX').val();
                    // var nonaktifY=$('#nonaktifX').val();
                    // $.ajax({
                    //     type:"POST",
                    //     url:"<?=base_url('A_download/insert_data_download')?>",
                    //     data:"nama="+namaY+"&link="+linkY+"&nonaktif="+nonaktifY,
                    //     success:function(hasil){
                    //         dataDownload();
                    //         swal("Berhasil!", "Data telah dihapus !", "success");
                    //     },error:function(){
                    //         swal("Gagal!", "Data gagal dihapus !", "danger");
                    //     }
                    // });
                    
                }

                function viewinput() {
                    metode='input';
                }
                function viewedit(index) {
                    metode='edit';
                    nomor=index;
                }

                function simpanDownload(){
                    if(metode=='input'){
                        inputDownload();
                    }else if(metode=='edit'){
                        editDownload();
                    }
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
                                url:"<?=base_url('A_download/delete_data_download')?>",
                                data:"id="+id,
                                success:function(){
                                    dataDownload();
                                    swal("Berhasil!", "Data telah dihapus !", "success");
                                },error:function(){
                                    alert('Gagal Menghapus Data');
                                }
                            });
                        });
                }
            </script>
        