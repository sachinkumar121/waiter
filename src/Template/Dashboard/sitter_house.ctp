<?php //echo "<pre>";print_r($houseInfo); die;?>
 <div class="col-md-9 col-lg-10 col-sm-8 " id="content">
        <div class="row">

        <div class="profiletab-section">
          
                <h3><img src="<?php echo HTTP_ROOT; ?>img/sitter-img.png"> <?php echo $this->requestAction('app/get-translate/'.base64_encode('Sitter Profile')); ?></h3>

                <?php echo $this->element('frontElements/profile/sitter_nav');?>
          
          <div class="tab-sectioninner book-pro">
            <div class="tab-content">

 <div id="menu11" class="tab-pane fade tab-comm active in">
          
                  <!--<form role="form">-->
                  <?php echo $this->Form->create(@$sitterHouseData,[
                      'url' => ['controller' => 'dashboard', 'action' => 'sitter-house'],
                      'role'=>'form',
                      'id'=>'sitterHouse'
                  ]);?>
                  <?php
                      if(@$sitterHouseId != ''){
                           echo $this->Form->input('UserSitterHouses.id',[
                                'type'=>'hidden',
                                'value'=>@$sitterHouseId
                              ]);
                      }     
                  ?>

                  <div class="row">
                     <h3><i class="fa fa-share-alt cir-o" aria-hidden="true"></i>
                     <?php echo $this->requestAction('app/get-translate/'.base64_encode('Share some insights about your home')); ?> 
                <span class="pull-right hed-0 coh1">
                  <?php echo $this->requestAction('app/get-translate/'.base64_encode('You can us step-us your house profile here.')); ?>
                  </span>
                   <p class="sub-title"><small>
                   <?php echo $this->requestAction('app/get-translate/'.base64_encode('You can set-up your house profile here. Let us know some of the great things about your home and what guests will experience when they stay with you.')); ?>
                    </small></p>
                </h3>
                    <div class="form-group col-lg-4">
                      <label for=""> 
                        <?php echo $this->requestAction('app/get-translate/'.base64_encode('Property Type')); ?>
                      </label>
                        <?php echo $this->Form->input('UserSitterHouses.property_type',[
                        'templates' => ['inputContainer' => '{{content}}'],
                        'label' => false,
                        'required' => false,
                        'type'=>'select',
                        'options'=>[''=>'---','flat'=>'Flat','house'=>'House','farm'=>'Farm'],
                        'class'=>'form-control']);
                      ?>
                    </div>

                    <div class="form-group col-lg-4 text-italic">
                      <label for="">
                      <?php echo $this->requestAction('app/get-translate/'.base64_encode('Outdoor Area')); ?>
                        </label>
                      <?php echo $this->Form->input('UserSitterHouses.outdoor_area',[
                        'templates' => ['inputContainer' => '{{content}}'],
                        'label' => false,
                        'required' => false,
                        'type'=>'select',
                        'options'=>[''=>'---','balcony'=>'Balcony','backyard'=>'Backyard'],
                        'class'=>'form-control']);
                      ?>
                    </div>

                    <div class="form-group col-lg-4">
                      <label for=""><?php echo $this->requestAction('app/get-translate/'.base64_encode('Outdoor Area Size')); ?></label>
                      <?php echo $this->Form->input('UserSitterHouses.outdoor_area_size',[
                        'templates' => ['inputContainer' => '{{content}}'],
                        'label' => false,
                        'required' => false,
                        'type'=>'select',
                        'options'=>[''=>'---','small'=>'Small','medium'=>'Medium','large'=>'Large'],
                        'class'=>'form-control']);
                      ?>
                    </div>
                    </div>

                    <div class="row">
                    <div class="form-group col-lg-4">
                      <label for=""><?php echo $this->requestAction('app/get-translate/'.base64_encode('Outing Area (allow multiple)')); ?>  </label>
                      <?php echo $this->Form->input('UserSitterHouses.outing_allow_multiple',[
                        'templates' => ['inputContainer' => '{{content}}'],
                        'label' => false,
                         'required' => false,
                        'type'=>'select',
                        'options'=>[''=>'---','urban_streets'=>'Urban Streets','beach'=>'Beach','city_park'=>'City Park','country_side'=>'Country Side','bush'=>'Bush'],
                        'class'=>'form-control']);
                      ?>
                    </div>
                    <div class="form-group col-lg-4">
                      <label for="">  
                      <?php echo $this->requestAction('app/get-translate/'.base64_encode('Toilet Breaks provided - every')); ?> 
                      </label>
                      <?php echo $this->Form->input('UserSitterHouses.breaks_provided_every',[
                        'templates' => ['inputContainer' => '{{content}}'],
                        'label' => false,
                         'required' => false,
                        'type'=>'select',
                        'options'=>[''=>'---','0-2'=>'0-2 hours','2-4'=>'2-4 hours','4-8'=>'4-8 hours','8+'=>'8+ hours'],
                        'class'=>'form-control']);
                      ?>
                    </div>
                    <div class="form-group col-lg-4">
                    <label><?php echo $this->requestAction('app/get-translate/'.base64_encode('Fully Fenced Outdoor Area')); ?> </label>
                    <span class="pull-right m-rights">
                            <?php echo $this->Form->input(
                              'UserSitterHouses.fully_fenced',
                               [
                                //'label'=>['class'=>'radio-inline'],
                                'type'=>"radio",
                                 'label'=>false,
                                 'required'=>false,
                                "options"=>["yes"=>"Yes","no"=>"No"],
								 'default' => 'no',
                                'templates' => ['inputContainer' => '{{content}}']
                        ]); ?>
                          
                        </span>
                    </div>  
                    </div>

                    <div class="row">
                    

                  <div class="form-group col-lg-4">
                    <label><?php echo $this->requestAction('app/get-translate/'.base64_encode('Smokers')); ?></label>
                    <span class="pull-right m-rights">
                    <?php echo $this->Form->input(
                              'UserSitterHouses.smokers',
                              [
                                'type'=>"radio",
                                 'label'=>false,
                                 'required'=>false,
                                "options"=>["yes"=>"Yes","no"=>"No"],
								 'default' => 'no',
                                  'templates' => ['inputContainer' => '{{content}}']
                    ]); ?>
                        </span>
                  </div>
                  <div class="form-group col-lg-4">
                    <label><?php echo $this->requestAction('app/get-translate/'.base64_encode('Birds in cages?')); ?></label>
                   <span class="pull-right m-rights">
                    <?php echo $this->Form->input(
                              'UserSitterHouses.birds_in_cages',
                              [
                                'type'=>"radio",
                                 'label'=>false,
                                 'required'=>false,
                                "options"=>["yes"=>"Yes","no"=>"No"],
								 'default' => 'no',
                                  'templates' => ['inputContainer' => '{{content}}']
                    ]); ?>
                        </span>
                  </div>
                   <div class="form-group col-lg-4">
                    <label><?php echo $this->requestAction('app/get-translate/'.base64_encode('Dogs in home?')); ?></label> <span class="pull-right m-rights">
                    <?php echo $this->Form->input(
                              'UserSitterHouses.dogs_in_home',
                              [
                                'type'=>"radio",
                                 'label'=>false,
                                 'required'=>false,
                                "options"=>["yes"=>"Yes","no"=>"No"],
								 'default' => 'no',
                                  'templates' => ['inputContainer' => '{{content}}']
                    ]); ?>
                        </span>
                    </div>
                  </div>
                  <div class="row">
                    
                     <div class="form-group col-lg-4">
                    <label><?php echo $this->requestAction('app/get-translate/'.base64_encode('Cats in home?')); ?></label>
                    <span class="pull-right m-rights">
                    <?php echo $this->Form->input(
                              'UserSitterHouses.cats_in_home',
                              [
                                'type'=>"radio",
                                 'label'=>false,
                                 'required'=>false,
                                "options"=>["yes"=>"Yes","no"=>"No"],
								 'default' => 'no',
                                  'templates' => ['inputContainer' => '{{content}}']
                    ]); ?>
                        </span>
                    </div>
                      <div class="form-group col-lg-4 noned">
                    </div>
                  </div>
               <div class="row word-limit">

                    <div class="form-group col-lg-4">
                          <label for="" class="m-space-not"><?php echo $this->requestAction('app/get-translate/'.base64_encode('Tell us about your home')); ?><span class="hint--right right-width" data-hint="<?php echo $this->requestAction('app/get-translate/'.base64_encode('Make sure to include why is your home great for a guest to stay in?')); ?>"><img class="close11" src="<?php echo HTTP_ROOT; ?>img/close.png"></span></label>
                            <?php echo $this->Form->input(
                              'UserSitterHouses.about_home_desc',
                              [
                                 'type'=>"textarea",
                                 'label'=>false,
                                 'templates' => ['inputContainer' => '{{content}}']
                            ]); ?>
								<?php $max=75; if(!empty($sitterHouseData['about_home_desc'])){ $rem = $max-str_word_count ($sitterHouseData['about_home_desc']);} ?>
                          <p class="w-limit" id="about-home-preview"><?php if(!empty($rem)){echo $rem ;}else{echo "75";} echo $this->requestAction('app/get-translate/'.base64_encode(' words remainings')); ?></p>
                         <label class="error" generated="true" for="userhitterhouses-about-home-desc"></label>
                    </div>

                    <div class="form-group col-lg-4">
                          <label for="" class="m-space-not"><?php echo $this->requestAction('app/get-translate/'.base64_encode('Describe the spaces your guest will have access to')); ?><span class="hint--right right-width" data-hint="<?php echo $this->requestAction('app/get-translate/'.base64_encode('Let your guest know where you plan to let them sleep and enjoy your home with you.')); ?>"><img class="close11" src="<?php echo HTTP_ROOT; ?>img/close.png"></span></label>
                           <?php echo $this->Form->input(
                              'UserSitterHouses.spaces_access_desc',
                              [
                                 'type'=>"textarea",
                                 'label'=>false,
                                 'templates' => ['inputContainer' => '{{content}}']
                                 
                            ]); ?>
							<?php $max=75; if(!empty($sitterHouseData['spaces_access_desc'])){ $rem = $max-str_word_count ($sitterHouseData['spaces_access_desc']);} ?>
                             <label class="error" for="usersitterhouses-spaces-access-desc" generated="true"></label>
                          <p class="w-limit" id="space-word-preview"><?php if(!empty($rem)){echo $rem ;}else{echo "75";} echo $this->requestAction('app/get-translate/'.base64_encode(' words remainings')); ?></p>
                       
                    </div>

                    <div class="form-group col-lg-4">
                          <label for="" class="m-space-not"><?php echo $this->requestAction('app/get-translate/'.base64_encode('What are the pets in your home like')); ?><span class="hint--right right-width" data-hint="<?php echo $this->requestAction('app/get-translate/'.base64_encode('Tell us what kind of friends your guest is going to make and some of their personality traits.')); ?>"><img class="close11" src="<?php echo HTTP_ROOT; ?>img/close.png"></span></label>
                           <?php echo $this->Form->input(
                              'UserSitterHouses.home_pets_desc',
                              [
                                 'type'=>"textarea",
                                 'label'=>false,
                                 'templates' => ['inputContainer' => '{{content}}']
                            ]); ?>
					<?php $max=75; if(!empty($sitterHouseData['home_pets_desc'])){ $rem = $max-str_word_count ($sitterHouseData['home_pets_desc']);} ?>
                          <p class="w-limit" id="home-pets-preview"><?php if(!empty($rem)){echo $rem ;}else{echo "75";} echo $this->requestAction('app/get-translate/'.base64_encode(' words remainings')); ?></p>
                    </div>

                    
                      
                    </div>
                  <h3><?php echo $this->requestAction('app/get-translate/'.base64_encode('Dogs in home?  Photo')); ?></h3>
                  <p class="browse-p"><?php echo $this->requestAction('app/get-translate/'.base64_encode('Add your profile photo')); ?><button id="browseImg" type="button" class="btn btn-primary"><?php echo $this->requestAction('app/get-translate/'.base64_encode('Browse Photo')); ?></button></p>

                  <div class="row" id="images_preview">
                        <?php echo @$sitter_images; ?>
                   
                    
                  </div>

                    <div class="row">
                    <p class="col-lg-12 sp-tb">
                    <a href="<?php echo HTTP_ROOT.'dashboard/profile'; ?>"><button class="btn previous pull-left" type="button"><i class="fa fa-chevron-left"></i><?php echo $this->requestAction('app/get-translate/'.base64_encode('Previous')); ?></button></a>
                    <input class="pull-right btn Continue" type="submit" value="<?php echo $this->requestAction('app/get-translate/'.base64_encode('Continue')); ?>" /></p>
                    </div>
                  <?php echo $this->Form->end(); ?>
                  <div class="row" id="show-all-errors">

                  </div>

              </div>

              <!--Start multiple upload-->
                  <?php echo $this->Form->create(@$sitter_info, [
                      'url' => ['controller' => 'dashboard', 'action' => 'sitter-gallery'],
                      'name'=>'multiple_upload_form',
                      'id'=>'multiple_upload_form',
                      'enctype'=>"multipart/form-data",
                      'style'=>'display:none'
                  ]);?>

                      <input type="hidden" name="image_form_submit" value="1"/>

                      <label><?php echo $this->requestAction('app/get-translate/'.base64_encode('Choose Image')); ?></label>
                      <input type="file" name="images[]" id="images" multiple >
                      <div class="uploading none">
                          <label>&nbsp;</label>
                          <img src="uploading.gif" alt="uploading......"/>
                      </div>
                      <?php echo $this->Form->end(); ?>
                </div>
        
          </div>
        </div>

        </div>

      </div>

<script type="text/javascript">
  /*For add multiple profile photos*/
$(document).ready(function(){
     
    $('#images').on('change',function(){
            jQuery('#multiple_upload_form').ajaxForm({
            //display the uploaded images
            //target:'#images_preview',
            beforeSubmit:function(e){
                $('.uploading').show();
            },
            success:function(res){
              console.log(res);
              
             var data = jQuery.parseJSON(res);
            if($.trim(data[0]) != ''){
              $('#show-all-errors').html(data[0]); //DISPLAY SUCCESS MESSAGE

            }
          
            if($.trim(data[1]) != ''){
              $('#images_preview').html(data[1]); //DISPLAY SUCCESS MESSAGE

            }
               $('.uploading').hide();
            },
            error:function(e){
            }
        }).submit();
    });
    $("#browseImg").on('click',function(){
        $("#images").trigger("click");    
        });



  
/*For 75 limit*/
    var maxWords = 75;
   $( "#usersitterhouses-about-home-desc" ).keypress(function() {
         var len = (this).value.length;
          var $this, wordcount;
           $this = $(this);
           wordcount = $this.val().split(/\b[\s,\.-:;]*/).length;
            if (wordcount > maxWords) {
              jQuery(".word_count span").text("" + maxWords);
            
              return false;
          } else {
              return jQuery('#about-home-preview').text(maxWords - wordcount+" words remainings");
          }

 });
 $('#usersitterhouses-about-home-desc').change(function() {
            var words = $(this).val().split(/\b[\s,\.-:;]*/);
          if (words.length > maxWords) {
                words.splice(maxWords);
                $(this).val(words.join(" "));
                alert("You've reached the maximum allowed words. Extra words removed.");
          }
        });
var maxSPDWords = 75;
 $( "#usersitterhouses-spaces-access-desc" ).keypress(function() {
         var len = (this).value.length;
          var $this, spd_wordcount;
           $this = $(this);
           spd_wordcount = $this.val().split(/\b[\s,\.-:;]*/).length;
            if (spd_wordcount > maxSPDWords) {
              jQuery(".word_count span").text("" + maxSPDWords);
            
              return false;
          } else {
              return jQuery('#space-word-preview').text(maxSPDWords - spd_wordcount+" words remainings");
          }

 });
 $('#usersitterhouses-spaces-access-desc').change(function() {
            var spd_words = $(this).val().split(/\b[\s,\.-:;]*/);
          if (spd_words.length > maxSPDWords) {
                spd_words.splice(maxSPDWords);
                $(this).val(spd_words.join(" "));
                alert("You've reached the maximum allowed words. Extra words removed.");
          }
        });
 
   $( "#usersitterhouses-home-pets-desc" ).keypress(function() {
         var len = (this).value.length;
          var $this, wordcount;
           $this = $(this);
           wordcount = $this.val().split(/\b[\s,\.-:;]*/).length;
            if (wordcount > maxWords) {
              jQuery(".word_count span").text("" + maxWords);
            
              return false;
          } else {
              return jQuery('#home-pets-preview').text(maxWords - wordcount+" words remainings");
          }

 });
 $('#usersitterhouses-home-pets-desc').change(function() {
            var words = $(this).val().split(/\b[\s,\.-:;]*/);
          if (words.length > maxWords) {
                words.splice(maxWords);
                $(this).val(words.join(" "));
                alert("You've reached the maximum allowed words. Extra words removed.");
          }
        });
   /*End*/
   
});
</script>