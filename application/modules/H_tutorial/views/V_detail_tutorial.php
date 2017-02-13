			<!-- awal  -->	
			<section class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="breadcrumb">
								<li><a href="tutorial.html">Home</a></li>
								<li><a href="tutorial-kategori.html">Kategori</a></li>
								<li><a href="tutorial-kategori-destopprogramming.html">Destop Programming</a></li>
								<li class="active">Tutorial</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h1>Tutorial</h1>
						</div>
					</div>
				</div>
			</section>
			<!-- batas -->
			<!-- Bagian isi tutorial -->
			<div class="container" style="margin-top: 10px">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-12">
								<div class="post-content">
									<h2><a href=""><?=$data['judul_tutorial']?></a></h2>
										<div class="post-meta">
											<span><i class="fa fa-user"></i> By <a href="#"><?=$data['nama_lengkap']?></a> </span>
											<span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
											<span><i class="fa fa-eye"></i> <a href="#"><?=$data['viewers_tutorial']?></a> </span>
											<span><i class="fa fa-thumbs-up"></i> <a href="#"><?=$data['likers_tutorial']?> </a></span>
										</div>
										<img class="img-responsive img-thumbnail" src="<?=base_url()?>image/gambar_tutorial/<?=$data['gambar_tutorial']?>" style=" margin-bottom:20px;margin-top: 5px"/>

											<?=$data['isi_tutorial']?>
									<span class="thumb-info-social-icons" style="border-top: 0px">
										<a target="_blank" href="#" style="background-color: #0a628e"><i class="fa fa-facebook"></i><span>Facebook</span></a>
										<a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
										<a href="#" style="background-color: #c71603"><i class="fa fa-google-plus"></i><span>Twitter</span></a>
									</span>
								</div>
								<div class="divider divider-style-2 divider-icon-sm taller">
									<i class="fa fa-chevron-down"></i>
								</div>
							</div>
						</div>
						<div class="row">
							<h2> Tutorial <strong>Terpopuler</strong></h2>
							<div class="lightbox" data-plugin-options='{"delegate": ".img-thumbnail", "type": "image", "gallery": {"enabled": true}, "mainClass": "mfp-with-zoom", "zoom": {"enabled": true, "duration": 300}}'>
							<div class="owl-carousel owl-theme stage-margin" data-plugin-options='{"items": 3, "margin": 20, "loop": false, "nav": true, "dots": false, "stagePadding": 40}'>
								<?php for ($p=0; $p < count($populer); $p++) { ?>
								<div>
									<a class="img-thumbnail img-thumbnail-hover-icon mb-xs mr-xs" href="<?=$populer[$p]['gambar_tutorial']?>" style="border: 0px">
										<img class="img-responsive" src="<?=$populer[$p]['gambar_thumb']?>" alt="Project Image">
									</a>
									<h6><a href="<?=$populer[$p]['link']?>"><?=$populer[$p]['judul_tutorial']?></a></h6>
									<div class="post-meta">
										<small>
											<span><i class="fa fa-user"></i> Oleh <?=$populer[$p]['nama_lengkap']?> </span>
										</small>
									</div>
								</div>
								<?php } ?>
							</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-12 ">
								<aside class="sidebar">
									<h3 class="heading-primary" style="margin-left: -10px;"><strong>Share</strong> This Tutorial</h3>
										<div class="row">
											<div class="col-md-12" style="margin-left: -8px">
												<span class="thumb-info-social-icons" style="border-top: 0px">
													<a target="_blank" href="#" style="background-color: #0a628e"><i class="fa fa-facebook"></i><span>Facebook</span></a>
													<a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
													<a href="#" style="background-color: #c71603"><i class="fa fa-google-plus"></i><span>Twitter</span></a>
												</span>
											</div>
										</div>
								</aside>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 ">
								<aside class="sidebar">
									<h3 class="heading-primary" style="margin-left: -10px; padding-top: 10px"><strong>Tutorial</strong> Terkait</h3>
										<?php for ($i=0; $i < count($terkait); $i++) { ?>
										<div class="row warnah jarak">
											<div class="col-md-3">
												<img class="img-responsive" src="<?=$terkait[$i]['gambar_thumb'];?>" alt="Project Image">
											</div>
											<div class="col-md-9">
												<h5 class="heading-primary mb-none"><?=$terkait[$i]['judul_tutorial']?></h5>
												<span>Oleh <?=$terkait[$i]['nama_lengkap']?> </span>
											</div>
										</div>
										<?php } ?>
								</aside>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<aside class="sidebar" style=>
									<h3 class="heading-primary" style="margin-left: -10px;padding-top: 10px"><strong>Kategori</strong> Tutorial</h3>
									<div class="row">
										<div class="col-md-12" style="margin-left: -15px">
											<ul class="nav nav-list">
												<?php for ($i=0; $i < count($kategori); $i++) { ?>
												<li><a href="<?=$kategori[$i]['link']?>"><?=$kategori[$i]['nama_kt']?></a></li>
												<?php } ?>
											</ul>
										</div>
									</div>
								</aside>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Batas isi -->
