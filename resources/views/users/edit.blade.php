@extends('layout')
@include('errors', ['errors' => $errors])
<style>
    .container-custom{
        width: 100%;
        height: 100%;
    }

    .custom-centralize{
        display: flex;
        justify-content: center;
    }

    .btn-primary{
        border: 1px solid #FF9046 !important;
        background:#e5813f !important;
    }

    .btn-primary:hover{
        background: #FF5D00 !important;
    }  

</style>
<div class="container-fluid d-flex justify-content-center align-items-center container-custom">
    <section class="col-lg-10 custom-centralize">
        <form method="post" class="form-group w-50">
            @csrf
            @method('PUT')         
            
            <input type="text" class="form-control mb-4 border-dark" name="name" id="name" value={{$user->name}} required>                   
            <input type="text" class="form-control mb-4 border-dark" name="username" id="username" value={{$user->username}} required>
            <input type="password" class="form-control mb-4 border-dark" name="password" id="password" value={{$user->password}} required>
            
            <section class="d-flex justify-content-between mt-2">
                <button type="submit" class="btn btn-primary btn-custom mr-2 w-75">Criar</button>
                <button type="submit" class="btn btn-secondary w-75 ml-2">Cancelar</button>
            </section>
            
        </form>
    </section>
</div>