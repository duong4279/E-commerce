<main id="main">
		<div class="container">

			<!--MAIN SLIDE-->
			<div class="wrap-main-slide">
				<div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
					@foreach($sliders as $slider)
					<div class="item-slide">
						<a href="{{$slider->link}}" >
						<img src="{{ asset('assets/images/sliders')}}/{{$slider->image}}" alt="" class="img-slide">
						</a>
						<div class="slide-info slide-1">
							<!-- <h2 class="f-title">{{$slider->title}}</h2>
							<span class="subtitle">{{$slider->sub_title}}</span>
							<p class="sale-info">Only price: <span class="price">$59.99</span></p>
							<a href="{{$slider->link}}" class="btn-link">Shop Now</a> -->
						</div>
					</div>
					@endforeach
					
				</div>
			</div>

			<!--BANNER-->
			<!-- <div class="wrap-banner style-twin-default">
				<div class="banner-item">
					<a href="#" class="link-banner banner-effect-1">
						<figure><img src="{{ asset('assets/images/home-1-banner-1.jpg')}}" alt="" width="580" height="190"></figure>
					</a>
				</div>
				<div class="banner-item">
					<a href="#" class="link-banner banner-effect-1">
						<figure><img src="{{ asset('assets/images/home-1-banner-2.jpg')}}" alt="" width="580" height="190"></figure>
					</a>
				</div>
			</div> -->

			<!--On Sale-->
			<!-- <div class="wrap-show-advance-info-box style-1 has-countdown">
				<h3 class="title-box">On Sale</h3>
				<div class="wrap-countdown mercado-countdown" data-expire="2020/12/12 12:34:56"></div>
				<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
								<figure><img src="{{ asset('assets/images/products/tools_equipment_7.jpg')}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">sale</span>
							</div>
							<div class="wrap-btn">
								<a href="#" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info">
							<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
							<div class="wrap-price"><span class="product-price">$250.00</span></div>
						</div>
					</div>
				</div>
			</div> -->

			<!--Latest Products-->
			<div class="wrap-show-advance-info-box style-1">
				<h3 class="title-box">Sản phẩm mới nhất</h3>
				<!-- <div class="wrap-top-banner">
					<a href="#" class="link-banner banner-effect-2">
						<figure><img src="{{ asset('assets/images/digital-electronic-banner.jpg')}}" width="1170" height="240" alt=""></figure>
					</a>
				</div> -->
				<div class="wrap-products">
					<div class="wrap-product-tab tab-style-1">						
						<div class="tab-contents">
							<div class="tab-content-item active" id="digital_1a">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
									@foreach($lastest_products as $l_product)
									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="{{ route('product.details',['slug' => $l_product->slug]) }}" title="{{$l_product->name}}">
												<figure><img src="{{ asset('assets/images/products')}}/{{ $l_product->image}}" width="800" height="800" alt="{{$l_product->name}}"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
											</div>
											<!-- <div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="group-flash">
												<span class="flash-item sale-label">sale</span>
											</div> -->
											<div class="wrap-btn">
												<a href="{{ route('product.details',['slug' => $l_product->slug]) }}" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="{{ route('product.details',['slug' => $l_product->slug]) }}" class="product-name"><span>{{$l_product->name}}</span></a>
											<div class="wrap-price"><span class="product-price">{{$l_product->price}}</span></div>
										</div>
									</div>
									@endforeach
								</div>
							</div>							
						</div>
					</div>
				</div>
			</div>

			<!--Product Categories-->
			<div class="wrap-show-advance-info-box style-1">
				<h3 class="title-box">Danh mục sản phẩm</h3>
				<!-- <div class="wrap-top-banner">
					<a href="#" class="link-banner banner-effect-2">
						<figure><img src="{{ asset('assets/images/fashion-accesories-banner.jpg')}}" width="1170" height="240" alt=""></figure>
					</a>
				</div> -->
				<div class="wrap-products">
					<div class="wrap-product-tab tab-style-1">
						<div class="tab-control">
							@foreach( $active_categories as $key=>$category)
							<a href="#category_{{$category->id}}" class="tab-control-item {{ $key == 0 ? 'active' : ''}}">{{$category->name}}e</a>
							@endforeach
						</div>
						<div class="tab-contents">
							@foreach( $active_categories as $key=>$category)
							<div class="tab-content-item {{ $key == 0 ? 'active' : ''}}" id="category_{{$category->id}}">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >								
								@php
									$category_products = DB::table('products')->where('category_id', $category->id)->get()->take(6);
								@endphp
								
								@foreach($category_products as $product)
									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="{{ route('product.details',['slug' => $product->slug])}}" title="{{$product->name}}">
												<figure><img src="{{ asset('assets/images/products')}}/{{$product->image}}" width="800" height="800" alt="{{$product->name}}"></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="{{ route('product.details',['slug' => $product->slug])}}" class="product-name"><span>{{$product->name}}</span></a>
											<div class="wrap-price"><span class="product-price">{{$product->price}}</span></div>
										</div>
									</div>

								@endforeach	
								</div>
							</div>
							@endforeach	
						</div>
					</div>
				</div>
			</div>			

		</div>

	</main>