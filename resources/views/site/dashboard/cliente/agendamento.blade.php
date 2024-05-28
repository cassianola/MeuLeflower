{{-- @extends('site.dashboard.dashboardLayout.layout')

<title>Cliente - Agendar </title>

@section('dash') --}}

<!DOCTYPE html>
<html>
  <head>
    <title>Agendamento de Horários</title>
    <link rel="stylesheet" href="{{ asset('dash/css/agenda.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    <style>
      input{

      }
      h1{
        color: #59848e;
      }
      .funcionario {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
      }

      .info {
        display: flex;
        flex-direction: column;
        margin-right: 20px;
        background-color: #59848e;
        border-radius: 5px ;
        padding: 15px;
        width: 20%;
      }

      .info img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin: auto;
      }

      .horarios {
      display: flex;
      flex-wrap: wrap; /* Adiciona quebra de linha */
    }


    .horario {
      border: 1px solid #59848e;
      border-radius: 5px;
      padding: 10px;
      margin-right: 10px;
      flex-basis: calc(20% - 10px); /* Define a largura para 50% - margem */
      margin-bottom: 10px; /* Espaçamento inferior */
      color: #59848e ;
      text-align: center;
      cursor: pointer;

    }
    .horario:hover {
      color: #fff;
      background-color: #59848e;
    }
    </style>


    <div class="div-mae">
      <div class="container" style="width: 50% !important">
        <h1>Agendamento</h1>
        <form id="appointmentForm">
          <label for="categoria">Categoria Serviço</label>
          <select name="categoria" id="categoria">
            <option value="">Selecione...</option>
            <option value="teste"></option>
          </select>

          <div class="data">
            <label for="date">Selecione a Data:</label>
            <input type="date" placeholder="Data: DD/MM/AAAA" />
          </div>

          <div class="funcionario">
            <div class="info">
              <img src="maria.jpg" alt="Maria Souza" />
              <h3 style="text-align: center;">Maria Souza</h3>
            </div>
            <div class="horarios">
              <div class="horario">09:00</div>
              <div class="horario">11:00</div>
              <div class="horario">15:00</div>
              <div class="horario">17:00</div>
              <div class="horario">09:00</div>
              <div class="horario">11:00</div>
              <div class="horario">15:00</div>
              <div class="horario">17:00</div>
            </div>
          </div>

          <label for="servico">Selecione o Serviço</label>
          <input type="tel" id="servico" required />

          <button class="agendar-btn" type="submit">Agendar</button>
        </form>
      </div>
    </div>
    <script src="{{ asset('dash/js/agenda.js') }}"></script>
  </body>
</html>
{{-- @endsection --}}

