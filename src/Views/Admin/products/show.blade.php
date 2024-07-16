@extends('layouts.master')

@section('title')
    {{ $products['p_name'] }}
@endsection
@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">



        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Products /</span><span> Show Product</span>
        </h4>

        <div class="app-ecommerce">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="text-center form-floating form-floating-outline mb-2">
                                <img class="rounded-3 " style="width: 120px;" alt="Avatar"
                                    src="{{ $products['p_img_thumbnail'] }}">
                                <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-danger"
                                    style="margin-left: 60px">
                                    {{ $products['p_view'] }}
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>
                            <div class="form-floating form-floating-outline mb-4">
                                <input type="text" class="form-control" value="{{ $products['p_name'] }}" disabled>
                                <label for="ecommerce-product-name">Name</label>
                            </div>
                            <div class="form-floating form-floating-outline mb-4">
                                <input type="text" class="form-control" value="{{ $products['p_slug'] }}" disabled>
                                <label for="ecommerce-product-name">Slug</label>
                            </div>
                            <div class="form-floating form-floating-outline mb-4">
                                <input type="text" class="form-control" value="{{ $products['p_sku'] }}" disabled>
                                <label for="ecommerce-product-name">Sku</label>
                            </div>
                            <div class="form-floating form-floating-outline mb-4">
                                <input type="text" class="form-control" value="{{ $products['p_price_regular'] }}"
                                    disabled>
                                <label for="ecommerce-product-name">Regular</label>
                            </div>
                            <div class="form-floating form-floating-outline mb-4">
                                <input type="text" class="form-control" value="{{ $products['p_price_sale'] }}" disabled>
                                <label for="ecommerce-product-name">Sale</label>
                            </div>
                            <div class="form-floating form-floating-outline mb-4">
                                <input type="text" class="form-control" value="{{ $products['p_description'] }}"
                                    disabled>
                                <label for="ecommerce-product-name">Description</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="form-floating form-floating-outline mb-4">
                                <input type="text" class="form-control" value="{{ $products['c_name'] }}" disabled>
                                <label for="ecommerce-product-name">Catelogue</label>
                            </div>
                            <div class="form-floating form-floating-outline mb-4">
                                <textarea class="form-control" value="{{ $products['p_content'] }}" cols="30" rows="10"></textarea>
                                <label for="ecommerce-product-name">Content</label>
                            </div>
                            <label for="ecommerce-product-name">Kích Hoạt</label>
                            {!! $products['p_is_active']
                                ? '<span class="badge bg-success">YES</span>'
                                : '<span class="badge bg-danger">NO</span>' !!}
                        </div>
                    </div>
                    <div class="card-header d-flex justify-content-end align-items-center mb-2">
                        <a class="btn btn-primary" href="/admin/products">Quay Lại</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
