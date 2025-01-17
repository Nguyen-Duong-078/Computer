@extends('layouts.master')

@section('title')
    Cập Nhật - {{ $catelogues['name'] }}
@endsection

@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">



        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Quản lý danh mục /</span><span> Cập nhật danh mục</span>
        </h4>

        <div class="app-ecommerce">
            <form action="" method="post" enctype="multipart/form-data">
                <!-- Add Product -->
                <div
                    class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">

                    <div class="d-flex flex-column justify-content-center">
                        <h4 class="mb-1 mt-3">Thông tin danh mục</h4>
                    </div>
                    <div class="d-flex align-content-center flex-wrap gap-3">
                        <a href="/admin/catelogues/" class="btn btn-info">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
                </div>

                <div class="row">

                    <!-- First column-->
                    <div class="col-12 col-lg-12">
                        <!-- Product Information -->
                        <div class="card mb-3">
                            <div class="card-body">
                                @if (!empty($_SESSION['success']))
                                    <div class="alert alert-success">
                                        {{ $_SESSION['success'] }}
                                    </div>

                                    @php
                                        $_SESSION['success'] = null;
                                    @endphp
                                @endif
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="ecommerce-product-name"
                                        placeholder="Tên người dùng" value="{{ $catelogues['name'] }}" name="name"
                                        aria-label="Tên người dùng" required autofocus>
                                    <label for="ecommerce-product-name">Name</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="file" class="form-control" id="ecommerce-product-name"
                                        placeholder="Tên người dùng" value="{{ $catelogues['image'] }}" name="image"
                                        aria-label="Tên người dùng" autofocus>
                                    <img src="{{ $catelogues['image'] }}" alt="" srcset="" width="60px"
                                        height="60px">
                                    <label for="ecommerce-product-name">Image</label>
                                </div>
                                <label class="switch switch-success">
                                    <input type="hidden" name="is_active" value="0" />
                                    <input type="checkbox" name="is_active" value="1" class="switch-input"
                                        @if ($catelogues['is_active']) checked @endif />
                                    <span class="switch-toggle-slider">
                                        <span class="switch-on"></span>
                                        <span class="switch-off"></span>
                                    </span>
                                    <span class="switch-label">Active</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
    <!-- / Content -->
@endsection
