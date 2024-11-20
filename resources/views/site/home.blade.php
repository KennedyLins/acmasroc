@extends('site.main')


@section('content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            
            <section id="inicio" aria-label="section" class="jarallax vh-100 no-padding text-light">
                @component('site.component.section.banner_interative', ['banners' => $banners, 'bannerCount' => $bannerCount])
                @endcomponent
                <div class="v-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <h3 class="id-color wow fadeInUp" data-wow-delay=".4s">ACM SROC</h3>
                                <h1 class="wow fadeInUp" data-wow-delay=".6s">Auditores financeiros por excelência</h1>
                                <p class="lead wow fadeInUp" data-wow-delay=".8s">Pautamos a nossa atividade pelo rigor
                                    e profissionalismo em 5 áreas de especialização na Revisão Legal de Contas.</p>
                                <div class="spacer-20"></div>
                                <a class="btn-custom wow fadeInUp" data-wow-delay="1s" href="contact.html">Contactar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @component('site.component.section.container_interative', ['title' => ''])

            @endcomponent

           

            {{-- @component('site.component.section.menu_header_1', ['title' => 'Meu Título'])

            @endcomponent --}}

            <section id="section-highlight" class="relative" data-bgcolor="#f2f2f2">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <h2>
                                Reputação.<br>Respeito. Resultado.
                            </h2>
                        </div>
                        <div class="col-md-8">
                            <p>A ACM SROC orgulha-se em ser uma equipa multidisciplinar, com expertise especializado e
                                comprovado em 5 áreas de atuação. Estabelecemos relações de proximidade e confiança com
                                os nossos clientes, dando resposta às suas necessidades em todos os setores de
                                atividade.
                            </p>
                        </div>
                    </div>
                    <div class="spacer-double"></div>
                </div>
            </section>

            <section class="no-top relative z1000">
                <div class="container">
                    <div class="row mt-100">
                        <div class="col-md-4 wow fadeInRight" data-wow-delay=".2s">
                            <div class="mask">
                                <div class="cover">
                                    <div class="c-inner">
                                        <h3><span>Avaliação de empresas</span></h3>
                                        <p>Determinamos o valor real e contabilístico dos seus ativos financeiros, para
                                            a tomada de decisão informada pelos stakeholders.</p>
                                        <div class="spacer20"></div>
                                    </div>
                                </div>
                                <img src="{{ asset('assets/images/reputacao/avaliacao.jpg')}}" alt="" class="img-responsive" />
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInRight" data-wow-delay=".4s">
                            <div class="mask">
                                <div class="cover">
                                    <div class="c-inner">
                                        <h3><span>Reestruturações Empresariais</span></h3>
                                        <p>Otimizamos recursos e processos, adaptando a sua empresa ao mercado em
                                            constante evolução, promovendo a agilidade e sustentabilidade financeira.
                                        </p>
                                        <div class="spacer20"></div>
                                    </div>
                                </div>
                                <img src="{{ asset('assets/images/reputacao/reestruturacao.jpg')}}" alt="" class="img-responsive" />
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInRight" data-wow-delay=".6s">
                            <div class="mask">
                                <div class="cover">
                                    <div class="c-inner">
                                        <h3><span>Formação</span></h3>
                                        <p>Capacitamos profissionais, através de formação especializada para atualização
                                            de conhecimentos e partilha de boas práticas contabilísticas.</p>
                                        <div class="spacer20"></div>
                                    </div>
                                </div>
                                <img src="{{ asset('assets/images/reputacao/formacao.jpg')}}" alt="" class="img-responsive" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section data-bgcolor="#f2f2f2">
                <div class="container">
                    <div class="row align-items-center" id="excelencia">
                        <div class="col-lg-12 offset-lg-12">
                            <span class="p-title">Quem somos</span><br>
                            <h2>
                                Deixe-se guiar pela excelência
                            </h2>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-proposito-tab" data-toggle="pill"
                                        data-tab="pills-proposito" role="tab" aria-controls="pills-proposito"
                                        aria-selected="true">PROPÓSITO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-valores-tab" data-toggle="pill"
                                        data-tab="pills-valores" role="tab" aria-controls="pills-valores"
                                        aria-selected="false">VALORES</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-pessoas-tab" data-toggle="pill"
                                        data-tab="pills-pessoas" role="tab" aria-controls="pills-pessoas"
                                        aria-selected="false">PESSOAS</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-proposito" role="tabpanel"
                                    aria-labelledby="pills-proposito-tab">
                                    <p>Queremos satisfazer as necessidades dos nossos clientes e corresponder às
                                        expectativas dos nossos colaboradores, com um trabalho executado sob o signo da
                                        independência, confidencialidade e estreito cumprimento ético, associado ao
                                        trabalho de auditoria.</p>
                                </div>
                                <div class="tab-pane fade" id="pills-valores" role="tabpanel"
                                    aria-labelledby="pills-valores-tab">
                                    <p>Valores como Integridade, Transparência, Excelência, Profissionalismo e Trabalho
                                        em equipa são um guia para o dia-a-dia dos profissionais da ACM SROC, que se
                                        mantêm atentos ao que é crucial no desempenho da sua profissão.</p>
                                </div>
                                <div class="tab-pane fade" id="pills-pessoas" role="tabpanel"
                                    aria-labelledby="pills-pessoas-tab">
                                    <p>A ACM SROC é formada por uma equipa multidisciplinar de 20 profissionais e 5
                                        sócios, com consolidada experiência em Portugal. Conduzimos a Revisão Legal de
                                        Contas com rigor e ética profissional, estabelecendo relações de confiança com
                                        os nossos clientes. Os nossos Revisores Oficiais de Contas e Auditores são uma
                                        referência no mercado, atuando com diligência na prestação de serviços
                                        especializados.</p>
                                </div>                                                             
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-testimonial" data-bgcolor="" style="background-size: cover;">
                <div class="container" style="background-size: cover;">
                    <div class="row" style="background-size: cover;">
                        <div class="col-lg-12" style="background-size: cover;">
                            <div class="text-center" style="background-size: cover;">
                                <h2>Áreas de especialização</h2>
                                <div class="small-border" style="background-size: cover;"></div>
                            </div>
                        </div>
                        <div class="col-md-8 offset-md-2 text-center" style="background-size: cover;">
                            <p>Os nossos Revisores Oficiais de Contas regem-se por elevados padrões de qualidade e
                                independência. A nossa expertise e serviços que cruzam diversas áreas, são o motor da
                                inovação e selo de confiança dos nossos clientes.</p>
                        </div>
                        <div class="spacer-single" style="background-size: cover;"></div>
                        <div class="col-md-3 offset-md-2" style="background-size: cover;">
                            <ul class="ul-style-2 wow fadeInRight animated" data-wow-delay=".0.2s"
                                style="visibility: visible; animation-name: fadeInRight;">
                                <li>Auditoria</li>
                                <li> Fiscalidade</li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="background-size: cover;">
                            <ul class="ul-style-2 wow fadeInRight animated" data-wow-delay=".0.4s"
                                style="visibility: visible; animation-name: fadeInRight;">
                                <li> Avaliação de Empresas</li>
                                <li> Formação</li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="background-size: cover;">
                            <ul class="ul-style-2 wow fadeInRight animated" data-wow-delay=".0.6s"
                                style="visibility: visible; animation-name: fadeInRight;">
                                <li> Consultoria e Reporting</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section id="relatorio" data-bgcolor="#f2f2f2">
                <div class="container" style="background-size: cover;">
                    <div class="row" style="background-size: cover;">
                        <div class="col-lg-12" style="background-size: cover;">
                            <div class="text-center" style="background-size: cover;">
                                <h2>Relatório de transparência</h2>
                                <div class="small-border" style="background-size: cover;"></div>
                            </div>
                        </div>
                        <div class="col-md-8 offset-md-2 text-center" style="background-size: cover;">
                            <p>De forma a dar cumprimento ao disposto no Artigo 62º-A do Decreto-Lei nº 487/99, de 16 de novembro (Estatuto da Ordem dos Revisores Oficiais de Contas), tal como alterado pelo Decreto-Lei 224/2008, de 20 de novembro, apresentamos os nossos Relatórios de Transparência.</p>
                        </div>
                        <div class="col-md-8 offset-md-2 text-center" style="background-size: cover;">
                            <p><a class="btn-custom" href="{{  route('site.home.transparencia')  }}">Ver relatórios</a></p>
                        </div>
                        <div class="spacer-single" style="background-size: cover;"></div>
                    </div>
                </div>
            </section>
            
            <section class="jarallax text-light">
                <img src="{{asset('assets/images/background/2-bw.jpg')}}" class="jarallax-img" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <span class="p-title">PRESTÍGIO</span><br>
                            <h2>
                                Guiamos o seu negócio
                            </h2>
                            <div class="small-border sm-left"></div>
                            <p>Os números espelham o caminho que temos vindo a consolidar, enquanto Sociedade de Revisão
                                Legal de Contas reputada no mercado.</p>
                        </div>
                        <div class="col-md-8 offset-md-1">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay="0s">
                                    <div class="de_count">
                                        <h3>+<span class="timer" data-to="35" data-speed="3000">0</span></h3>
                                        <h5 class="id-color">anos de experiência</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay=".25s">
                                    <div class="de_count">
                                        <h3><span class="timer" data-to="5" data-speed="3000">0</span></h3>
                                        <h5 class="id-color">Sócios</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay=".4s">
                                    <div class="de_count">
                                        <h3><span class="timer" data-to="20" data-speed="3000">0</span></h3>
                                        <h5 class="id-color">colaboradores</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay=".6s">
                                    <div class="de_count">
                                        <h3><span class="timer" data-to="5" data-speed="3000">0</span></h3>
                                        <h5 class="id-color">áreas de especialização</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay=".8s">
                                    <div class="de_count">
                                        <h3>+<span class="timer" data-to="300" data-speed="3000">0</span></h3>
                                        <h5 class="id-color">clientes</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay="1s">
                                    <div class="de_count">
                                        <h3>+<span class="timer" data-to="1" data-speed="3000">0</span>M€</h3>
                                        <h5 class="id-color">volume negócios atual</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id="codigo" data-bgcolor="#f2f2f2">
                <div class="container" style="background-size: cover;">
                    <div class="row" style="background-size: cover;">
                        <div class="col-lg-12" style="background-size: cover;">
                            <div class="text-center" style="background-size: cover;">
                                <h2>Código de conduta</h2>
                                <div class="small-border" style="background-size: cover;"></div>
                            </div>
                        </div>
                        <div class="col-md-8 offset-md-2 text-center" style="background-size: cover;">
                            <p>O Código de Conduta da ACM SROC é o documento que contém os pilares fundamentais que guiam a nossa atividade. Este documento orienta - nos, de forma transversal, no sentido da atuação ética e equilibrada, quer entre colaboradores, quer para com os no ssos clientes e parceiros.</p>
                        </div>
                        <div class="spacer-single" style="background-size: cover;"></div>
                    </div>
                </div>
            </section>
           


        @component('site.component.section.noticias_footer', ['title' => 'Meu Título'])

        @endcomponent

@endsection

