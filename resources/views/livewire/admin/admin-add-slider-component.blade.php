<div>

<div class="page-breadcrumb bg-white" style="margin-bottom:15px">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Slider</h4>
            </div>
        </div>
    </div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="d-md-flex mb-3">
                    <div class="col-md-6" >
                        <h3 class="box-title mb-0">Thêm slider</h3>
                    </div>
                    <div class="col-md-6" style="text-align: right;">
                        <a href="{{ route('admin.homeslider') }}" style="background-color: #f7941e;border-color: #f7941e; border-radius: 6px;" class="btn btn-success pull-right">Danh sách slider</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                    @if(Session::has('message'))
                        <div class="arlet alert-success" role="arlet">{{Session::get('message')}}</div>
                    @endif
                        <form class="form-horizontal form-material" wire:submit.prevent="newSlider">
                            <div class="form-group mb-4 d-md-flex">
                                <div class="col-md-3" style="margin-right: 20px; margin-top: 7px; text-align: right;">
                                    <label class="col-md-12 p-0" >Tiêu đề</label>
                                </div> 
                                <div class="col-md-6 ">
                                    <input type="text" placeholder="Tiêu đề" class="form-control" style="padding: 12px;" wire:model="title"> 
                                    @error('title') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group mb-4 d-md-flex">
                                <div class="col-md-3" style="margin-right: 20px; margin-top: 7px; text-align: right;">
                                    <label class="col-md-12 p-0" >Mô tả</label>
                                </div> 
                                <div class="col-md-6 ">
                                    <input type="text" placeholder="Mô tả" class="form-control" style="padding: 12px;" wire:model="sub_title"> 
                                </div>
                            </div>
                            <div class="form-group mb-4 d-md-flex">
                                <div class="col-md-3" style="margin-right: 20px; margin-top: 7px; text-align: right;">
                                    <label class="col-md-12 p-0" >Link</label>
                                </div> 
                                <div class="col-md-6 ">
                                    <input type="text" placeholder="Link" class="form-control" style="padding: 12px;" wire:model="link"> 
                                </div>
                            </div>
                            <div class="form-group mb-4 d-md-flex">
                                <div class="col-md-3" style="margin-right: 20px; margin-top: 7px; text-align: right;">
                                    <label class="col-md-12 p-0" >Trạng thái</label>
                                </div> 
                                <div class="col-md-6 ">
                                    <select class="form-control" style="padding-left: 12px;" wire:model="status">
                                        <option value="1">Hiện</option>     
                                        <option value="0">Ẩn</option>
                                    </select>
                                    @error('status') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group mb-4 d-md-flex">
                                <div class="col-md-3" style="margin-right: 20px; margin-top: 7px; text-align: right;">
                                    <label class="col-md-12 p-0" >Hình ảnh</label>
                                </div> 
                                <div class="col-md-6 ">
                                    <input type="file" accept="image/*" wire:model="image">
                                    @if($image)
                                    <img src="{{$image->temporaryUrl()}}" style="height: auto; width: 160px; margin-top: 20px;"/>
                                    @endif
                                    @error('image') <p class="text-danger">{{$message}}</p>@enderror
                                </div> 
                            </div>
                            <div class="form-group mb-4 d-md-flex">
                                <div class="col-md-3" style="margin-right: 20px; margin-top: 7px; text-align: right;">
                                    <label class="col-md-12 p-0" ></label>
                                </div> 
                                <div class="col-md-6 ">
                                    <button type="submit" class="btn btn-primary" style="width:110px">Thêm</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
</div>
