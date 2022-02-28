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
                        <h3 class="box-title mb-0">Thêm sản phẩm</h3>
                    </div>
                    <div class="col-md-6" style="text-align: right;">
                        <a href="{{ route('admin.product') }}" style="background-color: #f7941e;border-color: #f7941e; border-radius: 6px;" class="btn btn-success pull-right">Tất cả sản phẩm</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                    @if(Session::has('message'))
                        <div class="arlet alert-success" role="arlet">{{Session::get('message')}}</div>
                    @endif
                        <form class="form-horizontal form-material" wire:submit.prevent="newProduct">
                            <div class="form-group mb-4 d-md-flex">
                                <div class="col-md-3" style="margin-right: 20px; margin-top: 7px; text-align: right;">
                                    <label class="col-md-12 p-0" >Tên sản phẩm</label>
                                </div> 
                                <div class="col-md-6 ">
                                    <input type="text" placeholder="Tên sản phẩm" class="form-control" style="padding: 12px;" wire:model="name"> 
                                    @error('name') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group mb-4 d-md-flex">
                                <div class="col-md-3" style="margin-right: 20px; margin-top: 7px; text-align: right;">
                                    <label class="col-md-12 p-0" >Slug</label>
                                </div> 
                                <div class="col-md-6 ">
                                    <input type="text" placeholder="slug" class="form-control" style="padding: 12px;" wire:model="slug" wire:keyup="generateslug"> 
                                    @error('slug') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group mb-4 d-md-flex">
                                <div class="col-md-3" style="margin-right: 20px; margin-top: 7px; text-align: right;">
                                    <label class="col-md-12 p-0" >Mô tả ngắn</label>
                                </div> 
                                <div class="col-md-6 " wire:ignore>
                                    <textarea type="text" id="short_description" placeholder="Mô tả ngắn" class="form-control" style="padding: 12px;" wire:model="short_description"></textarea>
                                    @error('short_description') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group mb-4 d-md-flex">
                                <div class="col-md-3" style="margin-right: 20px; margin-top: 7px; text-align: right;">
                                    <label class="col-md-12 p-0" >Mô tả</label>
                                </div> 
                                <div class="col-md-6 " wire:ignore>
                                    <textarea type="text" id="description" placeholder="Mô tả" class="form-control" style="padding: 12px; " wire:model="description"></textarea>
                                    @error('description') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group mb-4 d-md-flex">
                                <div class="col-md-3" style="margin-right: 20px; margin-top: 7px; text-align: right;">
                                    <label class="col-md-12 p-0" >Giá</label>
                                </div> 
                                <div class="col-md-6 ">
                                    <input type="text" placeholder="Giá" class="form-control" style="padding: 12px;" wire:model="price"> 
                                    @error('price') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group mb-4 d-md-flex">
                                <div class="col-md-3" style="margin-right: 20px; margin-top: 7px; text-align: right;">
                                    <label class="col-md-12 p-0" >Giá Sale</label>
                                </div> 
                                <div class="col-md-6 ">
                                    <input type="text" placeholder="Giá sale" class="form-control" style="padding: 12px;" wire:model="sale_price"> 
                                    <!-- @error('sale_price') <p class="text-danger">{{$message}}</p>@enderror -->
                                </div>
                            </div>
                            <div class="form-group mb-4 d-md-flex">
                                <div class="col-md-3" style="margin-right: 20px; margin-top: 7px; text-align: right;">
                                    <label class="col-md-12 p-0" >SKU</label>
                                </div> 
                                <div class="col-md-6 ">
                                    <input type="text" placeholder="SKU" class="form-control" style="padding: 12px;" wire:model="SKU"> 
                                    @error('SKU') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group mb-4 d-md-flex">
                                <div class="col-md-3" style="margin-right: 20px; margin-top: 7px; text-align: right;">
                                    <label class="col-md-12 p-0" >Trạng thái</label>
                                </div> 
                                <div class="col-md-6 ">
                                    <select class="form-control" style="padding-left: 12px;" wire:model="stock_status">
                                        <option value="instock">InStock</option>     
                                        <option value="outofstock">Out Of Stock</option>
                                        @error('stock_status') <p class="text-danger">{{$message}}</p>@enderror
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4 d-md-flex">
                                <div class="col-md-3" style="margin-right: 20px; margin-top: 7px; text-align: right;">
                                    <label class="col-md-12 p-0" >Chi tiết sản phẩm</label>
                                </div> 
                                <div class="col-md-6 ">
                                    <select class="form-control" style="padding-left: 12px;" wire:model="featured">
                                        <option value="0">Không</option>     
                                        <option value="1">Có</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4 d-md-flex">
                                <div class="col-md-3" style="margin-right: 20px; margin-top: 7px; text-align: right;">
                                    <label class="col-md-12 p-0" >Số lượng</label>
                                </div> 
                                <div class="col-md-6 ">
                                    <input type="text" placeholder="Số lượng" class="form-control" style="padding: 12px;" wire:model="quantity"> 
                                    @error('quantity') <p class="text-danger">{{$message}}</p>@enderror
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
                                    <label class="col-md-12 p-0" >Danh mục</label>
                                </div> 
                                <div class="col-md-6 ">
                                    <select class="form-control" style="padding-left: 12px;" wire:model="category_id">
                                        <option value="instock">Chọn danh mục</option>  
                                        @foreach ($categories as $category) 
                                            <option value="{{$category->id}}">{{ $category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id') <p class="text-danger">{{$message}}</p>@enderror
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

    {{-- Success is as dangerous as failure. --}}
</div>

@push('scripts')
<script>
     $(function(){

         tinymce.init({
             selector:'#short_description',
             setup:function(editor){
                 editor.on('Change',function(e){
                     tinyMCE.triggerSave();
                     var sd_data = $('#short_description').val();
                     @this.set('short_description',sd_data);
                 });
             }
         });
         tinymce.init({
             selector:'#description',
             setup:function(editor){
                 editor.on('Change',function(e){
                     tinyMCE.triggerSave();
                     var sd_data = $('#description').val();
                     @this.set('description',sd_data);
                 });
             }
         });
     });
 </script>
@endpush
