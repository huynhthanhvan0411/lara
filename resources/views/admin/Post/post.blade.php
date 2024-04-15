<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <h2>
            <a href="{{ route('post.create') }}">Thêm bài viết</a>
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white border-b border-gray-200">
                <table class="table table-hover" style="width: 100%; text-align: left">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tiêu đề</th>
                            <th>Mô tả</th>
                            <th>Hình ảnh</th>
                            <th>Trạng thái </th>
                            <th>Ngày tạo</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $stt = 1;
                        @endphp
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $stt++ }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->description }}</td>
                                <td>{{ $post->image }}</td>
                                <td>{{ $post->post_status }}</td>
                                <td>{{ $post->created_at }}</td>
                                <td>
                                    <a href="{{ route('post.edit') }}" class="btnEdit" style="color: aquamarine">Edit</a>
                                    <a href="" class="btnDelete" style="color: red">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
