{{--
<a class="nav-link cart_trigger" href="#" data-bs-toggle="dropdown">
    <i class="linearicons-cart"></i>
    <span class="cart_count">{{$cartsCount}}</span>
</a>
<div class="cart_box dropdown-menu dropdown-menu-right">
    @if($carts->count() > 0)
        <ul class="cart_list">
            @foreach($carts as $cart)
            <li>
                <a href="javascript:void(0)" class="item_remove cartUpdate" data-url="{{ route('changeToCart', [$cart, 'delete']) }}" ><i class="ion-close"></i></a>
                <a href="{{route('productView',$cart->product->slug?:'no-title')}}"><img src="{{asset($cart->product->image())}}" alt="{{$cart->product->name}}">{{$cart->product->name}}</a>
                <span class="cart_quantity"> {{ $cart->quantity }} x {{priceFullFormat($cart->itemprice())}}</span>
            </li>
            @endforeach
        </ul>
        <div class="cart_footer">
            <p class="cart_total"><strong>Subtotal:</strong>{{priceFullFormat($cartTotalPrice)}}</p>
            <p class="cart_buttons"><a href="{{route('carts')}}" class="btn btn-fill-line rounded-0 view-cart">View Cart</a><a href="{{route('checkout')}}" class="btn btn-fill-out rounded-0 checkout">Checkout</a></p>
        </div>
    @else
    <div class="cart_empty">
        <i class="linearicons-cart"></i>
        <h4>Empty Cart</h4>
        <a href="{{route('index')}}" class="btn btn-fill-line rounded-0 view-cart">Shopping</a>
    </div>
    @endif 
</div>
--}}

<div class="offcanvas-header">
 <h4 class="offcanvas-title" id="offcanvasRightLabel">Shopping Cart </h4>
 <button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body theme-scrollbar">
    <ul class="offcanvas-cart">
    @if(@isset($carts) && $carts->count() > 0)
    @foreach($carts as $cart)
       <li>  
        <a href="{{route('productView',$cart->product->slug?:'no-title')}}">
            <img src="{{asset($cart->product->image())}}" alt="{{$cart->product->name}}" />
        </a>
        <div> 
           <h6 class="mb-0">{{$cart->product->name}}</h6>
           <p>
               {{ $cart->quantity }} x {{priceFullFormat($cart->itemprice())}}
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
         <i class="fa fa-trash cartUpdate" style="color: #F44336;cursor: pointer;" data-url="{{ route('changeToCart', [$cart->id, 'delete']) }}" ></i>
       </li>
       @endforeach
    @else
    <li>
        empty
    </li>
    @endif
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
   <p>@isset($cartTotalPrice) {{priceFullFormat($cartTotalPrice)}}@endisset </p>
 </div>
 <div class="cart-button">  <a class="btn btn_outline" href="{{route('carts')}}"> View Cart </a><a class="btn btn_black" href="{{route('checkout')}}"> Checkout </a></div>
</div>