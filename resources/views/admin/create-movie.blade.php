<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Phim Mới</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Thêm Phim Mới</h1>
        <form action="{{ route('admin.store.movie') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Tiêu đề</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Mô tả</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="release_year" class="form-label">Năm phát hành</label>
                <input type="number" class="form-control" id="release_year" name="release_year">
            </div>
            <div class="mb-3">
                <label for="genres" class="form-label">Thể loại</label>
                <select class="form-select" id="genres" name="genres[]" multiple required>
                    @foreach($genres as $genre)
                        <option value="{{ $genre->genre_id }}">{{ $genre->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="countries" class="form-label">Quốc gia</label>
                <select class="form-select" id="countries" name="countries[]" multiple required>
                    @foreach($countries as $country)
                        <option value="{{ $country->country_id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="directors" class="form-label">Đạo diễn</label>
                <select class="form-select" id="directors" name="directors[]" multiple required>
                    @foreach($directors as $director)
                        <option value="{{ $director->director_id }}">{{ $director->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="actors" class="form-label">Diễn viên</label>
                <select class="form-select" id="actors" name="actors[]" multiple required>
                    @foreach($actors as $actor)
                        <option value="{{ $actor->actor_id }}">{{ $actor->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Thêm Phim</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
