
    @extends('layouts.main')

    @section('title', 'Início')

    @section('content')

 


    <div id="search-container" class="col-md-12">
        
    
        <h1>Busque um funcionário</h1>

        
        <form action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
            <button>Pesquisar</button>

        </form>
    </div>

    <div id="employees-container" class="col-md-11">
        @if($search)
        <h2>Buscando por: {{$search}}</h2>
        @else
        <h2>Funcionários</h2>
        <p class="subtitle">Veja os funcionário cadastrados</p>
        @endif

        
        <div id="cards-container" class="row">
            @foreach ($employees as $employee)
            <div class="card col-md-3">
                <div class="card-body">
                    <h5 class="card-name">{{$employee->name}}</h5>
                    <p class="card-cargo">{{$employee->cargo}}</p>
                    <p class="card-cpf">CPF: {{$employee->cpf}}</p>
                   
                    
                    <a class="btn btn-primary">Salário: {{$employee->salario}}</a>
                </div>
            </div>
                
            @endforeach
            @if(count($employees)==0)
            <p>Não há funcionários!</p>
            @endif
        </div>
    </div>

@endsection