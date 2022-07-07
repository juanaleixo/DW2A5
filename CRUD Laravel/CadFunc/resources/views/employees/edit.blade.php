@extends('layouts.main')

@section('title', 'Editando: ' . $employee->name)

@section('content')

<div id="employee-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{$employee->name}}</h1>
    <form action="/employees/update/{{$employee->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Funcionário:</label>
            <input required type="text" value="{{$employee->name}}" class="form-control" id="name" name="name" placeholder="Nome do Funcionário">
        </div>
        <div class="form-group">
            <label for="title">CPF:</label>
            <input required type="text" value="{{$employee->cpf}}" class="form-control" id="cpf" name="cpf" placeholder="CPF do Funcionário" onkeypress="$(this).mask('000.000.000-00');">
        </div>
        <div class="form-group">
            <label for="city">Salário:</label>
            <input required type="text" value="{{$employee->salario}}" class="form-control" id="salario" name="salario" placeholder="Salário do Funcionário" onkeypress="$(this).mask('R$0.000,00');">
        </div>

        <div require class="form-group">
            <label for="description">Cargo:</label>
                <div class="form-check">
                    <input class="form-check-input" {{ ($employee->cargo=="Consultor")? "checked" : "" }} value="Consultor" type="radio" name="cargo" id="item1">
                    <label class="form-check-label" for="item1" active>
                        Consultor
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" {{ ($employee->cargo=="Desenvolvedor")? "checked" : "" }} value="Desenvolvedor" type="radio" name="cargo" id="item2">
                    <label class="form-check-label" for="item2" >
                        Desenvolvedor
                    </label>
                  </div>
                    <div class="form-check">
                    <input class="form-check-input" {{ ($employee->cargo=="Tester") ? "checked" : "" }} value="Tester" type="radio" name="cargo" id="item3" >
                    <label class="form-check-label" for="item3" >
                        Tester
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" {{ ($employee->cargo=="Gestor") ? "checked" : "" }} value="Gestor" type="radio" name="cargo" id="item4">
                    <label class="form-check-label" for="item4" >
                        Gestor
                    </label>
                    </div>

        </div>
        <input required type="submit" class="btn btn-primary" value="Editar Funcionário">
    </form>
</div>



@endsection