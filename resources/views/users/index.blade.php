@extends('layout')
@include('message', ['message' => $message])

@section('content')
<a href="users/create">
    <button class="btn btn-dark mb-3 mt-2">Criar usuário</button>
</a>
<table class="table yajra-dt">
    <thead>
        <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
    </thead>
</table>
@endsection