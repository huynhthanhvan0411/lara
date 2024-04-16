<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Post</title>
</head>

<body>
    <h2>
        <a href="{{ route('post') }}">Quay lại</a>
    </h2>
    <form action="" method="post" enctype="multipart/form-data" class="p-32">
        @csrf
        <label for="title">Tiêu đề</label>
        <input type="text" name="title" placeholder="title">
        <br>
        <br>
        <label for="description">Mô tả</label>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        <br>
        <br>
        <label for="image">Hình ảnh</label>
        <input type="file" name="image">
        <br>
        <br>
        <label for="post_status">Trang thai</label>
        <select name="post_status" id="post_status">
            <option value="1">Hien thi</option>
            <option value="0">Khong hien thi</option>
        </select>
        <br>
        <br>
        <input type="submit" value="submit">
    </form>
</body>

</html>
