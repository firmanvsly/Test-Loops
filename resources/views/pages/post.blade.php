@extends('layouts.app')

@section('title', 'Content Post')

@section('content')
    <h5>Content Post</h5>
    @include('includes.messages')
    <table class="table table-striped mt-2">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Email</th>
                <th scope="col">Name</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->user->email }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No Post</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
