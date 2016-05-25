<link rel="stylesheet" href="/sitter_guide/css/Front/tokenfield-typeahead.min.css"/>
<link rel="stylesheet" href="/sitter_guide/css/Front/bootstrap-tokenfield.min.css"/>
<script src="/sitter_guide/js/Front/bootstrap-tokenfield.js"></script>
<link href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
 <div class="col-md-9 col-lg-10 col-sm-8 " id="content">
        <div class="row">

        <div class="profiletab-section">
          
                <h3><img src="<?php echo HTTP_ROOT; ?>img/sitter-img.png"><?php echo $this->requestAction('app/get-translate/'.base64_encode('Sitter Profile')); ?></h3>
                
                 <?php echo $this->element('frontElements/profile/sitter_nav');?>
          
          <div class="tab-sectioninner book-pro">
            <div class="tab-content">


               <div id="menu2" class="tab-pane fade tab-comm active in">
                <h2 class="head-font"><?php echo $this->requestAction('app/get-translate/'.base64_encode('Now let us know why you’re a great sitter')); ?></h2>
                <p class="head-font2 pad-head-foot"><?php echo $this->requestAction('app/get-translate/'.base64_encode('Your sitter preferences are managed here')); ?></p>
                 <p class="head-font2 pad-head-foot-bot"><?php echo $this->requestAction('app/get-translate/'.base64_encode('Share with us your sitting style, as well as what you will and wont accept as a sitter.')); ?></p>
                
                  <?php echo $this->Form->create(@$sitter_info, [
                      'url' => ['controller' => 'dashboard', 'action' => 'about-sitter'],
                      'role'=>'form',
                      'id'=>'aboutSitter',
                      'autocomplete'=>'off',
                  ]);?>

                    <?php echo $this->Form->input('UserAboutSitters.id',[
                             'type'=>'hidden',
                             'value'=>@$aboutSitterId
                        ]);
                      ?>
                  <div class="row word-limit">
                        <div class="form-group col-lg-6 col-md-6 col-sm 6 col-xs-12">
                          <label for=""><?php echo $this->requestAction('app/get-translate/'.base64_encode('Your headline. Describe yourself and what makes you great')); ?> 
                            <span><a href="#" data-toggle="tooltip" data-placement="top" title="<?php echo $this->requestAction('app/get-translate/'.base64_encode('This will appear at the top of your profile page and on search results')); ?>"><img class="close11" src="<?php echo HTTP_ROOT;?>img/close.png"></a></span>
                          </label>
                         <?php echo $this->Form->input('UserAboutSitters.your_self',[
                                 'templates' => ['inputContainer' => '{{content}}'],
                                 'type'=>'textarea',
                                 'label'=>false,
                                 'required'=>false
                          ]); ?>
                          <?php $max=35; if(!empty($sitter_info['your_self'])){ $rem = $max-str_word_count ($sitter_info['your_self']);} ?>
                          <p class="w-limit" id="35-word-preview"><?php if(!empty($rem)){echo $rem ;}else{echo "35";} echo $this->requestAction('app/get-translate/'.base64_encode(' words remainings')); ?></p>
                          <label class="error" for="useraboutsitters-your-self" generated="true"></label>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm 6 col-xs-12">
                          <label for=""><?php echo $this->requestAction('app/get-translate/'.base64_encode('Your sitter profile in detail. Why should a new client choose you?')); ?>   
                          <span><a href="#" data-toggle="tooltip" data-placement="top" title="<?php echo $this->requestAction('app/get-translate/'.base64_encode('This will appear on your profile page just under your headline and on search results')); ?>"><img class="close11" src="<?php echo HTTP_ROOT;?>img/close.png"></a></span>
                          </label>
                          <?php echo $this->Form->input('UserAboutSitters.client_choose_desc',[
                                 'templates' => ['inputContainer' => '{{content}}'],
                                 'type'=>'textarea',
                                 'label'=>false,
                                  'required'=>false
                          ]); ?>
                          <?php $max=75; if(!empty($sitter_info['client_choose_desc'])){ $rem = $max-str_word_count ($sitter_info['client_choose_desc']);} ?>
                          <p class="w-limit" id="75-word-preview"><?php if(!empty($rem)){echo $rem ;}else{echo "75";} echo $this->requestAction('app/get-translate/'.base64_encode(' words remainings')); ?></p>
                          <label class="error" for="useraboutsitters-client-choose-desc" generated="true"></label>
                        </div>
                  </div>
                
                  
                  <p class="head-font2 pad-head-foot"><p class="" id="75-word-preview"><?php echo $this->requestAction('app/get-translate/'.base64_encode('Set your sitting preferences for when your sitting at your house or your guests house')); ?></p>
                  <div class="row">
                    <div class="col-lg-6">
                    <p class="title-head"><?php echo $this->requestAction('app/get-translate/'.base64_encode('At your house ')); ?></p>
                    <div class="row">

                    <div class="form-group col-lg-8">
                      <label for=""><?php echo $this->requestAction('app/get-translate/'.base64_encode('Accepted Pets & breeds ')); ?></label>
                      <?php echo $this->Form->input('UserAboutSitters.sh_pet',[
                        'templates' => ['inputContainer' => '{{content}}'],
                        'label' => false,
                         'required' => false,
                        'type'=>'select',
						
                        'options'=>[''=>'---','small_pets'=>'I accept small pets(0-7kg)','medium_pets'=>'I accept Medium pets (8-18kg)','large_pets'=>'I accept Large dogs (18-45kg)','gaint_dogs'=>'I accept Giant dogs (45+kg)','cats'=>'I accept cats','puppies_under_1_year'=>'I accept puppies under 1 year','kittens_under_1_year'=>'I accept kittens under 1 year','ferrets'=>'I accept ferrets','small_animals'=>'I accept small animals (rodents, rabbits birds…)','other'=>'Other (specify)','any'=>'Any'],
                        'class'=>'form-control'
                        ]);
                      ?>
                    </div>

                      
                    </div>
                    <div class="row">
                        <div class="form-group">
						   <div class="form-group col-lg-8">
								<label for=""><?php echo $this->requestAction('app/get-translate/'.base64_encode('Accepted Pet Sizes')); ?></label>						
							<input class="form-control col-md-7 col-xs-12" id="skillAuto" type="text" name="sh_pet_size" value="" >
						  </div>
						</div> 
					</div>
                    <!--  <div class="form-group col-lg-8">
                        <label for=""><?php echo $this->requestAction('app/get-translate/'.base64_encode('Accepted Pet Sizes')); ?></label>
                        <?php echo $this->Form->input('UserAboutSitters.sh_pet_size',[
                        'templates' => ['inputContainer' => '{{content}}'],
                        'label' => false,
                         'required' => false,
                         'value'=>@$shSizeArr,
						 'id'=>'petsize',
                        'type'=>'select',

                        'options'=>[''=>'---','0-7'=>'I accept small pets(0-7kg)','8-18'=>'I accept Medium pets (8-18kg)','18-45'=>'I accept Large dogs (18-45kg)','45+'=>'I accept Giant dogs (45+kg)','cats'=>'I accept cats','puppies_under_1_year'=>'I accept puppies under 1 year','kittens_under_1_year'=>'I accept kittens under 1 year','ferrets'=>'I accept ferrets','small_animals'=>'I accept small animals (rodents, rabbits birds…)','other'=>'Other (specify)','any'=>'Any'],
                        'class'=>'form-control mmm',
                        'multiple'=>"true"

                        

                        ]);
                      ?>
					  </div>
					   <div class="form-group col-lg-8">
					  <?php echo $this->Form->input('UserAboutSitters.sh_pet_size',[
                                 'templates' => ['inputContainer' => '{{content}}'],
                                 'type'=>'text',
								 'id'=>'shpetsize',
                                 'label'=>false,
                                 'class'=>'shpetsize form-control', 
                                  'required'=>false
                          ]); ?>
                      </div>-->

                    <div class="row">
                      <div class="form-group col-lg-8">
                      <label for=""><?php echo $this->requestAction('app/get-translate/'.base64_encode('Preferred Guest Ages')); ?>  </label>
                         <?php echo $this->Form->input('UserAboutSitters.sh_guest_age',[
                        'templates' => ['inputContainer' => '{{content}}'],
                        'label' => false,
                        'required' => false,
                        'type'=>'select',
                        'options'=>[''=>'---','<1'=>'<1 year','1-3'=>'1-3 years','4-8'=>'4-8 years','9+'=>'9+ years','Any'=>'Any'],
                        'class'=>'form-control']);
                      ?>
                    </div>

                    </div>


<div class="row">
<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11">

<div class="form-group pad-head-foot ">
                    <label><?php echo $this->requestAction('app/get-translate/'.base64_encode('Accept Un-Neutered Pets')); ?>  </label>
                    <span class="pull-right m-rights">
                      <?php echo $this->Form->input(
                          'UserAboutSitters.sh_un_neutered_pets',
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
                    
                    <div class="form-group ">
                    <label><?php echo $this->requestAction('app/get-translate/'.base64_encode('Accept females on heat')); ?> </label>
                    <span class="pull-right m-rights">
                      <?php echo $this->Form->input(
                          'UserAboutSitters.sh_females_on_heat',
                          [
                            'type'=>"radio",
                             'label'=>false,
                             'required'=>false,
                             "options"=>["yes"=>"Yes","no"=>"No"],
                             'default' => 'no',
                              'templates' => ['inputContainer' => '{{content}}']
                        ]); ?></span> 
                    </div>
                    
               <div class="form-group ">
                    <label><?php echo $this->requestAction('app/get-translate/'.base64_encode('Accept un-spayed females')); ?> </label>
                    <span class="pull-right m-rights">
                      <?php echo $this->Form->input(
                          'UserAboutSitters.sh_un_spayed_females',
                          [
                            'type'=>"radio",
                             'label'=>false,
                             'required'=>false,
                             "options"=>["yes"=>"Yes","no"=>"No"],
                             'default' => 'no',
                              'templates' => ['inputContainer' => '{{content}}']
                        ]); ?></span> 
                    </div>  
                    
                    <div class="form-group ">
                    <label><?php echo $this->requestAction('app/get-translate/'.base64_encode('Accept un-toilet trained pets')); ?>   </label>
                    <span class="pull-right m-rights">
                       <?php echo $this->Form->input(
                          'UserAboutSitters.sh_un_toilet_trained',
                          [
                            'type'=>"radio",
                             'label'=>false,
                             'required'=>false,
                             "options"=>["yes"=>"Yes","no"=>"No"],
                             'default' => 'no',
                              'templates' => ['inputContainer' => '{{content}}']
                        ]); ?> </span> 
                    </div>
                    
                    <div class="form-group ">
                    <label><?php echo $this->requestAction('app/get-translate/'.base64_encode('Mixed Familes')); ?>    </label>
                        <?php echo $this->Form->input(
                          'UserAboutSitters.mixed_familes',
                          [
                             'label'=>false,
                             'required'=>false,
                             'class'=>'form-control',
                             'templates' => ['inputContainer' => '{{content}}'],
                             'placeholder'=>'I look after pets from different families'
                        ]); ?> 
                    </div>

</div>
</div>
                      
                      
                    </div>

                    <div class="col-lg-6">
                   <p class="title-head"><?php echo $this->requestAction('app/get-translate/'.base64_encode('At your house')); ?> </p>
                   <div class="row">

                    <div class="form-group col-lg-8">
                      <label for=""><?php echo $this->requestAction('app/get-translate/'.base64_encode('Accepted Pets & breeds')); ?></label>
                      <?php echo $this->Form->input('UserAboutSitters.gh_pet',[
                        'templates' => ['inputContainer' => '{{content}}'],
                        'label' => false,
                         'required' => false,
                        'type'=>'select',
                        'options'=>[''=>'---','small_pets'=>'I accept small pets(0-7kg)','medium_pets'=>'I accept Medium pets (8-18kg)','large_pets'=>'I accept Large dogs (18-45kg)','gaint_dogs'=>'I accept Giant dogs (45+kg)','cats'=>'I accept cats','puppies_under_1_year'=>'I accept puppies under 1 year','kittens_under_1_year'=>'I accept kittens under 1 year','ferrets'=>'I accept ferrets','small_animals'=>'I accept small animals (rodents, rabbits birds…)','other'=>'Other (specify)','any'=>'Any'],
                        'class'=>'form-control'
                        ]);
                      ?>
                    </div>

                      
                    </div>
                    
					 <div class="row">
                        <div class="form-group">
						   <div class="form-group col-lg-8">
								<label for=""><?php echo $this->requestAction('app/get-translate/'.base64_encode('Accepted Pet Sizes')); ?></label>						
							<input class="form-control col-md-7 col-xs-12" id="gh_pet_sizes" type="text" name="gh_pet_sizes" value="" >
						  </div>
						</div> 
					</div>
					
					
					
                  <!--  <div class="row">
                      <?php if(!empty(@$sitter_info->gh_pet_sizes)){
                         $ghSizeArr = explode(",",@$sitter_info->gh_pet_sizes);
                    } 
                    ?>
                      <div class="form-group col-lg-8">
                        <label for=""><?php echo $this->requestAction('app/get-translate/'.base64_encode('Accepted Pet Sizes')); ?></label>
                      <?php echo $this->Form->input('UserAboutSitters.gh_pet_sizes',[
                        'templates' => ['inputContainer' => '{{content}}'],
                        'label' => false,
                         'required' => false,
                        'type'=>'select',
                        'value'=>@$ghSizeArr,
                        'options'=>[''=>'---','small_pets'=>'I accept small pets(0-7kg)','medium_pets'=>'I accept Medium pets (8-18kg)','large_pets'=>'I accept Large dogs (18-45kg)','gaint_dogs'=>'I accept Giant dogs (45+kg)','cats'=>'I accept cats','puppies_under_1_year'=>'I accept puppies under 1 year','kittens_under_1_year'=>'I accept kittens under 1 year','ferrets'=>'I accept ferrets','small_animals'=>'I accept small animals (rodents, rabbits birds…)','other'=>'Other (specify)','any'=>'Any'],
                        'class'=>'form-control mmm',
                        'multiple'=>"true"
                        ]);
                      ?>
                      </div>
                    </div> -->
							
                    <div class="row">
                      <div class="form-group col-lg-8">
                      <label for=""><?php echo $this->requestAction('app/get-translate/'.base64_encode('Preferred Guest Ages')); ?>  </label>
                      <?php echo $this->Form->input('UserAboutSitters.gh_guest_age',[
                        'templates' => ['inputContainer' => '{{content}}'],
                        'label' => false,
                        'required' => false,
                        'type'=>'select',
                        'options'=>[''=>'---','<1'=>'<1 year','1-3'=>'1-3 years','4-8'=>'4-8 years','9+'=>'9+ years','Any'=>'Any'],
                        'class'=>'form-control']);
                      ?>
                    </div>
                      
                    </div>

                    <div class="row">
<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11">

<div class="form-group pad-head-foot ">
                    <label><?php echo $this->requestAction('app/get-translate/'.base64_encode('Accept Un-Neutered Pets ')); ?> </label>
                    <span class="pull-right m-rights">
                      <?php echo $this->Form->input(
                          'UserAboutSitters.gh_un_neutered_pets',
                          [
                            'type'=>"radio",
                             'label'=>false,
                             'required'=>false,
                             "options"=>["yes"=>"Yes","no"=>"No"],
                             'default' => 'no',
                              'templates' => ['inputContainer' => '{{content}}']
                        ]); ?> </span> 
                    </div>
                    
                    <div class="form-group ">
                    <label><?php echo $this->requestAction('app/get-translate/'.base64_encode('Accept females on heat ')); ?> </label>
                    <span class="pull-right m-rights"> 
                      <?php echo $this->Form->input(
                          'UserAboutSitters.gh_females_on_heat',
                          [
                            'type'=>"radio",
                             'label'=>false,
                             'required'=>false,
                             "options"=>["yes"=>"Yes","no"=>"No"],
                             'default' => 'no',
                              'templates' => ['inputContainer' => '{{content}}']
                        ]); ?></span> 
                    </div>
                    
               <div class="form-group ">
                    <label><?php echo $this->requestAction('app/get-translate/'.base64_encode('Accept un-spayed females')); ?> </label>
                     <span class="pull-right m-rights">
                      <?php echo $this->Form->input(
                          'UserAboutSitters.gh_un_spayed_females',
                          [
                            'type'=>"radio",
                             'label'=>false,
                             'required'=>false,
                             "options"=>["yes"=>"Yes","no"=>"No"],
                             'default' => 'no',
                              'templates' => ['inputContainer' => '{{content}}']
                        ]); ?></span> 
                    </div>  
                    
                    <div class="form-group ">
                    <label><?php echo $this->requestAction('app/get-translate/'.base64_encode('Accept un-toilet trained pets')); ?>  </label>
                    <span class="pull-right m-rights">
                       <?php echo $this->Form->input(
                          'UserAboutSitters.gh_un_toilet_trained',
                          [
                            'type'=>"radio",
                             'label'=>false,
                             'required'=>false,
                             "options"=>["yes"=>"Yes","no"=>"No"],
                             'default' => 'no',
                              'templates' => ['inputContainer' => '{{content}}']
                        ]); ?> </span> 
                    </div>

</div>
</div>

                        
                    </div>
                    

                  </div>
                 
                      <div class="row">
                    <p class="col-lg-12 sp-tb"><a href="<?php echo HTTP_ROOT.'dashboard/sitter-house'; ?>"><button type="button" class="btn previous pull-left"><i class="fa fa-chevron-left"></i><?php echo $this->requestAction('app/get-translate/'.base64_encode('Previous')); ?></button></a>
                    <input type="submit" class="pull-right btn Continue" value="Continue"></p>
                    </div>

</form>
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
      //alert("okokok");
        jQuery('#multiple_upload_form').ajaxForm({
            //display the uploaded images
            //alert("okokok");
            target:'#images_preview',
            beforeSubmit:function(e){
                $('.uploading').show();
            },
            success:function(e){
              alert(e);
                $('.uploading').hide();
            },
            error:function(e){
            }
        }).submit();
    });
   /*For 35 limit*/
   var max35Words = 35;
   $( "#useraboutsitters-your-self" ).keypress(function() {
         var len = (this).value.length;

          var $this, wordCount;
           $this = $(this);
           wordCount = $this.val().split(/\b[\s,\.-:;]*/).length;
          if (wordCount > max35Words) {
              jQuery(".word_count span").text("" + max35Words);
            
              return false;
          } else {
            //alert(len);
              return jQuery('#35-word-preview').text(max35Words - wordCount+" words remainings...");
          }

 });
 $('#useraboutsitters-your-self').change(function(){
            var selfwords = $(this).val().split(/\b[\s,\.-:;]*/);
          if (selfwords.length > max35Words) {
                selfwords.splice(max35Words);
                $(this).val(selfwords.join(" "));
                alert("You've reached the maximum allowed words. Extra words removed.");
          }
        });
 /*end 35*/
 /*For 75 limit*/
  var maxWords = 75;
  $( "#useraboutsitters-client-choose-desc" ).keypress(function(){
         var len = (this).value.length;
          var $this, wordcount;
           $this = $(this);
           wordcount = $this.val().split(/\b[\s,\.-:;]*/).length;
            if (wordcount > maxWords) {
              jQuery(".word_count span").text("" + maxWords);
            
              return false;
          } else {
              return jQuery('#75-word-preview').text(maxWords - wordcount+" words remainings...");
          }
});
$('#useraboutsitters-client-choose-desc').change(function(){
            var words = $(this).val().split(/\b[\s,\.-:;]*/);
          if (words.length > maxWords) {
                words.splice(maxWords);
                $(this).val(words.join(" "));
                alert("You've reached the maximum allowed words. Extra words removed.");
          }
        });
 /*end 75*/
});
/*End multiple profile photos*/
</script>
<?php 

				$testArr = array(
				array("value"=>"0-7","label"=>"I accept small pets(0-7kg)"),
				array("value"=>"8-18","label"=>"I accept Medium pets (8-18kg)"),
				array("value"=>"18-45","label"=>"I accept Large dogs (18-45kg)"),
				array("value"=>"45+","label"=>"I accept Giant dogs (45+kg)"),
				array("value"=>"cats","label"=>"I accept cats"),
				array("value"=>"puppies_under_1_year","label"=>"I accept puppies under 1 year"),
				array("value"=>"kittens_under_1_year","label"=>"I accept kittens under 1 year"),
				array("value"=>"ferrets","label"=>"I accept ferrets"),
				array("value"=>"small_animals","label"=>"I accept small animals (rodents, rabbits birds…)"),
				array("value"=>"other","label"=>"Other (specify)"),
				array("value"=>"any","label"=>"Any"),

				);
				$jsonval = json_encode($testArr);
				//pr(@$ghSizeArr);die;
				if(!empty($sizeArr)){
						$newArr=explode(",",$sizeArr);
						$jsonval = json_encode($testArr);
						$mainArray=array();
						foreach($testArr as $key=> $arr)
						{ 
						$new=$arr['value'];
						$new2=$arr['label'];
						if(in_array($new,$newArr) )
								{
									$mainArray[]=array("value"=>$new,"label"=>$new2);
								}
						}
						$editJsonArr=json_encode($mainArray);
				}	
				if(!empty($ghSizeArr)){
					$ghmainArray=array();
					foreach($testArr as $key=> $arr)
					{ 
						$val=$arr['value'];
						$lab=$arr['label'];
						if(in_array($val,$ghSizeArr) )
						{
							$ghmainArray[]=array("value"=>$val,"label"=>$lab);
						}
					}
					$editghJsonArr=json_encode($ghmainArray);	
				}
														
				//pr($editghJsonArr);die;										
				?>
<script>
  $(document).ready(function() {


    //$("#skillAuto").tokenfield({});
    $('#skillAuto').tokenfield({
      autocomplete: {
      source: <?php echo $jsonval; ?>,
      delay: 100
    },
      showAutocompleteOnFocus: true,

    });

    $('#skillAuto').on('tokenfield:createtoken', function (event) {
      var existingTokens = $(this).tokenfield('getTokens');
      $.each(existingTokens, function(index, token) {
          if (token.value === event.attrs.value)
              event.preventDefault();
    });
});
  });
</script>

<?php if(@$skillFlag) { ?>
    <script>
    $(document).ready(function() {
    
      $('#skillAuto').tokenfield('setTokens', <?php echo $editJsonArr; ?>);
    });
    </script>
<?php } ?>



<script>
  $(document).ready(function() {


    //$("#skillAuto").tokenfield({});
    $('#gh_pet_sizes').tokenfield({
      autocomplete: {
      source: <?php echo $jsonval; ?>,
      delay: 100
    },
      showAutocompleteOnFocus: true,

    });

    $('#gh_pet_sizes').on('tokenfield:createtoken', function (event) {
      var existingTokens = $(this).tokenfield('getTokens');
      $.each(existingTokens, function(index, token) {
          if (token.value === event.attrs.value)
              event.preventDefault();
    });
});
  });
</script>

<?php if(@$gh_pet_sizesFlag) { ?>
    <script>
    $(document).ready(function() {
    
      $('#gh_pet_sizes').tokenfield('setTokens', <?php echo $editghJsonArr; ?>);
    });
    </script>
<?php } ?>
