			<!-- Bagian isi tutorial -->
			<section class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="breadcrumb">
								<li><a href="#">Home</a></li>
								<li><a href="#">Kategori</a></li>
								<li class="active">Web Programming</li>
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
			<!-- Batas tutoril -->
			<!-- bagian slider -->
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-12 ">
								<aside class="sidebar">
									<h4 class="heading-primary"><strong>Tutorial</strong> Terbaru</h4>
										<?php for ($i=0; $i < count($terbaru); $i++) { ?>
										<div class="row warnah jarak">
											<div class="col-md-3" style="padding-top: 10px ;margin-left: -8px">
												<img class="img-responsive img-thumbnail" src="<?=$terbaru[$i]['gambar_thumb']?>" alt="Project Image">
											</div>
											<div class="col-md-9" style="margin-left: -15px">
												<a href="<?=$terbaru[$i]['link']?>"><h5 class="heading-primary mb-none"><?=$terbaru[$i]['judul_tutorial']?></h5></a>
												<span>Oleh <a href="#" style="color: #000"><?=$terbaru[$i]['nama_lengkap']?></a> </span>
											</div>
										</div>
										<?php } ?>
								</aside>
							</div>
						</div>
						<?php if(count($populer)>0){?>
						<div class="row">
							<div class="col-md-12">
								<aside class="sidebar" style=>
									<h4 class="heading-primary"><strong>Tutorial</strong> Terpopuler</h4>
										<?php for ($i=0; $i < count($populer); $i++) { ?>
										<div class="row warnah jarak">
											<div class="col-md-3" style="padding-top: 10px ;margin-left: -8px">
												<img class="img-responsive img-thumbnail" src="<?=$populer[$i]['gambar_thumb']?>" alt="Project Image">
											</div>
											<div class="col-md-9" style="margin-left: -15px">
												<a href="<?=$populer[$i]['link']?>"></a><h5 class="heading-primary mb-none"><?=$populer[$i]['judul_tutorial']?></h5>
												<span>Oleh <a href="#" style="color: #000"><?=$populer[$i]['nama_lengkap']?></a> </span>
											</div>
										</div>
										<?php } ?>
								</aside>
							</div>
						</div>
						<?php } ?>
					</div>
					<div class="col-md-8">
						<?php for ($i=0; $i < count($data); $i++) { ?>
						<div class="row" style="padding: 10px;">
							<div class="col-md-3">
								<img class="img-responsive img-thumbnail" src="<?=$data[$i]['gambar_thumb']?>" alt="Project Image">
							</div>
							<div class="col-md-9">
								<div class="post-meta" style="text-align: right;">
									<span><i class="fa fa-calendar"></i> <?=$data[$i]['tgl_rilis']?></span>
									<span><i class="fa fa-user"></i> Oleh <?=$data[$i]['nama_lengkap']?> </span>
								</div>
								<div class="post-info">
									<h4><a href="<?=$data[$i]['link']?>"><?=$data[$i]['judul_tutorial']?></a></h4>
								</div>
								<p><?=$data[$i]['deskripsi_tutorial']?></p>
							</div>
							<div class="col-md-12" style="background-color: #c1bdbd; color : #000 ; padding-bottom: 10px;padding-top: 10px;margin-top: 10px;margin-bottom: 10px;">
								<div class="post-meta">
									<span><i class="fa fa-comments"></i> Comment 32 </span>
									<span><i class="fa fa-thumbs-o-up"></i> Like <?=$data[$i]['likers_tutorial']?> </span>
									<span><i class="fa fa-eye"></i> View <?=$data[$i]['viewers_tutorial']?> </span>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<!-- batas slider -->	