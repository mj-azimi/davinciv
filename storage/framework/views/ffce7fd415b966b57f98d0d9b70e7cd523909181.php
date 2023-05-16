

<?php $__env->startSection('page-header'); ?>
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0"><?php echo e(__('Davinci Settings')); ?></h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa-solid fa-microchip-ai mr-2 fs-12"></i><?php echo e(__('Admin')); ?></a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="<?php echo e(route('admin.davinci.dashboard')); ?>"> <?php echo e(__('Davinci Management')); ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="#"> <?php echo e(__('Davinci Settings')); ?></a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>					
	<div class="row">
		<div class="col-lg-8 col-md-12 col-xm-12">
			<div class="card border-0">
				<div class="card-header">
					<h3 class="card-title"><i class="fa-sharp fa-solid fa-sliders mr-2 text-primary"></i><?php echo e(__('Setup Davinci Settings')); ?></h3>
				</div>
				<div class="card-body">
				
					<form action="<?php echo e(route('admin.davinci.configs.store')); ?>" method="POST" enctype="multipart/form-data">
						<?php echo csrf_field(); ?>

						<div class="row">							

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="input-box">	
									<h6><?php echo e(__('Default OpenAI Model')); ?> <span class="text-muted">(<?php echo e(__('For Admin Group')); ?>)</span><span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
										  <select id="default-model-admin" name="default-model-admin" data-placeholder="<?php echo e(__('Select Default Model')); ?>:">			
										<option value="text-ada-001" <?php if( config('settings.default_model_admin')  == 'text-ada-001'): ?> selected <?php endif; ?>><?php echo e(__('Ada')); ?> (<?php echo e(__('GPT 3')); ?>)</option>
										<option value="text-babbage-001" <?php if( config('settings.default_model_admin')  == 'text-babbage-001'): ?> selected <?php endif; ?>><?php echo e(__('Babbage')); ?> (<?php echo e(__('GPT 3')); ?>)</option>
										<option value="text-curie-001" <?php if( config('settings.default_model_admin')  == 'text-curie-001'): ?> selected <?php endif; ?>><?php echo e(__('Curie')); ?> (<?php echo e(__('GPT 3')); ?>)</option>
										<option value="text-davinci-003" <?php if( config('settings.default_model_admin')  == 'text-davinci-003'): ?> selected <?php endif; ?>><?php echo e(__('Davinci')); ?> (<?php echo e(__('GPT 3')); ?>)</option>
										<option value="gpt-3.5-turbo" <?php if( config('settings.default_model_admin')  == 'gpt-3.5-turbo'): ?> selected <?php endif; ?>><?php echo e(__('ChatGPT')); ?> (<?php echo e(__('3.5 Turbo')); ?>)</option>
										<option value="gpt-4" <?php if( config('settings.default_model_admin')  == 'gpt-4'): ?> selected <?php endif; ?>><?php echo e(__('GPT 4')); ?> (<?php echo e(__('8K')); ?>)</option>
										<option value="gpt-4-32k" <?php if( config('settings.default_model_admin')  == 'gpt-4-32k'): ?> selected <?php endif; ?>><?php echo e(__('GPT 4')); ?> (<?php echo e(__('32K')); ?>)</option>
									</select>
								</div>								
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="input-box">	
									<h6><?php echo e(__('Default Language')); ?> <span class="text-muted">(<?php echo e(__('For All Groups')); ?>)</span><span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
										  <select id="language" name="language" data-placeholder="<?php echo e(__('Select Default Language')); ?>:">	
											<?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<option value="<?php echo e($language->language_code); ?>" data-img="<?php echo e(URL::asset($language->language_flag)); ?>" <?php if(config('settings.default_language') == $language->language_code): ?> selected <?php endif; ?>> <?php echo e($language->language); ?></option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select>
								</div>								
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="input-box">
									<h6><?php echo e(__('Tone of Voice Default State')); ?> <span class="text-muted">(<?php echo e(__('For All Groups')); ?>)</span> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
									<select id="tone" name="tone" data-placeholder="<?php echo e(__('Select tone of voice')); ?>">
										<option value="funny" <?php if(config('settings.tone_default_state') == 'funny'): ?> selected <?php endif; ?>><?php echo e(__('Funny')); ?></option>
										<option value="casual" <?php if(config('settings.tone_default_state') == 'casual'): ?> selected <?php endif; ?>> <?php echo e(__('Casual')); ?></option>																															
										<option value="excited" <?php if(config('settings.tone_default_state') == 'excited'): ?> selected <?php endif; ?>> <?php echo e(__('Excited')); ?></option>																															
										<option value="professional" <?php if(config('settings.tone_default_state') == 'professional'): ?> selected <?php endif; ?>> <?php echo e(__('Professional')); ?></option>																															
										<option value="witty" <?php if(config('settings.tone_default_state') == 'witty'): ?> selected <?php endif; ?>> <?php echo e(__('Witty')); ?></option>																															
										<option value="sarcastic" <?php if(config('settings.tone_default_state') == 'sarcastic'): ?> selected <?php endif; ?>> <?php echo e(__('Sarcastic')); ?></option>																															
										<option value="feminine" <?php if(config('settings.tone_default_state') == 'feminine'): ?> selected <?php endif; ?>> <?php echo e(__('Feminine')); ?></option>																															
										<option value="masculine" <?php if(config('settings.tone_default_state') == 'masculine'): ?> selected <?php endif; ?>> <?php echo e(__('Masculine')); ?></option>																															
										<option value="bold" <?php if(config('settings.tone_default_state') == 'bold'): ?> selected <?php endif; ?>> <?php echo e(__('Bold')); ?></option>																															
										<option value="dramatic" <?php if(config('settings.tone_default_state') == 'dramatic'): ?> selected <?php endif; ?>> <?php echo e(__('Dramatic')); ?></option>																															
										<option value="gumpy" <?php if(config('settings.tone_default_state') == 'gumpy'): ?> selected <?php endif; ?>> <?php echo e(__('Gumpy')); ?></option>																															
										<option value="secretive" <?php if(config('settings.tone_default_state') == 'secretive'): ?> selected <?php endif; ?>> <?php echo e(__('Secretive')); ?></option>																															
									</select>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="input-box">
									<h6><?php echo e(__('Creativity Default State')); ?> <span class="text-muted">(<?php echo e(__('For All Groups')); ?>)</span> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
									<select id="creativity" name="creativity" data-placeholder="<?php echo e(__('Select creativity state')); ?>">
										<option value="low" <?php if(config('settings.creativity_default_state') == 'low'): ?> selected <?php endif; ?>><?php echo e(__('Low')); ?></option>
										<option value="average" <?php if(config('settings.creativity_default_state') == 'average'): ?> selected <?php endif; ?>> <?php echo e(__('Average')); ?></option>																															
										<option value="high" <?php if(config('settings.creativity_default_state') == 'high'): ?> selected <?php endif; ?>> <?php echo e(__('High')); ?></option>																																																													
									</select>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="input-box">
									<h6><?php echo e(__('Templates Access')); ?> <span class="text-muted">(<?php echo e(__('For Admin Group')); ?>)</span> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
									<select id="templates-admin" name="templates-admin" data-placeholder="<?php echo e(__('Set Templates Access')); ?>">
										<option value="all" <?php if(config('settings.templates_access_admin') == 'all'): ?> selected <?php endif; ?>><?php echo e(__('All Templates')); ?></option>
										<option value="professional" <?php if(config('settings.templates_access_admin') == 'professional'): ?> selected <?php endif; ?>> <?php echo e(__('Only Professional Templates')); ?></option>																															
										<option value="standard" <?php if(config('settings.templates_access_admin') == 'standard'): ?> selected <?php endif; ?>> <?php echo e(__('Only Standard Templates')); ?></option>																																																													
									</select>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="input-box">	
									<h6><?php echo e(__('Maximum Result Length')); ?> <span class="text-muted">(<?php echo e(__('In Words')); ?>) (<?php echo e(__('For Admin Group')); ?>)</span><span class="text-required"><i class="fa-solid fa-asterisk"></i></span><i class="ml-3 text-dark fs-13 fa-solid fa-circle-info" data-tippy-content="<?php echo e(__('OpenAI has a hard limit based on Token limits for each model. Refer to OpenAI documentation to learn more. As a recommended by OpenAI, max result length is capped at 1500 words.')); ?>"></i></h6>
									<input type="number" class="form-control <?php $__errorArgs = ['max-results-admin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="max-results-admin" name="max-results-admin" placeholder="Ex: 10" value="<?php echo e(config('settings.max_results_limit_admin')); ?>" required>
									<?php $__errorArgs = ['max-results-admin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p class="text-danger"><?php echo e($errors->first('max-results-admin')); ?></p>
									<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
								</div>								
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="input-box">
									<h6><?php echo e(__('AI Code Feature')); ?> <span class="text-muted">(<?php echo e(__('For User & Subscriber Groups')); ?>)</span> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
									<select id="code-feature-user" name="code-feature-user" data-placeholder="<?php echo e(__('Set AI Code Creation Permission')); ?>">
										<option value='allow' <?php if(config('settings.code_feature_user') == 'allow'): ?> selected <?php endif; ?>><?php echo e(__('Allow')); ?></option>
										<option value='deny' <?php if(config('settings.code_feature_user') == 'deny'): ?> selected <?php endif; ?>> <?php echo e(__('Deny')); ?></option>																															
									</select>
								</div>
							</div>

							

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="input-box">
									<h6><?php echo e(__('AI Image Feature')); ?> <span class="text-muted">(<?php echo e(__('For User & Subscriber Groups')); ?>)</span> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
									<select id="image-feature-user" name="image-feature-user" data-placeholder="<?php echo e(__('Set AI Image Creation Permission')); ?>">
										<option value='allow' <?php if(config('settings.image_feature_user') == 'allow'): ?> selected <?php endif; ?>><?php echo e(__('Allow')); ?></option>
										<option value='deny' <?php if(config('settings.image_feature_user') == 'deny'): ?> selected <?php endif; ?>> <?php echo e(__('Deny')); ?></option>																															
									</select>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="input-box">	
									<h6><?php echo e(__('Default Storage for AI Images')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
									  	<select id="storage" name="default-storage" data-placeholder="<?php echo e(__('Set Default Storage for AI Images')); ?>:">			
										<option value="local" <?php if( config('settings.default_storage')  == 'local'): ?> selected <?php endif; ?>><?php echo e(__('Local Server')); ?></option>
										<option value="aws" <?php if( config('settings.default_storage')  == 'aws'): ?> selected <?php endif; ?>><?php echo e(__('Amazon Web Services')); ?></option>
										<option value="wasabi" <?php if( config('settings.default_storage')  == 'wasabi'): ?> selected <?php endif; ?>><?php echo e(__('Wasabi')); ?></option>
									</select>
								</div>								
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="input-box">	
									<h6><?php echo e(__('Delete AI Image Results After')); ?> <span class="text-muted">(<?php echo e(__('In Days')); ?>) (<?php echo e(__('For All Groups')); ?>)</span><span class="text-required"><i class="fa-solid fa-asterisk"></i></span><i class="ml-3 text-dark fs-13 fa-solid fa-circle-info" data-tippy-content="<?php echo e(__('Default days after which generated AI Images will be deleted, use 0 for never delete. Subscribers can overwrite this baed on their subscription plans')); ?>"></i></h6>
									<input type="number" class="form-control <?php $__errorArgs = ['default-duration'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="default-duration" name="default-duration" value="<?php echo e(config('settings.default_duration')); ?>" required>
									<?php $__errorArgs = ['default-duration'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p class="text-danger"><?php echo e($errors->first('default-duration')); ?></p>
									<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
								</div>								
							</div>
						</div>


						<div class="card border-0 special-shadow mb-7">							
							<div class="card-body">

								<h6 class="fs-12 font-weight-bold mb-4"><i class="fa fa-gift text-info fs-14 mr-2"></i><?php echo e(__('Free Trial Options')); ?> <span class="text-muted">(<?php echo e(__('User Group Only')); ?>)</span></h6>

								<div class="row">			
									
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">	
											<h6><?php echo e(__('Default OpenAI Model')); ?> <span class="text-muted">(<?php echo e(__('For User Group')); ?>)</span><span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<select id="default-model-user" name="default-model-user" data-placeholder="<?php echo e(__('Select Default Model')); ?>:">			
												<option value="text-ada-001" <?php if( config('settings.default_model_user')  == 'text-ada-001'): ?> selected <?php endif; ?>><?php echo e(__('Ada')); ?> (<?php echo e(__('GPT 3')); ?>)</option>
												<option value="text-babbage-001" <?php if( config('settings.default_model_user')  == 'text-babbage-001'): ?> selected <?php endif; ?>><?php echo e(__('Babbage')); ?> (<?php echo e(__('GPT 3')); ?>)</option>
												<option value="text-curie-001" <?php if( config('settings.default_model_user')  == 'text-curie-001'): ?> selected <?php endif; ?>><?php echo e(__('Curie')); ?> (<?php echo e(__('GPT 3')); ?>)</option>
												<option value="text-davinci-003" <?php if( config('settings.default_model_user')  == 'text-davinci-003'): ?> selected <?php endif; ?>><?php echo e(__('Davinci')); ?> (<?php echo e(__('GPT 3')); ?>)</option>
												<option value="gpt-3.5-turbo" <?php if( config('settings.default_model_user')  == 'gpt-3.5-turbo'): ?> selected <?php endif; ?>><?php echo e(__('ChatGPT')); ?> (<?php echo e(__('3.5 Turbo')); ?>)</option>
												<option value="gpt-4" <?php if( config('settings.default_model_user')  == 'gpt-4'): ?> selected <?php endif; ?>><?php echo e(__('GPT 4')); ?> (<?php echo e(__('8K')); ?>)</option>
												<option value="gpt-4-32k" <?php if( config('settings.default_model_user')  == 'gpt-4-32k'): ?> selected <?php endif; ?>><?php echo e(__('GPT 4')); ?> (<?php echo e(__('32K')); ?>)</option>
											</select>
										</div>								
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">
											<h6><?php echo e(__('Templates Access')); ?> <span class="text-muted">(<?php echo e(__('For User Group')); ?>)</span> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<select id="templates-user" name="templates-user" data-placeholder="<?php echo e(__('Set Templates Access')); ?>">
												<option value="all" <?php if(config('settings.templates_access_user') == 'all'): ?> selected <?php endif; ?>><?php echo e(__('All Templates')); ?></option>
												<option value="professional" <?php if(config('settings.templates_access_user') == 'professional'): ?> selected <?php endif; ?>> <?php echo e(__('Only Professional Templates')); ?></option>																															
												<option value="standard" <?php if(config('settings.templates_access_user') == 'standard'): ?> selected <?php endif; ?>> <?php echo e(__('Only Standard Templates')); ?></option>																																																													
											</select>
										</div>
									</div>								
									
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">	
											<h6><?php echo e(__('Maximum Result Length')); ?> <span class="text-muted">(<?php echo e(__('In Words')); ?>)</span><span class="text-required"><i class="fa-solid fa-asterisk"></i></span><i class="ml-3 text-dark fs-13 fa-solid fa-circle-info" data-tippy-content="<?php echo e(__('OpenAI has a hard limit based on Token limits for each model. Refer to OpenAI documentation to learn more. As a recommended by OpenAI, max result length is capped at 1500 words.')); ?>"></i></h6>
											<input type="number" class="form-control <?php $__errorArgs = ['max-results-user'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="max-results-user" name="max-results-user" placeholder="Ex: 10" value="<?php echo e(config('settings.max_results_limit_user')); ?>" required>
											<?php $__errorArgs = ['max-results-user'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
												<p class="text-danger"><?php echo e($errors->first('max-results-user')); ?></p>
											<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div>								
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">								
											<h6><?php echo e(__('Quantity of Words as a Gift upon Registration')); ?> <span class="text-muted">(<?php echo e(__('One Time')); ?>)<span class="text-required"><i class="fa-solid fa-asterisk"></i></span> </span></h6>
											<div class="form-group">							    
												<input type="number" class="form-control <?php $__errorArgs = ['free-tier-words'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="free-tier-words" name="free-tier-words" placeholder="Ex: 1000" value="<?php echo e(config('settings.free_tier_words')); ?>" required>
												<?php $__errorArgs = ['free-tier-words'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
													<p class="text-danger"><?php echo e($errors->first('free-tier-words')); ?></p>
												<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
											</div> 
										</div>							
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">								
											<h6><?php echo e(__('Quantity of Images as a Gift upon Registration')); ?> <span class="text-muted">(<?php echo e(__('One Time')); ?>)<span class="text-required"><i class="fa-solid fa-asterisk"></i></span> </span></h6>
											<div class="form-group">							    
												<input type="number" class="form-control <?php $__errorArgs = ['free-tier-images'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="free-tier-images" name="free-tier-images" placeholder="Ex: 1000" value="<?php echo e(config('settings.free_tier_images')); ?>" required>
												<?php $__errorArgs = ['free-tier-images'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
													<p class="text-danger"><?php echo e($errors->first('free-tier-images')); ?></p>
												<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
											</div> 
										</div>							
									</div>
									
								</div>	
							</div>
						</div>


						<div class="card border-0 special-shadow mb-7">							
							<div class="card-body">

								<h6 class="fs-12 font-weight-bold mb-4"><img src="<?php echo e(URL::asset('img/csp/openai-sm.png')); ?>" class="fw-2 mr-2" alt=""><?php echo e(__('OpenAI')); ?></h6>

								<div class="row">
									<div class="col-lg-12 col-md-6 col-sm-12">								
										<!-- ACCESS KEY -->
										<div class="input-box">								
											<h6><?php echo e(__('OpenAI Secret Key')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<div class="form-group">							    
												<input type="text" class="form-control <?php $__errorArgs = ['secret-key'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="secret-key" name="secret-key" value="<?php echo e(config('services.openai.key')); ?>" autocomplete="off">
												<?php $__errorArgs = ['secret-key'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
													<p class="text-danger"><?php echo e($errors->first('secret-key')); ?></p>
												<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
											</div> 
										</div> <!-- END ACCESS KEY -->
									</div>							
								</div>
	
							</div>
						</div>		
						
						<div class="card border-0 special-shadow mb-7">							
							<div class="card-body">
								<h6 class="fs-12 font-weight-bold mb-4"><img src="<?php echo e(URL::asset('img/csp/aws-sm.png')); ?>" class="fw-2 mr-2" alt=""><?php echo e(__('Amazon Web Services')); ?></h6>

								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12">								
										<!-- ACCESS KEY -->
										<div class="input-box">								
											<h6><?php echo e(__('AWS Access Key')); ?>  <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<div class="form-group">							    
												<input type="text" class="form-control <?php $__errorArgs = ['set-aws-access-key'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="aws-access-key" name="set-aws-access-key" value="<?php echo e(config('services.aws.key')); ?>" autocomplete="off">
												<?php $__errorArgs = ['set-aws-access-key'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
													<p class="text-danger"><?php echo e($errors->first('set-aws-access-key')); ?></p>
												<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
											</div> 
										</div> <!-- END ACCESS KEY -->
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<!-- SECRET ACCESS KEY -->
										<div class="input-box">								
											<h6><?php echo e(__('AWS Secret Access Key')); ?>  <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6> 
											<div class="form-group">							    
												<input type="text" class="form-control <?php $__errorArgs = ['set-aws-secret-access-key'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="aws-secret-access-key" name="set-aws-secret-access-key" value="<?php echo e(config('services.aws.secret')); ?>" autocomplete="off">
												<?php $__errorArgs = ['set-aws-secret-access-key'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
													<p class="text-danger"><?php echo e($errors->first('set-aws-secret-access-key')); ?></p>
												<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
											</div> 
										</div> <!-- END SECRET ACCESS KEY -->
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">								
										<!-- ACCESS KEY -->
										<div class="input-box">								
											<h6><?php echo e(__('Amazon S3 Bucket Name')); ?>  <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<div class="form-group">							    
												<input type="text" class="form-control <?php $__errorArgs = ['set-aws-bucket'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="aws-bucket" name="set-aws-bucket" value="<?php echo e(config('services.aws.bucket')); ?>" autocomplete="off">
												<?php $__errorArgs = ['set-aws-bucket'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
													<p class="text-danger"><?php echo e($errors->first('set-aws-bucket')); ?></p>
												<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
											</div> 
										</div> <!-- END ACCESS KEY -->
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<!-- AWS REGION -->
										<div class="input-box">	
											<h6><?php echo e(__('Set AWS Region')); ?>  <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<select id="set-aws-region" name="set-aws-region" data-placeholder="Select Default AWS Region:">			
												<option value="us-east-1" <?php if( config('services.aws.region')  == 'us-east-1'): ?> selected <?php endif; ?>><?php echo e(__('US East (N. Virginia) us-east-1')); ?></option>
												<option value="us-east-2" <?php if( config('services.aws.region')  == 'us-east-2'): ?> selected <?php endif; ?>><?php echo e(__('US East (Ohio) us-east-2')); ?></option>
												<option value="us-west-1" <?php if( config('services.aws.region')  == 'us-west-1'): ?> selected <?php endif; ?>><?php echo e(__('US West (N. California) us-west-1')); ?></option>
												<option value="us-west-2" <?php if( config('services.aws.region')  == 'us-west-2'): ?> selected <?php endif; ?>><?php echo e(__('US West (Oregon) us-west-2')); ?></option>
												<option value="ap-east-1" <?php if( config('services.aws.region')  == 'ap-east-1'): ?> selected <?php endif; ?>><?php echo e(__('Asia Pacific (Hong Kong) ap-east-1')); ?></option>
												<option value="ap-south-1" <?php if( config('services.aws.region')  == 'ap-south-1'): ?> selected <?php endif; ?>><?php echo e(__('Asia Pacific (Mumbai) ap-south-1')); ?></option>
												<option value="ap-northeast-3" <?php if( config('services.aws.region')  == 'ap-northeast-3'): ?> selected <?php endif; ?>><?php echo e(__('Asia Pacific (Osaka) ap-northeast-3')); ?></option>
												<option value="ap-northeast-2" <?php if( config('services.aws.region')  == 'ap-northeast-2'): ?> selected <?php endif; ?>><?php echo e(__('Asia Pacific (Seoul) ap-northeast-2')); ?></option>
												<option value="ap-southeast-1" <?php if( config('services.aws.region')  == 'ap-southeast-1'): ?> selected <?php endif; ?>><?php echo e(__('Asia Pacific (Singapore) ap-southeast-1')); ?></option>
												<option value="ap-southeast-2" <?php if( config('services.aws.region')  == 'ap-southeast-2'): ?> selected <?php endif; ?>><?php echo e(__('Asia Pacific (Sydney) ap-southeast-2')); ?></option>
												<option value="ap-northeast-1" <?php if( config('services.aws.region')  == 'ap-northeast-1'): ?> selected <?php endif; ?>><?php echo e(__('Asia Pacific (Tokyo) ap-northeast-1')); ?></option>
												<option value="ap-northeast-1" <?php if( config('services.aws.region')  == 'ap-northeast-1'): ?> selected <?php endif; ?>><?php echo e(__('Asia Pacific (Hyderabad) ap-south-2')); ?></option>
												<option value="ap-northeast-1" <?php if( config('services.aws.region')  == 'ap-northeast-1'): ?> selected <?php endif; ?>><?php echo e(__('Asia Pacific (Jakarta) ap-southeast-3')); ?></option>
												<option value="eu-central-1" <?php if( config('services.aws.region')  == 'eu-central-1'): ?> selected <?php endif; ?>><?php echo e(__('Europe (Frankfurt) eu-central-1')); ?></option>
												<option value="eu-central-1" <?php if( config('services.aws.region')  == 'eu-central-1'): ?> selected <?php endif; ?>><?php echo e(__('Europe (Zurich) eu-central-2')); ?></option>
												<option value="eu-west-1" <?php if( config('services.aws.region')  == 'eu-west-1'): ?> selected <?php endif; ?>><?php echo e(__('Europe (Ireland) eu-west-1')); ?></option>
												<option value="eu-west-2" <?php if( config('services.aws.region')  == 'eu-west-2'): ?> selected <?php endif; ?>><?php echo e(__('Europe (London) eu-west-2')); ?></option>
												<option value="eu-south-1" <?php if( config('services.aws.region')  == 'eu-south-1'): ?> selected <?php endif; ?>><?php echo e(__('Europe (Milan) eu-south-1')); ?></option>
												<option value="eu-south-1" <?php if( config('services.aws.region')  == 'eu-south-1'): ?> selected <?php endif; ?>><?php echo e(__('Europe (Spain) eu-south-2')); ?></option>
												<option value="eu-west-3" <?php if( config('services.aws.region')  == 'eu-west-3'): ?> selected <?php endif; ?>><?php echo e(__('Europe (Paris) eu-west-3')); ?></option>
												<option value="eu-north-1" <?php if( config('services.aws.region')  == 'eu-north-1'): ?> selected <?php endif; ?>><?php echo e(__('Europe (Stockholm) eu-north-1')); ?></option>
												<option value="me-south-1" <?php if( config('services.aws.region')  == 'me-south-1'): ?> selected <?php endif; ?>><?php echo e(__('Middle East (Bahrain) me-south-1')); ?></option>
												<option value="me-south-1" <?php if( config('services.aws.region')  == 'me-south-1'): ?> selected <?php endif; ?>><?php echo e(__('Middle East (UAE) me-central-1')); ?></option>
												<option value="sa-east-1" <?php if( config('services.aws.region')  == 'sa-east-1'): ?> selected <?php endif; ?>><?php echo e(__('South America (São Paulo) sa-east-1')); ?></option>
												<option value="ca-central-1" <?php if( config('services.aws.region')  == 'ca-central-1'): ?> selected <?php endif; ?>><?php echo e(__('Canada (Central) ca-central-1')); ?></option>
												<option value="af-south-1" <?php if( config('services.aws.region')  == 'af-south-1'): ?> selected <?php endif; ?>><?php echo e(__('Africa (Cape Town) af-south-1')); ?></option>
											</select>
										</div> <!-- END AWS REGION -->									
									</div>									
		
								</div>
	
							</div>
						</div>	


						<div class="card border-0 special-shadow">							
							<div class="card-body">
								<h6 class="fs-12 font-weight-bold mb-4"><img src="<?php echo e(URL::asset('img/csp/wasabi-sm.png')); ?>" class="fw-2 mr-2" alt=""><?php echo e(__('Wasabi Cloud Storage')); ?></h6>

								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12">								
										<!-- ACCESS KEY -->
										<div class="input-box">								
											<h6><?php echo e(__('Wasabi Access Key')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<div class="form-group">							    
												<input type="text" class="form-control <?php $__errorArgs = ['set-wasabi-access-key'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="wasabi-access-key" name="set-wasabi-access-key" value="<?php echo e(config('services.wasabi.key')); ?>" autocomplete="off">
												<?php $__errorArgs = ['set-wasabi-access-key'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
													<p class="text-danger"><?php echo e($errors->first('set-wasabi-access-key')); ?></p>
												<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
											</div> 
										</div> <!-- END ACCESS KEY -->
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<!-- SECRET ACCESS KEY -->
										<div class="input-box">								
											<h6><?php echo e(__('Wasabi Secret Access Key')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6> 
											<div class="form-group">							    
												<input type="text" class="form-control <?php $__errorArgs = ['set-wasabi-secret-access-key'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="wasabi-secret-access-key" name="set-wasabi-secret-access-key" value="<?php echo e(config('services.wasabi.secret')); ?>" autocomplete="off">
												<?php $__errorArgs = ['set-wasabi-secret-access-key'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
													<p class="text-danger"><?php echo e($errors->first('set-wasabi-secret-access-key')); ?></p>
												<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
											</div> 
										</div> <!-- END SECRET ACCESS KEY -->
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">								
										<!-- ACCESS KEY -->
										<div class="input-box">								
											<h6><?php echo e(__('Wasabi Bucket Name')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<div class="form-group">							    
												<input type="text" class="form-control <?php $__errorArgs = ['set-wasabi-bucket'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="wasabi-bucket" name="set-wasabi-bucket" value="<?php echo e(config('services.wasabi.bucket')); ?>" autocomplete="off">
												<?php $__errorArgs = ['set-wasabi-bucket'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
													<p class="text-danger"><?php echo e($errors->first('set-wasabi-bucket')); ?></p>
												<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
											</div> 
										</div> <!-- END ACCESS KEY -->
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<!-- AWS REGION -->
										<div class="input-box">	
											<h6><?php echo e(__('Set Wasabi Region')); ?>  <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											  <select id="set-wasabi-region" name="set-wasabi-region" data-placeholder="Select Default Wasabi Region:">			
												<option value="us-west-1" <?php if( config('services.wasabi.region')  == 'us-west-1'): ?> selected <?php endif; ?>><?php echo e(__('US Oregon us-west-1')); ?></option>
												<option value="us-central-1" <?php if( config('services.wasabi.region')  == 'us-central-1'): ?> selected <?php endif; ?>><?php echo e(__('US Texas us-central-1')); ?></option>
												<option value="us-east-1" <?php if( config('services.wasabi.region')  == 'us-east-1'): ?> selected <?php endif; ?>><?php echo e(__('US N.Virginia us-east-1')); ?></option>
												<option value="us-east-2" <?php if( config('services.wasabi.region')  == 'us-east-2'): ?> selected <?php endif; ?>><?php echo e(__('US N.Virginia us-east-2')); ?></option>
												<option value="ap-northeast-1" <?php if( config('services.wasabi.region')  == 'ap-northeast-1'): ?> selected <?php endif; ?>><?php echo e(__('Asia Pacific Tokyo ap-northeast-1')); ?></option>
												<option value="ap-northeast-2" <?php if( config('services.wasabi.region')  == 'ap-northeast-2'): ?> selected <?php endif; ?>><?php echo e(__('Asia Pacific Osaka ap-northeast-2')); ?></option>
												<option value="ap-sotheast-1" <?php if( config('services.wasabi.region')  == 'ap-sotheast-1'): ?> selected <?php endif; ?>><?php echo e(__('Asia Pacific Singapore ap-sotheast-1')); ?></option>
												<option value="ap-southeast-2" <?php if( config('services.wasabi.region')  == 'ap-southeast-2'): ?> selected <?php endif; ?>><?php echo e(__('Asia Pacific Sydney ap-southeast-2')); ?></option>
												<option value="ca-central-1" <?php if( config('services.wasabi.region')  == 'ca-central-1'): ?> selected <?php endif; ?>><?php echo e(__('Canada Toronto ca-central-1')); ?></option>
												<option value="eu-central-1" <?php if( config('services.wasabi.region')  == 'eu-central-1'): ?> selected <?php endif; ?>><?php echo e(__('Europe Amsterdam eu-central-1')); ?></option>
												<option value="eu-central-2" <?php if( config('services.wasabi.region')  == 'eu-central-2'): ?> selected <?php endif; ?>><?php echo e(__('Europe Frankfurt eu-central-2')); ?></option>
												<option value="eu-west-1" <?php if( config('services.wasabi.region')  == 'eu-west-1'): ?> selected <?php endif; ?>><?php echo e(__('Europe London eu-west-1')); ?></option>
												<option value="eu-west-2" <?php if( config('services.wasabi.region')  == 'eu-west-2'): ?> selected <?php endif; ?>><?php echo e(__('Europe Paris eu-west-2')); ?></option>
											</select>
										</div> <!-- END AWS REGION -->									
									</div>								
		
								</div>
	
							</div>
						</div>

						<!-- SAVE CHANGES ACTION BUTTON -->
						<div class="border-0 text-right mb-2 mt-1">
							<a href="<?php echo e(route('admin.davinci.dashboard')); ?>" class="btn btn-cancel mr-2"><?php echo e(__('Cancel')); ?></a>
							<button type="submit" class="btn btn-primary"><?php echo e(__('Save')); ?></button>							
						</div>				

					</form>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/davinciv/public_html/resources/views/admin/davinci/configuration/index.blade.php ENDPATH**/ ?>