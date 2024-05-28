@extends('layout.layout')

@section('title', 'Contato - Le Flower')

@section('conteudo')

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");

        /* * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        } */

        <style>@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");

        body,
        input,
        textarea {
            font-family: "Poppins", sans-serif;
        }

        .lf-container {
            position: sticky;
            width: 100%;
            min-height: 100vh;
            padding: 2rem;
            background-color: #fafafa;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .lf-form {
            width: 100%;
            max-width: 70%;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            overflow: hidden;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }

        .lf-contact-form {
            background-color: #59848e;
            position: relative;
        }

        .lf-circle {
            border-radius: 50%;
            background: linear-gradient(135deg, transparent 20%, #59848e);
            position: absolute;
        }

        .lf-circle.lf-one {
            width: 130px;
            height: 130px;
            top: 130px;
            right: -40px;
        }

        .lf-circle.lf-two {
            width: 80px;
            height: 80px;
            top: 10px;
            right: 30px;
        }

        .lf-contact-form:before {
            content: "";
            position: absolute;
            width: 26px;
            height: 26px;
            background-color: #59848e;
            transform: rotate(45deg);
            top: 50px;
            left: -13px;
        }

        .lf-form form {
            padding: 2.3rem 2.2rem;
            z-index: 10;
            overflow: hidden;
            position: relative;
        }

        .lf-title {
            color: #fff;
            font-weight: 500;
            font-size: 1.5rem;
            line-height: 1;
            margin-bottom: 0.7rem;
            font-size: 24px
        }



        .lf-input-container {
            position: relative;
            margin: 1rem 0;
        }

        .lf-input {
            width: 100%;
            outline: none;
            border: 2px solid #fafafa;
            background: none;
            padding: 0.6rem 1.2rem;
            color: #fff;
            font-weight: 500;
            font-size: 15px;
            letter-spacing: 0.5px;
            border-radius: 25px;
            transition: 0.3s;
        }

        .lf-input.lf-textarea {
            padding: 0.8rem 1.2rem;
            min-height: 150px;
            border-radius: 22px;
            resize: none;
            overflow-y: auto;
        }

        .lf-input-container label {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            padding: 0 0.4rem;
            color: #fafafa;
            font-size: 0.9rem;
            font-weight: 400;
            pointer-events: none;
            z-index: 1000;
            transition: 0.5s;
        }

        .lf-input-container.lf-textarea label {
            top: 1rem;
            transform: translateY(0);
        }

        .lf-btn {
            padding: 0.6rem 1.3rem;
            background-color: #fff;
            border: 2px solid #fafafa;
            font-size: 15px;
            color: #59848e;
            line-height: 1;
            border-radius: 25px;
            outline: none;
            cursor: pointer;
            transition: 0.3s;
            margin: 0;
        }

        .lf-btn:hover {
            background-color: transparent;
            color: #fff;
        }

        .lf-input-container span {
            position: absolute;
            top: 0;
            left: 25px;
            transform: translateY(-50%);
            font-size: 10px;
            padding: 0 0.4rem;
            color: transparent;
            pointer-events: none;
            z-index: 500;

        }

        .lf-input-container span:before,
        .lf-input-container span:after {
            content: "";
            position: absolute;
            width: 10%;
            opacity: 0;
            transition: 0.3s;
            height: 5px;
            background-color: #59848e;
            top: 50%;
            transform: translateY(-50%);
        }

        .lf-input-container span:before {
            left: 50%;
            color: white;
        }

        .lf-input-container span:after {
            right: 50%;
        }

        .lf-input-container.focus label {
            top: 0;
            transform: translateY(-50%);
            left: 25px;
            font-size: 0.8rem;
        }

        .lf-input-container.focus span:before,
        .lf-input-container.focus span:after {
            width: 50%;
            opacity: 1;
        }

        .lf-contact-info {
            padding: 2.3rem 2.2rem;
            position: relative;
        }

        .lf-contact-info .lf-title {
            color: #59848e;
            font-size: 24px
        }

        .lf-text {
            color: #333;
            margin: 1.5rem 0 2rem 0;
            font-size: 15px
        }

        .lf-information {
            display: flex;
            color: #555;
            margin: 0.7rem 0;
            align-items: center;
            font-size: 0.95rem;
        }

        .lf-icon {
            width: 28px;
            margin-right: 0.7rem;
            margin-right: 15px
        }

        .lf-social-media {
            padding: 2rem 0 0 0;
        }

        .lf-social-media p {
            color: #333;
            font-size: 15px
        }

        .lf-social-icons {
            display: flex;
            margin-top: 0.5rem;
        }

        .lf-social-icons a {
            width: 35px;
            height: 35px;
            border-radius: 5px;
            background: linear-gradient(45deg, #e4b48d, #e4b48d);
            color: #000000;
            text-align: center;
            line-height: 35px;
            margin-right: 0.5rem;
            transition: 0.3s;
        }

        .lf-social-icons a:hover {
            transform: scale(1.05);
        }

        .lf-contact-info:before {
            content: "";
            position: absolute;
            width: 110px;
            height: 100px;
            border: 22px solid #59848e;
            border-radius: 50%;
            bottom: -77px;
            right: 50px;
            opacity: 0.3;
        }

        .lf-big-circle {
            position: absolute;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: linear-gradient(to bottom, #59848e, rgb(73, 104, 110));
            bottom: 50%;
            right: 50%;
            transform: translate(-40%, 38%);
        }

        .lf-big-circle:after {
            content: "";
            position: absolute;
            width: 360px;
            height: 360px;
            background-color: #fafafa;
            border-radius: 50%;
            top: calc(50% - 180px);
            left: calc(50% - 180px);
        }

        .lf-square {
            position: absolute;
            height: 400px;
            top: 50%;
            left: 50%;
            transform: translate(181%, 11%);
            opacity: 0.2;
        }

        @media (max-width: 850px) {
            .lf-form {
                grid-template-columns: 1fr;
            }

            .lf-contact-info:before {
                bottom: initial;
                top: -75px;
                right: 65px;
                transform: scale(0.95);
            }

            .lf-contact-form:before {
                top: -13px;
                left: initial;
                right: 70px;
            }

            .lf-square {
                transform: translate(140%, 43%);
                height: 350px;
            }

            .lf-big-circle {
                bottom: 75%;
                transform: scale(0.9) translate(-40%, 30%);
                right: 50%;
            }

            .lf-text {
                margin: 1rem 0 1.5rem 0;
            }

            .lf-social-media {
                padding: 1.5rem 0 0 0;
            }
        }

        @media (max-width: 480px) {
            .lf-container {
                padding: 1.5rem;
            }

            .lf-contact-info:before {
                display: none;
            }

            .lf-square,
            .lf-big-circle {
                display: none;
            }

            .lf-form form,
            .lf-contact-info {
                padding: 1.7rem 1.6rem;
            }

            .lf-text,
            .lf-information,
            .lf-social-media p {
                font-size: 0.8rem;
            }

            .lf-title {
                font-size: 1.15rem;
            }

            .lf-social-icons a {
                width: 30px;
                height: 30px;
                line-height: 30px;
            }

            .lf-icon {
                width: 23px;
            }

            .lf-input {
                padding: 0.45rem 1.2rem;
            }

            .lf-btn {
                padding: 0.45rem 1.2rem;
            }

            .alert-success {
                color: #fff;
                background-color: #e4b48d;
                border-color: #e4b48d
            }
        }
    </style>

    {{-- ESTILIZAÇÃO BANNERS --}}
    <style>
        body {
            background-color: #F3F3F3;
        }

        .hero-slider {
            position: relative;
        }

        .hero-slider::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 1);
            /* Altere o valor de '0.5' para ajustar a intensidade do escurecimento */
            pointer-events: none;
            /* Permite que você clique através da camada de sobreposição */
        }

        .social-btn a {
            height: 35px;
            width: 35px;
            line-height: 35px;
            border-radius: 7px;
            display: inline-block;
            background-color: var(--smoke-color4);
            color: var(--title-color);
            text-align: center;
            font-size: 12px;
            padding-top: 3%;
        }

        a i {
            font-size: 12pt;
        }

        .theme {
            --bg-color: #59848e;
            --main-color: #ffffff;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            background-color: var(--bg-color);
            border-radius: 100%;
            border: 2px solid #ffffff;
            box-shadow: 4px 4px #000000;
        }

        .input {
            cursor: pointer;
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 10;
            opacity: 0;
        }

        .icon {
            position: absolute;
            top: calc(50% -13px);
            left: calc(50% -13px);
            width: 26px;
            height: 26px;
        }

        .icon.icon-moon {
            fill: var(--main-color);
        }

        .icon.icon-sun {
            stroke: #FFD950;
            display: none;
        }

        .input:checked~.icon.icon-sun {
            display: block;
        }

        .input:checked~.icon.icon-moon {
            display: none;
        }

        .theme:active {
            box-shadow: 0px 0px var(--main-color);
            transform: translate(3px, 3px);
        }

        .hero-slider::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.2));
            z-index: 1;
            /* Certifique-se de que a sobreposição esteja acima do vídeo */
        }

        .hero-slider video {
            position: relative;
            z-index: 0;
            /* Garanta que o vídeo esteja abaixo da sobreposição */
        }

        .button {
            position: relative;
            padding: 15px 45px;
            background: #fec195;
            font-size: 17px;
            font-weight: 500;
            color: #181818;
            cursor: pointer;
            border: 1px solid #fec195;
            border-radius: 8px;
            filter: drop-shadow(2px 2px 3px rgba(0, 0, 0, 0.2));
        }

        .button:hover {
            border: 1px solid #f3b182;
            background: linear-gradient(85deg,
                    #fec195,
                    #fcc196,
                    #fabd92,
                    #fac097,
                    #fac39c);
            animation: wind 2s ease-in-out infinite;
        }

        @keyframes wind {
            0% {
                background-position: 0% 50%;
            }

            0% {
                background-position: 50% 100%;
            }

            0% {
                background-position: 0% 50%;
            }
        }

        .icon-1 {
            position: absolute;
            top: 0;
            right: 0;
            width: 25px;
            transform-origin: 0 0;
            transform: rotate(10deg);
            transition: all 0.5s ease-in-out;
            filter: drop-shadow(2px 2px 3px rgba(0, 0, 0, 0.3));
        }

        .button:hover .icon-1 {
            animation: slay-1 3s cubic-bezier(0.52, 0, 0.58, 1) infinite;
            transform: rotate(10deg);
        }

        @keyframes slay-1 {
            0% {
                transform: rotate(10deg);
            }

            50% {
                transform: rotate(-5deg);
            }

            100% {
                transform: rotate(10deg);
            }
        }

        .icon-2 {
            position: absolute;
            top: 0;
            left: 25px;
            width: 12px;
            transform-origin: 50% 0;
            transform: rotate(10deg);
            transition: all 1s ease-in-out;
            filter: drop-shadow(2px 2px 3px rgba(0, 0, 0, 0.5));
        }

        .button:hover .icon-2 {
            animation: slay-2 3s cubic-bezier(0.52, 0, 0.58, 1) 1s infinite;
            transform: rotate(0);
        }

        @keyframes slay-2 {
            0% {
                transform: rotate(0deg);
            }

            50% {
                transform: rotate(15deg);
            }

            100% {
                transform: rotate(0);
            }
        }

        .icon-3 {
            position: absolute;
            top: 0;
            left: 0;
            width: 18px;
            transform-origin: 50% 0;
            transform: rotate(-5deg);
            transition: all 1s ease-in-out;
            filter: drop-shadow(2px 2px 3px rgba(0, 0, 0, 0.5));
        }

        .button:hover .icon-3 {
            animation: slay-3 2s cubic-bezier(0.52, 0, 0.58, 1) 1s infinite;
            transform: rotate(0);
        }

        @keyframes slay-3 {
            0% {
                transform: rotate(0deg);
            }

            50% {
                transform: rotate(-5deg);
            }

            100% {
                transform: rotate(0);
            }
        }

        .btn-flower {
            height: 4em;
            width: 20em;
            display: flex;
            align-items: center;
            justify-content: center;
            background: transparent;
            border: 0px solid black;
            cursor: pointer;
        }

        .wrapper {
            height: 2em;
            width: 6.2em;
            position: relative;
            background: transparent;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .text {
            font-size: 17px;
            z-index: 1;
            color: #000;
            padding: 4px 12px;
            border-radius: 4px;
            background: rgba(255, 255, 255, 0.7);
            transition: all 0.5s ease;
        }

        .flower {
            display: grid;
            grid-template-columns: 1em 1em;
            position: absolute;
            transition: grid-template-columns 0.8s ease;
        }

        .flower1 {
            top: -12px;
            left: -13px;
            transform: rotate(5deg);
        }

        .flower2 {
            bottom: -5px;
            left: 8px;
            transform: rotate(35deg);
        }

        .flower3 {
            bottom: -15px;
            transform: rotate(0deg);
        }

        .flower4 {
            top: -14px;
            transform: rotate(15deg);
        }

        .flower5 {
            right: 11px;
            top: -3px;
            transform: rotate(25deg);
        }

        .flower6 {
            right: -15px;
            bottom: -15px;
            transform: rotate(30deg);
        }

        .petal {
            height: 1em;
            width: 1em;
            border-radius: 40% 70% / 7% 90%;
            background: linear-gradient(#59848e, #456168);
            border: 0.5px solid #96d1ec;
            z-index: 0;
            transition: width 0.8s ease, height 0.8s ease;
        }

        .two {
            transform: rotate(90deg);
        }

        .three {
            transform: rotate(270deg);
        }

        .four {
            transform: rotate(180deg);
        }

        .btn-flower:hover .petal {
            background: linear-gradient(#59848e, #456168);
            border: 0.5px solid #96b4ec;
        }

        .btn-flower:hover .flower {
            grid-template-columns: 1.5em 1.5em;
        }

        .btn-flower:hover .flower .petal {
            width: 1.5em;
            height: 1.5em;
        }

        .btn-flower:hover .text {
            background: rgba(255, 255, 255, 0.4);
        }

        .btn-flower:hover div.flower1 {
            animation: 15s linear 0s normal none infinite running flower1;
        }

        @keyframes flower1 {
            0% {
                transform: rotate(5deg);
            }

            100% {
                transform: rotate(365deg);
            }
        }

        .btn-flower:hover div.flower2 {
            animation: 13s linear 1s normal none infinite running flower2;
        }

        @keyframes flower2 {
            0% {
                transform: rotate(35deg);
            }

            100% {
                transform: rotate(-325deg);
            }
        }

        .btn-flower:hover div.flower3 {
            animation: 16s linear 1s normal none infinite running flower3;
        }

        @keyframes flower3 {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .btn-flower:hover div.flower4 {
            animation: 17s linear 1s normal none infinite running flower4;
        }

        @keyframes flower4 {
            0% {
                transform: rotate(15deg);
            }

            100% {
                transform: rotate(375deg);
            }
        }

        .btn-flower:hover div.flower5 {
            animation: 20s linear 1s normal none infinite running flower5;
        }

        @keyframes flower5 {
            0% {
                transform: rotate(25deg);
            }

            100% {
                transform: rotate(-335deg);
            }
        }

        .btn-flower:hover div.flower6 {
            animation: 15s linear 1s normal none infinite running flower6;
        }

        @keyframes flower6 {
            0% {
                transform: rotate(30deg);
            }

            100% {
                transform: rotate(390deg);
            }
        }

        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        .videoLeFLower {
            width: 100%;
            height: auto;
        }

        .logoVideo {
            display: none;
            margin-right: 3%;
        }

        .hero-style2 {
            display: flex;
            justify-content: center;
            align-items: center;
            align-content: center;
            padding: 398px 0 60px;
        }

        @media (max-width: 700px) {
            .hero2 {
                height: 650px;
            }



            .videoLeFLower {
                display: none;
            }

            .hero-slider video {
                display: none;
            }

            .logoVideo {
                display: contents;
            }

            .hero-style2 {
                /* display: block; */
            }

            .btn-flower {
                margin-top: 130%;
            }
        }

        .widget-area {
            padding: 1% 12%;
        }

        .about-text {
            font-size: 11pt;
            color: gainsboro;
        }

        .social-btn {
            gap: 20%;
        }

        .footer-widget .wp-block-search__label,
        .footer-widget .widget_title {
            max-width: 100%;
            color: var(--white-color);
            border-bottom: none;
            margin: -0.04em 0 50px 0;
            font-size: 22px;
            font-weight: 500;
            position: relative;
        }

        .footer-widget .widget_title:after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -15px;
            height: 3px;
            width: 100%;
            background: #D9D9D9;
        }

        .widget_title {
            text-align: center;
        }

        @media (min-width: 701px) and (max-width:1024px) {
            .widget-area {
                padding: 1% 28%;
                text-align: center;

            }

            .about-text {
                width: 200px;
            }
        }

        .selecao {
            height: 600px;
            display: flex;
            justify-content: space-around;
            padding: 0% 7%;
            margin: 2% 0%;
            margin-bottom: 7%;
        }

        .buttonCat {
            height: 50px;
            width: 100%;
            position: relative;
            background-color: transparent;
            cursor: pointer;
            border: 2px solid #ffffff;
            overflow: hidden;
            border-radius: 30px;
            color: #202020;
            transition: all 0.5s ease-in-out;
        }

        .btnCat-txt {
            z-index: 1;
            font-weight: 800;
            letter-spacing: 4px;
        }

        .type1::after {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            transition: all 0.5s ease-in-out;
            background-color: #333;
            border-radius: 30px;
            visibility: hidden;
            height: 10px;
            width: 10px;
            z-index: -1;
        }

        .buttonCat:hover {
            box-shadow: 1px 1px 200px #252525;
            color: #fff;
            border: none;
        }

        .type1:hover::after {
            visibility: visible;
            transform: scale(100) translateX(2px);
        }

        .service-description {
            color: #202020;
            text-align: start;
        }

        .service h4 {
            color: #202020;
        }

        /* ESTILOS USADOS HEADER RESPONSIVEL */

        .logoVideo {
            display: none!important;
            margin-right: 3%;
        }

        @media (max-width: 700px) {

            .col-auto {
                width: 50%;
                justify-content: end;
                display: flex;
            }
            .logoVideo img {
                width: 70%!important;
        }
        }

        @media screen and (max-width: 700px) {
        .banner {
            /* Insira aqui o link da nova imagem */
            content: url('../assets/logo-contato.png');
            width: 70%!important

        }
    }
    </style>

@section('logo')
<a href="/"><img style="width:50%;" class="banner" src="{{ asset('assets/logo4.png') }}" alt="logo"></a>
@endsection

    <div style="" class="hero-wrapper hero-2" id="hero">
        <div class="global-carousel" id="heroSlider2" data-fade="true" data-slide-show="1" data-lg-slide-show="1"
            data-md-slide-show="1" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="true" data-xl-arrows="true"
            data-ml-arrows="true">
            <div class="hero-slider" style="margin-bottom: -8px" style="position: relative;">

                <img class="videoLeFlower" src="{{ asset('assets/banner/banner-contato.png') }}" alt="Your Image">

                <!-- Adicione outros elementos acima do vídeo -->
                <div class="container"
                    style="position: absolute; top: 40%; left: 48%; transform: translate(-50%, -50%); z-index: 2; text-align: center;">

                    <div style="" class="hero-style2">
                        <img style="width:70%;" class="logoVideo" src="{{ asset('assets/logo4.png') }}" alt="Logo">
                        <div>
                            <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.1s"
                                style="font-size: 120px;">CONTATO</h1>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="lf-container">
        <span class="lf-big-circle"></span>
        <img src="../assets/img-gaby/shape.svg" class="lf-square" alt="" />
        <div class="lf-form">
            <div class="lf-contact-info">
                <h3 class="lf-title">Fale conosco</h3>
                <p class="lf-text">
                    Olá, Agradecemos por entrar em contato conosco. Por favor, preencha os campos abaixo com suas
                    informações e
                    sua mensagem. Faremos o possível para responder o mais rápido possível.
                    <br>
                    <br>

                    Atenciosamente, Equipe Leflower
                </p>

                <div class="lf-info">
                    <div class="lf-information">
                        <img src="../assets/img-gaby/location.svg" class="lf-icon" alt="" />
                        <p style="margin: auto 0; font-size: 15px; color: #43485c; margin-rigth:2px;">Senac - São Miguel
                            Paulista, 1500</p>
                    </div>
                    <div class="lf-information">
                        <img src="../assets/img-gaby/email.svg" class="lf-icon" alt="" />
                        <p style="margin: auto 0; font-size: 15px; color: #43485c; margin-rigth:2px;">leflower.com</p>
                    </div>
                    <div class="lf-information">
                        <img src="../assets/img-gaby/phone.svg" class="lf-icon" alt="" />
                        <p style="margin: auto 0; font-size: 15px; color: #43485c; margin-rigth:2px;">11 95158-2537</p>
                    </div>
                </div>

                <div class="lf-social-media">
                    <p style="font-size: 15px">Siga-nos:</p>
                    <div class="lf-social-icons">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="lf-contact-form">
                <span class="lf-circle lf-one"></span>
                <span class="lf-circle lf-two"></span>

                <form action="{{ route('contato.enviar') }}" method="POST" class="contato-form" id="formContato"
                    autocomplete="off">
                    @csrf
                    <h3 class="lf-title">Contato</h3>
                    <div class="lf-input-container">
                        <input type="text" name="nomeContato" id="nomeContato" class="lf-input"
                            value="{{ old('nomeContato') }}">
                        <label style="font-size: 15px;" for="">Nome</label>
                        <span>Nome</span>
                        <div id="nomeCcntatoError" class="nomeContatoError"></div>
                    </div>
                    <div class="lf-input-container">
                        <input type="email" name="emailContato" id="emailContato" class="lf-input"
                            value="{{ old('emailContato') }}">
                        <label style="font-size: 15px;" for="">Email</label>
                        <span>Email</span>
                        <div id="emailCOntatoError" class="nomeCOntatoError"></div>
                    </div>
                    <div class="lf-input-container">
                        <input type="tel" name="foneContato" id="foneContato" class="lf-input"
                            value="{{ old('foneContato') }}">
                        <label style="font-size: 15px;" for="">Telefone</label>
                        <span>Telefone</span>
                        <div id="foneContatoError" class="foneContatoError"></div>
                    </div>
                    <div class="lf-input-container lf-textarea">
                        <textarea name="msgContato" id="msgContato" class="lf-input">{{ old('msgContato') }}</textarea>
                        <label style="font-size: 15px;" for="">Mensagem</label>
                        <span>Mensagem</span>
                    </div>
                    <div class="lf-input-container lf-textarea">
                        <input class="lf-btn" type="submit" onclick="formContato(event)">
                        <div id="contatoMensagem" class="contatoMensagem" style="margin: 10px;" style="color: #59848e">
                        </div>
                        <style>
                            .contatoMensagem {
                                color: brown
                            }
                        </style>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    <!-- ... Seu código anterior ... -->

    <!-- ... Seu código anterior ... -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const inputs = document.querySelectorAll(".lf-input-container input, .lf-input-container textarea");

            function focusFunc() {
                let parent = this.parentNode;
                parent.classList.add("focus");
                parent.querySelector("label").style.display = "none";
                parent.querySelector("span").style.color = "#fafafa";
                parent.querySelector("span").style.transition = "0.5s";
            }

            function blurFunc() {
                let parent = this.parentNode;
                if (this.value == "") {
                    parent.classList.remove("focus");
                    parent.querySelector("label").style.display = "block";
                    parent.querySelector("span").style.color = "transparent";
                    parent.querySelector("span").style.transition = "0.3s";
                }
            }

            inputs.forEach((input) => {
                input.addEventListener("focus", focusFunc);
                input.addEventListener("blur", blurFunc);
            });
        });
    </script>

    <!-- ... Seu código posterior ... -->

    <!-- ... Seu código posterior ... -->


@endsection
