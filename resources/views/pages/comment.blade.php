@extends('layouts.app')

@section('title', 'Comment Guest')

@section('content')
    <h5>Comment Guest</h5>
    @include('includes.messages')
    <table class="table table-striped mt-2">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Post</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Website</th>
                <th scope="col">Comment</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($comments as $comment)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $comment->post->title }}</td>
                    <td>{{ $comment->name }}</td>
                    <td>{{ $comment->email }}</td>
                    <td>{{ $comment->website }}</td>
                    <td>{{ $comment->comment }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No Comment Guest</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
