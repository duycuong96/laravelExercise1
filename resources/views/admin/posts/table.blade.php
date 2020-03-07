@foreach ($posts as $post)
<tr>
    <td>{{ $post->id}}</td>
    <td>{{ $post->title }}</td>
    <td>{{ $post->like }}</td>
    <td>
    <a class="btn btn-primary btn-sm d-inline" href="{{ route('posts.edit', [$post->id]) }}">Sửa</a>
        {{-- <a onclick="return destroy()" href="{{ route('posts.destroy') }}" class="btn btn-danger btn-sm">Xóa</a> --}}
        <form class="d-inline" action="{{ route('posts.destroy', [$post->id]) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-danger btn-sm d-inline" onclick="return destroy()">Delete</button>
        </form>
    </td>
</tr>
@endforeach
