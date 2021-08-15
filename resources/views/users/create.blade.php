@extends('layout')

@section('content')
    <header class="card mt-5 border-rounded">
        <div class="card-header">
            Criar Usuário
        </div>
    </header>

    <form method="post" action="{{route('store')}}" class="mt-3">
        @csrf
        <div class="form-control">
            <label for="name">Nome</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-control mt-1">
            <label for="username">Nome de usuário</label>
            <input type="text" name="username" class="form-control" required>
        </div>

        <div class="form-control mt-1">
            <label for="password">Senha</label>
            <input type="text" name="password" class="form-control" required>
        </div>
        <button class="btn btn-primary mt-2"> Criar </button>
    </form>

    
@endsection