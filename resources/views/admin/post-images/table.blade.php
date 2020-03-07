@foreach ($post_images as $post)
<tr>
    <td>{{ $post->id}}</td>
    <td>{{ $post->post_id }}</td>
    <td>{{ $post->url }}</td>
    <td>
    <a class="btn btn-primary btn-sm d-inline" href="{{ route('post-images.edit', [$post->id]) }}">Sửa</a>
        {{-- <a onclick="return destroy()" href="{{ route('posts.destroy') }}" class="btn btn-danger btn-sm">Xóa</a> --}}
        <form class="d-inline" action="{{ route('post-images.destroy', [$post->id]) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-danger btn-sm d-inline" onclick="return destroy()">Delete</button>
        </form>
    </td>
</tr>
@endforeach
