<?php echo $this->element('adminElements/main_editor');?>
<div class="">
                   <div class="row">
					
					
					 <div class="col-md-12 col-sm-12 col-xs-12">
						    <div class="x_panel">
                                <div class="x_title">
                                    <h2>Edit Fag<small></small></h2>
									<div class="clearfix"></div>
							 </div>
							 <?= $this->element('adminElements/error_msg'); ?>
							 <div class="x_content">
								<?= $this->element('adminElements/validations'); ?>
								<!--Form edit user -->
							        <?php echo $this->Form->create($faqs, [
										'url' => ['controller' => 'faqs', 'action' => 'edit_faqs'],
										'class'=>'form-horizontal form-label-left',
										'id'=>'editfaqs',
										'enctype'=>'multipart/form-data',
										'novalidate'=>'novalidate',
										 'autocomplete'=>'off',
										
									]);?>
									<div class="item form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Question <span class="required">*</span>
										</label>
										<?php 
										
                                         $howId = base64_encode(convert_uuencode($faqs->id)); 
										
										//echo $howId; die;
										echo $this->Form->input('howId',[
										        'type'=>'hidden',
												 'value'=>$howId ]);?>
										<?php 
										 echo $this->Form->input('Faqs.question',[
												'templates' => ['inputContainer' => '<div class="col-md-6 col-sm-6 col-xs-12">{{content}}</div>'],
												'label' => false,
												'class'=>'form-control col-md-7 col-xs-12'/*,
												'value'=>$categoryInfo->question != '' ?$categoryInfo->question:''*/]);
										 ?>
									</div>
									
									<div class="item form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Answer<span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											 <?php echo $this->Form->textarea('Faqs.answer',
											 ['escape' => false,
											  'class'=>'form-control col-md-7 col-xs-12 tinymce',
                                              /* 'value'=>$categoryInfo->answer != '' ?$categoryInfo->answer:'' */]);?>
										</div>
									</div>
									
									<div class="item form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="coupon_type">Faq Type<span class="required">*</span>
										</label>
										<div class='col-md-6 col-sm-6 col-xs-12'>
										<?php 
										/* echo $this->Form->radio(
												'faqs.faq_type',[												
												["value"=>'sitter','text'=>"Sitter" ],
												["value"=>'guest','text'=>"Guest"]
												]);
										 */
										
										echo $this->Form->input('Faqs.faq_type', [
											'type' => 'radio',
											'label' => false,
											'value' => $faqs->faq_type,											
											'options' => ['sitter'=>'Sitter','guest'=>'Guest'],
										]
										);										 
										?>
										</div>
									</div>
									<div class="item form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="coupon_type">Coupon Type<span class="required">*</span>
										</label>
										<div class='col-md-6 col-sm-6 col-xs-12'>
										
											<?php			 echo $this->Form->input(
																'Faqs.category_id',[
																"type"=>"select",
																'label' => false,
																'value' => $faqs->category_id,		
																
																"options"=> $CategoryData ,
																'class'=>'form-control col-md-7 col-xs-12','id'=>'c_type'
																
											]);//}?>
										
									</div>
									<div class="ln_solid"></div>
									<div class="form-group">
										<div class="col-md-6 col-md-offset-3">
											<button type="button"  class="btn btn-primary" onclick="window.history.go(-1);"  >Cancel</button>
											<button id="send" type="submit" class="btn btn-success">Submit</button>
										</div>
									</div>
                                    <?php echo $this->form->end(); ?>
                                <!-- end form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
		 <script>
		
		 $(document).ready(function(){
				// initialize the validator function
				validator.message['date'] = 'not a real date';

				// validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
				$('form')
					.on('blur', 'input[required], input.optional, select.required', validator.checkField)
					.on('change', 'select.required', validator.checkField)
					.on('keypress', 'input[required][pattern]', validator.keypress);

				$('.multi.required')
					.on('keyup blur', 'input', function () {
						validator.checkField.apply($(this).siblings().last()[0]);
					});

				// bind the validation to the form submit event
				//$('#send').click('submit');//.prop('disabled', true);

				$('#editcategory').submit(function (e) {
				
					e.preventDefault();
					var submit = true;
					// evaluate the form using generic validaing
					if (!validator.checkAll($(this))) {
						submit = false;
					}
					if (submit)
						this.submit();
					return false;
				});

				/* FOR DEMO ONLY */
				$('#vfields').change(function () {
					$('form').toggleClass('mode2');
				}).prop('checked', false);

				$('#alerts').change(function () {
					validator.defaults.alerts = (this.checked) ? false : true;
					if (this.checked)
						$('form .alert').remove();
				}).prop('checked', false);
				
				/*$("#send").click(function(){
				   //$("#profileform").submit();  
				});*/
	});
	</script> 
