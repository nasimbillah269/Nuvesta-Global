<?php $__env->startSection('title'); ?>
<title><?php echo e(websiteTitle($product->seo_title?:$product->name)); ?></title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('SEO'); ?>
<meta name="title" property="og:title" content="<?php echo e($product->seo_title?:websiteTitle($product->name)); ?>" />
<meta name="description" property="og:description" content="<?php echo e($product->seo_description?:$product->short_description); ?>" />
<meta name="keywords" content="<?php echo e($product->seo_keyword?:general()->meta_keyword); ?>" />
<meta name="image" property="og:image" content="<?php echo e(asset($product->image())); ?>" />
<meta name="url" property="og:url" content="<?php echo e(route('productView',$product->slug?:'no-title')); ?>" />
<link class="canonical" href="<?php echo e(route('productView',$product->slug?:'no-title')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<style>



/* ==========================================================================
   Nuvesta Product Details - Minimal Flat Styling System
   Font Family: Poppins (Google Fonts)
   Architecture: Modular, BEM-inspired scalable classes
   ========================================================================== */

/* --------------------------------------------------------------------------
   1. Design System & CSS Variables
   -------------------------------------------------------------------------- */
:root {
  --color-primary: #00a8b5;
  --color-primary-hover: #008894;
  --color-dark: #111111;
  --color-slate-800: #18181b;
  --color-slate-700: #27272a;
  --color-slate-600: #52525b;
  --color-slate-500: #71717a;
  --color-slate-400: #a1a1aa;
  --color-slate-300: #d4d4d8;
  --color-slate-200: #e4e4e7;
  --color-slate-100: #f4f4f5;
  --color-bg-light: #fafafa;
  --color-white: #ffffff;
  --color-red: #ef4444;
  
  --font-family: 'Poppins', sans-serif;
  --border-flat: 1px solid var(--color-slate-200);
  --border-dark: 1px solid var(--color-dark);
  --transition-smooth: all 0.3s ease-in-out;
  --radius-sm: 4px;
  --radius-md: 8px;
}

/* Global Reset & Typography */
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  box-shadow: none !important;
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
   2. Page Container & Breadcrumbs
   -------------------------------------------------------------------------- */
.detail-page-wrapper {
  padding-top: 1.5rem;
  padding-bottom: 4rem;
}

.detail-breadcrumb-card {
  background-color: var(--color-white);
  border: var(--border-flat);
  border-radius: var(--radius-md);
  margin-bottom: 0.75rem;
  padding: 10px 10px;
}

.detail-breadcrumb-list {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: 0.4rem;
  list-style: none;
  margin: 0;
  padding: 0;
}

.detail-breadcrumb-item {
  display: inline-flex;
  align-items: center;
  font-size: 0.825rem;
  font-weight: 500;
  color: var(--color-slate-500);
}

.detail-breadcrumb-link {
  color: var(--color-slate-600);
  transition: var(--transition-smooth);
}

.detail-breadcrumb-link:hover {
  color: var(--color-primary);
}

.detail-breadcrumb-separator {
  margin: 0 0.2rem;
  color: var(--color-slate-400);
  font-size: 0.7rem;
}

.detail-breadcrumb-item.active {
  color: var(--color-dark);
  font-weight: 600;
}

/* --------------------------------------------------------------------------
   3. Main Product Details Layout Card
   -------------------------------------------------------------------------- */
.detail-main-card {
  background-color: var(--color-white);
  border: var(--border-flat);
  border-radius: var(--radius-md);
  padding: 1.5rem;
  margin-bottom: 0;
}

/* --------------------------------------------------------------------------
   4. Gallery & Media Column (Left)
   -------------------------------------------------------------------------- */
.detail-media-container {
  display: flex;
  flex-direction: column;
  gap: 0.85rem;
}

.detail-main-stage {
  position: relative;
  width: 100%;
  padding-top: 125%;
  overflow: hidden;
  background-color: var(--color-slate-100);
  border: var(--border-flat);
}

.detail-stage-img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: var(--transition-smooth);
}

.detail-video-btn {
  position: absolute;
  bottom: 1rem;
  right: 1rem;
  z-index: 3;
  background-color: var(--color-white);
  color: var(--color-dark);
  border: var(--border-flat);
  font-size: 0.75rem;
  font-weight: 600;
  font-family: var(--font-family);
  text-transform: uppercase;
  letter-spacing: 0.04em;
  padding: 0.45rem 0.95rem;
  display: inline-flex;
  align-items: center;
  gap: 0.4rem;
  cursor: pointer;
  transition: var(--transition-smooth);
}

.detail-video-btn:hover {
  background-color: var(--color-dark);
  color: var(--color-white);
}

.detail-thumb-strip {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 0.5rem;
}

.detail-thumb-box {
  position: relative;
  width: 100%;
  padding-top: 120%;
  overflow: hidden;
  border: 1px solid var(--color-slate-200);
  cursor: pointer;
  transition: var(--transition-smooth);
  background-color: var(--color-slate-100);
}

.detail-thumb-box:hover,
.detail-thumb-box.active {
  border-color: var(--color-primary);
}

.detail-thumb-img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* --------------------------------------------------------------------------
   5. Main Info Column (Right)
   -------------------------------------------------------------------------- */
.detail-info-container {
  display: flex;
  flex-direction: column;
  gap: 1.25rem;
}

.detail-title-header {
  display: flex;
  align-items: baseline;
  justify-content: space-between;
  gap: 0.75rem;
  flex-wrap: wrap;
  padding-bottom: 0.75rem;
  border-bottom: var(--border-flat);
}

.detail-title-group {
  display: flex;
  align-items: baseline;
  gap: 0.6rem;
  flex-wrap: wrap;
}

.detail-prod-title {
  font-size: 22px;
  font-weight: 400;
  color: var(--color-dark);
  text-transform: uppercase;
  letter-spacing: -0.02em;
  margin: 0;
}

.detail-prod-code {
  font-size: 1.2rem;
  font-weight: 500;
  color: var(--color-primary);
}

.detail-header-actions {
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

.detail-action-icon-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 34px;
  height: 34px;
  border-radius: 50%;
  background-color: var(--color-slate-100);
  color: var(--color-primary);
  border: 1px solid var(--color-slate-200);
  font-size: 0.875rem;
  cursor: pointer;
  transition: var(--transition-smooth);
}

.detail-action-icon-btn:hover {
  background-color: var(--color-primary);
  color: var(--color-white);
  border-color: var(--color-primary);
}

.detail-subtitle-spec {
  font-size: 0.85rem;
  color: var(--color-slate-600);
  font-weight: 500;
}

.detail-subtitle-spec span {
  display: block;
  font-size: 0.8rem;
  color: var(--color-slate-500);
}

/* Color Swatches Selector */
.detail-option-section {
  display: flex;
  flex-direction: column;
  gap: 0.6rem;
}

.detail-option-label-row {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.detail-option-title {
  font-size: 0.875rem;
  font-weight: 600;
  color: var(--color-dark);
  text-transform: uppercase;
  letter-spacing: 0.03em;
  display: inline-flex;
  align-items: center;
  gap: 0.4rem;
}

.detail-swatch-grid {
  display: flex;
  flex-wrap: wrap;
  gap: 0.45rem;
}

.detail-swatch-btn {
  width: 24px;
  height: 24px;
  border-radius: 50%;
  border: 1px solid var(--color-slate-300);
  cursor: pointer;
  transition: var(--transition-smooth);
  position: relative;
}

.detail-swatch-btn:hover,
.detail-swatch-btn.active {
  transform: scale(1.25);
  border-color: var(--color-dark);
}

/* Size Selector Grid */
.detail-size-guide-link {
  font-size: 0.8rem;
  color: var(--color-dark);
  font-weight: 600;
  text-decoration: underline;
  cursor: pointer;
}

.detail-size-grid {
  display: flex;
  flex-wrap: wrap;
  gap: 0.4rem;
}

.detail-size-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: 0.4rem 0.8rem;
  background-color: var(--color-slate-100);
  border: 1px solid var(--color-slate-200);
  font-size: 0.8rem;
  font-weight: 500;
  color: var(--color-slate-700);
  cursor: pointer;
  transition: var(--transition-smooth);
}

.detail-size-btn:hover {
  background-color: var(--color-slate-200);
  color: var(--color-dark);
}

.detail-size-btn.active {
  background-color: var(--color-dark);
  color: var(--color-white);
  border-color: var(--color-dark);
}

.detail-size-note {
  font-size: 0.72rem;
  color: var(--color-slate-500);
  font-style: italic;
}

/* Teal Price Callout Banner */
.detail-price-banner {
  background-color: #e43a59;
  color: var(--color-white);
  padding: 0.85rem 1.25rem;
  text-align: center;
  cursor: pointer;
  transition: var(--transition-smooth);
}

.detail-price-banner:hover {
  background-color: var(--color-primary-hover);
}

.detail-price-banner-title {
  font-size: 0.95rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.04em;
  margin: 0;
  color: #fff;
}

.detail-price-banner-sub {
  font-size: 0.75rem;
  font-weight: 400;
  opacity: 0.9;
  display: block;
  color: #fff;
}

/* Doc Pill Actions (User Customized) */
.detail-docs-flex {
  display: flex;
  flex-wrap: wrap;
  gap: 0.5rem;
}

.detail-doc-pill {
  display: inline-flex;
  align-items: center;
  gap: 0.45rem;
  background-color: var(--color-slate-100);
  color: var(--color-slate-700);
  border: 1px solid var(--color-slate-200);
  border-radius: 2px;
  padding: 0.45rem 0.95rem;
  font-size: 10px;
  font-weight: 500;
  cursor: pointer;
  transition: var(--transition-smooth);
}

.detail-doc-pill:hover {
  background-color: var(--color-dark);
  color: var(--color-white);
}

/* --------------------------------------------------------------------------
   6. Short Description Section
   -------------------------------------------------------------------------- */
.detail-short-desc {
  border-top: var(--border-flat);
  padding-top: 1rem;
}

.detail-short-desc-title {
  font-size: 0.875rem;
  font-weight: 600;
  color: var(--color-dark);
  text-transform: uppercase;
  letter-spacing: 0.03em;
  margin-bottom: 0.4rem;
}

.detail-short-desc-text {
  font-size: 0.825rem;
  color: var(--color-slate-600);
  line-height: 1.6;
  margin: 0;
}

/* --------------------------------------------------------------------------
   7. Social Media Sharing Row
   -------------------------------------------------------------------------- */
.detail-social-share-row {
  display: flex;
  align-items: center;
  gap: 0.85rem;
  border-top: var(--border-flat);
  padding-top: 1rem;
  flex-wrap: wrap;
}

.detail-social-label {
  font-size: 0.825rem;
  font-weight: 600;
  color: var(--color-dark);
}

.detail-social-icons-list {
  display: flex;
  align-items: center;
  gap: 0.4rem;
  list-style: none;
  margin: 0;
  padding: 0;
}

.detail-social-icon-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 34px;
  height: 34px;
  border-radius: 50%;
  background-color: var(--color-slate-100);
  color: var(--color-slate-700);
  border: 1px solid var(--color-slate-200);
  font-size: 0.85rem;
  transition: var(--transition-smooth);
}

.detail-social-icon-btn:hover {
  background-color: var(--color-primary);
  color: var(--color-white);
  border-color: var(--color-primary);
}

/* --------------------------------------------------------------------------
   8. Full Details Tabbed Section (Spacious Modern Design)
   -------------------------------------------------------------------------- */
.detail-tabs-wrapper {
  background-color: var(--color-white);
  border: var(--border-flat);
  border-radius: var(--radius-md);
  margin-top: 2.5rem;
  margin-bottom: 3rem;
  padding: 2rem 2.25rem;
}

.detail-nav-tabs {
  display: flex;
  align-items: center;
  gap: 2rem;
  border-bottom: 2px solid var(--color-slate-200);
  margin-bottom: 2rem;
  list-style: none;
  padding: 0;
  flex-wrap: wrap;
}

.detail-tab-item {
  margin-bottom: -2px;
}

.detail-tab-btn {
  font-size: 0.95rem;
  font-weight: 600;
  color: var(--color-slate-500);
  text-transform: uppercase;
  letter-spacing: 0.04em;
  padding: 0.75rem 0.5rem 1rem 0.5rem;
  border: none;
  background: none;
  border-bottom: 2px solid transparent;
  cursor: pointer;
  font-family: var(--font-family);
  transition: var(--transition-smooth);
}

.detail-tab-btn:hover {
  color: var(--color-dark);
}

.detail-tab-btn.active {
  color: var(--color-primary);
  border-bottom-color: var(--color-primary);
}

.detail-tab-content-box {
  padding-top: 0.5rem;
}

.detail-tab-paragraph {
  font-size: 0.9rem;
  color: var(--color-slate-600);
  line-height: 1.8;
  margin-bottom: 1.25rem;
}

/* Spacious Tables Styling */
.detail-data-table-wrapper {
  width: 100%;
  overflow-x: auto;
}

.detail-data-table {
  width: 100%;
  border-collapse: collapse;
}

.detail-data-table th,
.detail-data-table td {
  border: var(--border-flat);
  padding: 0.95rem 1.25rem;
  font-size: 0.875rem;
  vertical-align: middle;
}

.detail-data-table th {
  background-color: var(--color-dark);
  color: var(--color-white);
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.02em;
}

.detail-data-table tbody tr {
  transition: var(--transition-smooth);
}

.detail-data-table tbody tr:hover {
  background-color: var(--color-slate-100);
}

.detail-data-table td {
  color: var(--color-slate-700);
}

.detail-data-table-label {
  font-weight: 600;
  color: var(--color-dark);
  width: 30%;
  background-color: var(--color-slate-100);
}

/* --------------------------------------------------------------------------
   9. Related Products Section Cards (Pixel Perfect Match to Catalog)
   -------------------------------------------------------------------------- */
.detail-related-section {
  margin-top: 3rem;
}

.detail-related-title {
  font-size: 1.5rem;
  font-weight: 400;
  color: var(--color-dark);
  margin-bottom: 1.5rem;
  text-transform: uppercase;
  letter-spacing: -0.01em;
}

/* Card Anchor & Structure */
.prod-card-anchor {
  display: block;
  height: 100%;
  color: inherit;
}

.prod-card {
  background-color: var(--color-white);
  border: var(--border-flat);
  border-radius: 0;
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
  padding-top: 130%;
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

.prod-card-anchor:hover .prod-image-primary {
  opacity: 0;
}

.prod-card-anchor:hover .prod-image-secondary {
  opacity: 1;
  transform: scale(1.03);
}

.prod-badge-pill {
  position: absolute;
  top: 0.85rem;
  left: 0.85rem;
  z-index: 3;
  background-color: var(--color-dark);
  color: var(--color-white);
  font-size: 0.78rem;
  font-weight: 600;
  padding: 0.25rem 0.85rem;
  border-radius: 30px;
  line-height: 1.2;
}

.prod-brand-watermark {
  position: absolute;
  bottom: 0.85rem;
  right: 0.85rem;
  z-index: 3;
  color: rgba(0, 0, 0, 0.45);
  font-size: 1.4rem;
  pointer-events: none;
}

.prod-content-body {
  padding: 1rem 0.85rem;
  display: flex;
  flex-direction: column;
  flex-grow: 1;
}

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
}

.prod-title {
  color: var(--color-dark);
  font-weight: 300;
  font-size: 15px;
  text-transform: uppercase;
  margin: 0;
  transition: var(--transition-smooth);
}

.prod-card-anchor:hover .prod-title {
  color: var(--color-primary);
}

.prod-subtitle {
  font-size: 0.95rem;
  font-style: italic;
  color: #5f5f67f0;
  margin-bottom: 5px;
  font-weight: 300;
}

.prod-specs-info {
  font-size: 0.9rem;
  font-style: italic;
  color: var(--color-slate-500);
  font-weight: 400;
}

/* 5-Column helper rule */
@media (min-width: 992px) {
  .col-lg-2-4 {
    flex: 0 0 auto;
    width: 25%;
  }
}

/* --------------------------------------------------------------------------
   10. Responsive Design Breakpoints
   -------------------------------------------------------------------------- */
@media (max-width: 767.98px) {
  .detail-main-card,
  .detail-tabs-wrapper {
    padding: 1.25rem 1rem;
  }
  
  .detail-nav-tabs {
    gap: 1rem;
  }
}




ul.colorList{
    display:inline-block;
    margin-top:0;
    padding: 0;
    margin-bottom: 0;
}

ul.colorList li{
    background-color: unset;
    color:unset;
    float: left;
    padding:0;
    padding-right: 10px;
}

.attributeItem .colorItem {
    height: 25px;
    width: 25px;
    border-radius: 100%;
    cursor:pointer;
    margin-bottom: 5px;
     border: 1px solid #cdc9c9;
    
}

.attributeItem .colorItem.active {
    box-shadow: 0px 1px 8px 2px #444;
    transition: 0.4s;
    border: 1px solid #000;
}

.attributeItem .textItem {
    /*height: 25px;*/
    min-width: 25px;
    background: #f1f1f1;
    text-align: center;
    padding: 10px 15px;
    text-transform: uppercase;
    cursor: pointer;
    border: 1px solid #e9dce2;
    margin-bottom: 5px;
    line-height: 18px;
}

.attributeItem .textItem.active {
       color: #fff;
    background: #000;
}

.attributeItem .imageItem {
    margin-bottom: 5px;
}

.attributeItem .imageItem img {
    width: 25px;
    height: 25px;
    border-radius: 5px;
    border: 1px solid #dfdede;
    padding: 1px;
}

.attributeItem .imageItem.active img {
    border-color: #0ba350;
}

.attributeValue {
    width: 1px;
    position: absolute;
    z-index: -9;
}





.colorList .colorItem {
  position: relative;
}

.colorList .colorItem::after {
  content: attr(data-vari); /* Use the data-name attribute as tooltip text */
  position: absolute;
  top: -30px; /* Position above the label */
  left: 50%;
  transform: translateX(-50%);
  background-color: black;
  color: white;
  padding: 5px 10px;
  font-size: 12px;
  border-radius: 4px;
  white-space: nowrap;
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.3s ease-in-out;
}

.colorList .colorItem:hover::after {
  opacity: 1;
  visibility: visible;
}



.smalOtherBox h5 {
    font-size: 0.875rem;
    font-weight: 600;
    color: var(--color-dark);
    text-transform: uppercase;
    letter-spacing: 0.03em;
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
}




/* =============================================
   PRODUCT ZOOM & GALLERY THUMBNAILS
   ============================================= */
.mgmt-detail-img-zoom-wrap {
    position: relative;
    cursor: crosshair;
    border: 1px solid var(--mgmt-border, #eeeeee);
    background-color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
}

.mgmt-detail-img-zoom-wrap img {
    width: 100%;
    height: auto;
    object-fit: contain;
    display: block;
    pointer-events: none;
}

/* Zoom Lens */
.mgmt-zoom-lens {
    display: none;
    position: absolute;
    top: 0;
    left: 0;
    width: 120px;
    height: 120px;
    border: 2px solid var(--mgmt-accent, #6a4914);
    background-color: rgba(255,255,255,0.3);
    pointer-events: none;
    z-index: 5;
}

/* Zoom Result (zoomed view) */
.mgmt-zoom-result {
    display: none;
    position: absolute;
    top: 0;
    width: 600px;
    height: 800px;
    border: 1px solid #ddd;
    background-repeat: no-repeat;
    background-size: 200%;
    background-color: #fff;
    z-index: 10;
    box-shadow: 0 4px 16px rgba(0,0,0,0.12);
}

@media (max-width: 1199.98px) {
    .mgmt-zoom-result {
        width: 300px;
        height: 300px;
    }
}

@media (max-width: 767.98px) {
    .mgmt-zoom-result {
        display: none !important;
    }
    .mgmt-zoom-lens {
        display: none !important;
    }
}

.mgmt-thumbnails-wrap {
    display: flex;
    gap: 10px;
    margin-top: 15px;
    overflow-x: auto;
    padding-bottom: 5px;
    scrollbar-width: thin;
    scrollbar-color: var(--mgmt-accent) #f0f0f0;
}

.mgmt-thumbnails-wrap::-webkit-scrollbar {
    height: 4px;
}

.mgmt-thumbnails-wrap::-webkit-scrollbar-track {
    background: #f0f0f0;
}

.mgmt-thumbnails-wrap::-webkit-scrollbar-thumb {
    background-color: var(--mgmt-accent);
    border-radius: 2px;
}

.mgmt-thumbnail-item {
    width: unset;
    height: 120px;
    cursor: pointer;
    transition: all 0.25s ease;
    background-color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 2px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.05);
}

.mgmt-thumbnail-item img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    border: 1px solid #000;
}

.mgmt-thumbnail-item:hover,
.mgmt-thumbnail-item.active {
    border-color: var(--mgmt-accent, #6a4914);
}







.detail-docs-flex {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-top: 20px;
}

.detail-doc-pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 18px;
    border-radius: 50px;
    text-decoration: none;
    font-size: 15px;
    font-weight: 600;
    transition: all .3s ease;
    border: 1px solid #e5e7eb;
    background: #fff;
}

.detail-doc-pill i {
    font-size: 18px;
}

/* WhatsApp */
.detail-doc-pill.whatsapp {
    color: #25D366;
    border-color: #25D366;
}

.detail-doc-pill.whatsapp:hover {
    background: #25D366;
    color: #fff;
}

/* Phone */
.detail-doc-pill.phone {
    color: #0d6efd;
    border-color: #0d6efd;
}

.detail-doc-pill.phone:hover {
    background: #0d6efd;
    color: #fff;
}

/* Quote */
.detail-doc-pill.quote {
    color: #ff6b00;
    border-color: #ff6b00;
}

.detail-doc-pill.quote:hover {
    background: #ff6b00;
    color: #fff;
}

.pDetaiCtg ul {
    margin: 0;
    padding: 0;
}

.mgmt-detail-meta-line {
    margin: 0;
    padding: 0;
}



@media (max-width: 768px) {
    .detail-doc-pill {
        flex: 1 1 100%;
        justify-content: center;
    }
}




.detail-header-actions{
    position:relative;
}

.share-dropdown{
    position:absolute;
    right:0;
    top:50px;
    width:220px;
    background:#fff;
    border-radius:12px;
    overflow:hidden;
    display:none;
    z-index:999;
    border:1px solid #eee;
}

.share-dropdown a{
    display:flex;
    align-items:center;
    gap:12px;
    padding:12px 16px;
    color:#222;
    text-decoration:none;
    transition:.3s;
}

.share-dropdown a:hover{
    background:#f6f6f6;
    color:#ff6b00;
}

.share-dropdown i{
    width:20px;
    text-align:center;
    font-size:18px;
}


.detail-short-desc-text p {
    font-size: 14px;
}


.detail-short-desc-text ul {
    margin: 0;
    padding: 0;
}

.detail-short-desc-text ul li {
    list-style: disc !important;
    display: list-item;
    margin-left: 20px;
}






.product-contact-buttons {
    display: flex;
    gap: 12px;
    width: 100%;
    margin-top: 20px;
}

.contact-btn {
    flex: 1;
    min-height: 64px;
    padding: 10px 14px;

    display: flex;
    align-items: center;
    gap: 12px;

    border: 1px solid #e5e5e5;
    border-radius: 8px;

    text-decoration: none !important;

    background: #1e315b;
    color: #fff;

    transition: all 0.25s ease;
}


/* Icon */

.contact-icon {
    width: 42px;
    height: 42px;

    flex: 0 0 42px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 50%;

    font-size: 20px;

    transition: all 0.25s ease;
}


/* Content */

.contact-content {
    flex: 1;

    display: flex;
    flex-direction: column;

    min-width: 0;
}

.contact-content strong {
    font-size: 14px;
    font-weight: 700;
    line-height: 1.3;
    color: #fff;
}

.contact-content small {
    margin-top: 3px;

    font-size: 11px;
    font-weight: 400;

    color: #fff;
}


/* Arrow */

.contact-arrow {
    font-size: 12px;
    color: #fff;

    transition: transform 0.25s ease;
}


/* =====================================
   WHATSAPP
===================================== */

.whatsapp-btn .contact-icon {
    background: #e9f9ef;
    color: #25d366;
}

.whatsapp-btn:hover {
    border-color: #25d366;
    background: #25d366;
    color: #222;
}

.whatsapp-btn:hover .contact-icon {
    background: #25d366;
    color: #fff;
}

.whatsapp-btn:hover .contact-arrow {
    color: #25d366;
    transform: translateX(4px);
}


/* =====================================
   ENQUIRY
===================================== */

.enquiry-btn .contact-icon {
    background: #f1f1f1;
    color: #222;
}

.enquiry-btn:hover {
    border-color: #222;
    background: #fafafa;
    color: #222;
}

.enquiry-btn:hover .contact-icon {
    background: #222;
    color: #fff;
}

.enquiry-btn:hover .contact-arrow {
    color: #222;
    transform: translateX(4px);
}


/* =====================================
   MOBILE
===================================== */

@media (max-width: 576px) {

    .product-contact-buttons {
        flex-direction: column;
        gap: 10px;
    }

    .contact-btn {
        width: 100%;
    }

}


















</style>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "<?php echo e(route('index')); ?>"
    }
    <?php $__currentLoopData = $product->productCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $ctg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>,
    {
      "@type": "ListItem",
      "position": <?php echo e($index + 2); ?>,
      "name": "<?php echo e($ctg->name); ?>",
      "item": "<?php echo e(route('productCategory', $ctg->slug ?: 'no-title')); ?>"
    }
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>,
    {
      "@type": "ListItem",
      "position": <?php echo e($product->productCategories->count() + 2); ?>,
      "name": "<?php echo e($product->name); ?>",
      "item": "<?php echo e(url()->current()); ?>"
    }
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "<?php echo e($product->name); ?>",
  "image": "<?php echo e(asset($product->image())); ?>",
  "description": <?php echo json_encode(strip_tags($product->seo_contents ?: $product->description), 15, 512) ?>,
  "brand": {
    "@type": "Brand",
    "name": "<?php echo e($product->brand->name ?? 'Unknown'); ?>"
  },
  "offers": {
    "@type": "Offer",
    "url": "<?php echo e(url()->current()); ?>",
    "priceCurrency": "BDT",
    "price": "<?php echo e($product->offerPrice()); ?>",
    "availability": "https://schema.org/InStock",
    "itemCondition": "https://schema.org/NewCondition"
  }
}
</script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('contents'); ?>




  <!-- Main Product Detail Page Container -->
  <main class="detail-page-wrapper">
    <div class="container">
      
      <!-- Top Breadcrumb Navigation -->
      <nav aria-label="breadcrumb" class="detail-breadcrumb-card">
        <ol class="detail-breadcrumb-list">
          <li class="detail-breadcrumb-item">
            <a href="<?php echo e(route('index')); ?>" class="detail-breadcrumb-link">Home</a>
            <i class="fa-solid fa-chevron-right detail-breadcrumb-separator"></i>
          </li>
          <li class="detail-breadcrumb-item">
            <a href="#" class="detail-breadcrumb-link">Product</a>
            <i class="fa-solid fa-chevron-right detail-breadcrumb-separator"></i>
          </li>
            <?php $__currentLoopData = $product->productCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ctg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <li class="detail-breadcrumb-item active" aria-current="page">
                <a href="<?php echo e(route('productCategory', $ctg->slug ?: 'no-title')); ?>" class="mgmt-detail-meta-link"><?php echo e($ctg->name); ?></a><?php echo e(!$loop->last ? ',' : ''); ?>

            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
        </ol>
      </nav>

      <!-- Main Product Details Card -->
      <section class="detail-main-card">
        <div class="row g-4">
          
          <!-- Column 1: Gallery & Media (Left) -->
          <div class="col-12 col-md-5 col-lg-5">
       

                <div class="mgmt-detail-img-wrap largeImage">
                    <div class="mgmt-detail-img-zoom-wrap">
                        <img src="<?php echo e(asset($product->image())); ?>" alt="<?php echo e($product->name); ?>" class="mgmt-detail-img" id="mgmtMainImage">
                        <div class="mgmt-zoom-lens"></div>
                        <div class="mgmt-zoom-result"></div>
                    </div>

                    <div class="mgmt-thumbnails-wrap">
                        <div class="mgmt-thumbnail-item active" data-src="<?php echo e(asset($product->image())); ?>">
                            <img src="<?php echo e(asset($product->image())); ?>" alt="<?php echo e($product->name); ?>">
                        </div>
                        <?php if(isset($product->galleryFiles) && $product->galleryFiles->count() > 0): ?>
                            <?php $__currentLoopData = $product->galleryFiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="mgmt-thumbnail-item" data-src="<?php echo e(asset($gallery->image())); ?>">
                                    <img src="<?php echo e(asset($gallery->image())); ?>" alt="Gallery Image">
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                </div>

          </div>

          <!-- Column 2: Product Info & Options (Right) -->
          <div class="col-12 col-md-7 col-lg-7">
            <div class="detail-info-container">
              
              <!-- Title + Code Header -->
              <div class="detail-title-header">
                <div class="detail-title-group">
                  <h1 class="detail-prod-title"><?php echo e($product->name); ?></h1>
                  <!--<span class="detail-prod-code">04502</span>-->
                </div>
                <!--<div class="detail-header-actions">-->
                <!--  <button type="button" class="detail-action-icon-btn" title="Share Product">-->
                <!--    <i class="fa-solid fa-share-nodes"></i>-->
                <!--  </button>-->
                <!--  <button type="button" class="detail-action-icon-btn" title="360 View">-->
                <!--    <i class="fa-solid fa-rotate"></i>-->
                <!--  </button>-->
                <!--</div>-->
                
             <div class="detail-header-actions position-relative">

    <button type="button"
            class="detail-action-icon-btn"
            id="shareToggle">
        <i class="fa-solid fa-share-nodes"></i>
    </button>

   

</div>
                
              </div>
                
                <div class="pDetaiCtg">
                    <ul>
                        <li>Categories:</li>
                         <?php $__currentLoopData = $product->productCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ctg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <li class="detail-breadcrumb-item active" aria-current="page">
                            <a href="<?php echo e(route('productCategory', $ctg->slug ?: 'no-title')); ?>" class="mgmt-detail-meta-link"><?php echo e($ctg->name); ?></a><?php echo e(!$loop->last ? ',' : ''); ?>

                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
         
                   <?php if($product->sku_code): ?>
                            <p class="mgmt-detail-meta-line">SKU: <span><?php echo e($product->sku_code); ?></span></p>
                        <?php endif; ?>

              
              

              <!-- Price Callout Teal Banner -->
              

              <!-- Document Downloads Pills -->
              
              
              <!-- Contact Action Pills -->
                

              <!-- Short Details Section -->
              <div class="detail-short-desc">
                <h3 class="detail-short-desc-title">Product Details</h3>
                <div class="detail-short-desc-text">
                  <?php echo $product->short_description; ?>

                </div>
              </div>
              
              
              
              
              <div class="product-contact-buttons">

                    <!-- WhatsApp -->
                    <a href="https://wa.me/8801722955573"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="contact-btn whatsapp-btn">
                
                        <span class="contact-icon">
                            <i class="fa-brands fa-whatsapp"></i>
                        </span>
                
                        <span class="contact-content">
                            <strong>WhatsApp</strong>
                            <small>Chat with us</small>
                        </span>
                
                        <i class="fa-solid fa-arrow-right contact-arrow"></i>
                    </a>
                
                
                    <!-- Enquiry -->
                    <a style="background: #e43a59;" href="#enquiry"
                       class="contact-btn enquiry-btn">
                
                        <span class="contact-icon">
                            <i class="fa-regular fa-envelope"></i>
                        </span>
                
                        <span class="contact-content">
                            <strong>Send Enquiry</strong>
                            <small>Ask about this product</small>
                        </span>
                
                        <i class="fa-solid fa-arrow-right contact-arrow"></i>
                    </a>
                
                </div>
              
              
              

              <!-- All Social Links Sharing Section -->
              <div class="detail-social-share-row">
                <span class="detail-social-label">Social Media :</span>
                <ul class="detail-social-icons-list">
                  <li>
                    <a href="#" class="detail-social-icon-btn" title="Share on Facebook" aria-label="Facebook">
                      <i class="fa-brands fa-facebook-f"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="detail-social-icon-btn" title="Share on X (Twitter)" aria-label="X Twitter">
                      <i class="fa-brands fa-x-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="detail-social-icon-btn" title="Share on Pinterest" aria-label="Pinterest">
                      <i class="fa-brands fa-pinterest-p"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="detail-social-icon-btn" title="Share on LinkedIn" aria-label="LinkedIn">
                      <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="detail-social-icon-btn" title="Share on WhatsApp" aria-label="WhatsApp">
                      <i class="fa-brands fa-whatsapp"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="detail-social-icon-btn" title="Send via Email" aria-label="Email">
                      <i class="fa-solid fa-envelope"></i>
                    </a>
                  </li>
                </ul>
              </div>

            </div>
          </div>

        </div>
      </section>

      <!-- Full Details Tabbed Section (Description Text Only, Size Chart, Specifications) -->
     

      <!-- Related Products Section (5 cards on PC, 2 cards on Phone) -->
      <section class="detail-related-section">
        <h2 class="detail-related-title">Related Products</h2>
        
        <div class="row g-3 g-md-4">
          
          <!-- Related Card 1 -->
          <?php $__currentLoopData = $relatedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-6 col-sm-6 col-md-4 col-lg-2-4">
             <?php echo $__env->make(welcomeTheme().'products.includes.productCard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>
      </section>

    </div>
  </main>







<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>



<script>
$(document).ready(function () {

    $('.color').on('click', function () {

        $('.color').removeClass('active');

        $(this).addClass('active');

        let colorName = $(this).data('color');

        $('#selectedColor').text(colorName);
    });

});
</script>


<script>
function changeMainImage(element, image) {

    document.getElementById('mainStageImg').src = image;

    document.querySelectorAll('.detail-thumb-box').forEach(function(item){
        item.classList.remove('active');
    });

    element.classList.add('active');
}
</script>

<script>


$('#shareProduct').click(function () {

    // HTML ট্যাগ এবং Entities রিমুভ করে নেব
    const productTitle = <?php echo json_encode(html_entity_decode(strip_tags($product->name)), 15, 512) ?>;
    const productDesc = <?php echo json_encode(html_entity_decode(strip_tags($product->product_shortdescription)), 15, 512) ?>;
    
    const productUrl = window.location.href;

    if (navigator.share) {
        navigator.share({
            title: productTitle,
            text: productDesc, // এখানে Short Description পাস করা হয়েছে
            url: productUrl
        }).catch((error) => console.log('Share error:', error));
    } else {
        // Facebook Sharer সরাসরি Text নেয় না, তবে URL-এর সাথে Meta tags কাজ করে
        let shareUrl = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(productUrl);
        window.open(shareUrl, '_blank');
    }

});



$('#shareToggle').click(function (e) {
    e.stopPropagation();
    $('#shareMenu').toggle();
});

$(document).click(function () {
    $('#shareMenu').hide();
});

$('#copyProductLink').click(function (e) {
    e.preventDefault();

    navigator.clipboard.writeText(window.location.href);

    alert('Product link copied successfully!');
});



</script>






<script>
$(document).ready(function(){

    $(document).on('click', '.mgmt-thumbnail-item', function() {
        $('.mgmt-thumbnail-item').removeClass('active');
        $(this).addClass('active');
        var src = $(this).data('src');
        if (src) {
            $('#mgmtMainImage').attr('src', src);
        }
    });

    // Box lens zoom + scroll to change zoom level
    var zoomWrap = $('.mgmt-detail-img-zoom-wrap');
    var zoomLens = $('.mgmt-zoom-lens');
    var zoomResult = $('.mgmt-zoom-result');
    var zoomLevel = 2;
    var minZoom = 2;
    var maxZoom = 6;
    var zoomStep = 0.5;

    zoomWrap.on('mouseenter', function() {
        var src = $(this).find('img').attr('src');
        zoomLens.show();
        zoomResult.show();
        zoomResult.css('background-image', 'url(' + src + ')');
    });

    zoomWrap.on('mousemove', function(e) {
        var $this = $(this);
        var rect = this.getBoundingClientRect();

        var lensW = zoomLens.width() / 2;
        var lensH = zoomLens.height() / 2;

        var x = e.clientX - rect.left - lensW;
        var y = e.clientY - rect.top - lensH;

        x = Math.max(0, Math.min(x, rect.width - zoomLens.width()));
        y = Math.max(0, Math.min(y, rect.height - zoomLens.height()));

        zoomLens.css({ left: x + 'px', top: y + 'px' });

        var px = x / rect.width;
        var py = y / rect.height;

        zoomResult.css({
            backgroundPosition: (px * 100) + '% ' + (py * 100) + '%'
        });
    });

    zoomWrap.on('wheel', function(e) {
        e.preventDefault();
        var delta = e.deltaY || (e.originalEvent && e.originalEvent.deltaY) || 0;
        if (delta < 0) {
            zoomLevel = Math.min(maxZoom, zoomLevel + zoomStep);
        } else {
            zoomLevel = Math.max(minZoom, zoomLevel - zoomStep);
        }
        zoomResult.css('background-size', (zoomLevel * 100) + '%');
    });

    zoomWrap.on('mouseleave', function() {
        zoomLens.hide();
        zoomResult.hide();
    });

    $(".quantityValue .increment-quantity").click(function(){
        var input = $("#qty");
        var max = parseInt(input.attr("data-max")) || 20;
        var value = parseInt(input.val());
        if (value < max) { input.val(value + 1); }
    });

    $(".quantityValue .decrement-quantity").click(function(){
        var input = $("#qty");
        var min = parseInt(input.attr("min")) || 1;
        var value = parseInt(input.val());
        if (value > min) { input.val(value - 1); }
    });

    $(document).on("click", ".addToCart", function () {
    var url = $(this).data("url");
    var quantity = $("#qty").val();

    var option = [];

    $('.attributeValue:checked').each(function () {
        option.push($(this).data('vlueid'));
        // or .val() depending on your HTML
    });

    $.ajax({
        url: url,
        type: "GET",
        data: {
            quantity: quantity,
            option: option
        },
        success: function (data) {

            if (!data.success) {
                alert(data.message);
                return;
            }

            if ($('#offcanvasRight').length) {
                new bootstrap.Offcanvas($('#offcanvasRight')[0]).show();
            }

            $(".shopping-details").html(data.cartViews);
        },
        error: function (xhr) {
            console.log(xhr.responseText);
        }
    });
});


$(document).on('click', '.attributeItem li label', function () {

    let $label = $(this);
    let $input = $label.find('.attributeValue');

    // check radio
    $input.prop('checked', true);

    // remove active only in same group (same attribute)
    let groupName = $input.attr('name');

    $('.attributeItem li label').each(function () {
        if ($(this).find('.attributeValue').attr('name') === groupName) {
            $(this).removeClass('active');
        }
    });

    $label.addClass('active');

    // ðŸ”¥ GET SELECTED COLOR / NAME
    let selectedName = $label.data('vari'); // THIS IS IMPORTANT

    // show selected name
    $label.closest('.row')
        .find('.selected-value')
        .text(selectedName);

    // ðŸ”¥ CHANGE MAIN IMAGE IF EXISTS
    // let image = $label.data('image');
    // if (image) {
    //     $('.largeImage img, #mgmtMainImage').attr('src', image);
    // }

    // ðŸ”¥ COLOR FIX (BACKGROUND BOX ALWAYS SHOW)
    if ($label.hasClass('colorItem')) {
        $label.css('background-color', $label.css('background-color'));
    }

});




  $('.attributeItem li label').click(function() {
           
            var dataName = $(this).data('name');
            $('.attributeItem li label[data-name="'+dataName+'"]').removeClass('active');
            
            $(this).addClass('active');
            
            var images = $(this).data('images');
            if (images && images.length > 0) {
                
                $('#mgmtMainImage').attr('src', images[0]);
        
                var $thumbnailWrap = $('.mgmt-thumbnails-wrap');
                $thumbnailWrap.empty();

                $.each(images, function(index, imageUrl) {
                    var activeClass = (index === 0) ? 'active' : '';
                    
                    var thumbHtml = `
                        <div class="mgmt-thumbnail-item ${activeClass}" data-src="${imageUrl}">
                            <img src="${imageUrl}" alt="Gallery Image">
                        </div>
                    `;
                    
                    $thumbnailWrap.append(thumbHtml);
                });
        
            }

            // var image = $(this).data('image');
            // if (image) {
            //     //alert('Image URL: ' + image);
            //     $('.largeImage img').attr('src', image);
            // }
            
            
            setTimeout(function() {
                var selectedIds = [];
                $('.attributeItem li .attributeValue:checked').each(function() {
                    selectedIds.push($(this).data('vlueid'));
                });
                
                var datas = <?php echo json_encode($datas, 15, 512) ?>;
                
                // var filteredProducts = filterProductsBySelectedAttributes(datas, selectedIds);
                
                // if(filteredProducts.length > 0) {
                //     var priceText = '';
                //     var stutas =true;
                //     var qtyVari =0;
                //     filteredProducts.forEach(function(product) {
                //         priceText += product.price;
                //         stutas =product.stock_status?true:false;
                //         qtyVari =product.quantity;
                //     });
                    
                //     if(stutas){
                        
                //         $('.buyNowSinBtn, .addToSinBtn').prop('disabled', false);
                //         $('.buyNowSinBtn').empty().append('Buy Now');
                //         if($('.productQtyValue').val()==0){
                //             $('.productQtyValue').val(1);
                //             $('.productQtyValue').prop('disabled', false);
                //         }
                        
                //         $('.productQtyValue').attr('data-max',qtyVari);
                //         $('.productPriceAppend').empty().append(priceText);
                //         $('.productStock').empty().append('<b>Stock Available</b>');
                    
                //     }else{
                //         $('.buyNowSinBtn').empty().append('Pre Order');
                //         $('.buyNowSinBtn').prop('disabled', false);
                //         $('.addToSinBtn').prop('disabled', true);
                //         $('.productQtyValue').val(1);
                //         $('.productPriceAppend').empty().append(priceText);
                //         $('.productQtyValue').prop('disabled', false);
                //         $('.productStock').empty().append('<b style="color:red;">Stock Out</b>');
                //     }
                    
                // } else {
                //     $('.buyNowSinBtn, .addToSinBtn').prop('disabled', true);
                //     $('.buyNowSinBtn').empty().append('Buy Now');
                //     $('.productQtyValue').val(0);
                //     $('.productQtyValue').prop('disabled', true);
                //     $('.productStock').empty().append('<b style="color:red;">Stock Out</b>');
                // }
                
                // $('.succeMessage').empty()
                // console.log(filteredProducts);
                // console.log(selectedIds);
                // getPrice();
            }, 10);
            
        });



    $(document).on('click', '.mgmt-accordion-btn', function(){
        var item = $(this).closest('.mgmt-accordion-item');
        var body = item.find('.mgmt-accordion-body');
        var icon = $(this).find('.mgmt-accordion-icon');
        var isOpen = item.hasClass('mgmt-accordion-open');
        item.toggleClass('mgmt-accordion-open', !isOpen);
        body.attr('hidden', isOpen ? 'hidden' : null);
        icon.removeClass('fa-minus fa-plus').addClass(isOpen ? 'fa-plus' : 'fa-minus');
        $(this).attr('aria-expanded', !isOpen);
    });

});
</script>





<?php $__env->stopPush(); ?>

<?php echo $__env->make(welcomeTheme().'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nithostrb/public_html/nuvesta.nit.hostrb.com/resources/views/welcome/products/productView.blade.php ENDPATH**/ ?>