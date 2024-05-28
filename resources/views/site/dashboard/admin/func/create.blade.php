@extends('site.dashboard.dashboardLayout.layout')

@section('dash-func')
{{-- <title>Cadastro de Funcionário</title> --}}
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        form {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            width: 93%;
            margin: auto;
        }
        form div {
            margin-bottom: 15px;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        input[type="datetime-local"],
        select {
            width: calc(100% - 20px);
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        .invalid-feedback {
            color: #ff0000;
        }
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>

    <form action="{{ route('dashboard.admin.func.cad') }}" method="POST">
        @csrf
        <div>
            <label for="nomeFuncionario">Nome:</label>
            <input type="text" id="nomeFuncionario" name="nomeFuncionario" required maxlength="50">
            @error ('nomeFuncionario')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="emailFuncionario">Email:</label>
            <input type="email" id="emailFuncionario" name="emailFuncionario" required maxlength="100">
            @error ('emailFuncionario')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="dataNascFuncionario">Data de Nascimento:</label>
            <input type="date" id="dataNascFuncionario" name="dataNascFuncionario" required>
            @error ('dataNascFuncionario')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="telefoneFuncionario">Telefone:</label>
            <input type="tel" id="telefoneFuncionario" name="telefoneFuncionario" required maxlength="16">
            @error ('telefoneFuncionario')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="senhaFuncionario">Senha:</label>
            <input type="text" id="senhaFuncionario" name="senhaFuncionario" required maxlength="20">
            @error ('senhaFuncionario')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="salarioFuncionario">Salário:</label>
            <input type="text" id="salarioFuncionario" name="salarioFuncionario" required>
            @error ('salarioFuncionario')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="enderecoFuncionario">Endereço:</label>
            <input type="text" id="enderecoFuncionario" name="enderecoFuncionario" required maxlength="30">
            @error ('enderecoFuncionario')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="nivelFuncionario">Nível:</label>
            <input type="text" id="nivelFuncionario" name="nivelFuncionario" required maxlength="20">
            @error ('nivelFuncionario')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="statusFuncionario">Status:</label>
            <select id="statusFuncionario" name="statusFuncionario" required>
                <option value="ATIVO">Ativo</option>
                <option value="INATIVO">Inativo</option>
            </select>
            @error ('statusFuncionario')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="cargoFuncionario">Cargo:</label>
            <input type="text" id="cargoFuncionario" name="cargoFuncionario" required maxlength="30">
            @error ('cargoFuncionario')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="idEspecialidade">ID Especialidade:</label>
            <input type="text" id="idEspecialidade" name="idEspecialidade" required>
            @error ('idEspecialidade')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit">Cadastrar</button>
    </form>

@endsection
