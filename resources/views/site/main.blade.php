<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="utf-8" />
    <title>ACM - SROC</title>
    <link rel="icon" href="{{asset('assets/images/icon.ico')}}" type="image/gif" sizes="16x16">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta content="Pixel in Motion" name="author">
    <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link id="bootstrap-grid" href="{{asset('assets/css/bootstrap-grid.min.css')}}" rel="stylesheet" type="text/css" />
    <link id="bootstrap-reboot" href="{{asset('assets/css/bootstrap-reboot.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/owl.theme.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/owl.transitions.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/jquery.countdown.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="{{asset('assets/css/colors/scheme-01.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/coloring.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/custom_acmsroc.css')}}" rel="stylesheet" type="text/css" />

    <style>
    /* Estilos gerais */
    header.transparent {
        min-height: 80px;
        display: flex;
        align-items: center;
    }

    /* Logo styling */
    #logo img {
        width: 150px;
        height: 63px;
        object-fit: contain;
    }

    /* Flexbox settings for aligning items */
    header .row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }

    /* Mobile Menu Button */
    .menu-btn {
        background: none;
        border: none;
        font-size: 24px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Configuração do menu para dispositivos móveis */
    #mainmenu {
        display: none;
        flex-direction: column;
        color: white;
        position: fixed;
        top: 80px;
        left: 0;
        width: 100%;
        background-color: rgb(167,177,181);
        z-index: 1000;
        padding: 10px 0;
        text-align: center;
    }

    #mainmenu.show {
        display: flex;
    }

    #mainmenu ul {
        padding-left: 0;
        list-style: none;
    }

    #mainmenu li {
        margin: 10px 0;
    }

    #mainmenu a {
        color: white;
        text-decoration: none;
    }

    /* Botão de fechar o menu no topo, fora do conteúdo do menu */
    .close-menu-btn {
        font-size: 24px;
        color: white;
        cursor: pointer;
        background: none;
        border: none;
        position: absolute;
        top: 10px;
        right: 20px;
        z-index: 1001; /* Garante que o botão esteja acima de outros elementos */
    }

    #visao_global {
        display: none;
    }

    #visao_global2 {
         display: block;
    }

    /* Menu normal para telas grandes */
    @media (min-width: 992px) {
        #mainmenu {
            display: flex !important;
            flex-direction: row; /* Coloca o menu na horizontal */
            justify-content: center;
            position: relative;
            top: unset;
            left: unset;
            width: auto;
            background-color: transparent;
            text-align: left;
        }

        #mainmenu li {
            margin: 0 15px; /* Espaçamento horizontal entre itens do menu */
        }

        .menu-btn, .close-menu-btn {
            display: none; /* Oculta o botão de menu em telas grandes */
        }

        #visao_global {
            display: block;
         }

        #visao_global2 {
            display: none;
        }
    }
</style>

</head>

<body>
    <div id="wrapper">
        <div id="topbar" class="topbar-noborder">
            <div class="container">
                <div class="topbar-right sm-hide">
                    <span class="topbar-widget tb-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </span>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <!-- header begin -->
       <!-- header begin -->
       <header class="transparent">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between align-items-center">
                        <div id="logo">
                            <!-- logo begin -->
                            <a href="{{  url('/') }}">
                                <img alt="" class="logo" src="{{asset('assets/images/logo_asroc.png')}}" />
                                <img alt="" class="logo-2" src="{{asset('assets/images/logo_asroc.png')}}" />
                            </a>
                            <!-- logo close -->
                        </div>

                        <!-- Mobile Menu Button -->
                        <button id="menu-btn" class="d-lg-none menu-btn"></button>
                          
                        <div class="de-flex-col header-col-mid ">

                            <!-- mainmenu begin -->
                            <ul id="mainmenu">

                                <li><a href="#legado">Quem somos</a>
                                    <ul>
                                        <li><a href="{{  url('/') }}#missao">O nosso propósito</a></li>
                                        <li><a href="{{  url('/') }}#visao">Os nossos valores</a></li>
                                        <li><a href="{{  url('/transparencia') }}">Relatório de transparência</a></li>
                                        <li><a href="{{  url('/codigo') }}">Código de conduta</a></li>
                                        <li><a href="#">Responsabilidade social</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{  url('/') }}#equipa">Equipa</a></li>
                                <li><a href="{{  url('/') }}#servicos">Serviços</a></li>
                                <li><a href="#">Comunicação</a>
                                    <ul>
                                        <li><a href="#">Notícias</a></li>
                                        <li><a href="#">Newsletter</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{  url('/contact') }}">Contactos</a></li>
                            </ul>
                            <!-- mainmenu close -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->

        <!-- content begin -->
       
        @yield('content')


        <!-- content close -->
        <a href="#" id="back-to-top"></a>
        <!-- footer begin -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="widget">
                            <a href="index.html"><img alt="" class="img-fluid mb20" src="{{asset('assets/images/logo-light.png')}}"></a>
                            <address class="s1">
                                <span><i class="id-color fa fa-phone fa-lg"></i>253 206 730</span>
                                <span><i class="id-color fa fa-envelope-o fa-lg"></i><a
                                        href="mailto:geral@acmsroc.pt">geral@acmsroc.pt</a></span>
                                <span><i class="id-color fa fa-map-marker fa-lg"></i>Avenida da Liberdade, Edifício dos
                                    Granjinhos, nº 432 Piso 6, Sala 41-42 | 4711-912 Braga</span>
                            </address>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h5 class="id-color mb20">Serviços</h5>
                        <ul class="ul-style-2">
                            <li>Auditoria</li>
                            <li>Fiscalidade</li>
                            <li>Avaliação de empresas</li>
                            <li>Formação</li>
                            <li>Consultoria e Reporting</li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <div class="widget">
                            <h5 class="id-color">Newsletter</h5>
                            <p>Assine a nossa Newsletter e receba as últimas notícias.</p>
                            <form action="blank.php" class="row" id="form_subscribe" method="post"
                                name="form_subscribe">
                                <div class="col text-center">
                                    <input class="form-control" id="name_1" name="name_1" placeholder="Digite seu email"
                                        type="text" /> <a href="#" id="btn-submit"><i
                                            class="fa fa-long-arrow-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                            <div class="spacer-10"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6">
                            &copy; Todos os direitos reservados © Copyright ACMSROC 2024
                        </div>
                        <div class="col-lg-6 text-lg-end" style="background-size: cover;">
                            Desenvolvido por <a id="pixel" href="https://pixelinmotion.pt/" target="_blank">Pixel in
                                Motion</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
        <div id="preloader">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    <!-- Javascript Files
    ================================================== -->

    <script>
        const menuBtn = document.getElementById('menu-btn');
        const mainmenu = document.getElementById('mainmenu');

        // Função para abrir e fechar o menu
        menuBtn.addEventListener('click', function () {
            mainmenu.classList.toggle('show');
        });

        // Função para fechar o menu ao clicar no botão de fechar ou em um link do menu
        mainmenu.addEventListener('click', function (event) {
            if (event.target.classList.contains('close-menu-btn') || event.target.tagName === 'A') {
                mainmenu.classList.remove('show');
            }
        });
    </script>

    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('assets/js/easing.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.js')}}"></script>
    <script src="{{asset('assets/js/validation.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/enquire.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.plugin.js')}}"></script>
    <script src="{{asset('assets/js/typed.js')}}"></script>
    <script src="{{asset('assets/js/jarallax.js')}}"></script>
    <script src="{{asset('assets/js/jquery.countTo.js')}}"></script>
    <script src="{{asset('assets/js/jquery.countdown.js')}}"></script>
    <script src="{{asset('assets/js/typed.js')}}"></script>
    <script src="{{asset('assets/js/jarallax.js')}}"></script>
    <script src="{{asset('assets/js/designesia.js')}}"></script>


</body>

</html>