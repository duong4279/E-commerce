<div>

<main id="main" class="main-site">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="#" class="link">trang chủ</a></li>
            <li class="item-link"><span>thanh toán</span></li>
        </ul>
    </div>
    <div class=" main-content-area">
        <form wire:submit.prevent ="placeOrder">
        <div class="row">
            <div class="col-md-12">
                <div class="wrap-address-billing">
                <h3 class="box-title">Điền thông tin mua hàng</h3>
                <div class="billing-address">
                    <p class="row-in-form">
                        <label for="fname">Họ:<span>*</span></label>
                        <input type="text" name="fname" value="" placeholder="" wire:model="firstname">
                        @error('firstname') <span class="text-danger">{{$message}}</span>@enderror
                    </p>
                    <p class="row-in-form">
                        <label for="lname">Tên:<span>*</span></label>
                        <input type="text" name="lname" value="" placeholder="" wire:model="lastname">
                        @error('lastname') <span class="text-danger">{{$message}}</span>@enderror
                    </p>
                    <p class="row-in-form">
                        <label for="email">Email:<span>*</span></label>
                        <input type="email" name="email" value="" placeholder="" wire:model="email">
                        @error('email') <span class="text-danger">{{$message}}</span>@enderror
                    </p>
                    <p class="row-in-form">
                        <label for="phone">Số điện thoại:<span>*</span></label>
                        <input type="text" name="phone" value="" placeholder="" wire:model="phone">
                        @error('phone') <span class="text-danger">{{$message}}</span>@enderror
                    </p>
                    <p class="row-in-form">
                        <label for="add">Địa chỉ:<span>*</span></label>
                        <input type="text" name="add" value="" placeholder="" wire:model="address">
                        @error('address') <span class="text-danger">{{$message}}</span>@enderror
                    </p>
                    <!-- <p class="row-in-form">
                        <label for="zip-code">Huyện/Quận</label>
                        <input id="zip-code" type="number" name="zip-code" value="" placeholder="Your postal code">
                    </p> -->
                    <p class="row-in-form">
                        <label for="city">Ghi chú:</label>
                        <input type="text" name="note" value="" placeholder="" wire:model="note">
                    </p>
                    <p class="row-in-form fill-wife">
                        <!-- <label class="checkbox-field">
                            <input name="create-account" id="create-account" value="forever" type="checkbox">
                            <span>Create an account?</span>
                        </label> -->
                        <!-- <label class="checkbox-field">
                            <input name="different-add" id="different-add" value="forever" type="checkbox" wire:model="other_address">
                            <span>Chọn địa chỉ khác</span>
                        </label> -->
                    </p>
                </div>
            </div>
            <!-- @if($other_address)
                <div class="col-md-12">
                    <div class="wrap-address-billing">
                    <h3 class="box-title">Điền thông tin mua hàng</h3>
                    <div class="billing-address">
                        <p class="row-in-form">
                            <label for="fname">Họ:<span>*</span></label>
                            <input type="text" name="fname" value="" placeholder="" wire:model="s_firstname">
                        </p>
                        <p class="row-in-form">
                            <label for="lname">Tên:<span>*</span></label>
                            <input type="text" name="lname" value="" placeholder="" wire:model="s_lastname">
                        </p>
                        <p class="row-in-form">
                            <label for="email">Email:<span>*</span></label>
                            <input type="email" name="email" value="" placeholder="" wire:model="s_email">
                        </p>
                        <p class="row-in-form">
                            <label for="phone">Số điện thoại:<span>*</span></label>
                            <input type="number" name="phone" value="" placeholder="" wire:model="s_phone">
                        </p>
                        <p class="row-in-form">
                            <label for="add">Địa chỉ:<span>*</span></label>
                            <input type="text" name="add" value="" placeholder="" wire:model="s_address">
                        </p>
                        <p class="row-in-form">
                            <label for="city">Ghi chú:</label>
                            <input type="text" name="note" value="" placeholder="" wire:model="s_note">
                        </p>
                    </div>
                </div>
                </div>
            @endif -->
        </div>
        
        <div class="summary summary-checkout">
            <div class="summary-item payment-method">
                <h4 class="title-box">Phương thức thanh toán</h4>
                <div class="choose-payment-methods">
                    <label class="payment-method">
                        <input name="payment-method" id="payment-method-bank" value="cod" type="radio" wire:model="paymentmode">
                        <span>Thanh toán khi nhận hàng</span>
                        <span class="payment-desc">Miễn phí thu hộ</span>
                    </label>
                    <label class="payment-method">
                        <input name="payment-method" id="payment-method-visa" value="card" type="radio" wire:model="paymentmode">
                        <span>Thẻ ngân hàng</span>
                        <span class="payment-desc">Chuyển khoản </span>
                        <span class="payment-desc">Tên chủ tài khoản : NONG THI DUONG </span>
                        <span class="payment-desc">Số tài khoản: XXXX XXXX XXXX </span>
                    </label>
                    @error('paymentmode') <p class="text-danger">{{$message}}</p>@enderror
                </div>
                @if(Session::has('checkout'))
                    <p class="summary-info grand-total"><span>Tổng tiền phải thanh toán</span> <span class="grand-total-price">{{Session::get('checkout')['total']}}</span></p>
                @endif
                <button type="submit" class="btn btn-medium" style="border-radius: 24px">Đặt hàng ngay</button>
            </div>
            <div class="summary-item shipping-method">
                <h4 class="title-box f-title">Phương thức vận chuyển</h4>
                <p class="summary-info"><span class="title">Theo dõi trong chi tiết đơn hàng</span></p>
                <!-- <p class="summary-info"><span class="title">Fixed $50.00</span></p> -->
                <!-- <h4 class="title-box">Discount Codes</h4>
                <p class="row-in-form">
                    <label for="coupon-code">Enter Your Coupon code:</label>
                    <input id="coupon-code" type="text" name="coupon-code" value="" placeholder="">	
                </p>
                <a href="#" class="btn btn-small">Apply</a> -->
            </div>
        </div>
    </form>
    </div><!--end main content area-->
</div><!--end container-->

</main>

    {{-- The best athlete wants his opponent at his best. --}}
</div>
