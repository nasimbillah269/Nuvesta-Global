

<div class="offcanvas-header">
 <h4 class="offcanvas-title" id="offcanvasRightLabel">Shopping Cart </h4>
 <button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body theme-scrollbar">
    <ul class="offcanvas-cart">
    <?php if(@isset($carts) && $carts->count() > 0): ?>
    <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <li>  
        <a href="<?php echo e(route('productView',$cart->product->slug?:'no-title')); ?>">
            <img src="<?php echo e(asset($cart->product->image())); ?>" alt="<?php echo e($cart->product->name); ?>" />
        </a>
        <div> 
           <h6 class="mb-0"><?php echo e($cart->product->name); ?></h6>
           <p>
               <?php echo e($cart->quantity); ?> x <?php echo e(priceFullFormat($cart->itemprice())); ?>

           </p>
           <!--<div class="btn-containter">-->
           <!--  <div class="btn-control">-->
           <!--    <button class="btn-controlremove" id="btn-remove">&minus; </button>-->
           <!--    <div class="btn-controlquantity">-->
           <!--      <div id="quantity-previous">2 </div>-->
           <!--      <div id="quantity-current">3 </div>-->
           <!--      <div id="quantity-next">4 </div>-->
           <!--    </div>-->
           <!--    <button class="btn-controladd" id="btn-add">+ </button>-->
           <!--  </div>-->
           <!--</div>-->
         </div>
         <i class="fa fa-trash cartUpdate" style="color: #F44336;cursor: pointer;" data-url="<?php echo e(route('changeToCart', [$cart->id, 'delete'])); ?>" ></i>
       </li>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
    <li>
        empty
    </li>
    <?php endif; ?>
     </ul>
</div>
<div class="offcanvas-footer">
 <!--<p>Spend  <span>$ 14.81   </span>more and enjoy   <span>FREE SHIPPING! </span></p>-->
 <!--<div class="footer-range-slider">-->
 <!--  <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100">-->
 <!--    <div class="progress-bar progress-bar-striped progress-bar-animated theme-default" style="width: 46%"></div>-->
 <!--  </div>-->
 <!--</div>-->
 <div class="price-box"> 
   <h6>Total : </h6>
   <p><?php if(isset($cartTotalPrice)): ?> <?php echo e(priceFullFormat($cartTotalPrice)); ?><?php endif; ?> </p>
 </div>
 <div class="cart-button">  <a class="btn btn_outline" href="<?php echo e(route('carts')); ?>"> View Cart </a><a class="btn btn_black" href="<?php echo e(route('checkout')); ?>"> Checkout </a></div>
</div><?php /**PATH /home/nasim/nuvesta/Nuvesta-Global/resources/views/welcome/carts/includes/headerCartBox.blade.php ENDPATH**/ ?>