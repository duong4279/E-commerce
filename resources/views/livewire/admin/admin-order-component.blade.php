<div>
<div class="page-breadcrumb bg-white" style="margin-bottom:15px">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Đơn hàng</h4>
            </div>
        </div>
    </div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="d-md-flex mb-3">
                    <div class="col-md-6" >
                        <h3 class="box-title mb-0">Danh sách đơn hàng</h3>
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
                                <th class="border-top-0">Tổng tiền hàng</th>
                                <th class="border-top-0">Tên khách hàng</th>
                                <th class="border-top-0">Số điện thoại</th>
                                <th class="border-top-0">Email</th>
                                <th class="border-top-0">Ngày đặt hàng</th>
                                <th class="border-top-0">Trạng thái</th>
                                <th class="border-top-0">Chỉnh sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td class="txt-oflo"> <p>{{$order->total}}</p></td>
                                <td class="txt-oflo"><p>{{ $order->lastname }} {{ $order->firstname }}</p></td>
                                <td class="txt-oflo"><p>{{ $order->phone }}</p></td>
                                <td class="txt-oflo">{{ $order->email}}</td>
                                <td class="txt-oflo">{{ $order->updated_at }}</td>
                                <td class="txt-oflo">{{ $order->status == 'ordered' ? 'Đã đặt hàng' : ($order->status == 'delivered' ? 'Đã giao hàng' : 'Đã hủy')  }}</td>
                                <td>
                                <a class="btn btn-success" href="{{route('admin.orderdetails',['order_id'=> $order->id])}}" style="background-color: #f7941e;border-color: #f7941e; border-radius: 6px;">Xem chi tiết</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$orders->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

    {{-- The whole world belongs to you. --}}
</div>
