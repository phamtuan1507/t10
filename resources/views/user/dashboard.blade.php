<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Danh sách Người Dùng</h1>
        <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Thêm Người Dùng</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên người dùng</th>
                    <th>Email</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->user_id }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <button class="btn btn-info btn-sm" onclick="showUserDetail({{ $user->user_id }})">Chi tiết</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showUserDetail(userId) {
            fetch(`/api/users/${userId}`)
                .then(response => response.json())
                .then(user => {
                    alert(`Tên: ${user.username}\nEmail: ${user.email}\nSố review: ${user.reviews.length}`);
                });
        }
    </script>
</body>
</html>
