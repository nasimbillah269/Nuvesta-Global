 <?php $__env->startSection('title'); ?>
<title><?php echo e($page->seo_title?:websiteTitle($page->name)); ?></title>
<?php $__env->stopSection(); ?> <?php $__env->startSection('SEO'); ?>
<meta name="title" property="og:title" content="<?php echo e($page->seo_title?:websiteTitle($page->name)); ?>" />
<meta name="description" property="og:description" content="<?php echo $page->seo_description?:general()->meta_description; ?>" />
<meta name="keywords" content="<?php echo e($page->seo_keyword?:general()->meta_keyword); ?>" />
<meta name="image" property="og:image" content="<?php echo e(asset($page->image())); ?>" />
<meta name="url" property="og:url" content="<?php echo e(route('pageView',$page->slug?:'no-title')); ?>" />
<link rel="canonical" href="<?php echo e(route('pageView',$page->slug?:'no-title')); ?>" />
<?php $__env->stopSection(); ?>

<?php
  $img = fn ($f) => asset('welcome/images/sourcing/'.$f);

  $quotePage    = pageTemplate('Get A Quote');
  $quoteUrl     = $quotePage ? route('pageView',$quotePage->slug) : url('get-a-quote');
  $productsPage = pageTemplate('Latest Products');
  $productsUrl  = $productsPage ? route('pageView',$productsPage->slug) : url('products-all');
  $categoryUrl  = fn ($slug) => $productsUrl.'?category='.$slug;

  $sourceItems = [
    ['Pants',       'Chino, Cargo, Casual',       'src-pants.webp',      'pants'],
    ['Shorts',      'Cargo, Chino, Boardshort',   'src-shorts.webp',     'shorts'],
    ['Shirts',      'Woven',                      'src-shirts.webp',     'shirts'],
    ['Polo Shirts', 'Knitwear',                   'src-polo.webp',       'knitwear'],
    ['T-Shirts',    'Knitwear',                   'src-tshirts.webp',    'knitwear'],
    ['Outerwear',   'Jackets, Rainwear, Fleece',  'src-outerwear.webp',  'outerwear'],
    ['Activewear',  'Hiking, Joggers, Leggings',  'src-activewear.webp', 'activewear'],
  ];

  $services = [
    ['Product Development',          'svc-1.webp', ['Specification review', 'Garment construction', 'Sample development', 'Product costing']],
    ['Fabric & Material Sourcing',   'svc-2.webp', ['Woven & knit fabrics', 'Functional fabrics', 'Trims & accessories', 'Material alternatives']],
    ['Factory & Manufacturing',      'svc-3.webp', ['Factory matching', 'Production capacity', 'Compliance support', 'Lead time management']],
    ['Production Management',        'svc-4.webp', ['Material follow-up', 'Cutting, sewing, finishing', 'Production monitoring', 'Delivery schedule']],
    ['Quality Assurance',            'svc-5.webp', ['Material inspection', 'Inline quality control', 'Final inspection', 'Packing verification']],
    ['Export & Logistics',           'svc-6.webp', ['Export documentation', 'Container loading', 'Sea / Air freight', 'Delivery to destination']],
  ];

  $swatches = [
    ['sw-1.webp', 'Knit fabric'],
    ['sw-2.webp', 'Woven fabric'],
    ['sw-3.webp', 'Zippers'],
    ['sw-4.webp', 'Buttons'],
    ['sw-5.webp', 'Drawcords'],
  ];
?>

<?php $__env->startPush('css'); ?>
<style>
/* =====================================================================
   SOURCING & SERVICES page – scoped under .nvs
   ===================================================================== */
.nvs *{letter-spacing:normal}
.nvs{overflow-x:hidden;overflow-x:clip;background:#fff;color:var(--nv-text,#3d4660);font-size:15px;line-height:1.6}
.nvs .container{max-width:1320px}
.nvs h1,.nvs h2,.nvs h3,.nvs h4{font-family:'Inter',system-ui,sans-serif;color:var(--nv-navy,#1e315b);margin:0;text-transform:none;letter-spacing:normal}
.nvs p,.nvs li,.nvs a,.nvs span{font-family:'Inter',system-ui,sans-serif}
.nvs p{margin:0}
.nvs ul{margin:0;padding:0;list-style:none}
.nvs a{text-decoration:none}
.nvs img{max-width:100%;display:block}
.nvs-section-title{font-size:30px;font-weight:700;margin-bottom:24px !important;letter-spacing:-.01em !important}

/* ---------- 1. hero ---------- */
.nvs-hero{position:relative;overflow:hidden;background:#0d2552;min-height:450px;display:flex;align-items:center}
.nvs-hero-photo{position:absolute;top:0;right:0;bottom:0;width:58%;background-size:cover;background-position:center}
.nvs-hero::before{content:"";position:absolute;inset:0;z-index:1;
  background:linear-gradient(90deg,#0b2150 0%,#0d2552 38%,rgba(13,37,82,.85) 48%,rgba(13,37,82,.25) 66%,rgba(13,37,82,0) 80%)}
.nvs-hero .container{position:relative;z-index:2}
.nvs-hero-content{max-width:560px;padding:70px 0}
.nvs-hero h1{color:#fff;font-size:46px;line-height:1.12;font-weight:700;text-transform:uppercase;letter-spacing:-.01em;margin-bottom:22px}
.nvs-hero p{color:rgba(255,255,255,.9);font-size:17px;line-height:1.6;margin-bottom:34px}
.nvs-hero-btns{display:flex;flex-wrap:wrap;gap:18px}
.nvs-btn{display:inline-flex;align-items:center;justify-content:center;min-height:50px;padding:0 28px;border-radius:4px;font-size:15px;font-weight:600;transition:all .25s ease}
.nvs-btn-primary{background:#1a4394;color:#fff !important;border:1px solid rgba(255,255,255,.75)}
.nvs-btn-primary:hover{background:#fff;color:#0d2552 !important}
.nvs-btn-outline{background:transparent;color:#fff !important;border:1px solid rgba(255,255,255,.85)}
.nvs-btn-outline:hover{background:#fff;color:#0d2552 !important}

/* ---------- 2. what we source ---------- */
.nvs-source{padding:56px 0 40px}
.nvs-source-grid{display:grid;grid-template-columns:repeat(7,1fr);gap:12px}
.nvs-source-item{display:block;text-align:center;color:inherit}
.nvs-source-img{background:#f3f4f6;border-radius:4px;overflow:hidden;aspect-ratio:133/158;margin-bottom:12px}
.nvs-source-img img{width:100%;height:100%;object-fit:cover;transition:transform .35s ease}
.nvs-source-item:hover .nvs-source-img img{transform:scale(1.05)}
.nvs-source-item h3{font-size:14px;font-weight:500;color:#1f2937;margin-bottom:2px}
.nvs-source-item span{display:block;font-size:12px;color:#4b5563}

/* ---------- 3. services ---------- */
.nvs-services{padding:30px 0 48px}
.nvs-service-grid{display:grid;grid-template-columns:repeat(6,1fr);gap:12px}
.nvs-service-card{background:#fff;border-radius:4px;box-shadow:0 2px 14px rgba(15,37,82,.09);overflow:hidden;display:flex;flex-direction:column;transition:transform .3s ease,box-shadow .3s ease}
.nvs-service-card:hover{transform:translateY(-4px);box-shadow:0 10px 28px rgba(15,37,82,.14)}
.nvs-service-head{display:flex;align-items:center;gap:12px;padding:14px 12px;min-height:74px}
.nvs-service-num{flex:0 0 34px;width:34px;height:34px;border-radius:50%;background:#0d2552;color:#fff;font-size:13px;font-weight:600;display:flex;align-items:center;justify-content:center}
.nvs-service-head h3{font-size:14px;line-height:1.3;font-weight:600;color:#0d2552}
.nvs-service-img{aspect-ratio:148/168;overflow:hidden}
.nvs-service-img img{width:100%;height:100%;object-fit:cover}
.nvs-service-list{padding:16px 14px 18px !important}
.nvs .nvs-service-list li{position:relative;display:block;padding-left:16px;font-size:12.5px;color:#1f2937;line-height:1.55;margin-bottom:4px}
.nvs .nvs-service-list li::before{content:"";position:absolute;left:3px;top:.62em;width:5px;height:5px;border-radius:50%;background:#1f2937}

/* ---------- 4. fabric + shipment banners ---------- */
.nvs-banners{display:grid;grid-template-columns:1fr 1fr;gap:12px;background:#fff}
/* sizes follow the banner width (cqw) so text and swatches keep the design's proportions */
.nvs-banner{position:relative;container-type:inline-size;aspect-ratio:505/282;overflow:hidden;background-size:cover;background-position:center;background-repeat:no-repeat;padding:12.4% 6% 6% 8.9%;display:flex;flex-direction:column}
.nvs-banner::before{content:"";position:absolute;inset:0;z-index:0;background:linear-gradient(90deg,rgba(10,16,28,.55) 0%,rgba(10,16,28,.4) 50%,rgba(10,16,28,.08) 78%,rgba(10,16,28,0) 100%)}
.nvs-banner > *{position:relative;z-index:1}
.nvs-banner-fabric{background-color:#2f3d34}
.nvs-banner-ship{background-color:#9a7a55}
.nvs .nvs-banner h2{color:#fff;font-size:max(22px,5.4cqw);line-height:1.2;font-weight:600;margin-bottom:.4em !important;text-shadow:0 2px 12px rgba(0,0,0,.35)}
.nvs .nvs-banner p{color:#fff;font-size:max(14px,2.75cqw);line-height:1.55;max-width:58cqw;text-shadow:0 1px 8px rgba(0,0,0,.45)}
.nvs-swatches{display:flex;gap:3cqw;margin-top:auto;padding-top:16px}
.nvs-swatches img{width:17.4cqw;height:17.4cqw;min-width:48px;min-height:48px;object-fit:cover;border:max(3px,.8cqw) solid #fff;border-radius:4px;box-shadow:0 4px 14px rgba(0,0,0,.3)}

/* ---------- responsive ---------- */
@media (max-width:1199.98px){
  .nvs-source-grid{grid-template-columns:repeat(4,1fr)}
  .nvs-service-grid{grid-template-columns:repeat(3,1fr);gap:16px}
}
@media (max-width:991.98px){
  .nvs-hero-photo{width:100%;opacity:.45}
  .nvs-hero::before{background:linear-gradient(90deg,rgba(11,33,80,.95) 0%,rgba(13,37,82,.8) 100%)}
  .nvs-hero h1{font-size:36px}
  .nvs-banners{grid-template-columns:1fr}
}
@media (max-width:767.98px){
  .nvs-hero{min-height:0}
  .nvs-hero-content{padding:50px 0}
  .nvs-hero h1{font-size:28px}
  .nvs-hero p{font-size:15px}
  .nvs-btn{flex:1 1 100%}
  .nvs-section-title{font-size:24px}
  .nvs-source{padding:40px 0 24px}
  .nvs-source-grid{grid-template-columns:repeat(2,1fr);gap:16px}
  .nvs-service-grid{grid-template-columns:repeat(2,1fr);gap:12px}
  .nvs-banner{min-height:230px}
}
@media (max-width:479.98px){
  .nvs-service-grid{grid-template-columns:1fr}
}
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('contents'); ?>
<div class="nvs">

    <!-- ==========================================================================
         1. HERO
         ========================================================================== -->
    <section class="nvs-hero">
        <div class="nvs-hero-photo" style="background-image:url('<?php echo e($img('hero.webp')); ?>')"></div>
        <div class="container">
            <div class="nvs-hero-content" data-aos="fade-up">
                <h1>Apparel Sourcing &amp; Manufacturing</h1>
                <p>Nuvesta Global connects international buyers with Bangladesh's apparel manufacturing capabilities, providing coordinated support across product development, fabric &amp; trim sourcing, factory selection, production, quality control and shipment.</p>
                <div class="nvs-hero-btns">
                    <a href="<?php echo e($quoteUrl); ?>" class="nvs-btn nvs-btn-primary">Send Your Requirement</a>
                    <a href="<?php echo e($productsUrl); ?>" class="nvs-btn nvs-btn-outline">Our Products</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         2. WHAT WE SOURCE
         ========================================================================== -->
    <section class="nvs-source">
        <div class="container">
            <h2 class="nvs-section-title" data-aos="fade-up">What We Source</h2>
            <div class="nvs-source-grid">
                <?php $__currentLoopData = $sourceItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => [$name, $types, $file, $slug]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e($categoryUrl($slug)); ?>" class="nvs-source-item" data-aos="fade-up" data-aos-delay="<?php echo e(50 * $i); ?>">
                    <div class="nvs-source-img"><img src="<?php echo e($img($file)); ?>" alt="<?php echo e($name); ?>" loading="lazy"></div>
                    <h3><?php echo e($name); ?></h3>
                    <span>(<?php echo e($types); ?>)</span>
                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         3. SOURCING & MANUFACTURING SERVICES
         ========================================================================== -->
    <section class="nvs-services">
        <div class="container">
            <h2 class="nvs-section-title" data-aos="fade-up">Our Sourcing &amp; Manufacturing Services</h2>
            <div class="nvs-service-grid">
                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => [$title, $file, $points]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="nvs-service-card" data-aos="fade-up" data-aos-delay="<?php echo e(50 * $i); ?>">
                    <div class="nvs-service-head">
                        <span class="nvs-service-num"><?php echo e(sprintf('%02d', $i + 1)); ?></span>
                        <h3><?php echo e($title); ?></h3>
                    </div>
                    <div class="nvs-service-img"><img src="<?php echo e($img($file)); ?>" alt="<?php echo e($title); ?>" loading="lazy"></div>
                    <ul class="nvs-service-list">
                        <?php $__currentLoopData = $points; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $point): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($point); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         4. FABRIC & TRIM SOURCING  /  SHIPMENT & DELIVERY
         ========================================================================== -->
    <section class="nvs-banners">
        <div class="nvs-banner nvs-banner-fabric" style="background-image:url('<?php echo e($img('fabric-bg.webp')); ?>')" data-aos="fade-up">
            <h2>Fabric &amp; Trim Sourcing</h2>
            <p>Wide range of woven, knit and functional fabrics with matching accessories.</p>
            <div class="nvs-swatches">
                <?php $__currentLoopData = $swatches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$file, $alt]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <img src="<?php echo e($img($file)); ?>" alt="<?php echo e($alt); ?>" loading="lazy">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="nvs-banner nvs-banner-ship" style="background-image:url('<?php echo e($img('shipment-bg.webp')); ?>')" data-aos="fade-up" data-aos-delay="100">
            <h2>Shipment &amp; Delivery</h2>
            <p>From final inspection to container loading and global shipment.</p>
        </div>
    </section>

</div>
<?php $__env->stopSection(); ?> <?php $__env->startPush('js'); ?> <?php $__env->stopPush(); ?>

<?php echo $__env->make(welcomeTheme().'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nasim/nuvesta/Nuvesta-Global/resources/views/welcome/pages/sourcingServices.blade.php ENDPATH**/ ?>