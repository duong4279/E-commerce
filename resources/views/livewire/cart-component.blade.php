
<main id="main" class="main-site">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="/" class="link">trang chủ</a></li>
            <li class="item-link"><span>giỏ hàng</span></li>
        </ul>
    </div>
    <div class=" main-content-area">

        <div class="wrap-iten-in-cart">
            @if(Session::has('success_message'))
            <div class="alert-success">
                <strong>Success</strong> {{Session::get('success_message')}}
            </div>
            @endif
            @if(Cart::count() > 0)
            <h3 class="box-title">Giỏ hàng</h3>
            <ul class="products-cart">
                @foreach(Cart::content() as $item)
                <li class="pr-cart-item">
                    <div class="product-image">
                        <figure><img src="{{ asset('assets/images/products') }}/{{$item->model->image}}" alt="">{{$item->model->name}}</figure>
                    </div>
                    <div class="product-name">
                        <a class="link-to-product" href="{{ route('product.details',['slug' => $item->model->slug]) }}" title="{{ $item->model->name}}">{{$item->model->name}}</a>
                    </div>
                    <div class="price-field produtc-price"><p class="price">{{$item->model->price}}</p></div>
                    <div class="quantity">
                        <div class="quantity-input" style="border:none">
                            <a class="btn btn-increase" href="#" wire:click.prevent="increaseQuantity('{{$item->rowId}}')"></a>
                            <input type="text" name="product-quatity" value="{{$item->qty}}" data-max="120" pattern="[0-9]*" style="text-align:center; border: 1px soild #58595b; margin-left:10px">	</input>								
                            <a class="btn btn-reduce" href="#" wire:click.prevent="decreaseQuantity('{{$item->rowId}}')"></a>
                        </div>
                    </div>
                    <div class="price-field sub-total"><p class="price">{{$item->subtotal}}</p></div>
                    <div class="delete">
                        <a href="#" class="btn btn-delete" title="" wire:click.prevent="destroy('{{$item->rowId}}')">
                            <span>Delete from your cart</span>
                            <i class="fa fa-times-circle" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>	
                @endforeach											
            </ul>
            @else
            <div class="text-center" style="padding:30px 0;">
            <h1>No item in cart</h1>
            </div>
            @endif
        </div>

        <div class="summary">
            <div class="order-summary">
                <h4 class="title-box">Thông tin đơn hàng</h4>
                <p class="summary-info"><span class="title">Tổng tiền hàng</span><b class="index">{{Cart::subtotal()}}</b></p>
                <p class="summary-info"><span class="title">Phí vận chuyển</span><b class="index">Miễn phí vận chuyển</b></p>
                <p class="summary-info total-info "><span class="title">Thành tiền</span><b class="index">{{Cart::total()}}</b></p>
            </div>
            <div class="checkout-info">
                <a style=" width: 20%;float: right; border-radius: 20px;"class="btn btn-checkout" href="#" wire:click.prevent="checkout">Thanh toán</a>
            </div>
        </div>

    </div><!--end main content area-->
</div><!--end container-->

</main>

