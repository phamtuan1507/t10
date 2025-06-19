<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Quản lý Phim</h1>
        <a href="{{ route('admin.create.movie') }}" class="btn btn-primary mb-3">Thêm Phim Mới</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tiêu đề</th>
                    <th>Thể loại</th>
                    <th>Quốc gia</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($movies as $movie)
                    <tr>
                        <td>{{ $movie->movie_id }}</td>
                        <td>{{ $movie->title }}</td>
                        <td>{{ $movie->genres->pluck('name')->join(', ') }}</td>
                        <td>{{ $movie->countries->pluck('name')->join(', ') }}</td>
                        <td>
                            <button class="btn btn-info btn-sm" onclick="showMovieDetail({{ $movie->movie_id }})">Chi tiết</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showMovieDetail(movieId) {
            fetch(`/api/movies/${movieId}`)
                .then(response => response.json())
                .then(movie => {
                    alert(`Tiêu đề: ${movie.title}\nThể loại: ${movie.genres.map(g => g.name).join(', ')}`);
                });
        }
    </script>
</body>
</html>
