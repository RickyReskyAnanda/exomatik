
			<div class="container">
				<div class="row">
					<div class="recent-posts mb-xl">
						<center><h2><b>FORMULIR PENDAFTARAN</b></h2></center>
                        <form action="<?=base_url('H_pendaftaran/update_data_pendaftaran')?>" method="post" enctype="multipart/form-data">
                        	<input type="hidden" name="id_pendaftaran" value="<?=$profil['id_pendaftaran']?>">
                        	<input type="hidden" name="gambar_lama" value="<?=$profil['foto_profil']?>">
							<div class="form-group">
								<label class="col-md-3 control-label">Nama Lengkap</label>
								<div class="col-md-7">
									<input type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan Nama Lengkap Anda" value="<?=ucfirst($profil['nama_lengkap'])?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Nama Panggilan</label>
								<div class="col-md-7">
									<input type="text" class="form-control" name="nama_panggilan" placeholder="Masukkan Nama Panggilan Anda" value="<?=ucfirst($profil['nama_panggilan'])?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Tempat Tanggal Lahir</label>
								<div class="col-md-3">
									<input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat lahir" value="<?=ucfirst($profil['tempat_lahir'])?>" required>
								</div>
								<div class="col-md-1">
									<input type="text" class="form-control" name="tgl" value="<?=ucfirst($profil['tgl'])?>" placeholder="00" required>
								</div>
								<div class="col-md-2">
									<select class="form-control" name="bulan" required>
										<option value="01" <?php if($profil['bln']=='01')echo 'selected'?>>Januari</option>
										<option value="02" <?php if($profil['bln']=='02')echo 'selected'?>>Februari</option>
										<option value="03" <?php if($profil['bln']=='03')echo 'selected'?>>Maret</option>
										<option value="04" <?php if($profil['bln']=='04')echo 'selected'?>>April</option>
										<option value="05" <?php if($profil['bln']=='05')echo 'selected'?>>Mei</option>
										<option value="06" <?php if($profil['bln']=='06')echo 'selected'?>>Juni</option>
										<option value="07" <?php if($profil['bln']=='07')echo 'selected'?>>Juli</option>
										<option value="08" <?php if($profil['bln']=='08')echo 'selected'?>>Agustus</option>
										<option value="09" <?php if($profil['bln']=='09')echo 'selected'?>>September</option>
										<option value="10" <?php if($profil['bln']=='10')echo 'selected'?>>Oktober</option>
										<option value="11" <?php if($profil['bln']=='11')echo 'selected'?>>November</option>
										<option value="12" <?php if($profil['bln']=='12')echo 'selected'?>>Desember</option>
									</select>
								</div>
								<div class="col-md-1">
									<input type="text" class="form-control" name="tahun" placeholder="Tahun" value="<?=ucfirst($profil['thn'])?>"  required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Jenis Kelamin</label>
								<div class="col-md-3">
									<input type="radio"  value="laki-laki" name="jk" <?php if($profil['jk']=='laki-laki')echo "checked";?>> Laki-Laki
								</div>
								<div class="col-md-3" style="margin-left: -150px" >
									<input type="radio"  value="perempuan" <?php if($profil['jk']=='perempuan')echo "checked";?> name="jk"> Perempuan
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Alamat</label>
								<div class="col-md-7">
									<textarea class="form-control" rows="3" name="alamat" placeholder="Alamat" required><?=ucfirst($profil['alamat'])?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Jurusan</label>
								<div class="col-md-7">
									<select class="form-control" name="jurusan" required>
										<option value="Teknik Informatika" <?php if($profil['jurusan']=='Teknik Informatika')echo "selected";?>>Teknik Informatika</option> 
										<option value="Sistem Informasi" <?php if($profil['jurusan']=='Sistem Informasi')echo "selected";?>>Sistem Informasi</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Angkatan</label>
								<div class="col-md-7">
									<input type="number" class="form-control" name="angkatan" value="<?=$profil['angkatan']?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Agama</label>
								<div class="col-md-7">
									<input type="text" class="form-control" name="agama" placeholder="Agama" value="<?=ucfirst($profil['agama'])?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Cita-Cita</label>
								<div class="col-md-7">
									<input type="text" class="form-control" name="citacita" placeholder="Cita-Cita" value="<?=ucfirst($profil['citacita'])?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Hobi</label>
								<div class="col-md-7">
									<input type="text" class="form-control" name="hobi" value="<?=ucfirst($profil['hobi'])?>" placeholder="Hobi" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">No. Hp</label>
								<div class="col-md-7">
									<input type="text" class="form-control" name="no_hp" placeholder="No. Handphone" value="<?=ucfirst($profil['no_hp'])?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">E-Mail Anda</label>
								<div class="col-md-7">
									<input type="email" class="form-control" name="email" value="<?=ucfirst($profil['email'])?>" placeholder="Masukkan E-mail Anda" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label" for="textareaDefault">Foto 3 X 4</label>
								<div class="col-md-3">
									<input type="file" class="form-control" name="foto">
									<i class="fa fa-warning"></i> Input jika ingin mengganti foto
								</div>
								<div class="col-md-4">
									<img alt="" height="300" class="img-responsive img-thumbnail" src="<?=base_url().'image/gambar_pendaftar/'.$profil['foto_profil'];?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label" for="textareaDefault">Pengalaman Organisasi</label>
								<div class="col-md-7">
									<textarea class="form-control" rows="3" name="po" placeholder="Pengalaman Organisasi" required><?=ucfirst($profil['po'])?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label" for="textareaDefault">Alasan Masuk Exomatik</label>
								<div class="col-md-7">
									<textarea class="form-control" rows="3" name="alasan" placeholder="Alasan Masuk Exomatik" required><?=ucfirst($profil['agama'])?></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-4 pull-right">
									<button style="margin-right: 10px"  type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset</button>
									<button  type="submit" class="btn btn-primary" ><i class="fa fa-rocket" ></i> Simpan</button>												
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- batas isi -->	