			<section class="page-header" style="margin-bottom: 0px">
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
							<h1>Portofolio</h1>
						</div>
					</div>
				</div>
			</section>
			<!-- Bagian isi  -->
				<section class="section section-primary section-primary-scale-2 section-center section-no-border mt-none p-sm" id="demos">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="nav nav-pills sort-source sort-source-style-2" data-sort-id="portfolio" data-option-key="filter" data-plugin-options='{"layoutMode": "fitRows", "filter": "*"}'>
									<li data-option-value="*" class="active"><a href="#">SEMUA</a></li>
									<li data-option-value=".classic"><a href="#">DESKTOP</a></li>
									<li data-option-value=".corporate"><a href="#">WEB</a></li>
									<li data-option-value=".one-page"><a href="#">DESAIN</a></li>
									<li data-option-value=".demo"><a href="#">LAINNYA</a></li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<div class="container">
				<div class="row">
				<?php for($i=0;$i<12;$i++){?>

					<div class="col-md-3" style="margin-top: 20px;">
						<span class="thumb-info thumb-info-hide-wrapper-bg">
							<span class="thumb-info-wrapper">
								<a href="portofolio-desain.html"> <img src="sets/img/projects/project-4.jpg" class="img-responsive" alt=""></a>
								<span class="thumb-info-title">
									<span class="thumb-info-inner" style="font-size: 15px;">Nama Projek Nama Projek Nama Projek</span>
									<span class="thumb-info-type">Nama Projek</span>
								</span>
							</span>
							<span class="thumb-info-caption">
								<span class="thumb-info-caption-text">Nama Pembuat : </span>
								<span class="thumb-info-caption-text">Jenis Pembuata : </span>
								<span class="thumb-info-caption-text">Tanggal Pembuatan : </span>
								<span class="thumb-info-social-icons">
									<a target="_blank" href="#" style="background-color: #0a628e"><i class="fa fa-facebook"></i><span>Facebook</span></a>
									<a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
									<a href="#" style="background-color: #c71603"><i class="fa fa-google-plus"></i><span>Twitter</span></a>
								</span>
							</span>
						</span>
					</div>
				<?php if($i+1 % 4 ==0){?>
				</div>
				<div class="row" >
				<?php } 
				}?>
				</div>
				<div style="margin-left: 500px;margin-top: 40px" >
					<a href="#">Lihat Selengkapnya...</a>
				</div>
			</div>
			<!-- batas sejarah -->	