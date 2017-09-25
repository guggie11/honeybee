<?php if(Helper::GeneralSiteSettings("style_subscribe")): ?>
    <div class="col-lg-<?php echo e($bx4w); ?>">
        <div class="widget">
            <h4 class="widgetheading"><i class="fa fa-envelope-open"></i>&nbsp; <?php echo e(trans('frontLang.newsletter')); ?></h4>
            <p><?php echo e(trans('frontLang.subscribeToOurNewsletter')); ?></p>
            <div id="subscribesendmessage"><i class="fa fa-check-circle"></i> &nbsp;<?php echo e(trans('frontLang.subscribeToOurNewsletterDone')); ?></div>
            <div id="subscribeerrormessage"><?php echo e(trans('frontLang.youMessageNotSent')); ?></div>

            <?php echo e(Form::open(['route'=>['Home'],'method'=>'POST','class'=>'subscribeForm'])); ?>

            <div class="form-group">
                <?php echo Form::text('subscribe_name',"", array('placeholder' => trans('frontLang.yourName'),'class' => 'form-control','id'=>'subscribe_name', 'data-msg'=> trans('frontLang.enterYourName'),'data-rule'=>'minlen:4')); ?>

                <div class="alert alert-warning validation"></div>
            </div>
            <div class="form-group">
                <?php echo Form::email('subscribe_email',"", array('placeholder' => trans('frontLang.yourEmail'),'class' => 'form-control','id'=>'subscribe_email', 'data-msg'=> trans('frontLang.enterYourEmail'),'data-rule'=>'email')); ?>

                <div class="validation"></div>
            </div>
            <button type="submit" class="btn btn-info m-t-1"><?php echo e(trans('frontLang.subscribe')); ?></button>
            <?php echo e(Form::close()); ?>

        </div>
    </div>
<?php endif; ?>