<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit Post</title>
</head>

<body>
    <h2>
        <a href="{{ route('post') }}">Quay lại</a>
    </h2>
    <form action="{{ route('postUpdate', $post->id) }}" method="post" enctype="multipart/form-data" class="p-32">
        @csrf
        <div class="">
            <label for="">Tiêu đề</label>
            <input type="text" name="title" value="{{ $post->title }}">
            <br>
            <br>
            <label for="">Mô tả</label>
            <textarea name="description" id="" cols="30" rows="10">{{ $post->description }} </textarea>
            <br>
            <br>
            <label for="">Hình ảnh</label>
            <input type="file" name="image">
            <img src="{{ asset('source/images/posts/' . $post->image) }}" alt=""
                style="width: 80px; height: 80px;">
            <br>
            <br>
            <label for="">Trang thai</label>
            <select name="status" id="status">
                <option value="1" {{ $post->status == 1 ? 'selected' : '' }}>Hien thi</option>
                <option value="2" {{ $post->status == 2 ? 'selected' : '' }}>Khong hien thi</option>
            </select>
            <br>
            <br>
        </div>

        <input type="submit" value="submit">
    </form>
</body>

</html>
