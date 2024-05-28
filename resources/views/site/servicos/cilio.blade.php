@extends('layout.layout')

@section('title', 'Cílio - Le Flower')

@section('conteudo')

<style>

@media (max-width: 700px){
    .hero2{
        height: 650px;
    }

    .hero-slider{
        height: 550px;
        background: url({{ asset('assets/banner/bannerRespons.jpeg') }});
        background-size: cover;
    }

    .videoLeFLower{
        display: none;
    }

    .hero-slider video{
        display: none;
    }

    .logoVideo{
        display: contents;
    }

    .hero-style2{
        display: none;
    }

    .btn-flower{
      margin-top: 130%;
    }
}
    .service-section {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
    }

    .service {
      background-color: transparent;
      margin: 10px;
      padding: 0% 5% 1% 5%;
      width: calc(25% - 40px);
      box-sizing: border-box;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }


    .service img {
      width: 100%;
      height: auto;
    }

    .service h2 {
      font-size: 20px;
      margin: 10px 0;
    }

    .service p {
      margin: 10px 0;
      color: #202020;
    }

    .price {
      font-weight: bold;
    }

    .descricoes{
        display: block;
    }

    .service{
        width: 500px;
        display: block;
    }

    .service h4{
        color: #202020;
    }

    .service-description{
        color: #202020;
        text-align: start;
    }

    .test-bg {
        background-position: center;
        background: linear-gradient( 180deg, rgba(89, 132, 142, 0.23), rgba(89, 132, 142, 0.23) ), url({{ asset('assets/AdobeStock_587067399.jpeg') }});

    }

    .servico{
        padding: 0% 13% 0% 13%;
    }

    .card-header{
        padding-left: 6.5%;
    }

    .card-header h3{
        font-size: 28pt;
    }

    .about-thumb-2{
        top: 12%;
    }

    .justify-content-between h4{
        font-weight: 400;
    }

    .card-menu2{
        margin-left:15%;
    }

    .buttonAgendar1{
        margin-right:70%;
    }

    .buttonAgendar2{
        margin-left:63.5%;
    }

    .buttonAgendar3{
        margin-right:70%;
    }








    .selecao{
        height: 600px;
        display: flex;
        justify-content: space-around;
    }
    .list-group{
        justify-content: space-between;
        height: 100%;
        text-align: center;
        font-weight: bold;
    }
    .list-group-item{
        width: 400px;
        border-radius: 20px;
    }

    .buttonCat {
    height: 50px;
    width: 350px;
    position: relative;
    background-color: transparent;
    cursor: pointer;
    border: 2px solid #202020;
    overflow: hidden;
    border-radius: 30px;
    color: #202020;
    transition: all 0.5s ease-in-out;


 }

 @media (max-width: 700px) {
      .about-thumb-2 img{
        display: none;
      }

      .about-thumb-num{
        display: none;
      }

      .servico{
        padding: 0% 0% 0% 0%;
      }

      .service p{
        font-size: 8pt
      }

      .service{
        width: 100%;
      }

      .card-menu2{
        margin-left:0%;
      }

     .buttonAgendar1{
        margin-right:0%;
     }

     .buttonAgendar2{
        margin-left:0%;
    }

    .buttonAgendar3{
        margin-right:0%;
    }

    .card-header h3{
        font-size: 20pt;
        text-align: center;
    }
    .selecao {
    height: 230px;
    display: block;
    margin-bottom: 250px;
    }

    .list-group a{
      margin-bottom:2%;
    }
    .list-group{
      align-items:center;
    }
    .col-md-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 100%;
}

    }
    </style>

    @endsection
