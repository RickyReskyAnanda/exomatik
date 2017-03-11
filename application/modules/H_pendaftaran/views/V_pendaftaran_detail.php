			<section class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="breadcrumb">
								<li><a href="portofolio.html">Home</a></li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h1>Formulir Pendaftaran</h1>
						</div>
					</div>
				</div>
			</section>
			<!-- Bagian isi  -->
			<div class="container">
				<div class="row">
				<?php if($this->session->flashdata('pesan_bio')!=''){ ?>
					<div class="col-md-12">
						<div class="alert alert-success alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                <i class="fa fa-check"></i><?=$this->session->flashdata('pesan_bio');?>
                            </div>
					</div>
					<?php } ?>
					<div class="col-md-3">
						<div>
							<span class="img-thumbnail">
								<img alt="" height="300" class="img-responsive" src="<?=base_url().'image/gambar_pendaftar/'.$profil['foto_profil'];?>">
							</span>
						</div>
					</div>
					<div class="col-md-9">
						<table class="table table-striped">
							<thead>
							<tr>
								<td>Nama Lengkap</td>
								<td>:</td>
								<td><?=ucfirst($profil['nama_lengkap'])?></td>
							</tr>
							<tr>
								<td>Nama Panggilan</td>
								<td>:</td>
								<td><?=ucfirst($profil['nama_panggilan'])?></td>
							</tr>
							<tr>
								<td>Tempat Tanggal Lahir
								<td>:</td>
								<td><?=ucfirst($profil['tempat_lahir']).', '.date_format(date_create($profil['tanggal_lahir']), "d M Y");?></td>
							</tr>
							<tr>
								<td>Jenis Kelamin</td>
								<td>:</td>
								<td><?=ucfirst($profil['jk'])?></td>
							</tr>
							<tr>
								<td>Alamat</td>
								<td>:</td>
								<td><?=ucfirst($profil['alamat'])?></td>
							</tr>
							<tr>
								<td>Jurusan</td>
								<td>:</td>
								<td><?=ucfirst($profil['jurusan'])?></td>
							</tr>
							<tr>
								<td>Angkatan</td>
								<td>:</td>
								<td><?=$profil['angkatan']?></td>
							</tr>
							<tr>
								<td>Cita - Cita</td>
								<td>:</td>
								<td><?=ucfirst($profil['citacita'])?></td>
							</tr>
							<tr>
								<td>Hobby</td>
								<td>:</td>
								<td><?=ucfirst($profil['hobi'])?></td>
							</tr>
							<tr>
								<td>Agama</td>
								<td>:</td>
								<td><?=ucfirst($profil['agama'])?></td>
							</tr>
							<tr>
								<td>No. Hp</td>
								<td>:</td>
								<td><?=$profil['no_hp']?></td>
							</tr>
							<tr>
								<td>E-Mail</td>
								<td>:</td>
								<td><?=ucfirst($profil['email'])?></td>
							</tr>
							<tr>
								<td>Pengalaman Organisasi</td>
								<td>:</td>
								<td><?=ucfirst($profil['po'])?></td>
							</tr>
							<tr>
								<td>Alasan Masuk Exomatik</td>
								<td>:</td>
								<td><?=ucfirst($profil['alasan'])?></td>
							</tr>								
							</thead>
						</table>
						<div class="alert alert-warning"> <i class="fa fa-warning"></i>
							Klik "Edit" jika terjadi kesalahan dalam penginputan biodata !!
							<a class="alert-link" href="<?=base_url().'pendaftaran/edit/'.$profil['id_pendaftaran']?>">Edit</a>
						</div>
					</div>
				</div>
			</div>
			<!-- batas isi -->	
			