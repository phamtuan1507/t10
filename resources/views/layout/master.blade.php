<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- <link rel="stylesheet" href="{{ asset ('css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset ('/css/owl.theme.default.min.css')}}" /> --}}


    @vite(['resources/js/app.js', 'resources/js/owl.carousel.min.js', 'resources/js/jquery.min.js', 'resources/js/slider.js'])

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

</head>

<body>
    <div class="wrapper @yield('page')">
        @section('header')
            @include('layout.header')
        @show
        @yield('content')
        @section('footer')
            @include('layout.footer')
        @show
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>


{{-- js bốttrap --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
</script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
{{-- <script>
    // Search functionality
    document.getElementById('searchInput').addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();
        const movieCards = document.querySelectorAll('.movie-card');
        movieCards.forEach(card => {
            const title = card.querySelector('h6').textContent.toLowerCase();
            card.style.display = title.includes(searchTerm) ? 'block' : 'none';
        });
    });

    // Filter functionality
    document.getElementById('genreFilter').addEventListener('change', filterMovies);
    document.getElementById('countryFilter').addEventListener('change', filterMovies);

    function filterMovies() {
        const genre = document.getElementById('genreFilter').value;
        const country = document.getElementById('countryFilter').value;
        const movieCards = document.querySelectorAll('.movie-card');

        movieCards.forEach(card => {
            const cardGenre = card.getAttribute('data-genre');
            const cardCountry = card.getAttribute('data-country');
            const matchGenre = !genre || cardGenre === genre;
            const matchCountry = !country || cardCountry === country;
            card.style.display = (matchGenre && matchCountry) ? 'block' : 'none';
        });
    }

    // Show movie detail in modal
    function showMovieDetail(movieId) {
        let title, genre, country, rating, description, image, watchLink;
        switch(movieId) {
            case 1: title = "Phim Mới 1"; genre = "Hành Động"; country = "Mỹ"; rating = "8.5"; description = "Một bộ phim hành động kịch tính."; image = "https://via.placeholder.com/200x250?text=Phim+Mới+1"; watchLink = "#"; break;
            case 2: title = "Phim Mới 2"; genre = "Tình Cảm"; country = "Hàn Quốc"; rating = "7.9"; description = "Câu chuyện tình yêu lãng mạn."; image = "https://via.placeholder.com/200x250?text=Phim+Mới+2"; watchLink = "#"; break;
            case 3: title = "Phim Mới 3"; genre = "Kinh Dị"; country = "Trung Quốc"; rating = "9.0"; description = "Phim kinh dị gây cấn."; image = "https://via.placeholder.com/200x250?text=Phim+Mới+3"; watchLink = "#"; break;
            case 4: title = "Phim Mới 4"; genre = "Hài Hước"; country = "Việt Nam"; rating = "8.2"; description = "Phim hài vui nhộn."; image = "https://via.placeholder.com/200x250?text=Phim+Mới+4"; watchLink = "#"; break;
            case 5: title = "Phim Hot 1"; genre = "Hành Động"; country = "Mỹ"; rating = "8.5"; description = "Hành động đỉnh cao."; image = "https://via.placeholder.com/200x250?text=Phim+Hot+1"; watchLink = "#"; break;
            case 6: title = "Phim Hot 2"; genre = "Tình Cảm"; country = "Hàn Quốc"; rating = "7.9"; description = "Tình yêu sâu sắc."; image = "https://via.placeholder.com/200x250?text=Phim+Hot+2"; watchLink = "#"; break;
            case 7: title = "Phim Hot 3"; genre = "Kinh Dị"; country = "Trung Quốc"; rating = "9.0"; description = "Kinh dị rùng rợn."; image = "https://via.placeholder.com/200x250?text=Phim+Hot+3"; watchLink = "#"; break;
            case 8: title = "Phim Hot 4"; genre = "Hài Hước"; country = "Việt Nam"; rating = "8.2"; description = "Hài hước bất tận."; image = "https://via.placeholder.com/200x250?text=Phim+Hot+4"; watchLink = "#"; break;
        }
        document.getElementById('detailImage').src = image;
        document.getElementById('detailTitle').textContent = title;
        document.getElementById('detailGenre').textContent = genre;
        document.getElementById('detailCountry').textContent = country;
        document.getElementById('detailRating').textContent = rating;
        document.getElementById('detailDescription').textContent = description;
        document.getElementById('detailWatchLink').href = watchLink;
        new bootstrap.Modal(document.getElementById('movieDetailModal')).show();
    }
</script> --}}
<script>
    // Fetch genres and countries for filters
    fetch('/api/movies')
        .then(response => response.json())
        .then(data => {
            const genres = [...new Set(data.flatMap(movie => movie.genres.map(g => g.name)))];
            const countries = [...new Set(data.flatMap(movie => movie.countries.map(c => c.name)))];
            const genreSelect = document.getElementById('genreFilter');
            const countrySelect = document.getElementById('countryFilter');

            genres.forEach(genre => {
                const option = document.createElement('option');
                option.value = genre.toLowerCase().replace(/\s+/g, '-');
                option.textContent = genre;
                genreSelect.appendChild(option);
            });

            countries.forEach(country => {
                const option = document.createElement('option');
                option.value = country.toLowerCase().replace(/\s+/g, '-');
                option.textContent = country;
                countrySelect.appendChild(option);
            });
        });

    // Fetch and display movies
    function loadMovies(sectionId, limit = 4) {
        fetch('/api/movies')
            .then(response => response.json())
            .then(data => {
                const section = document.getElementById(sectionId);
                section.innerHTML = '';
                data.slice(0, limit).forEach(movie => {
                    const col = document.createElement('div');
                    col.className = 'col-md-3';
                    col.innerHTML = `
                        <div class="card movie-card" data-genre="${movie.genres[0]?.name.toLowerCase().replace(/\s+/g, '-') || ''}" data-country="${movie.countries[0]?.name.toLowerCase().replace(/\s+/g, '-') || ''}" onclick="showMovieDetail(${movie.movie_id})">
                            <img src="${movie.poster_url || 'https://via.placeholder.com/200x250'}" class="card-img-top" alt="${movie.title}">
                            <div class="card-body text-center">
                                <h6>${movie.title}</h6>
                                <p class="text-muted">Thể loại: ${movie.genres[0]?.name || 'Chưa có'}</p>
                            </div>
                        </div>
                    `;
                    section.appendChild(col);
                });
            });
    }

    // Load carousel
    fetch('/api/movies')
        .then(response => response.json())
        .then(data => {
            const carouselInner = document.getElementById('carouselInner');
            data.slice(0, 3).forEach((movie, index) => {
                const item = document.createElement('div');
                item.className = `carousel-item ${index === 0 ? 'active' : ''}`;
                item.innerHTML = `
                    <img src="${movie.poster_url || 'https://via.placeholder.com/1200x400'}" class="d-block w-100" alt="${movie.title}">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>${movie.title}</h5>
                        <p>${movie.description || 'Mô tả phim...'}</p>
                    </div>
                `;
                carouselInner.appendChild(item);
            });
        });

    // Initial load
    loadMovies('movieList');
    loadMovies('hotMovieList');

    // Search functionality
    document.getElementById('searchInput').addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();
        document.querySelectorAll('.movie-card').forEach(card => {
            const title = card.querySelector('h6').textContent.toLowerCase();
            card.style.display = title.includes(searchTerm) ? 'block' : 'none';
        });
    });

    // Filter functionality
    document.getElementById('genreFilter').addEventListener('change', filterMovies);
    document.getElementById('countryFilter').addEventListener('change', filterMovies);

    function filterMovies() {
        const genre = document.getElementById('genreFilter').value;
        const country = document.getElementById('countryFilter').value;
        document.querySelectorAll('.movie-card').forEach(card => {
            const cardGenre = card.getAttribute('data-genre');
            const cardCountry = card.getAttribute('data-country');
            const matchGenre = !genre || cardGenre === genre;
            const matchCountry = !country || cardCountry === country;
            card.style.display = (matchGenre && matchCountry) ? 'block' : 'none';
        });
    }

    // Show movie detail in modal
    function showMovieDetail(movieId) {
        fetch(`/api/movies/${movieId}`)
            .then(response => response.json())
            .then(movie => {
                document.getElementById('detailImage').src = movie.poster_url || 'https://via.placeholder.com/200x250';
                document.getElementById('detailTitle').textContent = movie.title;
                document.getElementById('detailGenre').textContent = movie.genres.map(g => g.name).join(', ') || 'Chưa có';
                document.getElementById('detailCountry').textContent = movie.countries.map(c => c.name).join(', ') || 'Chưa có';
                document.getElementById('detailRating').textContent = movie.rating || 'Chưa có';
                document.getElementById('detailDescription').textContent = movie.description || 'Chưa có mô tả';
                document.getElementById('detailWatchLink').href = movie.trailer_url || '#';
                new bootstrap.Modal(document.getElementById('movieDetailModal')).show();
            })
            .catch(error => console.error('Error fetching movie details:', error));
    }
</script>
</html>
