@extends('site.main')

@section('content')


<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <section aria-label="section" class="jarallax vh-100 no-padding text-light">
        <img src="{{asset('assets/images/background/servicos.jpg')}}" class="jarallax-img" alt="">
        <div class="v-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h3 class="wow fadeInUp" data-wow-delay=".4s">SOCIEDADE DE REVISORES DE CONTAS</h3>
                        <h1 class="wow fadeInUp text-uppercase" data-wow-delay=".6s">O SEU PARCEIRO DE CONFIANÇA</h1>
                        <div class="spacer-20"></div>
                        <a class="btn-custom wow fadeInUp" data-wow-delay="1s" href="contact.html">Contactar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="no-top relative text-light">
        <div class="container">
            <div class="row bg-color no-gutters mt-100">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box f-boxed style-3 text-center" data-bgcolor="rgba(0,0,0,.1)">
                        <i class=""></i>
                        <div class="text">
                            <h4>Agendar reunião</h4>
                            Iremos conhecer o cliente e o seu negócio, identificar e discutir as suas necessidades específicas.
                        </div>
                        {{-- <i class="wm icofont-letter"></i> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box f-boxed style-3 text-center" data-bgcolor="rgba(0,0,0,.2)">
                        <i class=""></i>
                        <div class="text">
                            <h4>Análise de caso</h4>
                            Conduzimos uma análise mais aprofundada para a sua situação, envolvendo análise de documentos e requisitos.
                        </div>
                        {{-- <i class="wm icofont-investigation"></i> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box f-boxed style-3 text-center" data-bgcolor="rgba(0,0,0,.3)">
                        <i class=""></i>
                        <div class="text">
                            <h4>Serviço especializado</h4>
                            Elaboramos uma proposta, detalhando os termos da mesma para estabelecermos um acordo de prestação de serviços.
                        </div>
                        {{-- <i class="wm icofont-hand-power"></i> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section style="background-size: cover;">
        <div class="container" style="background-size: cover;">
            <div class="row" style="background-size: cover;">
                                                <div class="col-lg-4 offset-lg-2 col-md-6 mb30" style="background-size: cover;">
                                        <div class="de-card-poster" style="background-size: cover;">
                            <a class="d-overlay" href="auditoria.html">
                                <div class="d-content" style="background-size: cover;">
                                    <h3><i class="id-color "></i>Auditoria</h3>
                                    <div class="d-text" style="background-size: cover;">
                                        Análise de contas e documentos internos para empresas e outras entidades. A auditoria independente às finanças das empresas garante integridade e transparência.
                                    </div>
                                    <span href="auditoria.html" class="btn-main">Saber mais</span>
                                </div>
                            </a>
                            <div class="d-image filter-sephia-30" src="{{ asset('assets/images/auditoria.jpg') }}" style="background: url({{ asset('assets/images/news/5.jpg') }}) center center / cover;"></div>
                        </div>
                    </div>
                                                <div class="col-lg-4 col-md-6 mb30" style="background-size: cover;">
                                        <div class="de-card-poster" style="background-size: cover;">
                            <a class="d-overlay" href="fiscalidade.html">
                                <div class="d-content" style="background-size: cover;">
                                    <h3><i class="id-color "></i>Fiscalidade</h3>
                                    <div class="d-text" style="background-size: cover;">
                                        Solução ao nível do aconselhamento, de gestão de riscos, do controlo de custos, e da garantia do cumprimento das obrigações fiscais.
                                    </div>
                                    <span href="fiscalidade.html" class="btn-main">Saber mais</span>
                                </div>
                            </a>
                            <div class="d-image filter-sephia-30" data-bgimage="url({{ asset('assets/images/fiscalidade_bg.jpg') }}) center" style="background: url(&quot;https://pixeldev02.com/storage/iEs0rHDAqnyiLKndHnrCId6SNhZjvNoDdb3GW0Dn.jpg&quot;) center center / cover;"></div>
                        </div>
                    </div>
                                                <div class="col-lg-4 col-md-6 mb30" style="background-size: cover;">
                                        <div class="de-card-poster" style="background-size: cover;">
                            <a class="d-overlay" href="avaliacao.html">
                                <div class="d-content" style="background-size: cover;">
                                    <h3><i class="id-color "></i>Avaliação de empresas</h3>
                                    <div class="d-text" style="background-size: cover;">
                                        Apoio especializado em processos de reestruturações empresariais, tais como fusões, aquisições, entradas de ativos e outros, nas suas diversas vertentes.
                                    </div>
                                    <span href="avaliacao.html" class="btn-main">Saber mais</span>
                                </div>
                            </a>
                            <div class="d-image filter-sephia-30" data-bgimage="url({{ asset('assets/images/avaliacao_bg.jpg') }}) center" style="background: url(&quot;https://pixeldev02.com/storage/fgqacIf4xyFPiBqiSthxmNPJAYpBU2XVpZ5ppvSb.jpg&quot;) center center / cover;"></div>
                        </div>
                    </div>
                                                <div class="col-lg-4 col-md-6 mb30" style="background-size: cover;">
                                        <div class="de-card-poster" style="background-size: cover;">
                            <a class="d-overlay" href="formacao.html">
                                <div class="d-content" style="background-size: cover;">
                                    <h3><i class="id-color "></i>Formação</h3>
                                    <div class="d-text" style="background-size: cover;">
                                        Num cenário de constante mudança, mantemos atualizados os profissionais da área contabilística, financeira e fiscal, em matéria contabilística e legal.
                                    </div>
                                    <span href="formacao.html" class="btn-main">Saber mais</span>
                                </div>
                            </a>
                            <div class="d-image filter-sephia-30" data-bgimage="url({{ asset('assets/images/formacao_bg.jpg') }}) center" style="background: url(&quot;https://pixeldev02.com/storage/DB2ocuwXyOq67urs1gyKgpjE6gVIIWzziuTMfQzK.jpg&quot;) center center / cover;"></div>
                        </div>
                    </div>
                                                <div class="col-lg-4 col-md-6 mb30" style="background-size: cover;">
                                        <div class="de-card-poster" style="background-size: cover;">
                            <a class="d-overlay" href="consultoria.html">
                                <div class="d-content" style="background-size: cover;">
                                    <h3><i class="id-color "></i>Consultoria e Reporting</h3>
                                    <div class="d-text" style="background-size: cover;">
                                        Acompanhando as necessidades mais variadas das empresas, a ACM SROC presta serviços de apoio à gestão e análise de dados financeiros.
                                    </div>
                                    <span href="consultoria.html" class="btn-main">Saber mais</span>
                                </div>
                            </a>
                            <div class="d-image filter-sephia-30" data-bgimage="url({{ asset('assets/images/consultoria_bg.jpg') }}) center" style="background: url(&quot;https://pixeldev02.com/storage/oW1SVa9UHNKKJbK181fLUlX5OAE7bPrbFluWUKzb.jpg&quot;) center center / cover;"></div>
                        </div>
                    </div>
                        </div>
        </div>
    </section>
    <section class="pt40 pb40 bg-color text-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 mb-sm-30 text-lg-start text-sm-center">
                    <h3 class="no-bottom">Obtenha aconselhamento especializado para o seu caso.</h3>
                </div>
                <div class="col-md-4 text-lg-end rtl-lg-start text-sm-center">
                    <a href="contact.html" class="btn-custom_inverse wow fadeInUp">Pedir contação</a>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection