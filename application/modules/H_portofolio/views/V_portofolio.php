	    <!-- Bagian   -->
        <section class="section" style="background: #20231E url('<?=base_url('image/gambar_page/tutorial.png')?>') center 0 no-repeat ; margin:0; ">
          <div class="container" style="padding-top: 50px;padding-bottom: 50px;">
            <div class="row">
              <div class="col-md-12" align="center" >
                <h1 style="color: #fff">Bekerja dan Berkarya</h1>
                <h4 style="color: #fff;font-size: 20px;">Hasil karya Exomatik Study Club</h4>
                <h4 style="color: #fff;font-size: 24px;">"Jangan pernah puas sebelum mencapai yang tertinggi"</h4>
              </div>
            </div>
          </div>
        </section>
      <!-- batas  --> 
			<!-- Bagian isi  -->
				<section class="section section-primary section-primary-scale-2 section-center section-no-border mt-none p-sm" id="demos">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<?php $jenis = $this->uri->segment(2); ?>
								<ul class="nav nav-pills sort-source sort-source-style-2">
									<li <?php if($jenis == '')echo 'class="active"';?>><a href="<?=base_url('portofolio')?>">SEMUA</a></li>
									<li <?php if($jenis == 'desain')echo 'class="active"';?>><a href="<?=base_url('portofolio/desain')?>">DESAIN</a></li>
									<li <?php if($jenis == 'program')echo 'class="active"';?>><a href="<?=base_url('portofolio/program')?>">PROGRAM</a></li>
									<li <?php if($jenis == 'jaringan')echo 'class="active"';?>><a href="<?=base_url('portofolio/jaringan')?>">JARINGAN</a></li>
									<li <?php if($jenis == 'lainnya')echo 'class="active"';?>><a href="<?=base_url('portofolio/lainnya')?>">LAINNYA</a></li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<div class="container">
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
				<?php if(($i+1) % 4 ==0){?>
				</div>
				<div class="row" >
				<?php } 
				}?>
				</div>
				<span id="hasildataload"></span>
				<?php //if(count($data) > 12){?>
				<div class="row" style="margin-top: 15px;">
					<div class="col-md-12">

						<div id="portfolioLoadMoreLoader" class="portfolio-load-more-loader">
							<div class="bounce-loader">
								<div class="bounce1"></div>
								<div class="bounce2"></div>
								<div class="bounce3"></div>
							</div>
						</div>

						<button id="portfolioLoadMore" type="button" onclick="ambildata()" class="btn btn-3d btn-default btn-lg btn-block font-size-xs text-uppercase outline-none p-md mb-xl">Load More...</button>
					</div>
				</div>
				<?php //}?>
			</div>
			<!-- batas sejarah -->	
			<?php $jenis=$this->uri->segment(2);
			if($jenis =='jaringan' || $jenis =='program' || $jenis =='desain' || $jenis =='lainnya' ){
				$jenis=$this->uri->segment(2);
				}else{
					$jenis='semua';
					}?>
			<script type="text/javascript">

				var nomor=<?=$i?>;
				function ambildata() {

				$('#portfolioLoadMore').hide();
				$('#portfolioLoadMoreLoader').show();

					// Ajax
					$.ajax({
						url: "<?=base_url().'H_portofolio/load_data/'.$jenis.'/'?>"+nomor,
						success: function(hasil) {
							$('#portfolioLoadMore').show();
							$('#portfolioLoadMoreLoader').hide();
							$('#hasildataload').append(hasil);
							nomor+=4;
						}
					});

				}
			</script>