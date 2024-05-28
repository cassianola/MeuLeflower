@extends('site.dashboard.dashboardLayout.layout')

@section('dash-func')
    <h4>Olá, {{ $func->nomeFuncionario }}</h4>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Lista de Funcionarios</h4>
                <div class="table-responsive">
                    <table class="table table-striped">

                        <thead>
                            <tr>
                                <th>
                                    Nome
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Telefone
                                </th>
                                <th>
                                    Data de Nascimento
                                </th>
                                <th>
                                    Endereço
                                </th>
                                <th>
                                    Salario
                                </th>
                                <th>
                                    Cargo
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($listaFunc as $funcionario)
                            <tr>
                                <td class="py-1">{{ $funcionario->nomeFuncionario }}</td>
                                <td>{{ $funcionario->emailFuncionario }}</td>

                                <td>{{ $funcionario->telefoneFuncionario }}</td>
                                <td>{{ $funcionario->dataNascFuncionario }}</td>
                                <td>{{ $funcionario->enderecoFuncionario }}</td>
                                <td>{{ $funcionario->salarioFuncionario }}</td>
                                <td>{{ $funcionario->cargoFuncionario }}</td>
                            </tr>
                            <tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>
            </div>
        </div> 
    </div>
@endsection
