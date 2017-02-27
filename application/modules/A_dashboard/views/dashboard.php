<div class="wrapper wrapper-content" ng-app="exoapp" ng-controller="dashboardctrl">
    <div class="row">
        <div class="col-lg-3">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Anggota</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">2</h1>
                    <small>Anggota Exomatik</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Program Kerja</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">2</h1>
                    <div class="stat-percent font-bold text-navy">{{rataproker}}% <i class="fa fa-level-up"></i></div>
                    <small>Telah Terlaksana</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Portofolio</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">2</h1>
                    <small>Total Portofolio</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Konten</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">2</h1>
                    <small>Total income</small>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="ibox  float-e-margins">
                <div class="ibox-title">
                    <h5>Box Saran & Masukan - Masuk</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="feed-activity-list" id="saranMasukLoop">

                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Box Saran & Masukan - Rilis</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="feed-activity-list" id="saranRilisLoop">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function dataSaran(idsaran,status){
        $(idsaran).html('');
         $.ajax({
            url: "<?=base_url('A_dashboard/select_data_saran')?>",
            dataType: "text",
            type:"POST",
            data:"status="+status,
            success: function(hasil) {
                var Jsaran = $.parseJSON(hasil);

                for (var i=0;i<Jsaran.length;++i){
                    $(idsaran).append('<div class="feed-element"><div><strong>'+Jsaran[i].nama+'</strong><div>'+Jsaran[i].isi+'</div><small class="text-muted">'+Jsaran[i].waktu+'</small><div class="m-t text-righ"><button class="btn btn-xs btn-primary" onclick=ubahStatus("'+Jsaran[i].status+'","'+Jsaran[i].id_saran+'") style="margin-right:10px;">Rilis <i class="fa fa-pencil"></i> </button><button class="btn btn-xs btn-danger" onclick=deleteData("'+Jsaran[i].id_saran+'")>Hapus <i class="fa fa-trash"></i> </button></div></div></div>');
                }
            }
        });
    }
    dataSaran('#saranMasukLoop','draft');
    dataSaran('#saranRilisLoop','rilis');

    function ubahStatus(status,idsaran){
        swal({
            title: "Ingin mengubah status ?",
            text: "Data akan dipindahkan ke daftar sebelahnya !",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, Ubah !",
            closeOnConfirm: true,
        }, function () {
            $.ajax({
                url: "<?=base_url('A_dashboard/update_data_saran')?>",
                dataType: "text",
                type:"POST",
                data:"status="+status+"&idsaran="+idsaran,
                success: function() {
                    dataSaran('#saranMasukLoop','draft');
                    dataSaran('#saranRilisLoop','rilis');
                    swal("Berhasil!", "Status berhasil diubah !", "success");
                },error:function(){
                    swal("Gagal!", "status gagal diubah !", "danger");
                }
            });
        });
    }
    function deleteData(idsaran){
         swal({
                title: "Ingin menghapus Data ?",
                text: "Data tidak dapat dikembalikan setelah terhapus !",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ya, Hapus !",
                closeOnConfirm: true,
            }, function () {
                $.ajax({
                    type:"POST",
                    url:"<?=base_url('A_dashboard/delete_data_saran')?>",
                    data:"idsaran="+idsaran,
                    success:function(){
                        dataSaran('#saranMasukLoop','draft');
                        dataSaran('#saranRilisLoop','rilis');
                        swal("Berhasil!", "Data telah dihapus !", "success");
                    },error:function(){
                        swal("Gagal!", "Data gagal dihapus !", "danger");
                    }
                });
            });
        }
</script>        
