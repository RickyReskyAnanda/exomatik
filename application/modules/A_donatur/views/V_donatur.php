           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Donatur</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?=base_url('admin')?>">Beranda</a>
                        </li>
                        <li>
                            Data donatur
                        </li>
                        <li class="active">
                            <strong>Data Tabel donatur </strong>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Table donatur</h5>
                            </div>
                            <div class="ibox-content">
                                <a href="<?=base_url('admin/donatur/tambah')?>">
                                    <button class="btn btn-info btn-rounded">
                                        <i class="fa fa-plus"></i> Tambah donatur
                                    </button>
                                </a>
                                <div class="col-sm-3 pull-right">
                                    <div class="input-group"><input type="text" ng-model="pencarian" placeholder="Search" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary"> Go!</button> </span>
                                    </div>
                                </div>
                                <h3> TABEL DONASI <?=date('Y')?></h3>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Donatur </th>
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
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php for ($i=0; $i < count($data); $i++) { ?>
                                            <tr>
                                                <td><?=$i+1?></td>
                                                <td><?=$data[$i]['nama_donatur']?></td>
                                                <?php for ($a=1; $a <= 12; $a++) { ?> 
                                                    
                                                <td><i class="fa <?=$data[$i]['hasil'][$a]?>"></i></td>
                                                <?php } ?>
                                                
                                                <td>
                                                    <a href="<?=base_url().'admin/donatur/detail/'.$data[$i]['id_donatur']?>">
                                                        <button class="btn btn-primary"><i class="fa fa-user"></i> Detail</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            
        