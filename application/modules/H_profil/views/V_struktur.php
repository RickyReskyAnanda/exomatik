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
              <h1>Profil</h1>
            </div>
          </div>
        </div>
      </section>
      <!-- Bagian isi  -->
      <div class="container">
        <div style="text-align: center; color: #0e2142; font-size: 20px;margin-bottom: 30px">
          <span><b>STRUKTUR ORGANISASI<br>
          EXPLORASI SOLIDARITAS MAHASISWA TEHNIK INFORMATIKA (EXOMATIK)<br>
          2015 - 2016</b></span>
        </div>
        <div class="row">
          <h3>Pembina</h3>
          <div class="col-md-4">
            <span class="thumb-info thumb-info-side-image thumb-info-no-zoom">
              <span class="thumb-info-side-image-wrapper">
                <img src="sets/img/projects/project-4.jpg" class="img-responsive" alt="" style="width: 200px;">
              </span>
              <span class="thumb-info-caption">
                <span class="thumb-info-caption-text" style="font-size: 14px;text-align: center">
                  <p>Faisal Akib S.Kom.M.Kom</p>
                  <p>Pembina I </p>
                </span>
              </span>
            </span>
          </div>
          <div class="col-md-4">
            <span class="thumb-info thumb-info-side-image thumb-info-no-zoom">
              <span class="thumb-info-side-image-wrapper">
                <img src="sets/img/projects/project-4.jpg" class="img-responsive" alt="" style="width: 200px;">
              </span>
              <span class="thumb-info-caption">
                <span class="thumb-info-caption-text" style="font-size: 14px;text-align: center">
                  <p>Yusran Bobihu S.Kom.M.si</p>
                  <p>Pembina II </p>
                </span>
              </span>
            </span>
          </div>
          <div class="col-md-4">
            <span class="thumb-info thumb-info-side-image thumb-info-no-zoom">
              <span class="thumb-info-side-image-wrapper">
                <img src="sets/img/projects/project-4.jpg" class="img-responsive" alt="" style="width: 200px;">
              </span>
              <span class="thumb-info-caption">
                <span class="thumb-info-caption-text" style="font-size: 14px;text-align: center">
                  <p>Mustika Sari S.Kom.M.Kom</p>
                  <p>Pembina III </p>
                </span>
              </span>
            </span>
          </div>
        </div>
        <div class="divider divider-style-2 divider-icon-sm taller">
          <i class="fa fa-chevron-down"></i>
        </div>
        <div class="row">
          <h3>Dewan pertimbangan Ogranisasi</h3>
          <?php for ($i=0; $i < count($data); $i++) { 
              if($data[$i]['jabatan'] == 'ketua' && $data[$i]['departemen']=='dpo'){
          ?>
          <div class="col-md-4">
            <span class="thumb-info thumb-info-side-image thumb-info-no-zoom">
              <span class="thumb-info-side-image-wrapper">
                <img src="<?php if(isset($data[$i]['foto']))echo $data[$i]['foto']?>" class="img-responsive" alt="" style="width: 200px;">
              </span>
              <span class="thumb-info-caption">
                <span class="thumb-info-caption-text" style="font-size: 14px;text-align: center">
                  <p><?php if(isset($data[$i]['nama']))echo $data[$i]['nama']?></p>
                  <p>Ketua DPO</p>
                  <p>Angkatan <?php if(isset($data[$i]['angkatan']))echo $data[$i]['angkatan']?></p>
                </span>
              </span>
            </span>
          </div>
          <?php
          }} for ($i=0; $i < count($data); $i++) { 
              if($data[$i]['jabatan'] == 'sekretaris' && $data[$i]['departemen']=='dpo'){
          ?>
          <div class="col-md-4">
            <span class="thumb-info thumb-info-side-image thumb-info-no-zoom">
              <span class="thumb-info-side-image-wrapper">
                <img src="<?php if(isset($data[$i]['foto']))echo $data[$i]['foto']?>" class="img-responsive" alt="" style="width: 200px;">
              </span>
              <span class="thumb-info-caption">
                <span class="thumb-info-caption-text" style="font-size: 14px;text-align: center">
                  <p><?php if(isset($data[$i]['nama']))echo $data[$i]['nama']?></p>
                  <p>Sekretaris DPO</p>
                  <p>Angkatan <?php if(isset($data[$i]['angkatan']))echo $data[$i]['angkatan']?></p>
                </span>
              </span>
            </span>
          </div>
          <?php }}?>
        </div>
        <div class="divider divider-style-2 divider-icon-sm taller">
          <i class="fa fa-chevron-down"></i>
        </div>
        <div class="row">
        <?php for ($i=0; $i < count($data); $i++) { 
              if($data[$i]['jabatan'] == 'anggota' && $data[$i]['departemen']=='dpo'){
          ?>
          
          <div class="col-md-4">
            <span class="thumb-info thumb-info-side-image thumb-info-no-zoom">
              <span class="thumb-info-side-image-wrapper">
                <img src="<?php if(isset($data[$i]['foto']))echo $data[$i]['foto']?>" class="img-responsive" alt="" style="width: 200px;">
              </span>
              <span class="thumb-info-caption">
                <span class="thumb-info-caption-text" style="font-size: 14px;text-align: center">
                  <p><?php if(isset($data[$i]['nama']))echo $data[$i]['nama']?></p>
                  <p>Anggota</p>
                  <p>Angkatan <?php if(isset($data[$i]['angkatan']))echo $data[$i]['angkatan']?></p>
                </span>
              </span>
            </span>
          </div>
        <?php } }?>
        </div>
        <div class="divider divider-style-2 divider-icon-sm taller">
          <i class="fa fa-chevron-down"></i>
        </div>
        <div class="row" >
          <h3>Badan Pertimbangan Organisasi</h3>
          <?php for ($i=0; $i < count($data); $i++) { 
              if($data[$i]['jabatan'] == 'ketua' && $data[$i]['departemen']=='bpo'){
          ?>
          <div class="col-md-4">
            <span class="thumb-info thumb-info-side-image thumb-info-no-zoom">
              <span class="thumb-info-side-image-wrapper">
                <img src="<?php if(isset($data[$i]['foto']))echo $data[$i]['foto']?>" class="img-responsive" alt="" style="width: 200px;">
              </span>
              <span class="thumb-info-caption">
                <span class="thumb-info-caption-text" style="font-size: 14px;text-align: center">
                  <p><?php if(isset($data[$i]['nama']))echo $data[$i]['nama']?></p>
                  <p>Ketua BPO</p>
                  <p>Angkatan <?php if(isset($data[$i]['angkatan']))echo $data[$i]['angkatan']?></p>
                </span>
              </span>
            </span>
          </div>
          <?php } }?>
        </div>
        <div class="divider divider-style-2 divider-icon-sm taller">
          <i class="fa fa-chevron-down"></i>
        </div>
        <div class="row">
          <h3>SEKRETARIS & BENDAHARA</h3>
          <?php for ($i=0; $i < count($data); $i++) { 
              if($data[$i]['jabatan'] == 'sekretaris' && $data[$i]['departemen']=='bpo'){
          ?>
          <div class="col-md-4">
            <span class="thumb-info thumb-info-side-image thumb-info-no-zoom">
              <span class="thumb-info-side-image-wrapper">
                <img src="<?php if(isset($data[$i]['foto']))echo $data[$i]['foto']?>" class="img-responsive" alt="" style="width: 200px;">
              </span>
              <span class="thumb-info-caption">
                <span class="thumb-info-caption-text" style="font-size: 14px;text-align: center">
                  <p><?php if(isset($data[$i]['nama']))echo $data[$i]['nama']?></p>
                  <p>Sekretaris BPO</p>
                  <p>Angkatan <?php if(isset($data[$i]['angkatan']))echo $data[$i]['angkatan']?></p>
                </span>
              </span>
            </span>
          </div>
          <?php }}
          for ($i=0; $i < count($data); $i++) { 
              if($data[$i]['jabatan'] == 'bendahara' && $data[$i]['departemen']=='bpo'){
          ?>
          <div class="col-md-4">
            <span class="thumb-info thumb-info-side-image thumb-info-no-zoom">
              <span class="thumb-info-side-image-wrapper">
                <img src="<?php if(isset($data[$i]['foto']))echo $data[$i]['foto']?>" class="img-responsive" alt="" style="width: 200px;">
              </span>
              <span class="thumb-info-caption">
                <span class="thumb-info-caption-text" style="font-size: 14px;text-align: center">
                  <p><?php if(isset($data[$i]['nama']))echo $data[$i]['nama']?></p>
                  <p>Bendahara BPO</p>
                  <p>Angkatan <?php if(isset($data[$i]['angkatan']))echo $data[$i]['angkatan']?></p>
                </span>
              </span>
            </span>
          </div>
          <?php }} ?>
        </div>
        <div class="divider divider-style-2 divider-icon-sm taller">
          <i class="fa fa-chevron-down"></i>
        </div>
        <div class="row">
          <h3>Departement Kreatif & Inovatif</h3>
          <?php for ($i=0; $i < count($data); $i++) { 
              if($data[$i]['jabatan'] == 'ketua' && $data[$i]['departemen']=='ki'){
          ?>
          <div class="col-md-4">
            <span class="thumb-info thumb-info-side-image thumb-info-no-zoom">
              <span class="thumb-info-side-image-wrapper">
                <img src="<?php if(isset($data[$i]['foto']))echo $data[$i]['foto']?>" class="img-responsive" alt="" style="width: 200px;">
              </span>
              <span class="thumb-info-caption">
                <span class="thumb-info-caption-text" style="font-size: 14px;text-align: center">
                  <p><?php if(isset($data[$i]['nama']))echo $data[$i]['nama']?></p>
                  <p>Bendahara BPO</p>
                  <p>Angkatan <?php if(isset($data[$i]['angkatan']))echo $data[$i]['angkatan']?></p>
                </span>
              </span>
            </span>
          </div>
          <?php }} 
          for ($i=0; $i < count($data); $i++) { 
              if($data[$i]['jabatan'] == 'sekretaris' && $data[$i]['departemen']=='ki'){
          ?>
          <div class="col-md-4">
            <span class="thumb-info thumb-info-side-image thumb-info-no-zoom">
              <span class="thumb-info-side-image-wrapper">
                <img src="<?php if(isset($data[$i]['foto']))echo $data[$i]['foto']?>" class="img-responsive" alt="" style="width: 200px;">
              </span>
              <span class="thumb-info-caption">
                <span class="thumb-info-caption-text" style="font-size: 14px;text-align: center">
                  <p><?php if(isset($data[$i]['nama']))echo $data[$i]['nama']?></p>
                  <p>Bendahara BPO</p>
                  <p>Angkatan <?php if(isset($data[$i]['angkatan']))echo $data[$i]['angkatan']?></p>
                </span>
              </span>
            </span>
          </div>
          <?php }} ?>
        </div>
        <div class="row">
          <?php 
          for ($i=0; $i < count($data); $i++) { 
              if($data[$i]['jabatan'] == 'anggota' && $data[$i]['departemen']=='ki'){
          ?>
          <div class="col-md-4">
            <span class="thumb-info thumb-info-side-image thumb-info-no-zoom">
              <span class="thumb-info-side-image-wrapper">
                <img src="<?php if(isset($data[$i]['foto']))echo $data[$i]['foto']?>" class="img-responsive" alt="" style="width: 200px;">
              </span>
              <span class="thumb-info-caption">
                <span class="thumb-info-caption-text" style="font-size: 14px;text-align: center">
                  <p><?php if(isset($data[$i]['nama']))echo $data[$i]['nama']?></p>
                  <p>Bendahara BPO</p>
                  <p>Angkatan <?php if(isset($data[$i]['angkatan']))echo $data[$i]['angkatan']?></p>
                </span>
              </span>
            </span>
          </div>
          <?php }} ?>
        </div>
        <div class="divider divider-style-2 divider-icon-sm taller">
          <i class="fa fa-chevron-down"></i>
        </div>
        <div class="row">
          <h3>Departement Hubungan Masyarakat</h3>
          <?php
          for ($i=0; $i < count($data); $i++) { 
              if($data[$i]['jabatan'] == 'ketua' && $data[$i]['departemen']=='humas'){
          ?>
          <div class="col-md-4">
            <span class="thumb-info thumb-info-side-image thumb-info-no-zoom">
              <span class="thumb-info-side-image-wrapper">
                <img src="<?php if(isset($data[$i]['foto']))echo $data[$i]['foto']?>" class="img-responsive" alt="" style="width: 200px;">
              </span>
              <span class="thumb-info-caption">
                <span class="thumb-info-caption-text" style="font-size: 14px;text-align: center">
                  <p><?php if(isset($data[$i]['nama']))echo $data[$i]['nama']?></p>
                  <p>Bendahara BPO</p>
                  <p>Angkatan <?php if(isset($data[$i]['angkatan']))echo $data[$i]['angkatan']?></p>
                </span>
              </span>
            </span>
          </div>
          <?php }}
          for ($i=0; $i < count($data); $i++) { 
              if($data[$i]['jabatan'] == 'sekretaris' && $data[$i]['departemen']=='humas'){
          ?>
          <div class="col-md-4">
            <span class="thumb-info thumb-info-side-image thumb-info-no-zoom">
              <span class="thumb-info-side-image-wrapper">
                <img src="<?php if(isset($data[$i]['foto']))echo $data[$i]['foto']?>" class="img-responsive" alt="" style="width: 200px;">
              </span>
              <span class="thumb-info-caption">
                <span class="thumb-info-caption-text" style="font-size: 14px;text-align: center">
                  <p><?php if(isset($data[$i]['nama']))echo $data[$i]['nama']?></p>
                  <p>Bendahara BPO</p>
                  <p>Angkatan <?php if(isset($data[$i]['angkatan']))echo $data[$i]['angkatan']?></p>
                </span>
              </span>
            </span>
          </div>
          <?php }} ?>
        </div>
        <div class="row">
          <?php
          for ($i=0; $i < count($data); $i++) { 
              if($data[$i]['jabatan'] == 'anggota' && $data[$i]['departemen']=='humas'){
          ?>
          <div class="col-md-4">
            <span class="thumb-info thumb-info-side-image thumb-info-no-zoom">
              <span class="thumb-info-side-image-wrapper">
                <img src="<?php if(isset($data[$i]['foto']))echo $data[$i]['foto']?>" class="img-responsive" alt="" style="width: 200px;">
              </span>
              <span class="thumb-info-caption">
                <span class="thumb-info-caption-text" style="font-size: 14px;text-align: center">
                  <p><?php if(isset($data[$i]['nama']))echo $data[$i]['nama']?></p>
                  <p>Bendahara BPO</p>
                  <p>Angkatan <?php if(isset($data[$i]['angkatan']))echo $data[$i]['angkatan']?></p>
                </span>
              </span>
            </span>
          </div>
          <?php }} ?>
        </div>
        <div class="divider divider-style-2 divider-icon-sm taller">
          <i class="fa fa-chevron-down"></i>
        </div>
        <div class="row">
          <h3>Departement Pendidikan</h3>
          <?php
          for ($i=0; $i < count($data); $i++) { 
              if($data[$i]['jabatan'] == 'ketua' && $data[$i]['departemen']=='pendidikan'){
          ?>
          <div class="col-md-4">
            <span class="thumb-info thumb-info-side-image thumb-info-no-zoom">
              <span class="thumb-info-side-image-wrapper">
                <img src="<?php if(isset($data[$i]['foto']))echo $data[$i]['foto']?>" class="img-responsive" alt="" style="width: 200px;">
              </span>
              <span class="thumb-info-caption">
                <span class="thumb-info-caption-text" style="font-size: 14px;text-align: center">
                  <p><?php if(isset($data[$i]['nama']))echo $data[$i]['nama']?></p>
                  <p>Bendahara BPO</p>
                  <p>Angkatan <?php if(isset($data[$i]['angkatan']))echo $data[$i]['angkatan']?></p>
                </span>
              </span>
            </span>
          </div>
          <?php }} 
          for ($i=0; $i < count($data); $i++) { 
              if($data[$i]['jabatan'] == 'sekretaris' && $data[$i]['departemen']=='pendidikan'){
          ?>
          <div class="col-md-4">
            <span class="thumb-info thumb-info-side-image thumb-info-no-zoom">
              <span class="thumb-info-side-image-wrapper">
                <img src="<?php if(isset($data[$i]['foto']))echo $data[$i]['foto']?>" class="img-responsive" alt="" style="width: 200px;">
              </span>
              <span class="thumb-info-caption">
                <span class="thumb-info-caption-text" style="font-size: 14px;text-align: center">
                  <p><?php if(isset($data[$i]['nama']))echo $data[$i]['nama']?></p>
                  <p>Bendahara BPO</p>
                  <p>Angkatan <?php if(isset($data[$i]['angkatan']))echo $data[$i]['angkatan']?></p>
                </span>
              </span>
            </span>
          </div>
          <?php }} ?>
        </div>
        <div class="divider divider-style-2 divider-icon-sm taller">
          <i class="fa fa-chevron-down"></i>
        </div>
        <div class="row">
          <?php 
          for ($i=0; $i < count($data); $i++) { 
              if($data[$i]['jabatan'] == 'anggota' && $data[$i]['departemen']=='pendidikan'){
          ?>
          <div class="col-md-4">
            <span class="thumb-info thumb-info-side-image thumb-info-no-zoom">
              <span class="thumb-info-side-image-wrapper">
                <img src="<?php if(isset($data[$i]['foto']))echo $data[$i]['foto']?>" class="img-responsive" alt="" style="width: 200px;">
              </span>
              <span class="thumb-info-caption">
                <span class="thumb-info-caption-text" style="font-size: 14px;text-align: center">
                  <p><?php if(isset($data[$i]['nama']))echo $data[$i]['nama']?></p>
                  <p>Bendahara BPO</p>
                  <p>Angkatan <?php if(isset($data[$i]['angkatan']))echo $data[$i]['angkatan']?></p>
                </span>
              </span>
            </span>
          </div>
          <?php }} ?>
        </div>
        <div class="divider divider-style-2 divider-icon-sm taller">
          <i class="fa fa-chevron-down"></i>
        </div>
        <div class="row">
          <h3>Departement Keuangan</h3>
          <?php
          for ($i=0; $i < count($data); $i++) { 
              if($data[$i]['jabatan'] == 'ketua' && $data[$i]['departemen']=='keuangan'){
          ?>
          <div class="col-md-4">
            <span class="thumb-info thumb-info-side-image thumb-info-no-zoom">
              <span class="thumb-info-side-image-wrapper">
                <img src="<?php if(isset($data[$i]['foto']))echo $data[$i]['foto']?>" class="img-responsive" alt="" style="width: 200px;">
              </span>
              <span class="thumb-info-caption">
                <span class="thumb-info-caption-text" style="font-size: 14px;text-align: center">
                  <p><?php if(isset($data[$i]['nama']))echo $data[$i]['nama']?></p>
                  <p>Bendahara BPO</p>
                  <p>Angkatan <?php if(isset($data[$i]['angkatan']))echo $data[$i]['angkatan']?></p>
                </span>
              </span>
            </span>
          </div>
          <?php }} 
          for ($i=0; $i < count($data); $i++) { 
              if($data[$i]['jabatan'] == 'sekretaris' && $data[$i]['departemen']=='keuangan'){
          ?>
          <div class="col-md-4">
            <span class="thumb-info thumb-info-side-image thumb-info-no-zoom">
              <span class="thumb-info-side-image-wrapper">
                <img src="<?php if(isset($data[$i]['foto']))echo $data[$i]['foto']?>" class="img-responsive" alt="" style="width: 200px;">
              </span>
              <span class="thumb-info-caption">
                <span class="thumb-info-caption-text" style="font-size: 14px;text-align: center">
                  <p><?php if(isset($data[$i]['nama']))echo $data[$i]['nama']?></p>
                  <p>Bendahara BPO</p>
                  <p>Angkatan <?php if(isset($data[$i]['angkatan']))echo $data[$i]['angkatan']?></p>
                </span>
              </span>
            </span>
          </div>
          <?php }} ?>
        </div>
        <div class="divider divider-style-2 divider-icon-sm taller">
          <i class="fa fa-chevron-down"></i>
        </div>
        <div class="row">
          <?php 
          for ($i=0; $i < count($data); $i++) { 
              if($data[$i]['jabatan'] == 'anggota' && $data[$i]['departemen']=='keuangan'){
          ?>
          <div class="col-md-4">
            <span class="thumb-info thumb-info-side-image thumb-info-no-zoom">
              <span class="thumb-info-side-image-wrapper">
                <img src="<?php if(isset($data[$i]['foto']))echo $data[$i]['foto']?>" class="img-responsive" alt="" style="width: 200px;">
              </span>
              <span class="thumb-info-caption">
                <span class="thumb-info-caption-text" style="font-size: 14px;text-align: center">
                  <p><?php if(isset($data[$i]['nama']))echo $data[$i]['nama']?></p>
                  <p>Bendahara BPO</p>
                  <p>Angkatan <?php if(isset($data[$i]['angkatan']))echo $data[$i]['angkatan']?></p>
                </span>
              </span>
            </span>
          </div>
          <?php }} ?>
        </div>
        <div class="divider divider-style-2 divider-icon-sm taller">
          <i class="fa fa-chevron-down"></i>
        </div>
        <div class="row">
          <h3>Departement Kesekretariatan</h3>
          <?php
          for ($i=0; $i < count($data); $i++) { 
              if($data[$i]['jabatan'] == 'ketua' && $data[$i]['departemen']=='kesekretariatan'){
          ?>
          <div class="col-md-4">
            <span class="thumb-info thumb-info-side-image thumb-info-no-zoom">
              <span class="thumb-info-side-image-wrapper">
                <img src="<?php if(isset($data[$i]['foto']))echo $data[$i]['foto']?>" class="img-responsive" alt="" style="width: 200px;">
              </span>
              <span class="thumb-info-caption">
                <span class="thumb-info-caption-text" style="font-size: 14px;text-align: center">
                  <p><?php if(isset($data[$i]['nama']))echo $data[$i]['nama']?></p>
                  <p>Bendahara BPO</p>
                  <p>Angkatan <?php if(isset($data[$i]['angkatan']))echo $data[$i]['angkatan']?></p>
                </span>
              </span>
            </span>
          </div>
          <?php }} 
          for ($i=0; $i < count($data); $i++) { 
              if($data[$i]['jabatan'] == 'sekretaris' && $data[$i]['departemen']=='kesekretariatan'){
          ?>
          <div class="col-md-4">
            <span class="thumb-info thumb-info-side-image thumb-info-no-zoom">
              <span class="thumb-info-side-image-wrapper">
                <img src="<?php if(isset($data[$i]['foto']))echo $data[$i]['foto']?>" class="img-responsive" alt="" style="width: 200px;">
              </span>
              <span class="thumb-info-caption">
                <span class="thumb-info-caption-text" style="font-size: 14px;text-align: center">
                  <p><?php if(isset($data[$i]['nama']))echo $data[$i]['nama']?></p>
                  <p>Bendahara BPO</p>
                  <p>Angkatan <?php if(isset($data[$i]['angkatan']))echo $data[$i]['angkatan']?></p>
                </span>
              </span>
            </span>
          </div>
          <?php }} ?>
        </div>
        <div class="divider divider-style-2 divider-icon-sm taller">
          <i class="fa fa-chevron-down"></i>
        </div>
        <div class="row">
          <?php 
          for ($i=0; $i < count($data); $i++) { 
              if($data[$i]['jabatan'] == 'anggota' && $data[$i]['departemen']=='kesekretariatan'){
          ?>
          <div class="col-md-4">
            <span class="thumb-info thumb-info-side-image thumb-info-no-zoom">
              <span class="thumb-info-side-image-wrapper">
                <img src="<?php if(isset($data[$i]['foto']))echo $data[$i]['foto']?>" class="img-responsive" alt="" style="width: 200px;">
              </span>
              <span class="thumb-info-caption">
                <span class="thumb-info-caption-text" style="font-size: 14px;text-align: center">
                  <p><?php if(isset($data[$i]['nama']))echo $data[$i]['nama']?></p>
                  <p>Bendahara BPO</p>
                  <p>Angkatan <?php if(isset($data[$i]['angkatan']))echo $data[$i]['angkatan']?></p>
                </span>
              </span>
            </span>
          </div>
          <?php }} ?>
        </div>
      </div>
      <!-- batas sejarah --> 