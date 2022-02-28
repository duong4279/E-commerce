<div>
<div class="page-breadcrumb bg-white" style="margin-bottom:15px">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Sản phẩm</h4>
            </div>
        </div>
    </div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="d-md-flex mb-3">
                    <div class="col-md-6" >
                        <h3 class="box-title mb-0">Tất cả sản phẩm</h3>
                    </div>
                    <div class="col-md-6" style="text-align: right;">
                        <a href="{{ route('admin.addproduct') }}" style="background-color: #f7941e;border-color: #f7941e; border-radius: 6px;" class="btn btn-success pull-right">Thêm mới sản phẩm</a>
                    </div>
                </div>
                <div class="table-responsive">
                    @if(Session::has('message'))
                        <div class="arlet alert-success" role="arlet">{{Session::get('message')}}</div>
                    @endif
                    <table class="table no-wrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">ID</th>
                                <th class="border-top-0">Hình ảnh</th>
                                <th class="border-top-0">Tên sản phẩm</th>
                                <th class="border-top-0">Trạng thái</th>
                                <th class="border-top-0">Giá</th>
                                <th class="border-top-0">Danh mục</th>
                                <th class="border-top-0">Số lượng</th>
                                <th class="border-top-0">Chỉnh sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td><img src="{{ asset('assets/images/products') }}/{{ $product->image}}" width="60" /></td>
                                <td class="txt-oflo"><p>{{ $product->name }}</p></td>
                                <td>{{ $product->stock_status }}</td>
                                <td class="txt-oflo">{{ $product->price }}</td>
                                <td class="txt-oflo">{{ $product->category->name }}</td>
                                <td class="txt-oflo">{{ $product->quantity }}</td>
                                <td>
                                    <a href="{{ route('admin.editproduct',['product_slug' => $product->slug]) }}"><i class="fa fa-edit" ></i></a>
                                    <a href="#" style="margin-left:10px;" onclick="confirm('Xóa sản phẩm này?') || event.stopImmediatePropagation()" wire:click.prevent="deleteProduct({{$product->id}})"><i class="fa fa-times text-danger" ></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$products->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
</div>
