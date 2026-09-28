 <?php $__env->startSection('title'); ?>
<title><?php echo e(websiteTitle($category->seo_title?:$category->name)); ?></title>
<?php $__env->stopSection(); ?> <?php $__env->startSection('SEO'); ?>
<meta name="title" property="og:title" content="<?php echo e(websiteTitle($category->seo_title?:$category->name)); ?>" />
<meta name="description" property="og:description" content="<?php echo $category->seo_description?:general()->meta_description; ?>" />
<meta name="keywords" content="<?php echo e($category->seo_keyword?:general()->meta_keyword); ?>" />
<meta name="image" property="og:image" content="<?php echo e(asset($category->image())); ?>" />
<meta name="url" property="og:url" content="<?php echo e(route('productCategory',$category->slug?:'no-title')); ?>" />
<link rel="canonical" href="<?php echo e(route('productCategory',$category->slug?:'no-title')); ?>">
<?php $__env->stopSection(); ?> <?php $__env->startPush('css'); ?>

<style>


:root {
  --color-primary: #00a8b5;
  --color-primary-hover: #008894;
  --color-dark: #111111;
  --color-slate-800: #18181b;
  --color-slate-600: #52525b;
  --color-slate-500: #71717a;
  --color-slate-400: #a1a1aa;
  --color-slate-300: #d4d4d8;
  --color-slate-200: #e4e4e7;
  --color-slate-100: #f4f4f5;
  --color-bg-light: #fafafa;
  --color-white: #ffffff;
  
  --color-badge-bg: #1a1a1a;
  --color-badge-text: #ffffff;
  
  --font-family: 'Poppins', sans-serif;
  --border-flat: 1px solid var(--color-slate-200);
  --transition-smooth: all 0.35s ease-in-out;
  --radius-sm: 4px;
  --radius-md: 8px;
}

/* Global Reset & Typography */
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  box-shadow: none !important; /* Enforcing pure minimal flat design */
}

body {
  font-family: var(--font-family);
  background-color: var(--color-bg-light);
  color: var(--color-slate-800);
  line-height: 1.5;
  -webkit-font-smoothing: antialiased;
}

a {
  text-decoration: none;
  color: inherit;
}

/* --------------------------------------------------------------------------
   2. Layout Containers & Page Header
   -------------------------------------------------------------------------- */
.prod-page-container {
  padding-top: 2rem;
  padding-bottom: 4rem;
}

.prod-page-header {
  margin-bottom: 2rem;
}

.prod-page-title {
  font-size: 2.25rem;
  font-weight: 700;
  color: var(--color-dark);
  letter-spacing: -0.02em;
  margin-bottom: 0.5rem;
}

.prod-page-subtitle {
  font-size: 0.95rem;
  color: var(--color-slate-500);
}

/* --------------------------------------------------------------------------
   3. Breadcrumb Navigation
   -------------------------------------------------------------------------- */
.cat-breadcrumb-wrapper {
  background-color: var(--color-white);
  border: var(--border-flat);
  border-radius: var(--radius-md);
  margin-bottom: 0.75rem;
  padding: 10px 10px;
}

.cat-breadcrumb-list {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: 0.5rem;
  list-style: none;
  margin: 0;
  padding: 0;
}

.cat-breadcrumb-item {
  display: inline-flex;
  align-items: center;
  font-size: 0.875rem;
  font-weight: 500;
  color: var(--color-slate-500);
}

.cat-breadcrumb-link {
  color: var(--color-slate-600);
  transition: var(--transition-smooth);
}

.cat-breadcrumb-link:hover {
  color: var(--color-primary);
}

.cat-breadcrumb-separator {
  margin: 0 0.25rem;
  color: var(--color-slate-400);
  font-size: 0.75rem;
}

.cat-breadcrumb-item.active {
  color: var(--color-dark);
  font-weight: 600;
}

/* --------------------------------------------------------------------------
   4. Filter & Toolbar Section
   -------------------------------------------------------------------------- */
.filter-toolbar-card {
  background-color: var(--color-white);
  border: var(--border-flat);
  border-radius: var(--radius-md);
  padding: 1.25rem;
  margin-bottom: 2.5rem;
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.filter-categories-wrapper {
  width: 100%;
  position: relative;
}

.filter-categories-nav {
  display: flex;
  align-items: center;
  gap: 0.6rem;
  overflow-x: auto;
  white-space: nowrap;
  padding: 0.2rem 0;
  -webkit-overflow-scrolling: touch;
  scrollbar-width: none;
  -ms-overflow-style: none;
}

.filter-categories-nav::-webkit-scrollbar {
  display: none;
}

.filter-btn {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  background-color: var(--color-slate-100);
  color: var(--color-slate-600);
  border: 1px solid var(--color-slate-200);
  border-radius: 0;
  padding: 0.5rem 1.15rem;
  font-size: 0.85rem;
  font-weight: 500;
  font-family: var(--font-family);
  cursor: pointer;
  white-space: nowrap;
  flex-shrink: 0;
  transition: var(--transition-smooth);
}

.filter-btn-icon {
  font-size: 0.8rem;
  color: var(--color-slate-500);
  transition: var(--transition-smooth);
}

.filter-btn:hover {
  background-color: var(--color-slate-200);
  color: var(--color-dark);
  border-color: var(--color-slate-300);
}

.filter-btn:hover .filter-btn-icon {
  color: var(--color-dark);
}

.filter-btn.active {
    background-color: #e43d5b;
    color: var(--color-white);
    border-color: #e43d5b;
}

.filter-btn.active .filter-btn-icon {
  color: var(--color-white);
}
.filter-btn:hover {
    background: #1e315b;
    color: #fff;
}
.filter-controls-row {
  border-top: var(--border-flat);
  padding-top: 1rem;
}

.filter-search-box {
  position: relative;
  width: 100%;
}

.filter-search-input {
  width: 100%;
  background-color: var(--color-slate-100);
  border: var(--border-flat);
  border-radius: var(--radius-sm);
  padding: 0.55rem 1rem 0.55rem 2.5rem;
  font-size: 0.875rem;
  font-family: var(--font-family);
  color: var(--color-dark);
  outline: none;
  transition: var(--transition-smooth);
}

.filter-search-input:focus {
  background-color: var(--color-white);
  border-color: var(--color-primary);
}

.filter-search-icon {
  position: absolute;
  left: 0.85rem;
  top: 50%;
  transform: translateY(-50%);
  color: var(--color-slate-400);
  font-size: 0.875rem;
  pointer-events: none;
}

.filter-sort-wrapper {
  display: flex;
  align-items: center;
  justify-content: flex-end;
  gap: 0.85rem;
}

.filter-sort-select {
  background-color: var(--color-slate-100);
  border: var(--border-flat);
  border-radius: var(--radius-sm);
  padding: 0.55rem 1rem;
  font-size: 0.875rem;
  font-family: var(--font-family);
  color: var(--color-slate-600);
  outline: none;
  cursor: pointer;
  transition: var(--transition-smooth);
}

.filter-sort-select:focus {
  background-color: var(--color-white);
  border-color: var(--color-primary);
}

.filter-results-counter {
  font-size: 0.85rem;
  color: var(--color-slate-500);
  font-weight: 500;
  white-space: nowrap;
}

/* --------------------------------------------------------------------------
   5. Product Card - Exact Match to Design Image
   -------------------------------------------------------------------------- */
.prod-card-anchor {
  display: block;
  height: 100%;
  color: inherit;
}

.prod-card {
  background-color: var(--color-white);
  border: var(--border-flat);
  border-radius: 0; /* Crisp flat rectangular card */
  overflow: hidden;
  height: 100%;
  display: flex;
  flex-direction: column;
  transition: var(--transition-smooth);
}

.prod-card-anchor:hover .prod-card {
  border-color: var(--color-dark);
}

/* Media Box Aspect Ratio (Tall Portrait ~ 130%) */
.prod-media-wrapper {
  position: relative;
  width: 100%;
  padding-top: 130%; /* Matches tall portrait ratio in design image */
  overflow: hidden;
  background-color: var(--color-slate-100);
}

.prod-image {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: opacity 0.4s ease-in-out, transform 0.4s ease-in-out;
}

.prod-image-primary {
  opacity: 1;
  z-index: 1;
}

.prod-image-secondary {
  opacity: 0;
  z-index: 2;
}

/* Hover Secondary Image Toggle */
.prod-card-anchor:hover .prod-image-primary {
  opacity: 0;
}

.prod-card-anchor:hover .prod-image-secondary {
  opacity: 1;
  transform: scale(1.03);
}

/* Dark Oval "New" Badge - Top Left */
.prod-badge-pill {
  position: absolute;
  top: 0.85rem;
  left: 0.85rem;
  z-index: 3;
  background-color: var(--color-badge-bg);
  color: var(--color-badge-text);
  font-size: 0.78rem;
  font-weight: 600;
  padding: 0.25rem 0.85rem;
  border-radius: 30px;
  line-height: 1.2;
  letter-spacing: 0.02em;
}

/* Brand Emblem Watermark - Bottom Right */
.prod-brand-watermark {
  position: absolute;
  bottom: 0.85rem;
  right: 0.85rem;
  z-index: 3;
  color: rgba(0, 0, 0, 0.45);
  font-size: 1.4rem;
  pointer-events: none;
}

/* Product Content Body */
.prod-content-body {
  padding: 1rem 0.85rem;
  display: flex;
  flex-direction: column;
  flex-grow: 1;
}

/* Code + Title Group */
.prod-title-group {
  display: flex;
  align-items: baseline;
  gap: 0.5rem;
  margin-bottom: 0.25rem;
  flex-wrap: wrap;
}

.prod-code {
  color: var(--color-primary);
  font-weight: 300;
  font-size: 15px;
  letter-spacing: -0.01em;
}

.prod-title {
  color: var(--color-dark);
  font-weight: 300;
  font-size: 15px;
  text-transform: uppercase;
  margin: 0;
  letter-spacing: -0.01em;
  transition: var(--transition-smooth);
}

.prod-card-anchor:hover .prod-title {
  color: var(--color-primary);
}

/* Subtitle / Fabric info - Italic Gray */
.prod-subtitle {
  font-size: 0.95rem;
  font-style: italic;
  color: #5f5f67f0;
  margin-bottom: 5px;
  font-weight: 300;
}

/* Spec Variant Info - Colors & Sizes */
.prod-specs-info {
  font-size: 0.9rem;
  font-style: italic;
  color: var(--color-slate-500);
  font-weight: 400;
}

/* --------------------------------------------------------------------------
   6. Page Pagination System
   -------------------------------------------------------------------------- */
.prod-pagination-wrapper {
  margin-top: 3.5rem;
  display: flex;
  justify-content: center;
  align-items: center;
}

.prod-pagination-list {
  display: flex;
  align-items: center;
  gap: 0.4rem;
  list-style: none;
  margin: 0;
  padding: 0;
}

.prod-pagination-link {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  min-width: 40px;
  height: 40px;
  padding: 0 0.5rem;
  background-color: var(--color-white);
  color: var(--color-slate-600);
  border: var(--border-flat);
  border-radius: 0;
  font-size: 0.875rem;
  font-weight: 500;
  font-family: var(--font-family);
  transition: var(--transition-smooth);
}

.prod-pagination-link:hover {
  background-color: var(--color-slate-100);
  color: var(--color-dark);
  border-color: var(--color-dark);
}

.prod-pagination-item.active .prod-pagination-link {
  background-color: var(--color-dark);
  color: var(--color-white);
  border-color: var(--color-dark);
  font-weight: 600;
}

.prod-pagination-item.disabled .prod-pagination-link {
  color: var(--color-slate-300);
  background-color: var(--color-slate-100);
  cursor: not-allowed;
  pointer-events: none;
}

/* --------------------------------------------------------------------------
   7. Responsive Design Breakpoints & 5-Column Grid System
   -------------------------------------------------------------------------- */
/* Custom 5-column grid helper for PC (20% width per card) */
@media (min-width: 992px) {
  .col-lg-2-4 {
    flex: 0 0 auto;
    width: 20%;
  }
}

@media (max-width: 991.98px) {
  .prod-page-title {
    font-size: 1.85rem;
  }
}

@media (max-width: 767.98px) {
  .filter-toolbar-card {
    padding: 1rem;
    gap: 0.85rem;
  }
  
  .filter-sort-wrapper {
    justify-content: space-between;
    width: 100%;
  }

  .prod-page-container {
    padding-top: 1.25rem;
  }

  .prod-pagination-wrapper {
    margin-top: 2rem;
  }
}


</style>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CollectionPage",
  "name": "<?php echo e($category->name); ?>",
  "url": "<?php echo e(url()->current()); ?>",
  "mainEntity": {
    "@type": "ItemList",
    "itemListElement": [
      <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      {
        "@type": "ListItem",
        "position": <?php echo e($index + 1); ?>,
        "url": "<?php echo e(route('productView',$product->slug?:Str::slug($product->name))); ?>"
      }<?php if(!$loop->last): ?>,<?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    ]
  }
}
</script>


<?php $__env->stopPush(); ?> 

<?php $__env->startSection('contents'); ?>












  <!-- Main Product Page Wrapper -->
  <main class="prod-page-container">
    <div class="container">
      
      <!-- Page Header -->
      <header class="prod-page-header">
        <h1 class="prod-page-title">Explore Products</h1>
        <p class="prod-page-subtitle">Discover our curated selection of high-quality items designed for modern living.</p>
      </header>

      <!-- Category Breadcrumb Navigation -->
      <nav aria-label="breadcrumb" class="cat-breadcrumb-wrapper">
        <ol class="cat-breadcrumb-list">
          <li class="cat-breadcrumb-item">
            <a href="<?php echo e(route('index')); ?>" class="cat-breadcrumb-link">
              <i class="fa-solid fa-house me-1"></i> Home
            </a>
            <i class="fa-solid fa-chevron-right cat-breadcrumb-separator"></i>
          </li>
          <li class="cat-breadcrumb-item">
            <a href="#" class="cat-breadcrumb-link">Categories</a>
            <i class="fa-solid fa-chevron-right cat-breadcrumb-separator"></i>
          </li>
          <li class="cat-breadcrumb-item active" aria-current="page">
           <?php echo e($category->name); ?>

          </li>
        </ol>
      </nav>

      <!-- Product Filtering Toolbar -->
      <section class="filter-toolbar-card">
        
        <!-- Category Filter Bar (Flat Rectangular Buttons) -->
        
        

<div class="filter-categories-wrapper">
    <div class="filter-categories-nav">

        <!-- All Products -->
        <button type="button"
                class="filter-btn categoryFilterBtn active"
                data-id="<?php echo e($category->id); ?>">
            <i class="fa-solid fa-border-all filter-btn-icon"></i>
            All Products
        </button>



            <?php
                $subCategories = $category->subctgs()
                    ->where('status', 'active')
                    ->whereHas('ctgProducts') // Only subcategories that have products
                    ->latest()
                    ->get();
            ?>

            <?php $__currentLoopData = $subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sctg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <button type="button"
                        class="filter-btn categoryFilterBtn"
                        data-id="<?php echo e($sctg->id); ?>">
                    <i class="fa-solid fa-tags filter-btn-icon"></i>
                    <?php echo e($sctg->name); ?>

                </button>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



    </div>
</div>

<input type="hidden" id="selectedCategory" name="ctgs[]">


        <!-- Search & Sort Row -->
        <div class="filter-controls-row">
          <div class="row g-3 align-items-center">
            
            <!-- Pure Bootstrap Column 1 -->
            <div class="col-12 col-md-6 col-lg-7">
                   <form action="<?php echo e(route('search')); ?>" class="searchHeaderArea">
              <div class="filter-search-box" id="searchHeaderInput">
                <i class="fa-solid fa-magnifying-glass filter-search-icon"></i>
                <input type="text" name="search" value="<?php echo e(request()->search); ?>"  class="filter-search-input" placeholder="Search products by title or code...">
              </div>
               </form>
            </div>
            

         
         

            <!-- Pure Bootstrap Column 2 -->
           <div class="col-12 col-md-6 col-lg-5">
              <div class="filter-sort-wrapper">
                 
                <span class="filter-results-counter">Showing ( <?php echo e($products->count()); ?> ) Products</span>
              </div>
            </div>

          </div>
        </div>

      </section>
      
        <div class="searchResultAjax"></div>
      
      <div class="product-tab-content ratio1_3 ajaxProductList">

        <?php echo $__env->make(welcomeTheme().'products.includes.productsAll', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    </div>
      


      
      

      <!-- Pagination Controls -->
      

    </div>
  </main>












<?php $__env->stopSection(); ?> 
<?php $__env->startPush('js'); ?>


<script>
$(document).on('click', '.categoryFilterBtn', function () {

    $('.categoryFilterBtn').removeClass('active');
    $(this).addClass('active');

    $('#selectedCategory').val($(this).data('id'));

    filterAction();
});


$(document).on('keyup', '.filter-search-input', function () {
    var search = $(this).val();
$.ajax({
        url: "<?php echo e(route('productCategory',$category->slug?:'no-title')); ?>",
        type: "GET",
        data: {
            search:search
        },
        dataType: "json",
        success: function (data) {
            $('.ajaxProductList').html(data.viewData);
        }
    });

});

// Load pagination links of the product list via ajax (keeps selected sub-category / search)
$(document).on('click', '.ajaxProductList .paginationPart a', function (e) {
    e.preventDefault();
    var url = $(this).attr('href');
    if (!url) return;
    $.ajax({
        url: url,
        type: "GET",
        dataType: "json",
        success: function (data) {
            $('.ajaxProductList').html(data.viewData);
            $('html, body').animate({ scrollTop: $('.ajaxProductList').offset().top - 150 }, 300);
        }
    });
});

function filterAction() {

    let categoryId = $('#selectedCategory').val();

    $.ajax({
        url: "<?php echo e(route('productCategoryFilter')); ?>",
        type: "GET",
        data: {
            ctgs: categoryId
        },
        dataType: "json",
        success: function (data) {
            $('.ajaxProductList').html(data.viewData);
        }
    });

}



</script>


<script>
$(function () {

    const colClassMap = {
        1: 'col-12',
        2: 'col-6',
        3: 'col-4',
        4: 'col-3',
        5: 'col-5ths',
        6: 'col-2'
    };

    $('.layout-btn').on('click', function () {
        const col = parseInt($(this).data('col'));

        // Active button state
        $('.layout-btn').removeClass('active');
        $(this).addClass('active');

        const $grid = $('#productGrid');
        const $cols = $grid.find('.product-col');

        // Remove all col-* classes
        $cols.removeClass('col-12 col-6 col-4 col-3 col-5ths col-2');

        // Add new col class
        $cols.addClass(colClassMap[col]);

        // Toggle list/grid view class
        if (col === 1) {
            $grid.removeClass('grid-view cols-2 cols-3 cols-4 cols-5 cols-6').addClass('list-view');
        } else {
            $grid.removeClass('list-view').addClass('grid-view cols-' + col);
        }
    });

});
</script>




<?php $__env->stopPush(); ?>
<?php echo $__env->make(welcomeTheme().'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\nuvesta-globa\resources\views/welcome/products/categoryProducts.blade.php ENDPATH**/ ?>