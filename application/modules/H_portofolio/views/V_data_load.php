<div class="row">
				<?php for($i=0;$i<count($data);$i++){?>

					<div class="col-md-3" style="margin-top: 20px;">
						<span class="thumb-info thumb-info-hide-wrapper-bg">
							<span class="thumb-info-wrapper">
								<a href="<?=$data[$i]['link']?>"> <img src="<?=$data[$i]['foto_dp_p']?>" class="img-responsive" alt=""></a>
								<span class="thumb-info-title">
									<a href="<?=$data[$i]['link']?>"><span class="thumb-info-inner" style="font-size: 15px; color: #fff"><?=$data[$i]['nama_portofolio']?></span></a>
									<span class="thumb-info-type"><?=$data[$i]['jenis_p']?></span>
								</span>
							</span>
							<span class="thumb-info-caption">
								<span class="thumb-info-caption-text"><?=ucfirst($data[$i]['deskripsi_singkat_p'])?> </span>
								<span class="thumb-info-social-icons">
									<a target="_blank" href="#" style="background-color: #0a628e"><i class="fa fa-facebook"></i><span>Facebook</span></a>
									<a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
									<a href="#" style="background-color: #c71603"><i class="fa fa-google-plus"></i><span>Twitter</span></a>
								</span>
							</span>
						</span>
					</div>
					<?php }?>
				</div>