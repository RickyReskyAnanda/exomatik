      <!-- Batas Header --> 
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
              <h1>Download</h1>
            </div>
          </div>
        </div>
      </section>
      <!-- Bagian isi  -->
      <div class="container" style="padding-top: 10px">
        <div class="row">
          <div>
            <h2>List Download</h2>
            <div class="divider divider-style-2 divider-icon-sm taller" style="margin-top: -12px">
            </div>  
          </div>
          <div class="col-md-6">
            <ul class="list list-icons list-icons-style-2">
            <?php for ($i=0; $i < count($data) ; $i++) { ?>
              <li><a href="<?=$data[$i]['link']?>"><i class="fa fa-download"></i><?=ucfirst($data[$i]['nama'])?></a></li>
              <?php } ?>
            </ul>
          </div>
        </div>        
      </div>
      <!-- batas sejarah -->  