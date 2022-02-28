<div>
<div class="page-breadcrumb bg-white" style="margin-bottom:15px">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Silder</h4>
            </div>
        </div>
    </div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="d-md-flex mb-3">
                    <div class="col-md-6" >
                        <h3 class="box-title mb-0">Danh sách slider</h3>
                    </div>
                    <div class="col-md-6" style="text-align: right;">
                        <a href="{{ route('admin.addhomeslider') }}" style="background-color: #f7941e;border-color: #f7941e; border-radius: 6px;" class="btn btn-success pull-right">Thêm slider</a>
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
                                <th class="border-top-0">Tiêu đề</th>
                                <th class="border-top-0">Mô tả</th>
                                <th class="border-top-0">Trạng thái</th>
                                <th class="border-top-0">Link</th>
                                <th class="border-top-0">Ngày cập nhật</th>
                                <th class="border-top-0">Chỉnh sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sliders as $slider)
                            <tr>
                                <td>{{ $slider->id }}</td>
                                <td><img src="{{ asset('assets/images/sliders') }}/{{ $slider->image}}" width="60" /></td>
                                <td class="txt-oflo"><p>{{ $slider->title }}</p></td>
                                <td class="txt-oflo"><p>{{ $slider->sub_title }}</p></td>
                                <td>{{ $slider->status == 1 ? 'Hiện' : 'Ẩn' }}</td>
                                <td class="txt-oflo">{{ $slider->link }}</td>
                                <td class="txt-oflo">{{ $slider->updated_at }}</td>
                                <td>
                                    <a href="{{ route('admin.edithomeslider',['slider_id' => $slider->id]) }}"><i class="fa fa-edit" ></i></a>
                                    <a href="#" style="margin-left:10px;" onclick="confirm('Xóa slider này?') || event.stopImmediatePropagation()" wire:click.prevent="deleteSlider({{$slider->id}})"><i class="fa fa-times text-danger" ></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                
                </div>
            </div>
        </div>
    </div>
</div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
</div>
