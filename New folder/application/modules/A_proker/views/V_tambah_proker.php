           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Data Program Kerja</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Beranda</a>
                        </li>
                        <li>
                            Data Program Kerja
                        </li>
                        <li class="active">
                            <strong>Tambah Data Program Kerja </strong>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrapper wrapper-content">               
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col-md-12">
                        <a href="<?=base_url('A_proker')?>">
                            <button class="btn btn-info btn-rounded col-md-3" >Kembali </button>
                        </a>
                    </div>
                </div>
                <div class="row">

                <!-- awal form portofolio -->
                    <div class="col-md-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Form Input Data Program Kerja</h5>
                            </div>
                            <div>
                                <div class="ibox-content">
                                    <form action="<?=base_url('A_proker/insert_data_proker')?>" method="post" enctype="multipart/form-data">
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Nama Kegiatan</label>
                                                <div class="col-sm-10"><input type="text" class="form-control" name="nama_kegiatan" placeholder="Masukkan Nama Kegiatan.."></div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Tujuan Kegiatan</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="tujuan_kegiatan" placeholder="Tujuan Kegiatan" rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Sasaran Kegiatan</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="sasaran_kegiatan" placeholder="Sasaran Kegiatan" rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Waktu</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="waktu" placeholder="Waktu Pelaksanaan" rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Sumber Dana</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="sumber_dana" placeholder="Sumber Dana" rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom: 10px;" >
                                            <div class="form-group"><label class="col-sm-2 control-label">Status</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="status">
                                                        <option value="daftar">Daftar</option>
                                                        <option value="terlaksana">Terlaksana</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom: 10px;" >
                                            <div class="form-group"><label class="col-sm-2 control-label">Foto</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" name="userfile[]" multiple>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group"><label class="col-sm-2 control-label">Divisi</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="divisi">
                                                        <option value="kesekretariatan">Kesekretariatan</option>
                                                        <option value="ki">Kreatif & Inovatif</option>
                                                        <option value="pendidikan">Pendidikan</option>
                                                        <option value="humas">Hubungan Masyarakat</option>
                                                        <option value="keuangan">Keuangan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="pull-right">
                                                <button type="reset" class="btn btn-danger btn-rounded"> Reset </button>
                                                <button type="submit" class="btn btn-info btn-rounded"> Kirim </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- batas form  -->
                </div>