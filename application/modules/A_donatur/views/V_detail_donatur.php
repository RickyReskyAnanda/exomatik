        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Profile</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a>Extra Pages</a>
                    </li>
                    <li class="active">
                        <strong>Profile</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">

            </div>
        </div>
        <div class="wrapper wrapper-content">
            <div class="row animated fadeInRight">
                <div class="col-md-3">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Profil Donatur</h5>
                        </div>
                        <div>
                            <div class="ibox-content no-padding border-left-right">
                                <img alt="image" class="img-responsive" src="<?=$profil['foto']?>">
                            </div>
                            <div class="ibox-content profile-content">
                                <h4><strong><?=$profil['nama_donatur']?></strong></h4>
                                <h5>
                                    Tentang Saya
                                </h5>
                                <p><i class="fa fa-user"></i> <?=$profil['pekerjaan_donatur']?></p>
                                <p><i class="fa fa-phone"></i> <?=$profil['no_hp_donatur']?></p>
                                <p><i class="fa fa-calendar-o"></i> <?=$profil['tgl_lahir_donatur']?></p>
                                <p><i class="fa fa-money"></i> <?="Rp. " . number_format($profil['nominal_donatur'],2,',','.');?></p>
                                <p>
                                    <i class="fa fa-map-marker"></i> <?=$profil['alamat_donatur']?>.
                                </p>
                                
                                <div class="user-button">
                                    <div class="row">
                                        <div class="col-md-12">
                                        <a href="<?=base_url().'admin/donatur/detail/edit/'.$profil['id_donatur']?>" class="btn btn-primary btn-sm btn-block"><i class="fa fa-pencil"></i> Edit Profil</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Input Pembayaran</h5>
                        </div>
                        <div class="ibox-content">
                            <form action="<?=base_url('A_donatur/insert_data_donasi')?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_donatur" value="<?=$profil['id_donatur']?>">
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="form-group"><label class="col-sm-2 control-label">Jumlah Donasi</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" disabled value="<?="Rp. " . number_format($profil['nominal_donatur'],2,',','.');?>" name="jumlah"  required></div>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="form-group"><label class="col-sm-2 control-label">Tanggal</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control disabled" name="tanggal" value="<?=date('d')?>"  required>
                                        </div>
                                    </div>
                                </div>
                                <?php $bulan=date('m');?>

                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="form-group"><label class="col-sm-2 control-label">Bulan</label>
                                        <div class="col-sm-10">
                                            <select name="bulan" class="form-control" required>
                                                <option value="1" <?php if($bulan==01)echo "selected";?>>Januari</option>
                                                <option value="2" <?php if($bulan==02)echo "selected";?>>Februari</option>
                                                <option value="3" <?php if($bulan==03)echo "selected";?>>Maret</option>
                                                <option value="4" <?php if($bulan==04)echo "selected";?>>April</option>
                                                <option value="5" <?php if($bulan==05)echo "selected";?>>Mei</option>
                                                <option value="6" <?php if($bulan==06)echo "selected";?>>Juni</option>
                                                <option value="7" <?php if($bulan==07)echo "selected";?>>Juli</option>
                                                <option value="8" <?php if($bulan==08)echo "selected";?>>Agustus</option>
                                                <option value="9" <?php if($bulan==09)echo "selected";?>>September</option>
                                                <option value="10" <?php if($bulan==10)echo "selected";?>>Oktober</option>
                                                <option value="11" <?php if($bulan==11)echo "selected";?>>November</option>
                                                <option value="12" <?php if($bulan==12)echo "selected";?>>Desember</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="form-group"><label class="col-sm-2 control-label">Tahun</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control disabled" name="tahun" value="<?=date('Y')?>"  required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="pull-right">
                                        <button type="reset" class="btn btn-danger btn-rounded"> Reset </button>
                                        <button type="submit" class="btn btn-info btn-rounded"> Simpan </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Tabel Pembayaran</h5>
                        </div>
                        <div class="ibox-content">
                            <h3> Tabel Donasi <?=ucfirst($profil['nama_donatur'])?></h3>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Tahun </th>
                                            <th>Jan</th>
                                            <th>Feb</th>
                                            <th>Mar</th>
                                            <th>Apr</th>
                                            <th>Mei</th>
                                            <th>Jun</th>
                                            <th>Jul</th>
                                            <th>Agt</th>
                                            <th>Sep</th>
                                            <th>Okt</th>
                                            <th>Nov</th>
                                            <th>Des</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>