

<?php $__env->startSection('css'); ?>
	<!-- Data Table CSS -->
	<link href="<?php echo e(URL::asset('plugins/awselect/awselect.min.css')); ?>" rel="stylesheet" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <div class="section-title">
                    <!-- SECTION TITLE -->
                    <div class="text-center mb-9 mt-9" id="contact-row">

                        <div class="title">
                            <h6><span><?php echo e(__('Blog')); ?></span></h6>
                            <p><?php echo e($blog->title); ?></p>
                        </div>

                    </div> <!-- END SECTION TITLE -->
                </div>
            </div>
        </div>
    </div>

    <section id="blog-wrapper">

        <div class="container pt-9">

            <div class="row justify-content-md-center">

                <div class="col-md-12 col-sm-12">
                    <div class="blog">
                        <img src="<?php echo e(URL::asset($blog->image)); ?>" alt="Blog Image">
                    </div>
                    <h6 class="fs-20 mt-6 font-weight-bold text-center"><?php echo e($blog->title); ?></h6>
                    <p class="fs-12 text-center text-muted mb-5"><span><i class="mdi mdi-account-edit mr-1"></i><?php echo e($blog->created_by); ?></span> / <span><i class="mdi mdi-alarm mr-1"></i><?php echo e(date('F j, Y', strtotime($blog->created_at))); ?></span></p>

                    <div class="fs-14"><?php echo $blog->body; ?></div>
                </div>
     
            </div>        
        </div>

    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
	<!-- Awselect JS -->
	<script src="<?php echo e(URL::asset('plugins/awselect/awselect.min.js')); ?>"></script>
	<script src="<?php echo e(URL::asset('js/awselect.js')); ?>"></script>  
    <script src="<?php echo e(URL::asset('js/minimize.js')); ?>"></script> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/davinciv/public_html/resources/views/blog-show.blade.php ENDPATH**/ ?>