@extends('layouts.app')

@section('title', 'User List')

@section('content')
    <h5>User List</h5>
    @include('includes.messages')
    <table class="table table-striped mt-2">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Comment</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @forelse ($user->comment as $comment)
                            - {{ $comment->comment }}
                        @empty
                            No Comment
                        @endforelse  
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No User</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
