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
    <!-- Carousel -->
    <div id="movieCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://via.placeholder.com/1200x400?text=Phim+Nổi+Bật+1" class="d-block w-100" alt="Phim Nổi Bật 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Phim Nổi Bật 1</h5>
                    <p>Xem ngay hôm nay với chất lượng Full HD!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1200x400?text=Phim+Nổi+Bật+2" class="d-block w-100"
                    alt="Phim Nổi Bật 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Phim Nổi Bật 2</h5>
                    <p>Thuyết minh lồng tiếng cực chất!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1200x400?text=Phim+Nổi+Bật+3" class="d-block w-100"
                    alt="Phim Nổi Bật 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Phim Nổi Bật 3</h5>
                    <p>Cập nhật mới nhất 2025!</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#movieCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#movieCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Phim Mới Section -->
    {{-- <div class="movie-section">
        <div class="container">
            <h2 class="text-center mb-4">Phim Mới Cập Nhật</h2>
            <div class="row" id="movieList">
                <div class="col-md-3">
                    <div class="card movie-card" data-genre="hanh-dong" data-country="my" onclick="showMovieDetail(1)">
                        <img src="https://via.placeholder.com/200x250?text=Phim+Mới+1" class="card-img-top" alt="Phim Mới 1">
                        <div class="card-body text-center">
                            <h6>Phim Mới 1</h6>
                            <p class="text-muted">Thể loại: Hành Động</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card movie-card" data-genre="tinh-cam" data-country="han-quoc" onclick="showMovieDetail(2)">
                        <img src="https://via.placeholder.com/200x250?text=Phim+Mới+2" class="card-img-top" alt="Phim Mới 2">
                        <div class="card-body text-center">
                            <h6>Phim Mới 2</h6>
                            <p class="text-muted">Thể loại: Tình Cảm</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card movie-card" data-genre="kinh-di" data-country="trung-quoc" onclick="showMovieDetail(3)">
                        <img src="https://via.placeholder.com/200x250?text=Phim+Mới+3" class="card-img-top" alt="Phim Mới 3">
                        <div class="card-body text-center">
                            <h6>Phim Mới 3</h6>
                            <p class="text-muted">Thể loại: Kinh Dị</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card movie-card" data-genre="hai-huoc" data-country="viet-nam" onclick="showMovieDetail(4)">
                        <img src="https://via.placeholder.com/200x250?text=Phim+Mới+4" class="card-img-top" alt="Phim Mới 4">
                        <div class="card-body text-center">
                            <h6>Phim Mới 4</h6>
                            <p class="text-muted">Thể loại: Hài Hước</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Phim Hot Section -->
    {{-- <div class="movie-section bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Phim Hot</h2>
            <div class="row" id="hotMovieList">
                <div class="col-md-3">
                    <div class="card movie-card" data-genre="hanh-dong" data-country="my" onclick="showMovieDetail(5)">
                        <img src="https://via.placeholder.com/200x250?text=Phim+Hot+1" class="card-img-top" alt="Phim Hot 1">
                        <div class="card-body text-center">
                            <h6>Phim Hot 1</h6>
                            <p class="text-muted">Đánh giá: 8.5/10</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card movie-card" data-genre="tinh-cam" data-country="han-quoc" onclick="showMovieDetail(6)">
                        <img src="https://via.placeholder.com/200x250?text=Phim+Hot+2" class="card-img-top" alt="Phim Hot 2">
                        <div class="card-body text-center">
                            <h6>Phim Hot 2</h6>
                            <p class="text-muted">Đánh giá: 7.9/10</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card movie-card" data-genre="kinh-di" data-country="trung-quoc" onclick="showMovieDetail(7)">
                        <img src="https://via.placeholder.com/200x250?text=Phim+Hot+3" class="card-img-top" alt="Phim Hot 3">
                        <div class="card-body text-center">
                            <h6>Phim Hot 3</h6>
                            <p class="text-muted">Đánh giá: 9.0/10</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card movie-card" data-genre="hai-huoc" data-country="viet-nam" onclick="showMovieDetail(8)">
                        <img src="https://via.placeholder.com/200x250?text=Phim+Hot+4" class="card-img-top" alt="Phim Hot 4">
                        <div class="card-body text-center">
                            <h6>Phim Hot 4</h6>
                            <p class="text-muted">Đánh giá: 8.2/10</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Phim Mới Section -->
    <div class="movie-section">
        <div class="container">
            <h2 class="text-center mb-4">Phim Mới Cập Nhật</h2>
            <div class="row" id="movieList">
                <!-- Dữ liệu sẽ được thêm động -->
            </div>
        </div>
    </div>

    <!-- Phim Hot Section -->
    <div class="movie-section bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Phim Hot</h2>
            <div class="row" id="hotMovieList">
                <!-- Dữ liệu sẽ được thêm động -->
            </div>
        </div>
    </div>


    <!-- Modal for Movie Detail -->
    <div class="modal fade" id="movieDetailModal" tabindex="-1" aria-labelledby="movieDetailModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="movieDetailModalLabel">Chi Tiết Phim</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="" id="detailImage" class="img-fluid mb-3" alt="Movie Image">
                    <h6 id="detailTitle"></h6>
                    <p><strong>Thể loại:</strong> <span id="detailGenre"></span></p>
                    <p><strong>Quốc gia:</strong> <span id="detailCountry"></span></p>
                    <p><strong>Đánh giá:</strong> <span id="detailRating"></span>/10</p>
                    <p><strong>Mô tả:</strong> <span id="detailDescription"></span></p>
                    <a href="#" id="detailWatchLink" class="btn btn-warning">Xem Phim</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>



@endsection
