			<!-- Batas Header -->	
			<section class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="breadcrumb">
								<li><a href="portofolio.html">Home</a></li>
								<li class="active">Desain</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h1>Portofolio</h1>
						</div>
					</div>
				</div>
			</section>
			<!-- Bagian isi  -->
			<div class="container">
			<div class="row" style="padding-top: 25px">
				<div class="lightbox" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}, "mainClass": "mfp-with-zoom", "zoom": {"enabled": true, "duration": 300}}'>
					<div class="owl-carousel owl-theme stage-margin" data-plugin-options='{"items": 3, "margin": 20, "loop": false, "nav": true, "dots": false, "stagePadding": 40}'>
						<?php for ($i=0; $i < count($data['gambar']); $i++) { ?>
						<div>
							<a class="img-thumbnail img-thumbnail-hover-icon mb-xs mr-xs" href="<?=$data['gambar'][$i]['nama_foto']?>" style="border: 0px">
								<img class="img-responsive" src="<?=$data['gambar'][$i]['nama_foto']?>" alt="Project Image">
							</a>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="row" style="padding-left: 35px">
				<div class="col-md-12">
					<h3 style="margin-bottom: 10px"><?=ucfirst($data['nama_portofolio'])?></h3>
					<span>Jenis Proyek : <?=$data['jenis_p']?></span> |
					<span>Nama Pembuat : </span> |
					<span>Tahun Pembuatan : <?=$data['tahun_p']?></span>
				</div>
				<div class="col-md-8">
					<span class="thumb-info-caption">
						<span class="thumb-info-caption-text">Keterangan : </span>
						<?=$data['penjelasan_p']?>
					</span>
					<div class="addthis_inline_share_toolbox"></div>
				</div>
				<div class="col-md-4">
					<aside class="sidebar">
						<h3 class="heading-primary" style="margin-left: -10px">Proyek Terkait</h3>
						<?php for ($i=0; $i < count($terkait); $i++) { ?>
						<div class="row warnah jarak">
							<div class="col-md-3" style="padding-top: 10px ;">
								<a href="#"><img class="img-responsive img-thumbnail mb-lg" src="<?=$terkait[$i]['foto_dp_p']?>" alt="Project Image">
							</div>
							<div class="col-md-9" style="margin-left: -15px">
								<a href="<?=$terkait[$i]['link']?>"><h4 class="heading-primary mb-none"><?=ucfirst($terkait[$i]['nama_portofolio'])?></h4></a>
							</div>
						</div>
						<?php } ?>
					</aside>		
				</div>
			</div>
			<hr class="tall">
			<h4 class="mb-md text-uppercase">Proyek <strong>Terbaru</strong></h4>
			<div class="row">
				<ul class="portfolio-list">
					<?php for ($i=0; $i < count($terbaru); $i++) { ?>
					<li class="col-md-3 col-sm-6 col-xs-12">
						<div class="portfolio-item">
							<a href="<?=$terbaru[$i]['link']?>">
								<span class="thumb-info thumb-info-lighten">
									<span class="thumb-info-wrapper">
										<img src="<?=$terbaru[$i]['foto_dp_p']?>" class="img-responsive" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner"><?=ucfirst($terbaru[$i]['nama_portofolio'])?></span>
											<span class="thumb-info-type"><?=ucfirst($terbaru[$i]['jenis_p'])?></span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
										</span>
									</span>
								</span>
							</a>
						</div>
					</li>
					<?php } ?>
				</ul>
			</div>
            <div class="fb-comments" data-href="<?=base_url().'portofolio/'.$this->uri->segment(2).'/'.$this->uri->segment(3)?>" data-width="700" data-numposts="20"></div>
		</div>
	<div>
			<!-- batas sejarah -->	