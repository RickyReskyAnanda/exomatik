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
                                                <td><i class="fa <?=$data[$i]['jan']?>"></i></td>
                                                <td><i class="fa <?=$data[$i]['feb']?>"></i></td>
                                                <td><i class="fa <?=$data[$i]['mar']?>"></i></td>
                                                <td><i class="fa <?=$data[$i]['apr']?>"></i></td>
                                                <td><i class="fa <?=$data[$i]['mei']?>"></i></td>
                                                <td><i class="fa <?=$data[$i]['jun']?>"></i></td>
                                                <td><i class="fa <?=$data[$i]['jul']?>"></i></td>
                                                <td><i class="fa <?=$data[$i]['agt']?>"></i></td>
                                                <td><i class="fa <?=$data[$i]['sep']?>"></i></td>
                                                <td><i class="fa <?=$data[$i]['okt']?>"></i></td>
                                                <td><i class="fa <?=$data[$i]['nov']?>"></i></td>
                                                <td><i class="fa <?=$data[$i]['des']?>"></i></td>
                                                <td>
                                                    <a href="<?=base_url().'admin/edit/'.$data[$i]['id_donatur']?>">
                                                        <button class="btn btn-primary">Edit</button>
                                                    </a>
                                                    <a href="<?=base_url().'admin/hapus/'.$data[$i]['id_donatur']?>">
                                                        <button class="btn btn-danger">Hapus</button>
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

            
        