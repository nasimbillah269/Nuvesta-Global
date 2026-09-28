 <?php $__env->startSection('title'); ?>
<title><?php echo e($page->seo_title?:websiteTitle($page->name)); ?></title>
<?php $__env->stopSection(); ?> <?php $__env->startSection('SEO'); ?>
<meta name="title" property="og:title" content="<?php echo e($page->seo_title?:websiteTitle($page->name)); ?>" />
<meta name="description" property="og:description" content="<?php echo $page->seo_description?:general()->meta_description; ?>" />
<meta name="keywords" content="<?php echo e($page->seo_keyword?:general()->meta_keyword); ?>" />
<meta name="image" property="og:image" content="<?php echo e(asset($page->image())); ?>" />
<meta name="url" property="og:url" content="<?php echo e(route('pageView',$page->slug?:'no-title')); ?>" />
<link rel="canonical" href="<?php echo e(route('pageView',$page->slug?:'no-title')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
<style>

</style>
<?php $__env->stopPush(); ?> <?php $__env->startSection('contents'); ?>











    <!-- ==========================================================================
         CONTACT COVER HEADER
         ========================================================================== -->
    <section class="contact-cover-section">
        <div class="container">
            <h1 class="contact-cover-title"><?php echo e($page->name); ?></h1>
            <div class="contact-cover-breadcrumb">
                <a href="index.html">Home</a>
                <span class="separator"><i class="fa-solid fa-chevron-right"></i></span>
                <span class="current"><?php echo e($page->name); ?></span>
            </div>
        </div>
    </section>




<section class="appointment-section">
  <div class="container">
    <div class="appointment-card">
      <div class="row g-0">

        <!-- Left Content -->
        <div class="col-lg-5">
          <div class="appointment-left">
            <span>Get an Appointment</span>
            <h2>Let’s Discuss Your Sourcing Requirements</h2>
            <p>
              Schedule a consultation with our sourcing team to discuss your apparel requirements,
              production goals, and quality expectations.
            </p>
            <p>
              Whether you need factory sourcing, product development, quality management,
              or complete order execution, we are here to support you.
            </p>

            <ul class="info-list">
              <li><i class="fa-solid fa-shirt"></i> Apparel Sourcing Support</li>
              <li><i class="fa-solid fa-industry"></i> Factory & Production Management</li>
              <li><i class="fa-solid fa-clipboard-check"></i> Quality Control Solutions</li>
              <li><i class="fa-solid fa-handshake"></i> Transparent Communication</li>
            </ul>
          </div>
        </div>

        <!-- Form -->
        <div class="col-lg-7">
          <div class="appointment-form">
            <h3 class="form-title">Request a Quotation</h3>

           <?php if(Session::has('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success! </strong> <?php echo e(Session::get('success')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>

<form action="<?php echo e(route('contactMail')); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <div class="row">

        <div class="col-md-6 mb-3">
            <label class="form-label">Full Name <span class="required">*</span></label>
            <input type="text" name="name" class="form-control"
                placeholder="Your Name Here" value="<?php echo e(old('name')); ?>" required>

            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger small mb-0"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Company Name <span class="required">*</span></label>
            <input type="text" name="company_name" class="form-control"
                placeholder="Your Company Name Here" value="<?php echo e(old('company_name')); ?>" required>

            <?php $__errorArgs = ['company_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger small mb-0"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Business Email <span class="required">*</span></label>
            <input type="email" name="email" class="form-control"
                placeholder="Your E-mail Here" value="<?php echo e(old('email')); ?>" required>

            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger small mb-0"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Phone / WhatsApp <span class="required">*</span></label>
            <input type="text" name="phone" class="form-control"
                placeholder="Your Number Here" value="<?php echo e(old('phone')); ?>" required>

            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger small mb-0"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Country / Region <span class="required">*</span></label>

            <select name="country" class="form-select" required>
                <option value="">--- Select Choice ---</option>
                <option value="Bangladesh" <?php echo e(old('country')=='Bangladesh'?'selected':''); ?>>Bangladesh</option>
                <option value="United States" <?php echo e(old('country')=='United States'?'selected':''); ?>>United States</option>
                <option value="United Kingdom" <?php echo e(old('country')=='United Kingdom'?'selected':''); ?>>United Kingdom</option>
                <option value="Canada" <?php echo e(old('country')=='Canada'?'selected':''); ?>>Canada</option>
                <option value="Germany" <?php echo e(old('country')=='Germany'?'selected':''); ?>>Germany</option>
                <option value="Australia" <?php echo e(old('country')=='Australia'?'selected':''); ?>>Australia</option>
            </select>

            <?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger small mb-0"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Product Category <span class="required">*</span></label>

            <select name="product_category" class="form-select" required>
                <option value="">Select Category</option>
                <option value="Knitwear" <?php echo e(old('product_category')=='Knitwear'?'selected':''); ?>>Knitwear</option>
                <option value="Woven" <?php echo e(old('product_category')=='Woven'?'selected':''); ?>>Woven</option>
                <option value="Denim" <?php echo e(old('product_category')=='Denim'?'selected':''); ?>>Denim</option>
                <option value="Sportswear" <?php echo e(old('product_category')=='Sportswear'?'selected':''); ?>>Sportswear</option>
                <option value="Kidswear" <?php echo e(old('product_category')=='Kidswear'?'selected':''); ?>>Kidswear</option>
                <option value="Outerwear" <?php echo e(old('product_category')=='Outerwear'?'selected':''); ?>>Outerwear</option>
            </select>

            <?php $__errorArgs = ['product_category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger small mb-0"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Estimated Order Volume <span class="required">*</span></label>

            <select name="order_volume" class="form-select" required>
                <option value="">--- Select Choice ---</option>
                <option value="500 - 1,000 pcs" <?php echo e(old('order_volume')=='500 - 1,000 pcs'?'selected':''); ?>>500 - 1,000 pcs</option>
                <option value="1,000 - 5,000 pcs" <?php echo e(old('order_volume')=='1,000 - 5,000 pcs'?'selected':''); ?>>1,000 - 5,000 pcs</option>
                <option value="5,000 - 10,000 pcs" <?php echo e(old('order_volume')=='5,000 - 10,000 pcs'?'selected':''); ?>>5,000 - 10,000 pcs</option>
                <option value="10,000+ pcs" <?php echo e(old('order_volume')=='10,000+ pcs'?'selected':''); ?>>10,000+ pcs</option>
            </select>

            <?php $__errorArgs = ['order_volume'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger small mb-0"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Brief & Order</label>

            <input type="text" name="brief_order" class="form-control"
                placeholder="Brief & Order" value="<?php echo e(old('brief_order')); ?>">

            <?php $__errorArgs = ['brief_order'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger small mb-0"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Preferred Date <span class="required">*</span></label>

            <input type="date" name="preferred_date"
                class="form-control" value="<?php echo e(old('preferred_date')); ?>" required>

            <?php $__errorArgs = ['preferred_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger small mb-0"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Preferred Time <span class="required">*</span></label>

            <input type="time" name="preferred_time"
                class="form-control" value="<?php echo e(old('preferred_time')); ?>" required>

            <?php $__errorArgs = ['preferred_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger small mb-0"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-12 mb-4">
            <label class="form-label">Message / Project Brief</label>

            <textarea name="message" class="form-control"
                placeholder="Your Message Here"><?php echo e(old('message')); ?></textarea>

            <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger small mb-0"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-12">
            <button type="submit" class="submit-btn">
                Submit Request
                <i class="fa-solid fa-arrow-right ms-2"></i>
            </button>
        </div>

    </div>
</form>

          </div>
        </div>

      </div>
    </div>
  </div>
</section>





<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<?php $__env->stopPush(); ?>



<?php echo $__env->make(welcomeTheme().'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\nuvesta-globa\resources\views/welcome/pages/getAQuote.blade.php ENDPATH**/ ?>