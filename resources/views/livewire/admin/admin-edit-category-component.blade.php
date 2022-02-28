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
                        <h3 class="box-title mb-0">Chỉnh sửa danh mục</h3>
                    </div>
                    <div class="col-md-6" style="text-align: right;">
                        <a href="{{ route('admin.category') }}" style="background-color: #f7941e;border-color: #f7941e; border-radius: 6px;" class="btn btn-success pull-right">Tất cả danh mục</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                    @if(Session::has('message'))
                    <div class="arlet alert-success" role="arlet">{{Session::get('message')}}</div>
                    @endif
                        <form class="form-horizontal form-material" wire:submit.prevent="updateCategory">
                            <div class="form-group mb-4 d-md-flex">
                                <div class="col-md-3" style="margin-right: 20px; margin-top: 7px; text-align: right;">
                                    <label class="col-md-12 p-0" >Tên danh mục</label>
                                </div> 
                                <div class="col-md-6 ">
                                    <input type="text" placeholder="Tên danh mục" class="form-control" style="padding: 12px;" wire:model="name" wire:keyup="generateslug"> 
                                    @error('name') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group mb-4 d-md-flex">
                                <div class="col-md-3" style="margin-right: 20px; margin-top: 7px; text-align: right;">
                                    <label class="col-md-12 p-0" >Slug</label>
                                </div> 
                                <div class="col-md-6 ">
                                    <input type="text" placeholder="slug" class="form-control" style="padding: 12px;" wire:model="slug"> 
                                    @error('slug') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group mb-4 d-md-flex">
                                <div class="col-md-3" style="margin-right: 20px; margin-top: 7px; text-align: right;">
                                    <label class="col-md-12 p-0" >Trạng thái</label>
                                </div> 
                                <div class="col-md-6 ">
                                    <select class="form-control" style="padding-left: 12px;" wire:model="status">
                                        <option value="show">Hiện</option>     
                                        <option value="hide">Ẩn</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4 d-md-flex">
                                <div class="col-md-3" style="margin-right: 20px; margin-top: 7px; text-align: right;">
                                    <label class="col-md-12 p-0" ></label>
                                </div> 
                                <div class="col-md-6 ">
                                    <button type="submit" class="btn btn-primary" style="width:110px">Cập nhật</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<div>
    {{-- Stop trying to control. --}}
</div>


<div>
    {{-- The Master doesn't talk, he acts. --}}
</div>
