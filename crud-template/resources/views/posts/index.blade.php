@extends('layout')

@section('content')
    <h1>Daftar Post</h1>

    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <a href="{{ route('posts.create') }}">+ Tambah Post Baru</a>

    <ul>
        @forelse ($posts as $post)
            <li>
                <strong>{{ $post->title }}</strong><br>
                {{ Str::limit($post->content, 100) }}<br>
                <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Yakin ingin menghapus?')" type="submit">Hapus</button>
                </form>
            </li>
        @empty
            <li>Tidak ada post.</li>
        @endforelse
    </ul>
@endsection
