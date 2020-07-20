@extends('templates.template')

@section('content')
    <h1 class="text-center">CRUD</h1>
    <hr>
    <div class="text-center mt-3 mb-4">
        <a href="{{url('users/create')}}">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>
 
    <div class="col-8 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user as $users)
                    <tr>
                        <td>{{$users->name}}</td>
                        <td>
                            <a href="{{url("users/$users->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="{{url("users/$users->id/edit")}}">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <a href="{{url("users/$users->id")}}" class="js-del">
                                <button class="btn btn-danger">Deletar</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>  

    </div>
@endsection
