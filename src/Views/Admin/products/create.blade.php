@extends('layouts.master')
@section('title')
    Sản Phẩm - Thêm mới
@endsection
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Sản phẩm /</span><span> Thêm mới</span>
        </h4>

        <div class="app-ecommerce">
            <form action="/admin/products/create" method="post" enctype="multipart/form-data">
                <!-- Add Product -->
                <div
                    class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">
                    <div class="d-flex flex-column justify-content-center">
                        <h4 class="mb-1 mt-3">Thêm một sản phẩm mới</h4>
                        <p>Các đơn hàng được đặt trên cửa hàng của bạn</p>
                    </div>
                    <div class="d-flex align-content-center flex-wrap gap-3">
                        <button type="reset" class="btn btn-outline-secondary">Nhập Lại</button>
                        <button type="submit" name="submit" class="btn btn-primary">
                            Xác nhận
                        </button>
                    </div>
                </div>

                <div class="row">
                    <!-- First column-->
                    <div class="col-12 col-lg-8">
                        <!-- Product Information -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-tile mb-0">Thông tin sản phẩm</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="ecommerce-product-name"
                                        placeholder="Tên sản phẩm" name="name" aria-label="Product title" autofocus />
                                    <label for="ecommerce-product-name">Tên sản phẩm</label>
                                </div>

                                <div class="row mb-3">
                                    <div class="col">
                                        <div class="form-floating form-floating-outline">
                                            <input type="number" class="form-control" id="ecommerce-product-sku"
                                                placeholder="00000" name="sku" aria-label="Product sku" autofocus />
                                            <label for="ecommerce-product-sku">Mã sản phẩm</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-floating form-floating-outline">
                                            <input type="file" class="form-control" placeholder="Image"
                                                name="img_thumbnail" autofocus>
                                            <label for="ecommerce-product-name">Ảnh đại diện</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="file" class="form-control" name="images[]" autofocus multiple />
                                    <label for="ecommerce-product-description">Thư viện ảnh</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="ecommerce-product-description"
                                        placeholder="Mô tả" name="description" aria-label="Product description" autofocus />
                                    <label for="ecommerce-product-description">Mô tả</label>
                                </div>
                                <!-- Content -->
                                <div>
                                    <label class="form-label">Nội dung
                                        <span class="text-muted">(Không bắt buộc)</span></label>
                                    <textarea class="form-control" name="content" id="content"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- /Product Information -->
                        <!-- Variants -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Các biến thể</h5>
                            </div>
                            <div class="card-body">
                                <div id="multi">
                                    <div class="row mb-3 mb-sm-0 itemst">
                                        <div class="mb-3 col-sm-4">
                                            <div class="form-floating form-floating-outline">
                                                <select name="variant[0][colors]" id="select2Basic"
                                                    class="select2 form-select" data-placeholder="Tùy chọn"
                                                    data-allow-clear="true">
                                                    <option value="">Tùy chọn</option>
                                                    @foreach ($colors as $color)
                                                        <option value="{{ $color['id'] }}">{{ $color['name'] }}</option>
                                                    @endforeach
                                                </select>
                                                <label for="select2Basic">Màu Sắc</label>
                                            </div>
                                        </div>
                                        <div class="mb-3 col-sm-4">
                                            <div class="form-floating form-floating-outline">
                                                <input type="number" name="variant[0][quantities]" id="form-repeater-1-2"
                                                    class="form-control" placeholder="Số Lượng" />
                                                <label for="form-repeater-1-2">Số Lượng</label>
                                            </div>
                                        </div>
                                        <div class="mb-3 col-sm-4">
                                            <div class="form-floating form-floating-outline">
                                                <input type="file" name="variant[0][variant_images]"
                                                    id="form-repeater-1-2" class="form-control"
                                                    placeholder="Ảnh sản phẩm" />
                                                <label for="form-repeater-1-2">Ảnh sản phẩm</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a onclick=" create()" href="javascript:void(0)" class="btn btn-primary"> Thêm biến
                                    thể</a>
                            </div>
                        </div>
                        <!-- /Variants -->
                    </div>
                    <!-- /Second column -->

                    <!-- Second column -->
                    <div class="col-12 col-lg-4">
                        <!-- Pricing Card -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Giá cả</h5>
                            </div>
                            <div class="card-body">
                                <!-- Base Price -->
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="number" class="form-control" id="ecommerce-product-price"
                                        placeholder="Giá" name="price_regular" aria-label="Product price" />
                                    <label for="ecommerce-product-price">Giá tốt nhất</label>
                                </div>

                                <!-- Discounted Price -->
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="number" class="form-control" id="ecommerce-product-discount-price"
                                        placeholder="Sale" name="price_sale" aria-label="Product discounted price" />
                                    <label for="ecommerce-product-discount-price">Giá đã giảm</label>
                                </div>
                                <!-- Instock switch -->
                                <div class="d-flex justify-content-between align-items-center border-top pt-3">
                                    <p class="mb-0">Trong kho</p>
                                    <div class="w-25 d-flex justify-content-end">
                                        <label class="switch switch-primary me-4 pe-2">
                                            <input type="checkbox" class="switch-input" checked="" />
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on">
                                                    <span class="switch-off"></span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Pricing Card -->
                        <!-- Organize Card -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Tổ chức</h5>
                            </div>
                            <div class="card-body">
                                <!-- Category -->
                                <div class="mb-4 col ecommerce-select2-dropdown">
                                    <div class="form-floating form-floating-outline w-100 me-3">
                                        <select id="category-org" class="select2 form-select"
                                            data-placeholder="Chọn danh mục" name="catelogue_id" required>
                                            <option value="">Chọn danh mục</option>
                                            @foreach ($catelogues as $item)
                                                <option value="{{ $item['id'] }}">{{ $item['name'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <label for="category-org">Danh mục</label>
                                    </div>
                                </div>
                                <!-- Status -->
                                <div class="mb-4 col ecommerce-select2-dropdown">
                                    <div class="form-floating form-floating-outline">
                                        <select id="status-org" class="select2 form-select"
                                            data-placeholder="Chọn trạng thái" name="is_active" required>
                                            <option value="">Chọn trạng thái</option>
                                            <option value="1">Đã xuất bản</option>
                                            <option value="0">Không hoạt động</option>
                                        </select>
                                        <label for="status-org">Trạng thái</label>
                                    </div>
                                </div>
                                <!-- Tags -->
                                {{-- <div class="mb-3">
                                    <div class="form-floating form-floating-outline">
                                        <input id="ecommerce-product-tags" class="form-control h-auto"
                                            name="ecommerce-product-tags" value="Normal,Standard,Premium"
                                            aria-label="Product Tags" />
                                        <label for="ecommerce-product-tags">Tags</label>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <!-- /Organize Card -->
                    </div>
                    <!-- /Second column -->
                </div>
            </form>
        </div>
    </div>
    <!-- / Content -->
@endsection

@section('style-libs')
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
@endsection
@section('script-libs')
    <script>
        function create() {
            let count_items = document.querySelectorAll('.itemst').length - 1;
            count_items++;
            $('#multi').append(`
            <div class="row mb-3 mb-sm-0 itemst">
                <div class="mb-3 col-sm-4">
                    <div class="form-floating form-floating-outline">
                        <select name="variant[${count_items}][colors]" id="select2Basic" class="select2 form-select" data-placeholder="Tùy chọn" data-allow-clear="true" required>
                             <option value="">Tùy chọn</option>
                            @foreach ($colors as $color)
                                {
                                <option value="{{ $color['id'] }}">{{ $color['name'] }}</option>
                                }
                            @endforeach
                        </select>
                        <label for="select2Basic">Màu Sắc</label>
                    </div>
                </div>
                 <div class="mb-3 col-sm-4">
                    <div class="form-floating form-floating-outline">
                         <input name="variant[${count_items}][quantities]" type="number" id="form-repeater-1-2" class="form-control"
                                                placeholder="Số Lượng" />
                        <label for="form-repeater-1-2">Số Lượng</label>
                    </div>
                </div>
                <div class="mb-3 col-sm-4">
                    <div class="form-floating form-floating-outline">
                         <input name="variant[${count_items}][variant_images]" type="file" id="form-repeater-1-2" class="form-control" placeholder="Ảnh sản phẩm" />
                        <label for="form-repeater-1-2">Ảnh sản phẩm</label>
                     </div>
                </div>
            </div>`);
        }
    </script>
    <script>
        CKEDITOR.replace('content');
    </script>
    <script src="/Assets/Admin/js/app-ecommerce-product-add.js"></script>
@endsection
