{{-- Tất các các page cần extends từ master.blade.php --}}
@extends('layout.master')

{{-- Đặt title cho page --}}
@section('title', 'Trang chủ')

{{-- Đặt file css cho page --}}
@section('file', 'home-page')

@vite(['resources/sass/homepage.scss', 'resources/sass/global.scss', 'resources/js/app.js'])

{{-- Đặt class cho body --}}
@section('page', 'home-page')
@section('content')
    <main class="main">
        {{-- <section class="product">
            <div class="container">
                <div class="product__list owl-carousel owl-theme">
                    <div class="item">
                        <h4>1</h4>
                    </div>
                    <div class="item">
                        <h4>2</h4>
                    </div>
                    <div class="item">
                        <h4>3</h4>
                    </div>
                    <div class="item">
                        <h4>4</h4>
                    </div>
                    <div class="item">
                        <h4>5</h4>
                    </div>
                    <div class="item">
                        <h4>6</h4>
                    </div>
                    <div class="item">
                        <h4>7</h4>
                    </div>
                    <div class="item">
                        <h4>8</h4>
                    </div>
                    <div class="item">
                        <h4>9</h4>
                    </div>
                    <div class="item">
                        <h4>10</h4>
                    </div>
                    <div class="item">
                        <h4>11</h4>
                    </div>
                    <div class="item">
                        <h4>12</h4>
                    </div>
                </div>
            </div>
        </section> --}}
        {{-- <section class="py-5 feedback">
            <div class="py-0 py-md-4 my-0 my-md-2">
                <div class="container">
                    <div class="row">
                        <div class="feedback__title mb-4 pb-2">
                            <h2 class="line-bottom color-9 fw-6">
                                ĐÁNH GIÁ CỦA <span class="color-6">KHÁCH HÀNG</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="feedback__slide">
                    <div class="feedback__slide__list owl-carousel owl-theme">
                        <div class="feedback__slide__list__item bg-color-10 p-4 h-100 col fs-7">
                            <div class="feedback__slide__list__item__content">
                                <p>" Nhân viên công ty bạn làm việc rất chuyên nghiệp. "</p>
                            </div>
                            <div
                                class="feedback__slide__list__item__info d-flex align-items-center justify-content-between">
                                <div>
                                    <img class="w-auto h-auto" src="/images/hero-1.jpg" alt="">
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <h6 class="fw-4">Công ty SPCL (Malaysia)</h6>
                                    <p class="my-1">Giám đốc, Mr. Juzaidie</p>
                                    <p class="fw-4">Dự án setup phòng sơn công ty DENESE Thái Nguyên</p>
                                </div>
                            </div>
                        </div>
                        <div class="feedback__slide__list__item bg-color-10 p-4 h-100 col fs-7">
                            <div class="feedback__slide__list__item__content">
                                <p>" Nhân viên công ty bạn làm việc rất chuyên nghiệp. "</p>
                            </div>
                            <div
                                class="feedback__slide__list__item__info d-flex align-items-center justify-content-between">
                                <div>
                                    <img class="w-auto h-auto" src="/images/hero-1.jpg" alt="">

                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <h6 class="fw-4">Công ty VICCO</h6>
                                    <p class="my-1">Giám đốc, Mr.Trần Mạnh Tùng</p>
                                    <p class="fw-4">Dự án lắp ráp băng tải</p>
                                </div>
                            </div>
                        </div>
                        <div class="feedback__slide__list__item bg-color-10 p-4 h-100 col fs-7">
                            <div class="feedback__slide__list__item__content">
                                <p>" Chúng Tôi rất yên tâm về sản phẩm của các bạn. "</p>
                            </div>
                            <div
                                class="feedback__slide__list__item__info d-flex align-items-center justify-content-between">
                                <div>
                                    <img class="w-auto h-auto" src="./images/hero-2.jpg" alt="">
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <h6 class="fw-4">Công ty Vĩnh Tường</h6>
                                    <p class="my-1">Giám đốc, Mr. Khánh</p>
                                    <p class="fw-4">Dự án chế tạo hệ thống cấp tấm</p>
                                </div>
                            </div>
                        </div>
                        <div class="feedback__slide__list__item bg-color-10 p-4 h-100 col fs-7">
                            <div class="feedback__slide__list__item__content">
                                <p>"Chúng tôi đánh giá cao về dịch vụ của các bạn "</p>
                            </div>
                            <div
                                class="feedback__slide__list__item__info d-flex align-items-center justify-content-between">
                                <div>
                                    <img class="w-auto h-auto" src="./images/hero-3.jpg" alt="">
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <h6 class="fw-4">Công ty CNC-Vina</h6>
                                    <p class="my-1">Phó GĐ, Mr. Vũ Đình Minh</p>
                                    <p class="fw-4">Dự án lắp máy khẩu trang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <section class="product py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <a href="/chi-tiet-san-pham" class="text-decoration-none">
                            <div class="product__img">
                                <img class="w-100" src="/images/1.png" alt="">
                            </div>
                            <div class="product__detail d-flex flex-column align-items-center">
                                <div class="product__detail__name">
                                    Bánh mô chi
                                </div>
                                <div class="product__detai__price">
                                    15.000đ
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="/chi-tiet-san-pham" class="text-decoration-none">
                            <div class="product__img">
                                <img class="w-100" src="/images/2.png" alt="">
                            </div>
                            <div class="product__detail d-flex flex-column align-items-center">
                                <div class="product__detail__name">
                                    Bánh mô chi
                                </div>
                                <div class="product__detai__price">
                                    15.000đ
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
