<section id="middle">
    <div class="container">
            
                  <div class="center wow fadeInDown">
                  	<div id="struktur-organisasi">
                  		<h2>Program Kerja Exomatik Study Club</h2>
                  		<h2>Periode 2016/2017</h2>	
                  	</div>
                  </div>

            <div class="center">
                  <div class="row clearfix">   
            		<div class="col-md-6 col-sm-6">	
            			<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                                    <h2><p>Departemen Kreatif dan Inovatif</p></h2>
                                    <table border="1">
                                    	<tr>
                                    		<th width="76%"><center> Program Kerja</center></th>
                                    		<th width="12%"><center>Details</center></th>
                                    		<th width="12%"><center>Keterangan</center></th>
                                    	</tr>
                              	<?php for($i=0;$i<count($data);$i++){
                                          if($data[$i]->divisi =="ki"){?>
                                          <tr>
                                    		<td><?=$data[$i]->nama_kegiatan?></td>
                                    		<td><a href="<?=base_url()?>program-kerja/<?=$data[$i]->id_proker?>/<?=$data[$i]->link?>" class="">Details</a></td>
                                    		<td><?=$data[$i]->status?></td>
                                    	</tr>
                                    <?php }} ?>
                                    </table>
                              </div>
            		</div>
                        <div class="col-md-6 col-sm-6"> 
                              <div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                                    <h2><p>Departemen Kesekretariatan</p></h2>
                                  	<table border="1">
                                    	<tr>
                                    		<th width="76%"><center> Program Kerja</center></th>
                                    		<th width="12%"><center>Details</center></th>
                                    		<th width="12%"><center>Keterangan</center></th>
                                    	</tr>
                              	<?php for($i=0;$i<count($data);$i++){
                                          if($data[$i]->divisi =="kesekretariatan"){?>
                                          <tr>
                                                <td><?=$data[$i]->nama_kegiatan?></td>
                                                <td><a href="<?=base_url()?>program-kerja/<?=$data[$i]->id_proker?>/<?=$data[$i]->link?>" class="">Details</a></td>
                                                <td><?=$data[$i]->status?></td>
                                          </tr>
                                    <?php }} ?>
                                    </table>
                              </div>
                        </div>
                  </div>	<!--/.row-->			
            </div>	

            <div class="center">
            	<div class="row clearfix">   
            		<div class="col-md-6 col-sm-6">	
            			<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                                    <h2><p>Departemen Hubungan Masyarakat</p></h2>
                                    <table border="1">
                                    	<tr>
                                    		<th width="76%"><center> Program Kerja</center></th>
                                    		<th width="12%"><center>Details</center></th>
                                    		<th width="12%"><center>Keterangan</center></th>
                                    	</tr>
                              	<?php for($i=0;$i<count($data);$i++){
                                          if($data[$i]->divisi =="humas"){?>
                                          <tr>
                                                <td><?=$data[$i]->nama_kegiatan?></td>
                                                <td><a href="<?=base_url()?>program-kerja/<?=$data[$i]->id_proker?>/<?=$data[$i]->link?>" class="">Details</a></td>
                                                <td><?=$data[$i]->status?></td>
                                          </tr>
                                    <?php }} ?>
                                    </table>
                              </div>
            		</div>
                        <div class="col-md-6 col-sm-6"> 
                              <div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                                    <h2><p>Departemen Keuangan</p></h2>
                                  	<table border="1">
                                    	<tr>
                                    		<th width="76%"><center> Program Kerja</center></th>
                                    		<th width="12%"><center>Details</center></th>
                                    		<th width="12%"><center>Keterangan</center></th>
                                    	</tr>
                              	<?php for($i=0;$i<count($data);$i++){
                                          if($data[$i]->divisi =="keuangan"){?>
                                          <tr>
                                                <td><?=$data[$i]->nama_kegiatan?></td>
                                                <td><a href="<?=base_url()?>program-kerja/<?=$data[$i]->id_proker?>/<?=$data[$i]->link?>" class="">Details</a></td>
                                                <td><?=$data[$i]->status?></td>
                                          </tr>
                                    <?php }} ?>
                                    </table>
                              </div>
                        </div>				
            	</div>	<!--/.row-->
            </div>
            <div class="center">
            	<div class="row clearfix">   
            		<div class="col-md-6 col-sm-6 col-md-offset-3"> 
            			<div class="single-profile-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                  			<h2><p>Departemen Pendidikan</p></h2>
                                  	<table border="1">
                                    	<tr>
                                    		<th width="76%"><center> Program Kerja</center></th>
                                    		<th width="12%"><center>Details</center></th>
                                    		<th width="12%"><center>Keterangan</center></th>
                                    	</tr>
                              	<?php for($i=0;$i<count($data);$i++){
                                          if($data[$i]->divisi =="pendidikan"){?>
                                          <tr>
                                                <td><?=$data[$i]->nama_kegiatan?></td>
                                                <td><a href="<?=base_url()?>program-kerja/<?=$data[$i]->id_proker?>/<?=$data[$i]->link?>" class="">Details</a></td>
                                                <td><?=$data[$i]->status?></td>
                                          </tr>
                                    <?php }} ?>
                                    </table>
                  		</div>		
                        </div>	
            	</div> <!--/.row -->
            </div>
      </div>
</section>