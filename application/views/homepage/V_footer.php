<section id="conatcat-info">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="pull-left">
              <i class="fa fa-phone"></i>
            </div>
          <div class="media-body">
            <h2>Punya pertanyaan atau ingin belajar ?</h2>
            <p>Eksplorasi Solidaritas Mahasiswa Teknik Informatika (EXOMATIK) terbuka bagi yang ingin belajar. Tinggal hubungi kami di +62 85 796 782 236</p>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="bottom">
    <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="widget">
            <h3>Hubungi Kami</h3>
            <ul>
              <li>Telp   : <a href="#"> <?=$umum['no_telp']?></a></li>
              <li>E-mail :<a href="#"> <?=$umum['email']?></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="widget">
            <h3>Media Sosial</h3>
            <ul>
              <li><a href="<?=$umum['facebook']?>">facebook</a></li>
              <li><a href="<?=$umum['twitter']?>">twitter</a></li>
              <li><a href="<?=$umum['instagram']?>">instagram</a></li>
              <li><a href="<?=$umum['line']?>">line</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="widget">
            <h3>Our Partners</h3>
            <ul>
              <?php for($i=0;$i<count($umum['partners']);$i++){?>
              <li><a href="<?=$umum['partners'][$i]['link']?>"><?=$umum['partners'][$i]['nama']?></a></li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer id="footer" class="midnight-blue">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
        &copy; 2016 <a target="_blank" href="<?=base_url()?>" title="Explorasi Solidaritas Mahasiswa Teknik Informatika">Exomatik Study Club</a>. All Rights Reserved.
        </div>
        <div class="col-sm-6">
          <ul class="pull-right">
            <li><a href="#">Beranda</a></li>
            <li><a href="<?=base_url('web-developer')?>">Web Developer</a></li>
            <li><a href="#">Saran & Masukan</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <script src="<?=base_url()?>assets/homepage/js/jquery.js"></script>
  <script src="<?=base_url()?>assets/homepage/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>assets/homepage/js/jquery.prettyPhoto.js"></script>
  <script src="<?=base_url()?>assets/homepage/js/jquery.isotope.min.js"></script>
  <script src="<?=base_url()?>assets/homepage/js/main.js"></script>
  <script src="<?=base_url()?>assets/homepage/js/wow.min.js"></script>
  <script src="<?=base_url()?>assets/homepage/js/rrssb.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
            $("#btntindis").trigger("click");
        });
  </script>
</body>
</html>
