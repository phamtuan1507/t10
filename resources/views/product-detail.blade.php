{{-- Tất các các page cần extends từ master.blade.php --}}
@extends('layout.master')

{{-- Đặt title cho page --}}
@section('title', 'Chi tiết sản phẩm')

{{-- Đặt file css cho page --}}
@section('file', 'product-detail')

@vite(['resources/sass/product-detail.scss', 'resources/sass/global.scss', 'resources/js/app.js'])

{{-- Đặt class cho body --}}
@section('page', 'product-detail')
@section('content')
<section class="breadcrumb bg-color-5 py-2 fs-7">
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Chi tiết sản phẩm</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class="py-5 product">
    <div class="container py-0 py-md-4 my-0 my-md-2">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="product__img-primary ratio ratio-1x1">
                    <img id="primary-thumnail" class="w-100 rounded-6 object-fit-cover" src="{{ $productImg->productImages['']->path }}" alt="">
                    <img class="position-absolute top-50 start-50 translate-middle w-auto h-auto"
                        src="{{url('./images/water-mark.png')}}" alt="">
                </div>
                <div class="mt-2 product__list-image owl-carousel owl-theme w-100 position-relative">

                        <img class="w-100 h-100 rounded-6 product__list-image__item object-fit-cover" src="/images/2.png" alt="" />


                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="product__info bg-color-7 bg-color-4 rounded-6 p-3 p-md-4 mt-5 mt-lg-0">
                    <h5 class="product__info__name fw-4 pt-1"></h5>
                    <div class="product__info__brand d-flex flex-column flex-md-row mb-1 fs-7">
                        <p class="mb-2 mb-md-0">
                            Thương hiệu: &nbsp;<span class="color-6 fw-4">{{$productBrand->name}}</span>
                        </p>
                        <div class="vr mx-2 d-none d-md-block"></div>
                        <p class="mb-0">
                            Tình trạng: &nbsp;<span class="text-success">Còn hàng</span>
                        </p>
                    </div>
                    <h4 class="product__info__price my-3 text-danger fw-5">Liên hệ</h4>
                    <div class="product__info__desc mt-1">
                        {{-- {!! $product->short_description !!} --}}
                        abc
                    </div>
                    <a href="/lien-he" class="text-decoration-none color-9">

                        <button class="btn btn--color-1 w-75 text-uppercase d-flex align-items-center justify-content-center fw-4 py-3 mt-3">
                            Liên hệ ngay
                            <img class="ms-2" src="{{url('/images/icons/next.svg')}}" alt="">
                        </button></a>
                </div>
                <div class="product__info__contact mt-4">
                    <a href="tel:0989868269" class="text-decoration-none color-9">
                        <div class="d-flex align-items-center">
                            <img src="{{url('/images/icons/product-detail-phone.svg')}}" alt="">
                            <div class="ms-2">
                                <p class="mb-1">Đặt mua qua hotline Thứ 2 - Thứ 7: 8:00 - 17:00</p>
                                <h4 class="fw-5">0977.441.258</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 py-5 pb-0">
                <div class="py-md-2 py-0 my-md-4 my-0">
                    <h4 class="fw-5">Mô tả sản phẩm</h4>
                    <h6 class="pt-4 fw-5">Thông tin sản phẩm</h6>
                    <div class="color-3 fs-7">
                        {{-- {!! $product->description !!} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
