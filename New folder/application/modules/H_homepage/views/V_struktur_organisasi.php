<section id="about-us">
<div class="container">
			<!-- our-team -->
			<div class="team">
				<div class="center wow fadeInDown">
					<div id="sejarah">
						<h2>TRIMAHATIKA</h2>
						<h3><ol type="1">
							<li> Kami mahasiswa Teknik Informatika menjunjung tinggi nilai moral dan nilai-nilai persaudaraan</li>
							<li> Kami mahasiswa Teknik Informatika selalu tekun dan bekerja keras</li> 
							<li> Kami mahasiswa Teknik Informatika bertanggung jawab atas kemajuan jurusan Teknik Informatika</li>
						</ol></h3>
					</div>
				</div>
				<div class="center wow fadeInDown">
					<div id="struktur-organisasi">
						<h2>Struktur Organisasi Exomatik Study Club</h2>
						<h2>Periode 2016/2017</h2>	
					</div>
				</div>
				<div class="row team-bar">
					<div class="first-one-arrow hidden-xs">
						<hr>
					</div>
					<div class="first-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
				</div> <!--skill_border-->
				<div class="row clearfix">
					<center>
						<h4>Dewan Pertimbangan Organisasi</h4><br>
					</center>

					<?php for($i=0;$i<count($dpo);$i++){ if($dpo[$i]->jabatan == "ketua"){?>
					<div class="col-md-4 col-sm-6 col-md-offset-2">	
						<div class="single-profile-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="col-md-6">
									<img class="media-object img-responsive img-rounded" src="<?=base_url()?>gambar_struktur/<?=$dpo[$i]->foto?>" alt="">
								</div>

								<div class="media-body col-md-6">
									<h4><?=$dpo[$i]->nama?></h4>
									<h5>Ketua DPO</h5>
									<h5><b>Angkatan : </b> <?=$dpo[$i]->angkatan?> </h5>
									<h5><b>Jurusan : </b> <?=$dpo[$i]->jurusan?> </h5> 
								</div>
							</div><!--/.media -->
							<p><?=$dpo[$i]->keterangan?></p>
						</div>
					</div>		
					<?php break;}}?>

					<?php for($i=0;$i<count($dpo);$i++){ if($dpo[$i]->jabatan == "sekretaris"){?>
					<div class="col-md-4 col-sm-6">	
						<div class="single-profile-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="col-md-6">
									<img class="media-object img-responsive img-rounded" src="<?=base_url()?>gambar_struktur/<?=$dpo[$i]->foto?>" alt="">
								</div>

								<div class="media-body col-md-6">
									<h4><?=$dpo[$i]->nama?></h4>
									<h5>Sekretaris DPO</h5>
									<h5><b>Angkatan : </b><?=$dpo[$i]->angkatan?></h5>
									<h5><b>Jurusan : </b> <?=$dpo[$i]->jurusan?> </h5> 
								</div>
							</div><!--/.media -->
							<p><?=$dpo[$i]->keterangan?></p>
						</div>
					</div>	
					<?php break; }}?>





				</div> <!--/.row -->

			    <div class="row team-bar">
				
					<hr>
				
				</div> <!--skill_border-->

				<div class="row clearfix">   
				<?php for($i=0;$i<count($dpo);$i++){ if($dpo[$i]->jabatan == "anggota1"){?>
					<div class="col-md-4 col-sm-6">	
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="col-md-6">
									<img class="media-object img-responsive img-rounded" src="<?=base_url()?>gambar_struktur/<?=$dpo[$i]->foto?>" alt="">
								</div>

								<div class="media-body col-md-6">
									<h4><?=$dpo[$i]->nama?></h4>
									<h5>Anggota I</h5>
									<h5><b>Angkatan : </b> <?=$dpo[$i]->angkatan?> </h5>
									<h5><b>Jurusan : </b> <?=$dpo[$i]->jurusan?> </h5> 
									
								</div>
							</div><!--/.media -->
							<p><?=$dpo[$i]->keterangan?>.</p>
						</div>
					</div>
				<?php break;}}?>

					<?php for($i=0;$i<count($dpo);$i++){ if($dpo[$i]->jabatan == "anggota2"){?>
					<div class="col-md-4 col-sm-6">
						<div class="single-profile-bottom wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="col-md-6">
									<img class="media-object img-responsive img-rounded" src="<?=base_url()?>gambar_struktur/<?=$dpo[$i]->foto?>" alt="">
								</div>

								<div class="media-body col-md-6">
									<h4><?=$dpo[$i]->nama?></h4>
									<h5>Anggota II</h5>
									<h5><b>Angkatan : </b> <?=$dpo[$i]->angkatan?> </h5>
									<h5><b>Jurusan : </b> <?=$dpo[$i]->jurusan?> </h5> 
									
								</div>
							</div><!--/.media -->
							<p><?=$dpo[$i]->keterangan?>.</p>
						</div>
					</div>
					<?php break;}}?>

					<?php for($i=0;$i<count($dpo);$i++){ if($dpo[$i]->jabatan == "anggota3"){?>
					<div class="col-md-4 col-sm-6">
						<div class="single-profile-bottom wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="col-md-6">
									<img class="media-object img-responsive img-rounded" src="<?=base_url()?>gambar_struktur/<?=$dpo[$i]->foto?>" alt="">
								</div>

								<div class="media-body col-md-6">
									<h4><?=$dpo[$i]->nama?></h4>
									<h5>Anggota III</h5>
									<h5><b>Angkatan : </b> <?=$dpo[$i]->angkatan?> </h5>
									<h5><b>Jurusan : </b> <?=$dpo[$i]->jurusan?> </h5> 
									
								</div>
							</div><!--/.media -->
							<p><?=$dpo[$i]->keterangan?>.</p>
						</div>
					</div>
					<?php break;}}?>
				</div>	<!--/.row-->
				<div class="row team-bar">
					<div class="first-one-arrow hidden-xs">
						<hr>
					</div>
					<div class="first-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
				</div> <!--skill_border-->
				<div class="row clearfix">
					<center>
						<h4>Badan Pengurus Organisasi</h4><br>
					</center>
					<?php for($i=0;$i<count($bpo);$i++){ if($bpo[$i]->jabatan == "ketua"){?>
					<div class="col-md-4 col-sm-6 col-md-offset-4">	
						<div class="single-profile-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="col-md-6">
									<img class="media-object img-responsive img-rounded" src="<?=base_url()?>gambar_struktur/<?=$bpo[$i]->foto?>" alt="">
								</div>

								<div class="media-body col-md-6">
									<h4><?=$bpo[$i]->nama?></h4>
									<h5>Ketua BPO</h5>
									<h5><b>Angkatan : </b> <?=$bpo[$i]->angkatan?> </h5>
									<h5><b>Jurusan : </b> <?=$bpo[$i]->jurusan?> </h5> 
								</div>
							</div><!--/.media -->
							<p><?=$bpo[$i]->keterangan?>.</p>
						</div>
					</div>			
					<?php break;}}?>
				</div> <!--/.row -->
				 <div class="row team-bar">
				
					<hr>
				
				</div> <!--skill_border-->
				<div class="row clearfix">   
				<?php for($i=0;$i<count($bpo);$i++){ if($bpo[$i]->jabatan == "sekretaris"){?>
					<div class="col-md-4 col-sm-2 col-md-offset-2">	
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="col-md-6">
									<img class="media-object img-responsive img-rounded" src="<?=base_url()?>gambar_struktur/<?=$bpo[$i]->foto?>" alt="">
								</div>

								<div class="media-body col-md-6">
									<h4><?=$bpo[$i]->nama?></h4>
									<h5>Sekretaris BPO</h5>
									<h5><b>Angkatan : </b> <?=$bpo[$i]->angkatan?> </h5>
									<h5><b>Jurusan : </b> <?=$bpo[$i]->jurusan?> </h5> 
								</div>
							</div><!--/.media -->
							<p><?=$bpo[$i]->keterangan?>.</p>
						</div>
					</div>
				<?php break;}}?>

				<?php for($i=0;$i<count($bpo);$i++){ if($bpo[$i]->jabatan == "bendahara"){?>
					<div class="col-md-4 col-sm-2">
						<div class="single-profile-bottom wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="col-md-6">
									<img class="media-object img-responsive img-rounded" src="<?=base_url()?>gambar_struktur/<?=$bpo[$i]->foto?>" alt="">
								</div>
								<div class="media-body col-md-6">
									<h4><?=$bpo[$i]->nama?></h4>
									<h5>Bendahara BPO</h5>
									<h5><b>Angkatan : </b> <?=$bpo[$i]->angkatan?> </h5>
									<h5><b>Jurusan : </b> <?=$bpo[$i]->jurusan?></h5> 
								</div>
							</div><!--/.media -->
							<p><?=$bpo[$i]->keterangan?>.</p>
						</div>
					</div>
				<?php break;}}?>

				</div>	<!--/.row-->
				<div class="row team-bar">
					<div class="second-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
				</div> <!--skill_border-->
				<div class="row clearfix">
					<center>
						<h3>DEPARTEMEN KREATIF DAN INOVATIF</h3><br>
					</center>
					<div class="row clearfix">  
					
					<?php for($i=0;$i<count($departemen);$i++){ if($departemen[$i]->jabatan == "ketua" && $departemen[$i]->departemen=="ki"){?>
					<div class="col-md-4 col-sm-2 col-md-offset-2">	
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="col-md-6">
									<img class="media-object img-responsive img-rounded" src="<?=base_url()?>gambar_struktur/<?=$departemen[$i]->foto?>" alt="">
								</div>

								<div class="media-body col-md-6">
									<h4><?=$departemen[$i]->nama?></h4>
									<h5>Ketua Departemen </h5>
									<h5><b>Angkatan : </b> <?=$departemen[$i]->angkatan?> </h5>
									<h5><b>Jurusan : </b> <?=$departemen[$i]->jurusan?> </h5> 
								</div>
							</div><!--/.media -->
							<p><?=$departemen[$i]->keterangan?>.</p>
						</div>
					</div>
					<?php break;}}?>

					<?php for($i=0;$i<count($departemen);$i++){ if($departemen[$i]->jabatan == "sekretaris" && $departemen[$i]->departemen=="ki"){?>
					<div class="col-md-4 col-sm-2">
						<div class="single-profile-bottom wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="col-md-6">
									<img class="media-object img-responsive img-rounded" src="<?=base_url()?>gambar_struktur/<?=$departemen[$i]->foto?>" alt="">
								</div>
								<div class="media-body col-md-6">
									<h4><?=$departemen[$i]->nama?></h4>
									<h5>Sekretaris Departemen</h5>
									<h5><b>Angkatan : </b> <?=$departemen[$i]->angkatan?> </h5>
									<h5><b>Jurusan : </b> <?=$departemen[$i]->jurusan?> </h5> 
								</div>
							</div><!--/.media -->
							<p><?=$departemen[$i]->keterangan?>.</p>
						</div>
					</div>
					<?php break;}}?>

				</div>	<!--/.row-->
				<div class="row team-bar">
				
					<hr>
				</div>
				<div class="row clearfix">   
				<?php $x=0; for($i=0;$i<count($departemen);$i++){ if($departemen[$i]->jabatan == "anggota" && $departemen[$i]->departemen=="ki"){
					$x++;
				}}?> 	

				<?php $a=1;
				for($i=0;$i<count($departemen);$i++){ if($departemen[$i]->jabatan == "anggota" && $departemen[$i]->departemen=="ki"){
					if($a%3==1 && $a!=1){?>

					<div class="row team-bar">
				
					<hr>
					</div>
					<?php } ?>
					<div class="col-md-4 col-sm-6 <?php if($x<=2 && $a%3==1){echo "col-md-offset-2";}?>">	
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="col-md-6">
									<img class="media-object img-responsive img-rounded" src="<?=base_url()?>gambar_struktur/<?=$departemen[$i]->foto?>" alt="">
								</div>

								<div class="media-body col-md-6">
									<h4><?=$departemen[$i]->nama?></h4>
									<h5>Anggota Departemen</h5>
									<h5><b>Angkatan : </b> <?=$departemen[$i]->angkatan?> </h5>
									<h5><b>Jurusan : </b> <?=$departemen[$i]->jurusan?> </h5> 
								</div>
							</div><!--/.media -->
							<p><?=$departemen[$i]->keterangan?>.</p>
						</div>
					</div>
				<?php $a++; }}?>

				</div>	<!--/.row-->
				<div class="row team-bar">
					<div class="second-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
				</div> <!--skill_border-->
				<div class="row clearfix">
					<center>
						<h3>DEPARTEMEN KESEKRETARIATAN</h3><br>
					</center>
					<div class="row clearfix">   

				<?php for($i=0;$i<count($departemen);$i++){ if($departemen[$i]->jabatan == "ketua" && $departemen[$i]->departemen=="kesekretariatan"){?>
					<div class="col-md-4 col-sm-2 col-md-offset-2">	
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="col-md-6">
									<img class="media-object img-responsive img-rounded" src="<?=base_url()?>gambar_struktur/<?=$departemen[$i]->foto?>" alt="">
								</div>

								<div class="media-body col-md-6">
									<h4><?=$departemen[$i]->nama?></h4>
									<h5>Sekretaris Departemen</h5>
									<h5><b>Angkatan : </b> <?=$departemen[$i]->angkatan?> </h5>
									<h5><b>Jurusan : </b> <?=$departemen[$i]->jurusan?> </h5> 
								</div>
							</div><!--/.media -->
							<p><?=$departemen[$i]->keterangan?>.</p>
						</div>
					</div>
				<?php break;}}?>

				<?php for($i=0;$i<count($departemen);$i++){ if($departemen[$i]->jabatan == "sekretaris" && $departemen[$i]->departemen=="kesekretariatan"){?>
					<div class="col-md-4 col-sm-2">
						<div class="single-profile-bottom wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="col-md-6">
									<img class="media-object img-responsive img-rounded" src="<?=base_url()?>gambar_struktur/<?=$departemen[$i]->foto?>" alt="">
								</div>
								<div class="media-body col-md-6">
									<h4><?=$departemen[$i]->nama?></h4>
									<h5>Sekretaris Departemen</h5>
									<h5><b>Angkatan : </b> <?=$departemen[$i]->angkatan?> </h5>
									<h5><b>Jurusan : </b> <?=$departemen[$i]->jurusan?> </h5> 
								</div>
							</div><!--/.media -->
							<p><?=$departemen[$i]->keterangan?>.</p>
						</div>
					</div>		
				<?php break;}}?>	
				</div> <!--/.row -->
				<div class="row team-bar">	
					<hr>
				</div>
				<div class="row clearfix">   
				<?php $x=0; for($i=0;$i<count($departemen);$i++){ if($departemen[$i]->jabatan == "anggota" && $departemen[$i]->departemen=="kesekretariatan"){
					$x++;
				}}?> 
				<?php $a=1;
				for($i=0;$i<count($departemen);$i++){ if($departemen[$i]->jabatan == "anggota" && $departemen[$i]->departemen=="kesekretariatan"){
					if($a%3==1 && $a!=1){?>

					<div class="row team-bar">
				
					<hr>
					</div>
					<?php } ?>
					<div class="col-md-4 col-sm-6 <?php if($x<=2 && $a%3==1){echo "col-md-offset-2";}?>">	
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="col-md-6">
									<img class="media-object img-responsive img-rounded" src="<?=base_url()?>gambar_struktur/<?=$departemen[$i]->foto?>" alt="">
								</div>

								<div class="media-body col-md-6">
									<h4><?=$departemen[$i]->nama?></h4>
									<h5>Anggota Departemen</h5>
									<h5><b>Angkatan : </b> <?=$departemen[$i]->angkatan?> </h5>
									<h5><b>Jurusan : </b> <?=$departemen[$i]->jurusan?> </h5> 
								</div>
							</div><!--/.media -->
							<p><?=$departemen[$i]->keterangan?>.</p>
						</div>
					</div>
				<?php $a++; }}?>

				</div>	<!--/.row-->
				<div class="row team-bar">
					<div class="second-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
				</div> <!--skill_border-->
				<div class="row clearfix">
					<center>
						<h3>DEPARTEMEN HUMAS</h3><br>
					</center>
					<div class="row clearfix"> 

				<?php for($i=0;$i<count($departemen);$i++){ if($departemen[$i]->jabatan == "ketua" && $departemen[$i]->departemen=="humas"){?>
					<div class="col-md-4 col-sm-2 col-md-offset-2">
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="col-md-6">
									<img class="media-object img-responsive img-rounded" src="<?=base_url()?>gambar_struktur/<?=$departemen[$i]->foto?>" alt="">
								</div>

								<div class="media-body col-md-6">
									<h4><?=$departemen[$i]->nama?></h4>
									<h5>Sekretaris Departemen</h5>
									<h5><b>Angkatan : </b> <?=$departemen[$i]->angkatan?> </h5>
									<h5><b>Jurusan : </b> <?=$departemen[$i]->jurusan?> </h5> 
								</div>
							</div><!--/.media -->
							<p><?=$departemen[$i]->keterangan?>.</p>
						</div>
					</div>
					<?php break;}}?>

				<?php for($i=0;$i<count($departemen);$i++){ if($departemen[$i]->jabatan == "sekretaris" && $departemen[$i]->departemen=="humas"){?>
					<div class="col-md-4 col-sm-2">
						<div class="single-profile-bottom wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="col-md-6">
									<img class="media-object img-responsive img-rounded" src="<?=base_url()?>gambar_struktur/<?=$departemen[$i]->foto?>" alt="">
								</div>
								<div class="media-body col-md-6">
									<h4><?=$departemen[$i]->nama?></h4>
									<h5>Sekretaris Departemen</h5>
									<h5><b>Angkatan : </b> <?=$departemen[$i]->angkatan?> </h5>
									<h5><b>Jurusan : </b> <?=$departemen[$i]->jurusan?> </h5> 
								</div>
							</div><!--/.media -->
							<p><?=$departemen[$i]->keterangan?>.</p>
						</div>
					</div>		
				<?php break;}}?>
				</div> <!--/.row -->
				<div class="row team-bar">
				
					<hr>
				</div>
				<div class="row clearfix">   

				<?php $x=0; for($i=0;$i<count($departemen);$i++){ if($departemen[$i]->jabatan == "anggota" && $departemen[$i]->departemen=="humas"){
					$x++;
				}}?> 
				<?php $a=1;
				for($i=0;$i<count($departemen);$i++){ if($departemen[$i]->jabatan == "anggota" && $departemen[$i]->departemen=="humas"){
					if($a%3==1 && $a!=1){?>

					<div class="row team-bar">
				
					<hr>
					</div>
					<?php } ?>
					<div class="col-md-4 col-sm-6 <?php if($x<=2 && $a%3==1){echo "col-md-offset-2";}?>">	
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="col-md-6">
									<img class="media-object img-responsive img-rounded" src="<?=base_url()?>gambar_struktur/<?=$departemen[$i]->foto?>" alt="">
								</div>

								<div class="media-body col-md-6">
									<h4><?=$departemen[$i]->nama?></h4>
									<h5>Anggota Departemen</h5>
									<h5><b>Angkatan : </b> <?=$departemen[$i]->angkatan?> </h5>
									<h5><b>Jurusan : </b> <?=$departemen[$i]->jurusan?> </h5> 
								</div>
							</div><!--/.media -->
							<p><?=$departemen[$i]->keterangan?>.</p>
						</div>
					</div>
				<?php $a++; }}?>

				</div>	<!--/.row-->
				<div class="row team-bar">
					<div class="second-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
				</div> <!--skill_border-->
				<div class="row clearfix">
					<center>
						<h3>DEPARTEMEN KEUANGAN</h3><br>
					</center>
					<div class="row clearfix">   

					<?php for($i=0;$i<count($departemen);$i++){ if($departemen[$i]->jabatan == "ketua" && $departemen[$i]->departemen=="keuangan"){?>	
					<div class="col-md-4 col-sm-2 col-md-offset-2">
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="col-md-6">
									<img class="media-object img-responsive img-rounded" src="<?=base_url()?>gambar_struktur/<?=$departemen[$i]->foto?>" alt="">
								</div>

								<div class="media-body col-md-6">
									<h4><?=$departemen[$i]->nama?></h4>
									<h5>Sekretaris Departemen</h5>
									<h5><b>Angkatan : </b> <?=$departemen[$i]->angkatan?> </h5>
									<h5><b>Jurusan : </b> <?=$departemen[$i]->jurusan?> </h5> 
								</div>
							</div><!--/.media -->
							<p><?=$departemen[$i]->keterangan?>.</p>
						</div>
					</div>
					<?php break;}}?>

					<?php for($i=0;$i<count($departemen);$i++){ if($departemen[$i]->jabatan == "sekretaris" && $departemen[$i]->departemen=="keuangan"){?>	
					<div class="col-md-4 col-sm-2">
						<div class="single-profile-bottom wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="col-md-6">
									<img class="media-object img-responsive img-rounded" src="<?=base_url()?>gambar_struktur/<?=$departemen[$i]->foto?>" alt="">
								</div>
								<div class="media-body col-md-6">
									<h4><?=$departemen[$i]->nama?></h4>
									<h5>Sekretaris Departemen</h5>
									<h5><b>Angkatan : </b> <?=$departemen[$i]->angkatan?> </h5>
									<h5><b>Jurusan : </b> <?=$departemen[$i]->jurusan?> </h5> 
								</div>
							</div><!--/.media -->
							<p><?=$departemen[$i]->keterangan?>.</p>
						</div>
					</div>		
					<?php break;}}?>

				</div> <!--/.row -->
				<div class="row team-bar">
				
					<hr>
				</div>
				<div class="row clearfix">  
				<?php $x=0; for($i=0;$i<count($departemen);$i++){ if($departemen[$i]->jabatan == "anggota" && $departemen[$i]->departemen=="keuangan"){
					$x++;
				}}?>  
				<?php $a=1;
				for($i=0;$i<count($departemen);$i++){ if($departemen[$i]->jabatan == "anggota" && $departemen[$i]->departemen=="keuangan"){
					if($a%3==1 && $a!=1){?>

					<div class="row team-bar">
				
					<hr>
					</div>
					<?php } ?>
					<div class="col-md-4 col-sm-6 <?php if($x<=2 && $a%3==1){echo "col-md-offset-2";}?>">	
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="col-md-6">
									<img class="media-object img-responsive img-rounded" src="<?=base_url()?>gambar_struktur/<?=$departemen[$i]->foto?>" alt="">
								</div>

								<div class="media-body col-md-6">
									<h4><?=$departemen[$i]->nama?></h4>
									<h5>Anggota Departemen</h5>
									<h5><b>Angkatan : </b> <?=$departemen[$i]->angkatan?> </h5>
									<h5><b>Jurusan : </b> <?=$departemen[$i]->jurusan?> </h5> 
								</div>
							</div><!--/.media -->
							<p><?=$departemen[$i]->keterangan?>.</p>
						</div>
					</div>
				<?php $a++; }}?>

				</div>	<!--/.row-->
				<div class="row team-bar">
					<div class="second-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
				</div> <!--skill_border-->
				<div class="row clearfix">
					<center>
						<h3>DEPARTEMEN PENDIDIKAN</h3><br>
					</center>
					<div class="row clearfix">  

				<?php for($i=0;$i<count($departemen);$i++){ if($departemen[$i]->jabatan == "ketua" && $departemen[$i]->departemen=="pendidikan"){?>	 	
					<div class="col-md-4 col-sm-2 col-md-offset-2">
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="col-md-6">
									<img class="media-object img-responsive img-rounded" src="<?=base_url()?>gambar_struktur/<?=$departemen[$i]->foto?>" alt="">
								</div>

								<div class="media-body col-md-6">
									<h4><?=$departemen[$i]->nama?></h4>
									<h5>Ketua Departemen</h5>
									<h5><b>Angkatan : </b> <?=$departemen[$i]->angkatan?> </h5>
									<h5><b>Jurusan : </b> <?=$departemen[$i]->jurusan?> </h5> 
								</div>
							</div><!--/.media -->
							<p><?=$departemen[$i]->keterangan?>.</p>
						</div>
					</div>
				<?php break;}}?>

				<?php for($i=0;$i<count($departemen);$i++){ if($departemen[$i]->jabatan == "sekretaris" && $departemen[$i]->departemen=="pendidikan"){?>
					<div class="col-md-4 col-sm-2 ">
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="col-md-6">
									<img class="media-object img-responsive img-rounded" src="<?=base_url()?>gambar_struktur/<?=$departemen[$i]->foto?>" alt="">
								</div>

								<div class="media-body col-md-6">
									<h4><?=$departemen[$i]->nama?></h4>
									<h5>Sekretaris Departemen</h5>
									<h5><b>Angkatan : </b> <?=$departemen[$i]->angkatan?> </h5>
									<h5><b>Jurusan : </b> <?=$departemen[$i]->jurusan?> </h5> 
								</div>
							</div><!--/.media -->
							<p><?=$departemen[$i]->keterangan?>.</p>
						</div>
					</div>
				<?php break;}}?>
						
				</div> <!--/.row -->
				<div class="row team-bar">
				
					<hr>
				</div>
				<div class="row clearfix">  
				<?php $x=0; for($i=0;$i<count($departemen);$i++){ if($departemen[$i]->jabatan == "anggota" && $departemen[$i]->departemen=="pendidikan"){
					$x++;
				}}?>   
				<?php $a=1;
				for($i=0;$i<count($departemen);$i++){ if($departemen[$i]->jabatan == "anggota" && $departemen[$i]->departemen=="pendidikan"){
					if($a%3==1 && $a!=1){?>

					<div class="row team-bar">
				
					<hr>
					</div>
					<?php } ?>
					<div class="col-md-4 col-sm-6 <?php if($x<=2 && $a%3==1){echo "col-md-offset-2";}?>">	
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="col-md-6">
									<img class="media-object img-responsive img-rounded" src="<?=base_url()?>gambar_struktur/<?=$departemen[$i]->foto?>" alt="">
								</div>

								<div class="media-body col-md-6">
									<h4><?=$departemen[$i]->nama?></h4>
									<h5>Anggota Departemen</h5>
									<h5><b>Angkatan : </b> <?=$departemen[$i]->angkatan?> </h5>
									<h5><b>Jurusan : </b> <?=$departemen[$i]->jurusan?> </h5> 
								</div>
							</div><!--/.media -->
							<p><?=$departemen[$i]->keterangan?>.</p>
						</div>
					</div>
				<?php $a++; }}?>

				</div>	<!--/.row-->

			</div><!--section-->
		</div><!--/.container-->
    </section><!--/about-us-->