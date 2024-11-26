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
    <link href="{{asset('assets/css/style.css')}}?v={{ rand() }}" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="{{asset('assets/css/colors/scheme-01.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/coloring.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/custom_acmsroc.css')}}?v={{ rand() }}" rel="stylesheet" type="text/css" />

    <style>
    /* Estilos gerais */
    header.transparent {
        min-height: 80px;
        display: flex;
        align-items: center;
    }


    #logo img {
        width: 150px;
        height: 63px;
        object-fit: contain;
    }


    header .row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }


    .menu-btn {
        background: none;
        border: none;
        font-size: 24px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
    }


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
        opacity: 1;
        transform: translateY(-10px); 
        transition: opacity 0.5s ease, transform 0.5s ease;
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

    .close-menu-btn {
        font-size: 24px;
        color: white;
        cursor: pointer;
        background: none;
        border: none;
        position: absolute;
        top: 10px;
        right: 20px;
        z-index: 1001; 
    }

    #visao_global {
        display: none;
    }

    #visao_global2 {
         display: block;
    }
    @media (max-width: 991px) {
        #mainmenu {
            transition: height 0.5s ease-in-out; 
        }
        #mainmenu li {
 
            transition: opacity 0.5s ease, transform 0.5s ease; 
        }
        #mainmenu a span {

            transition: opacity 0.5s ease, transform 0.5s ease; 
        }
       
    }

    @media (min-width: 992px) {
        #mainmenu {
            display: flex !important;
            flex-direction: row; 
            justify-content: center;
            position: relative;
            top: unset;
            left: unset;
            width: auto;
            background-color: transparent;
            text-align: left;
        }

        #mainmenu li {
            margin: 0 15px; 
        }

        .menu-btn, .close-menu-btn {
            display: none; 
        }

        #visao_global {
            display: block;
         }

        #visao_global2 {
            display: none;
        }
    }
    @media (max-width: 767px){
        .ul-style-22{
            margin: 0px 0px -4px 0px;
            text-align: left
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
       <!-- header begin transparent -->
        <!-- Mobile Menu Button -->
       
       <header class=" transparent ">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between align-items-center">
                        <div id="logo" class="de-flex sm-pt10">
                            <!-- logo begin -->
                            <a href="{{  url('/') }}">
                                <img alt="" class="logo" src="{{asset('assets/images/logo_asroc.png')}}" />
                                <img alt="" class="logo-2" src="{{asset('assets/images/logo_asroc.png')}}" />
                            </a>
                            <!-- logo close -->
                        </div>
                        
                        <div class="de-flex-col header-col-mid ">
                            <!-- mainmenu begin -->
                            <ul id="mainmenu" style="posititon: relative">
                                <li class="has-submenu"><a href="{{  route('site.home.quemsomos') }}" @if(Route::is('site.home.quemsomos*')) class="ul-desktop-mobile"  @endif >Quem somos</a>
                                    {{-- <ul>
                                        <li><a href="{{  url('/') }}#missao">O nosso propósito</a></li>
                                        <li><a href="{{  url('/') }}#visao">Os nossos valores</a></li>
                                        <li><a href="{{  url('/transparencia') }}">Relatório de transparência</a></li>
                                        <li><a href="{{  url('/codigo') }}">Código de conduta</a></li>
                                        <li><a href="#">Responsabilidade social</a></li>
                                    </ul> --}}
                                    <ul class="submenu" >
                                        <li data-target="pills-proposito"><a href="{{  route('site.home.quemsomos') }}#missao" @if(Route::is('site.home.proposito')) class="button-desktop-mobile"  @endif class="ref-item" id="ref-pills-proposito">O nosso propósito</a></li>
                                        <li data-target="pills-valores"><a href="{{  route('site.home.quemsomos') }}#visao" @if(Route::is('site.home.valores')) class="button-desktop-mobile"  @endif class="ref-item" id="ref-pills-valores">Os nossos valores</a></li>
                                        <li ><a href="{{  route('site.home.transparencia')  }}" @if(Route::is('site.home.transparencia')) class="button-desktop-mobile"   @endif >Relatório de transparência</a></li>
                                        <li><a href="{{  route('site.home.codigo')  }}" @if(Route::is('site.home.codigo')) class="button-desktop-mobile"  @endif>Código de conduta</a></li>
                                        <li><a href="{{  route('site.home.responsibilidade')  }}" @if(Route::is('site.home.responsibilidade')) class="button-desktop-mobile"@endif>Responsabilidade social</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{  route('site.equipa')  }}#equipa" @if(Route::is('site.equipa*')) class="ul-desktop-mobile"  @endif >Equipa</a></li>
                                <li><a href="{{  route('site.servicos')  }}#servicos" @if(Route::is('site.servicos*')) class="ul-desktop-mobile"  @endif >Serviços</a></li>
                                <li class="has-submenu"><a href="#" @if(Route::is('site.comunicacao*')) class="ul-desktop-mobile"  @endif>Comunicação</a>
                                    <ul class="submenu">
                                        <li><a href="{{  route('site.comunicacao.noticias')  }}" @if(Route::is('site.comunicacao.noticias')) class="button-desktop-mobile"  @endif>Notícias</a></li>
                                        <li><a href="{{  route('site.comunicacao.newsletter')  }}" @if(Route::is('site.comunicacao.newsletter')) class="button-desktop-mobile"  @endif>Newsletter</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{  route('site.contact')  }}" @if(Route::is('site.contact*')) class="ul-desktop-mobile"  @endif >Contactos</a></li>
                            </ul>
                            <!-- mainmenu close -->
                        </div>
                        <span id="menu-btn" class="d-lg-none"></span>
                       

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
    <script src="{{asset('assets/js/designesia.js')}}?v={{ rand() }}"></script>

    <script>
 
        // // Função para abrir e fechar o menu
        // menuBtn.addEventListener('click', function () {
        //     mainmenu.classList.toggle('show');
        // });

        // // Função para fechar o menu ao clicar no botão de fechar ou em um link do menu
        // mainmenu.addEventListener('click', function (event) {
        //     if (event.target.classList.contains('close-menu-btn') || event.target.tagName === 'A') {
        //         mainmenu.classList.remove('show');
        //     }
        // });

    
        document.addEventListener("DOMContentLoaded", function () {

            const tabs = document.querySelectorAll('.nav-link');

            const tabContents = document.querySelectorAll('.tab-pane');

            tabs.forEach(tab => {
                tab.addEventListener('click', function(event) {
                    event.preventDefault(); 

                    tabs.forEach(t => t.classList.remove('active'));
                    tabContents.forEach(content => content.classList.remove('show', 'active'));


                    tab.classList.add('active'); 
                    const targetId = tab.getAttribute('data-tab');  
                    const targetContent = document.getElementById(targetId);
                    targetContent.classList.add('show', 'active'); 
                });
            });
        });

        // document.addEventListener('DOMContentLoaded', function () {
        //     // Seleciona o link com base no seu href
        //     const link = document.querySelector('a[href="{{ url('/') }}#excelencia"]');

        //     // Adiciona um ouvinte de evento para o clique
        //     link.addEventListener('click', function(event) {
        //         event.preventDefault(); // Impede o comportamento padrão do link (como o scroll)
                
        //         console.log('Link "O nosso propósito" foi clicado!');
                
        //         // Aqui você pode adicionar qualquer lógica que deseja quando o link for clicado
        //         // Exemplo: Mudar a classe ou manipular a URL, etc.
                
        //         // // Se quiser que o link leve para a seção após a ação, você pode simular o clique:
        //         // window.location.href = link.href;  // Isto redirecionará para o link.
        //     });
        // });
        var h; 
        
        document.addEventListener('DOMContentLoaded', function () {

            // Seleciona o botão e o menu
            const menuBtn = document.getElementById('menu-btn');
            const mainMenu = document.getElementById('mainmenu');
            
            // Adiciona o evento de clique ao botão
            menuBtn.addEventListener('click', () => {
                if (mainMenu.classList.contains('active')) {
                    menuBtn.classList.remove('active');
                    mainMenu.classList.remove('active'); 
                } else {
                    menuBtn.classList.add('active');
                    mainMenu.classList.add('active'); 
                }
            });


            document.addEventListener('click', (event) => {
                if (!mainMenu.contains(event.target) && !menuBtn.contains(event.target)) {
                    mainMenu.classList.remove('active'); // Remove a visibilidade
                }
            });


            const mediaQuery = window.matchMedia('(max-width: 995px)');

            let targetContent = document.getElementById("mainmenu");
            targetContent.classList.remove("active");
            targetContent.classList.remove("show");
            targetContent.removeAttribute("style");

            function handleMenu() { 
                if (mediaQuery.matches) {
                    document.getElementById('menu-btn').addEventListener('click', function () {
                        const menu = document.getElementById('mainmenu');

                        if (menu.classList.contains('show')) {
                            menu.classList.remove('show'); 
                            menu.style.transition = ''; 
                            menu.style.height = menu.scrollHeight + 'px'; 
                            requestAnimationFrame(() => {
                                menu.style.transition = 'height 0.5s ease'; 
                                menu.style.height = '0'; 
                            });
                            h = jQuery('#mainmenu')[0].scrollHeight;
                        } else {
                            menu.classList.add('show');
                            menu.style.height = '0'; 
                            menu.style.transition = 'height 0.5s ease'; 
                            requestAnimationFrame(() => {
                                menu.style.height = menu.scrollHeight + 'px'; 
                            });
   
                            menu.style.opacity = 0; 
                            menu.style.transition = "opacity 0.5s ease"; 
                            requestAnimationFrame(() => {
                                menu.style.opacity = 1; 
                            });

                            menu.addEventListener('transitionend', function handleTransitionEnd() {
                                menu.querySelectorAll('li').forEach(item => {
                                    item.style.transition = 'opacity 0.1s ease, transform 0.1s ease';
                                    item.style.opacity = '1';
                                    item.style.transform = 'scale(1)';
                                });
                                menu.removeEventListener('transitionend', handleTransitionEnd);
                            });
                            h = jQuery('#mainmenu')[0].scrollHeight;
                        }
    
                    });


                    document.querySelectorAll('.has-submenu > a').forEach(function (submenuLink) {
                        submenuLink.addEventListener('click', function (e) {
                            e.preventDefault(); 
                            const parentLi = submenuLink.parentElement;
                            parentLi.classList.toggle('open'); 
                        });
                    });
                }
                
            }

            handleMenu();
            
        });
        function handleMenu() { 
                if (mediaQuery.matches) {
                    document.getElementById('menu-btn').addEventListener('click', function () {
                        const menu = document.getElementById('mainmenu');

                        if (menu.classList.contains('show')) {
                            menu.classList.remove('show'); 
                            menu.style.transition = ''; 
                            menu.style.height = menu.scrollHeight + 'px'; 
                            requestAnimationFrame(() => {
                                menu.style.transition = 'height 0.5s ease'; 
                                menu.style.height = '0'; 
                            });
                            h = jQuery('#mainmenu')[0].scrollHeight;
                        } else {
                            menu.classList.add('show');
                            menu.style.height = '0'; 
                            menu.style.transition = 'height 0.5s ease'; 
                            requestAnimationFrame(() => {
                                menu.style.height = menu.scrollHeight + 'px'; 
                            });
   
                            menu.style.opacity = 0; 
                            menu.style.transition = "opacity 0.5s ease"; 
                            requestAnimationFrame(() => {
                                menu.style.opacity = 1; 
                            });

                            menu.addEventListener('transitionend', function handleTransitionEnd() {
                                menu.querySelectorAll('li').forEach(item => {
                                    item.style.transition = 'opacity 0.1s ease, transform 0.1s ease';
                                    item.style.opacity = '1';
                                    item.style.transform = 'scale(1)';
                                });
                                menu.removeEventListener('transitionend', handleTransitionEnd);
                            });
                            h = jQuery('#mainmenu')[0].scrollHeight;
                        }
    
                    });

                    document.querySelectorAll('.has-submenu > a').forEach(function (submenuLink) {
                        submenuLink.addEventListener('click', function (e) {
                            e.preventDefault(); 
                            const parentLi = submenuLink.parentElement;
                            parentLi.classList.toggle('open'); 
                        });
                    });
                }
                
            }
        window.addEventListener('change', function() {

            
        });

        window.addEventListener('resize', function() {
            

            
            console.log("resize analise");

             // Seleciona o botão e o menu
            const menuBtn = document.getElementById('menu-btn');
            const mainMenu = document.getElementById('mainmenu');
            
        

            document.addEventListener('click', (event) => {
                if (!mainMenu.contains(event.target) && !menuBtn.contains(event.target)) {
                    mainMenu.classList.remove('active'); // Remove a visibilidade
                }
            });


            const mediaQuery = window.matchMedia('(max-width: 995px)');

            let targetContent = document.getElementById("mainmenu");
            targetContent.classList.remove("active");
            targetContent.classList.remove("show");
            targetContent.removeAttribute("style");

            function handleMenu() { 
                if (mediaQuery.matches) {
                    document.getElementById('menu-btn').addEventListener('click', function () {
                        const menu = document.getElementById('mainmenu');

                        if (menu.classList.contains('show')) {
                            menu.classList.remove('show'); 
                            menu.style.transition = ''; 
                            menu.style.height = menu.scrollHeight + 'px'; 
                            requestAnimationFrame(() => {
                                menu.style.transition = 'height 0.5s ease'; 
                                menu.style.height = '0'; 
                            });
                            h = jQuery('#mainmenu')[0].scrollHeight;

                        } else {
                            menu.classList.add('show');
                            menu.style.height = '0'; 
                            menu.style.transition = 'height 0.5s ease'; 
                            requestAnimationFrame(() => {
                                menu.style.height = menu.scrollHeight + 'px'; 
                            });
   
                            menu.style.opacity = 0; 
                            menu.style.transition = "opacity 0.5s ease"; 
                            requestAnimationFrame(() => {
                                menu.style.opacity = 1; 
                            });

                            menu.addEventListener('transitionend', function handleTransitionEnd() {
                                menu.querySelectorAll('li').forEach(item => {
                                    item.style.transition = 'opacity 0.1s ease, transform 0.1s ease';
                                    item.style.opacity = '1';
                                    item.style.transform = 'scale(1)';
                                });
                                menu.removeEventListener('transitionend', handleTransitionEnd);
                            });
                            h = jQuery('#mainmenu')[0].scrollHeight;
                        }
    
                    });

                    document.querySelectorAll('.has-submenu > a').forEach(function (submenuLink) {
                        submenuLink.addEventListener('click', function (e) {
                            e.preventDefault(); 
                            const parentLi = submenuLink.parentElement;
                            parentLi.classList.toggle('open'); 
                        });
                    });

                    handleMenu()

                }
                
            }
  
        });
        var totalHeight = 0;
        jQuery('#mainmenu li a').each(function() {
             if ($(this).next("ul").length > 0) {
                 $("<span></span>").insertAfter($(this));
             }
         });

        jQuery("#mainmenu > li > span").on("click", function() {
                
             var iteration = $(this).data('iteration') || 1;

             switch (iteration) {
                 case 1:
                    let isAnimating = false;  
                     $(this).addClass("active");
                     $(this).parent().find("ul:first").css("height", "auto");
                     var curHeight = $(this).parent().find("ul:first").height();
                     $(this).parent().find("ul:first").css("height", "0");
                     
                     $(this).parent().find("ul:first").animate({
                         'height': curHeight
                     }, 300, 'easeOutQuint', function() {
                        var newMainMenuHeight = $('#mainmenu')[0].scrollHeight; 
                        $('#mainmenu').css("height", h + curHeight + totalHeight);
                        totalHeight = curHeight + totalHeight;
                    });
                break;
                 case 2:
                    var curHeight = $(this).parent().find("ul:first").height();
                     $(this).removeClass("active");
                     $(this).parent().find("ul:first").animate({
                         'height': "0"
                     }, 300, 'easeOutQuint', function() {
                        var newMainMenuHeight = $('#mainmenu')[0].scrollHeight; 
                        $('#mainmenu').css("height", newMainMenuHeight-curHeight);
                        totalHeight = - curHeight + totalHeight;
                    });
                    break;
             }
             iteration++;
             if (iteration > 2) iteration = 1;
             $(this).data('iteration', iteration);console.log("selecionado main menu");
         }); 
         jQuery("#mainmenu > li > ul > li > span").on("click", function() {
             var iteration = $(this).data('iteration') || 1;
             switch (iteration) {
                 case 1:
                     $(this).addClass("active");
                     $(this).parent().find("ul:first").css("height", "auto");
                     $(this).parent().parent().parent().find("ul:first").css("height", "auto");
                     var curHeight = $(this).parent().find("ul:first").height();
                     $(this).parent().find("ul:first").css("height", "0");
                     $(this).parent().find("ul:first").animate({
                         'height': curHeight
                     }, 400, 'easeInOutQuint');
                     break;
                 case 2:
                     $(this).removeClass("active");
                     $(this).parent().find("ul:first").animate({
                         'height': "0"
                     }, 400, 'easeInOutQuint');
                     break;
             }
             iteration++;
             if (iteration > 2) iteration = 1;
             $(this).data('iteration', iteration);
         });
       
                
    </script>


</body>

</html>