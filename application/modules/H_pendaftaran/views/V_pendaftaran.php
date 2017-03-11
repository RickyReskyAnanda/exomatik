			<div class="container">
				<div class="row">
					<div class="recent-posts mb-xl">
						<center><h2><b>FORMULIR PENDAFTARAN</b></h2></center>
                        <form action="<?=base_url('H_pendaftaran/insert_data_pendaftaran')?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label class="col-sm-3 control-label">Nama Lengkap</label>
								<div class="col-sm-7">
									<input type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan Nama Lengkap Anda" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Nama Panggilan</label>
								<div class="col-sm-7">
									<input type="text" class="form-control" name="nama_panggilan" placeholder="Masukkan Nama Panggilan Anda" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat lahir" required>
								</div>
								<div class="col-sm-1" style="margin-bottom: 3px;">
									<input type="text" class="form-control" name="tgl" placeholder="00" required>
								</div>
								<div class="col-sm-2" style="margin-bottom: 3px;">
									<select class="form-control" name="bulan" required>
										<option value="01">Januari</option>
										<option value="02">Februari</option>
										<option value="03">Maret</option>
										<option value="04">April</option>
										<option value="05">Mei</option>
										<option value="06">Juni</option>
										<option value="07">Juli</option>
										<option value="08">Agustus</option>
										<option value="09">September</option>
										<option value="10">Oktober</option>
										<option value="11">November</option>
										<option value="12">Desember</option>
									</select>
								</div>
								<div class="col-sm-1" style="margin-bottom: 3px;">
									<input type="text" class="form-control" name="tahun" placeholder="Tahun" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Jenis Kelamin</label>
								<div class="col-sm-7">
									<input type="radio"  value="laki-laki" name="jk" checked> Laki-Laki
								
									<input type="radio"  value="perempuan" name="jk"> Perempuan
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Alamat</label>
								<div class="col-sm-7">
									<textarea class="form-control" rows="3" name="alamat" placeholder="Alamat" required></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Jurusan</label>
								<div class="col-sm-7">
									<select class="form-control" name="jurusan" required>
										<option value="Teknik Informatika">Teknik Informatika</option> 
										<option value="Sistem Informasi">Sistem Informasi</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Angkatan</label>
								<div class="col-sm-7">
									<input type="number" class="form-control" name="angkatan" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Agama</label>
								<div class="col-sm-7">
									<input type="text" class="form-control" name="agama" placeholder="Agama" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Cita-Cita</label>
								<div class="col-sm-7">
									<input type="text" class="form-control" name="citacita" placeholder="Cita-Cita" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Hobi</label>
								<div class="col-sm-7">
									<input type="text" class="form-control" name="hobi" placeholder="Hobi" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">No. Hp</label>
								<div class="col-sm-7">
									<input type="text" class="form-control" name="no_hp" placeholder="No. Handphone" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">E-Mail Anda</label>
								<div class="col-sm-7">
									<input type="email" class="form-control" name="email" placeholder="Masukkan E-mail Anda" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="textareaDefault">Foto 3 X 4</label>
								<div class="col-sm-7">
									<input type="file" class="form-control" name="foto" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="textareaDefault">Pengalaman Organisasi</label>
								<div class="col-sm-7">
									<textarea class="form-control" rows="3" name="po" placeholder="Pengalaman Organisasi" required></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="textareaDefault">Alasan Masuk Exomatik</label>
								<div class="col-sm-7">
									<textarea class="form-control" rows="3" name="alasan" placeholder="Alasan Masuk Exomatik" required></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-4 pull-right">
									<button style="margin-right: 10px"  type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset</button>
									<button  type="submit" class="btn btn-primary" ><i class="fa fa-rocket" ></i> Simpan</button>												
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- batas isi -->	