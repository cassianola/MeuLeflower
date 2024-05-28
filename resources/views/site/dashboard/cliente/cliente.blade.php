@extends('site.dashboard.dashboardLayout.layout')

<style>
    .user-info h4{
        margin-left: 0px;
    }
</style>

@section('nome')

<h4>Olá, {{ $cliente->nomeCliente }}</h4>

@endsection

@section('conteudo')
    <h2 style="color: gainsboro; text-align: center;padding-top:5%;">Meus compromissos</h2>
    
@endsection
