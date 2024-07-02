@extends('layouts.master')

@section('title')
    Catelogue - {{ $catelogues['name'] }}
@endsection
@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Catelogues /</span><span> {{ $catelogues['name'] }}</span>
        </h4>
        <div class="app-ecommerce">
            <form action="" method="post" enctype="multipart/form-data">
                <!-- Add Product -->
                <div class="card-header d-flex justify-content-end align-items-center mb-2">
                    <a class="btn btn-primary" href="/admin/catelogues">Quay Lại</a>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="ecommerce-product-name"
                                        placeholder="Name" value="{{ $catelogues['name'] }}" name="name"
                                        aria-label="Name" required autofocus disabled>
                                    <label for="ecommerce-product-name">Name</label>
                                </div>
                                <label for="ecommerce-product-name">Kích Hoạt</label>
                                {!! $catelogues['is_active']
                                    ? '<span class="badge bg-success">YES</span>'
                                    : '<span class="badge bg-danger">NO</span>' !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="form-floating form-floating-outline mb-4">
                                    <img src="{{ $catelogues['image'] }}" class="rounded-3" style="width: 120px;"
                                        alt="Avatar" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
@endsection
