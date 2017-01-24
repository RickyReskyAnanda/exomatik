<section id="middle">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 wow fadeInDown">
          <div class="accordion">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="media accordion-inner">
                  <div class="media-body">
                    <div class="panel-body">

                      <h4>List Download</h4>
                      <hr>
                    </div>
                    <ol type="1">
                    <?php for($i=0;$i<count($data);$i++){?>
                      <li><h5 ><a href="<?=$data[$i]->link;?>"><?=$data[$i]->nama;?></a></h5></li>
                    <?php } ?>
                    </ol>
                   </div>
                </div>
              </div>
              <!-- Satu Postingan -->
             <!-- Buttons start here. Copy this ul to your document. -->
  
              <div id="disqus_thread"></div>
    
            </div>
          </div>
        </div>
        <div class="panel panel-default">
            
                        
        </div>

      </div>
    </div>
  </section>