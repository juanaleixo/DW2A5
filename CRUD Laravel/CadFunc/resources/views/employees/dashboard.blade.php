
    @extends('layouts.main')

    @section('title', 'Cadastro')

    @section('content')
    
    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>Funcionários</h1>
    </div>
    <div class="col-md-10 offset-md-1 dashboard-employees-container">
        @if(count($employees)>0)


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Salário</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
        
        <tbody>
            @foreach($employees as $employee)
            <tr>
                <td scope="row">{{$loop->index+1}}</td>
                <td><a href="/employees/{{$employee->id}}">{{$employee->name}}</a></td>
                <td>{{$employee->cargo}}</td>
                <td>{{$employee->cpf}}</td>
                <td>{{$employee->salario}}</td>
                <td><a href="/employees/edit/{{$employee->id}}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon> Editar</a>
                    <form action="/employees/{{$employee->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon> Deletar</button>
                    </form>
                </td>
            </tr>
            </tr>
            @endforeach
        </tbody>
        </table>
        @else
        <p>Não há funcionários, <a href="/employees/create">Cadastrar funcionário!</a></p>
        @endif


    </div>


    @endsection