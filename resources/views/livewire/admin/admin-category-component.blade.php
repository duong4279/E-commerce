<div>
<div class="page-breadcrumb bg-white" style="margin-bottom:15px">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Danh mục sản phẩm</h4>
            </div>
        </div>
    </div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="d-md-flex mb-3">
                    <div class="col-md-6" >
                        <h3 class="box-title mb-0">Tất cả danh mục</h3>
                    </div>
                    <div class="col-md-6" style="text-align: right;">
                        <a href="{{ route('admin.addcategory') }}" style="background-color: #f7941e;border-color: #f7941e; border-radius: 6px;" class="btn btn-success pull-right">Thêm mới danh mục</a>
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
                                <th class="border-top-0">Tên danh mục</th>
                                <th class="border-top-0">Trạng thái</th>
                                <th class="border-top-0">Slug</th>
                                <th class="border-top-0">Chỉnh sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id}}</td>
                                <td class="txt-oflo">{{ $category->name}}</td>
                                <td>{{ $category->status == 'show' ? 'Hiện' : 'Ẩn'}}</td>
                                <td class="txt-oflo">{{ $category->slug}}</td>
                                <td>
                                    <a href="{{ route('admin.editcategory',['category_slug' => $category->slug]) }}"><i class="fa fa-edit"></i></a>
                                    <a href="#" style="margin-left:10px;" onclick="confirm('Xóa danh mục sản phẩm này?') || event.stopImmediatePropagation()" wire:click.prevent="deleteCategory({{$category->id}})"><i class="fa fa-times text-danger" ></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$categories->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
