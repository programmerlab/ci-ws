<div class="row">

            <!--  Blog Post Content Column -->
      <div id ="morewifiid" class="col-lg-8">


              <?php foreach ($data['results'] as $key => $value) {
                # code...
              ?>

            <div class="demo">

                 <div class="row">

                    <h4 style="margin-left:3%"><b><?php echo ucfirst($value->sname) ?></b></h4>
                    <hr>
                      <div class="col-xs-6 col-md-3">

                        <a href="#" class="thumbnail">
                         <?php 
                         if($value->owner_type == "users")
                         {
                          ?>
                         <img src="img/cislogo.jpg" >
                         <?php 
                         } 
                         else
                         {
                         ?>
                          <img src="img/new-user-image-default.png" >
                         <?php 
                         } 
                         ?>
                        </a>
                      </div>
                      <div class="col-md-9 col-xs-9">

                                <form class="form-horizontal" role="form">
                                      <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label">Wifi Name :</label>
                                        <div class="col-sm-9">
                                         <label class="control-label"><?php echo ucfirst($value->ssid) ?></label>
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label">Wifi Address :</label>
                                        <div class="col-sm-9">
                                         <label class="control-label"><?php echo $value->wifi_address ?></label>
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label">Wifi Active :</label>
                                        <div class="col-sm-9">
                                        <?php 
                                         if($value->is_active == "1")
                                          {
                                          ?>
                                         <div id = "circle" style="background: #5cb85c;"></div>
                                         <?php
                                          }
                                          else
                                          {
                                          ?>
                                           <div id = "circle" style="background: gray;"></div>
                                          <?php
                                           }
                                           ?>
                                        </div>
                                      </div>

                                      <div class="form-group">
                                       <div class="col-sm-9">
                                      <!--  <input id="input-id" type="number" class="rating" min="1" max="5" step="1" data-size="xs" data-rtl="false" data-show-clear="false" data-show-caption="false" value="<?php //echo rand(2,5) ?>">
                                       -->   
                                         <input name = "rating" class="rating" data-show-clear="false" data-show-caption="false"  data-size="xs" data-min="0" data-max="5" data-step="1" onchange="addrating(<?php echo $value->id ?>,$(this).val());" value="<?php echo $value->rating ?>">
                                   
                                       </div>
                                      </div>
                                                          
                             
                            </form>
                            
                      </div>
                </div>
                      <?php 
                         if($value->owner_type == "users")
                         {
                          ?>
                         <a style="cursor:pointer;" onclick="showmap('<?php echo $value->lat ?>','<?php echo $value->long ?>','img/cislogo.jpg')" > Show Address On Map </a>
               
                        <?php 
                          }
                          else
                          {
                         ?>
                          <a style="cursor:pointer;" onclick="showmap('<?php echo $value->lat ?>','<?php echo $value->long ?>','img/new-user-image-default.png')" > Show Address On Map </a>
               
                        <?php } ?>
                  </div>

                 <?php } ?>


                             

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

             <div class="box">
                    <h4 class="widget-title">Side Widget Well</h4>
                    <hr>
                    <p id ="blockqoutes">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
              </div>


                <div class="box">
                    <h4 class="widget-title">Recent WIFI</h4>
                    <hr>
                    <ul>
                     <?php foreach ($recentdata['results'] as $value) 
                     {
                      
                      ?>
                        <li>
                           <a style="cursor:pointer;"><?php echo $value->sname ?></a>
                        </li>
                      <?php } ?>
                        
                    </ul>
                </div>

               
            </div>

        </div>
         <script type="text/javascript">
       
       
   
            var count = 3;
            $(window).scroll(function(){
                    if  ($(window).scrollTop() == $(document).height() - $(window).height()){
                       loadArticle(count);
                       count = count + 2;
                    }
            }); 

             

             jQuery(document).ready(function(){
                $("input[name='rating']").rating({hoverEnabled : false});

                 $("input[name='rating']").on("rating.change", function(event, value, caption) {
                    $(this).rating("refresh", {disabled: true, showClear: false});
                 });
                  //  createTicker();
              });



 
    </script>