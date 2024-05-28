@extends('layout.layout')

@section('title', 'Sobre - Le Flower')

@section('conteudo')

    {{-- TESTE PARA OS ICONES --}}
    <!-- For favicon png -->
    <link rel="shortcut icon" type="image/icon" href="{{ asset('assets/logo/favicon.png') }}">

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="{{ asset('icon/css/font-awesome.min.css') }}">

    <!--flat icon css-->
    <link rel="stylesheet" href="{{ asset('icon/css/flaticon.css') }}">

    <!--animate.css-->
    <link rel="stylesheet" href="{{ asset('icon/css/animate.css') }}">

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="{{ asset('icon/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('icon/css/owl.theme.default.min.css') }}">

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="{{ asset('icon/css/bootstrap.min.css') }}">

    <!-- bootsnav -->
    <link rel="stylesheet" href="{{ asset('icon/css/bootsnav.css') }}">

    <!--style.css-->
    <link rel="stylesheet" href="{{ asset('icon/css/style.css') }}">

    <!--responsive.css-->
    <link rel="stylesheet" href="{{ asset('icon/css/responsive.css') }}">

    {{-- CSS do titulo da sessão de perguntas --}}
    <link rel="stylesheet" href="{{ asset('icon/css/quest.css') }}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />

    <style>
        .h3-gaby {
            /* font-family: var(--minha-font2); */
            font-weight: bold !important;
            font-size: 40px !important;
            letter-spacing: 1px !important;
        }

        .p-gaby {
            font-size: 30px !important;
            font-family: var(--minha-font2) !important;
            text-align: center !important;
        }
    </style>

    <style>
        /* FLOR PULSAR */
        .pulse {
            margin: 10px;
            width: 60px;
            height: 22px !important;
            border-radius: 50%;
            box-shadow: 0 0 0 rgba(204, 169, 44, 0.4);
            animation: pulse 2s infinite;
        }

        .pulse:hover {
            animation: none;
        }

        .fables-testimonial {
            height: 330px;
            background-image:
        }

        .position-relative {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 70px;
            margin-left: 190px;
        }

        .fundo {
            background-color: #59848e;
        }



        @-webkit-keyframes pulse {
            0% {
                -webkit-box-shadow: 0 0 0 0 rgba(204, 169, 44, 0.4);
            }

            70% {
                -webkit-box-shadow: 0 0 0 10px rgba(204, 169, 44, 0);
            }

            100% {
                -webkit-box-shadow: 0 0 0 0 rgba(204, 169, 44, 0);
            }
        }

        @keyframes pulse {
            0% {
                -moz-box-shadow: 0 0 0 0 rgba(204, 169, 44, 0.4);
                box-shadow: 0 0 0 0 rgba(204, 169, 44, 0.4);
            }

            70% {
                -moz-box-shadow: 0 0 0 10px rgba(204, 169, 44, 0);
                box-shadow: 0 0 0 10px rgba(204, 169, 44, 0);
            }

            100% {
                -moz-box-shadow: 0 0 0 0 rgba(204, 169, 44, 0);
                box-shadow: 0 0 0 0 rgba(204, 169, 44, 0);
            }

        }

        .fundo {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 25px;
        }

        .texto {
            font-size: 15px !important;
            text-align: center !important;
            width: 50%;

        }

        .titlee {
            margin-bottom: 10px;
            color: #e4b48d;
        }

        .parallax {
            height: 400px;
            /* Altura da área de visualização */
            overflow: hidden;
            position: relative;
        }

        .parallax-image {

            color: #ffffff;
            background: url(assets/saalaoinicioo.jpeg);
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 600px;
        }

        .parallax-image2 {

            color: #ffffff;
            background: url(assets/salao1.jpg);
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 600px;
        }


        .parallax-image3 {

            color: #ffffff;
            background: url(assets/salao3.jpeg  );
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 600px;
        }

        .parallax-image4 {

            color: #ffffff;
            background: url(assets/salaoatualsobre.jpeg);
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 600px;
        }



        .parallax-image::after {
            content: "";
            /* Criar um pseudo-elemento para a sobreposição */
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Cor preta com 50% de opacidade */
        }

        .parallax-image2::after {
            content: "";
            /* Criar um pseudo-elemento para a sobreposição */
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Cor preta com 50% de opacidade */
        }

        .parallax-image3::after {
            content: "";
            /* Criar um pseudo-elemento para a sobreposição */
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Cor preta com 50% de opacidade */
        }

        .parallax-image4::after {
            content: "";
            /* Criar um pseudo-elemento para a sobreposição */
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Cor preta com 50% de opacidade */
        }

        .content {
            /* Estilos para o conteúdo abaixo da imagem */
        }

        .logoVideo {
            display: none !important
        }

        @media (max-width: 700px) {

            .col-auto {
                width: 50%;
                justify-content: end;
                display: flex;
            }

            .logo-banner {
                width: 75% !important;
            }
        }

        /* ESTILIZAÇÕES HEADER RESPONSIVEL */
        @media screen and (max-width: 700px) {
            .banner {
                /* Insira aqui o link da nova imagem */
                content: url('../assets/logo-sobre.png');
                width: 70%!important
            }


        }
    </style>

    {{-- Back --}}
@section('logo')
    <a href="/"><img style="width:50%;" class="banner" src="{{ asset('assets/logo4.png') }}" alt="logo"></a>
@endsection

<div style="" class="hero-wrapper hero-2" id="hero">
    <div class="global-carousel" id="heroSlider2" data-fade="true" data-slide-show="1" data-lg-slide-show="1"
        data-md-slide-show="1" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="true" data-xl-arrows="true"
        data-ml-arrows="true">
        <div class="hero-slider" style="margin-bottom: -8px" style="position: relative;">

            <img class="videoLeFlower" src="{{ asset('assets/banner/bannerFlores.jpeg') }}" alt="Your Image">

            <!-- Adicione outros elementos acima do vídeo -->
            <div class="container"
                style="position: absolute; top: 40%; left: 48%; transform: translate(-50%, -50%); z-index: 2; text-align: center;">

                <div style="" class="hero-style2">
                    <img class="logoVideo" src="{{ asset('assets/logo4.png') }}" alt="Logo">
                    <div>
                        <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.1s"
                            style="font-size: 120px; letter-spacing: 5px">SOBRE</h1>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<div class="fundo">
    <h4 class="titlee">
        Primeira unidade
    </h4>

    <p class="texto">
        Há alguns anos atrás, em um pequeno espaço impregnado de sonhos e fragrâncias de
        flores, Helena Flores plantou a semente de uma ideia. Com o apoio de uma equipe
        dedicada, o Leflower começou a enraizar suas primeiras raízes na comunidade. A visão
        de Helena atraiu clientes em busca de algo mais do que um corte de cabelo ou uma
        manicure; eles buscavam uma experiência onde pudessem se sentir especiais e celebrar
        sua própria singularidade.
    </p>
    <br>
    <p class="texto">
        Há alguns anos atrás, em um pequeno espaço impregnado de sonhos e fragrâncias de
        flores, Helena Flores plantou a semente de uma ideia. Com o apoio de uma equipe
        dedicada, o Leflower começou a enraizar suas primeiras raízes na comunidade. A visão
        de Helena atraiu clientes em busca de algo mais do que um corte de cabelo ou uma
        manicure; eles buscavam uma experiência onde pudessem se sentir especiais e celebrar
        sua própria singularidade.
    </p>

    <div>
        <img class="pulse" src="{{ asset('assets/img-gaby/flor3.svg') }}" alt="">
    </div>
</div><!--/.timeline-content-->
</div><!--/.timeline-->

<div class="parallax">
    <div class="parallax-image"></div>
</div>


<div class="fundo">
    <h4 class="titlee">
        Primeira unidade
    </h4>

    <p class="texto">
        Há alguns anos atrás, em um pequeno espaço impregnado de sonhos e fragrâncias de
        flores, Helena Flores plantou a semente de uma ideia. Com o apoio de uma equipe
        dedicada, o Leflower começou a enraizar suas primeiras raízes na comunidade. A visão
        de Helena atraiu clientes em busca de algo mais do que um corte de cabelo ou uma
        manicure; eles buscavam uma experiência onde pudessem se sentir especiais e celebrar
        sua própria singularidade.
    </p>
    <br>
    <p class="texto">
        Há alguns anos atrás, em um pequeno espaço impregnado de sonhos e fragrâncias de
        flores, Helena Flores plantou a semente de uma ideia. Com o apoio de uma equipe
        dedicada, o Leflower começou a enraizar suas primeiras raízes na comunidade. A visão
        de Helena atraiu clientes em busca de algo mais do que um corte de cabelo ou uma
        manicure; eles buscavam uma experiência onde pudessem se sentir especiais e celebrar
        sua própria singularidade.
    </p>

    <div>
        <img class="pulse" src="{{ asset('assets/img-gaby/flor3.svg') }}" alt="">
    </div>
</div><!--/.timeline-content-->
</div><!--/.timeline-->


<div class="parallax">
    <div class="parallax-image2"></div>
</div>


<div class="fundo">
    <h4 class="titlee">
        Primeira unidade
    </h4>

    <p class="texto">
        Há alguns anos atrás, em um pequeno espaço impregnado de sonhos e fragrâncias de
        flores, Helena Flores plantou a semente de uma ideia. Com o apoio de uma equipe
        dedicada, o Leflower começou a enraizar suas primeiras raízes na comunidade. A visão
        de Helena atraiu clientes em busca de algo mais do que um corte de cabelo ou uma
        manicure; eles buscavam uma experiência onde pudessem se sentir especiais e celebrar
        sua própria singularidade.
    </p>
    <br>
    <p class="texto">
        Há alguns anos atrás, em um pequeno espaço impregnado de sonhos e fragrâncias de
        flores, Helena Flores plantou a semente de uma ideia. Com o apoio de uma equipe
        dedicada, o Leflower começou a enraizar suas primeiras raízes na comunidade. A visão
        de Helena atraiu clientes em busca de algo mais do que um corte de cabelo ou uma
        manicure; eles buscavam uma experiência onde pudessem se sentir especiais e celebrar
        sua própria singularidade.
    </p>

    <div>
        <img class="pulse" src="{{ asset('assets/img-gaby/flor3.svg') }}" alt="">
    </div>
</div><!--/.timeline-content-->
</div><!--/.timeline-->


<div class="parallax">
    <div class="parallax-image3"></div>
</div>






<div class="fundo">
    <h4 class="titlee">
        Primeira unidade
    </h4>

    <p class="texto">
        Há alguns anos atrás, em um pequeno espaço impregnado de sonhos e fragrâncias de
        flores, Helena Flores plantou a semente de uma ideia. Com o apoio de uma equipe
        dedicada, o Leflower começou a enraizar suas primeiras raízes na comunidade. A visão
        de Helena atraiu clientes em busca de algo mais do que um corte de cabelo ou uma
        manicure; eles buscavam uma experiência onde pudessem se sentir especiais e celebrar
        sua própria singularidade.
    </p>
    <br>
    <p class="texto">
        Há alguns anos atrás, em um pequeno espaço impregnado de sonhos e fragrâncias de
        flores, Helena Flores plantou a semente de uma ideia. Com o apoio de uma equipe
        dedicada, o Leflower começou a enraizar suas primeiras raízes na comunidade. A visão
        de Helena atraiu clientes em busca de algo mais do que um corte de cabelo ou uma
        manicure; eles buscavam uma experiência onde pudessem se sentir especiais e celebrar
        sua própria singularidade.
    </p>

    <div>
        <img class="pulse" src="{{ asset('assets/img-gaby/flor3.svg') }}" alt="">
    </div>
</div><!--/.timeline-content-->
</div><!--/.timeline-->


<div class="parallax">
    <div class="parallax-image4"></div>
</div>



<div class="fundo">
    <h4 class="titlee">
        Primeira unidade
    </h4>

    <p class="texto">
        Há alguns anos atrás, em um pequeno espaço impregnado de sonhos e fragrâncias de
        flores, Helena Flores plantou a semente de uma ideia. Com o apoio de uma equipe
        dedicada, o Leflower começou a enraizar suas primeiras raízes na comunidade. A visão
        de Helena atraiu clientes em busca de algo mais do que um corte de cabelo ou uma
        manicure; eles buscavam uma experiência onde pudessem se sentir especiais e celebrar
        sua própria singularidade.
    </p>
    <br>
    <p class="texto">
        Há alguns anos atrás, em um pequeno espaço impregnado de sonhos e fragrâncias de
        flores, Helena Flores plantou a semente de uma ideia. Com o apoio de uma equipe
        dedicada, o Leflower começou a enraizar suas primeiras raízes na comunidade. A visão
        de Helena atraiu clientes em busca de algo mais do que um corte de cabelo ou uma
        manicure; eles buscavam uma experiência onde pudessem se sentir especiais e celebrar
        sua própria singularidade.
    </p>

    <div>
        <img class="pulse" src="{{ asset('assets/img-gaby/flor3.svg') }}" alt="">
    </div>
</div><!--/.timeline-content-->
</div><!--/.timeline-->


</section>

{{-- Teste fonts --}}
<!--modernizr.min.js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

<!--bootstrap.min.js-->
<script src="{{ asset('icon/js/bootstrap.min.js') }}"></script>

<!-- bootsnav js -->
<script src="{{ asset('icon/js/bootsnav.js') }}"></script>

<!-- jquery.sticky.js -->
<script src="{{ asset('icon/js/jquery.sticky.js') }}"></script>

<!-- for progress bar start-->

<!-- progressbar js -->
<script src="{{ asset('icon/js/progressbar.js') }}"></script>
<!-- appear js -->

<!-- progressbar js -->
<script src="{{ asset('assets/js/script.js') }}"></script>
<!-- appear js -->

{{-- Começo scripts gaby --}}
<!-- DEPENDENCIA jQuery 3.6.0 COontador JORNADA -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@endsection
