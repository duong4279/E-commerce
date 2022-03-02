<div>
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box">
            <div class="d-md-flex mb-3">
                <div class="col-md-6" >
                    <h3 class="box-title mb-0">Chi tiết đơn hàng</h3>
                </div>
                <div class="col-md-6" style="text-align: right;">
                    <a href="#" style="background-color: #f7941e;border-color: #f7941e; border-radius: 6px;" class="btn btn-success pull-right">Tất cả đơn hàng</a>
                </div>
            </div>
            <div class=" main-content-area">
                <div class="wrap-iten-in-cart">
                    <ul class="products-cart">
                    @foreach($order->orderItems as $item)
                        <li class="pr-cart-item">
                            <div class="product-image">
                                <figure><img src="{{ asset('assets/images/products')}}/{{$item->product->image}}" alt="{{$item->product->name}}">{{$item->product->name}}</figure>
                            </div>
                            <div class="product-name">
                                <a class="{{ route('product.details',['slug' => $item->product->slug]) }}" href="#" title="">{{$item->product->name}}</a>
                            </div>
                            <div class="price-field produtc-price"><p class="price">{{$item->price}}</p></div>
                            <div class="quantity">
                                <div class="price-field produtc-price" >
                                   		<p class="price">{{$item->quantity}}</p>						
                                </div>
                            </div>
                            <div class="price-field sub-total"><p class="price">{{$item->quantity * $item->price}}</p></div>                           
                        </li>	
                        @endforeach											
                    </ul>
                </div>
                <div class="summary">
                    <div class="order-summary">
                        <h4 class="title-box">Thông tin đơn hàng</h4>
                        <p class="summary-info"><span class="title">Tổng tiền hàng</span><span class="index" style="font-size: 14px">{{$order->subtotal}}</span></p>
                        <p class="summary-info"><span class="title">Phí vận chuyển</span><span class="index" style="font-size: 14px">Miễn phí vận chuyển</span></p>
                        <p class="summary-info total-info "><span class="title">Thành tiền</span><span class="index" style="font-size: 14px">{{$order->total}}</span></p>
                    </div>
                    <div class="checkout-info">
                        <a style=" width: 20%;float: right; border-radius: 20px;"class="btn btn-checkout" href="checkout.html">Check out</a>
                    </div>
                </div>
        </div>
        <div class="d-md-flex mb-3" style="width: 100%; padding: 12px; background: #f7941e;">
            <div class="col-md-6" >
                <h3 class="box-title mb-0">Giao dịch</h3>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table no-wrap">
                <tbody>
                    <tr>
                        <th class="border-top-0">Hình thức thanh toán</th>
                        <td>{{$order->transaction->mode == 'cod' ? 'COD' : 'Chuyển khoản'}}</td>
                    </tr>
                    <tr>
                        <th class="border-top-0">Trạng thái</th>
                        <td>{{$order->transaction->status == 'pending' ? 'Đang chờ' : ($order->transaction->status == 'approved' ? 'Đang xử lý' : ($order->transaction->status == 'declined' ? 'Đã từ chối' : 'Hoàn trả')) }}</td>
                    </tr>
                    <tr>    
                        <th class="border-top-0">Ngày đặt hàng</th>
                        <td class="txt-oflo">12/12/2021</td>
                    </tr>
                    <tr>    
                        <th class="border-top-0">Ghi chú</th>
                        <td class="txt-oflo">{{$order->note}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-md-flex mb-3" style="width: 100%; padding: 12px; background: #f7941e;">
            <div class="col-md-6" >
                <h3 class="box-title mb-0">Thông tin khách hàng</h3>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table no-wrap">
                <tbody>
                    <tr>
                        <th class="border-top-0">Họ Tên</th>
                        <td>{{$order->lastname}} {{$order->firstname}}</td>
                    </tr>
                    <tr>
                        <th class="border-top-0">Số điện thoại</th>
                        <td>{{$order->phone}}</td>
                    </tr>
                    <tr>    
                        <th class="border-top-0">Địa chỉ</th>
                        <td class="txt-oflo">{{$order->address}}</td>
                    </tr>
                    <tr>    
                        <th class="border-top-0">Email</th>
                        <td class="txt-oflo">{{$order->email}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-md-flex mb-3" style="width: 100%; padding: 12px; background: #f7941e;">
            <div class="col-md-6" >
                <h3 class="box-title mb-0">Thông tin vận chuyển</h3>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table no-wrap">
                <tbody>
                    <tr>
                        <th class="border-top-0">Đơn vị vận chuyển</th>
                        <td>{{$order->shipping_unit}}</td>
                    </tr>
                    <tr>
                        <th class="border-top-0">Mã đơn hàng</th>
                        <td>{{$order->shipping_code}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
    {{-- The Master doesn't talk, he acts. --}}
</div>
