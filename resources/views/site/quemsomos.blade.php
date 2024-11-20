@extends('site.main')

@section('content')

<section id="inicio" class="jarallax text-white">
    <img src="{{asset('assets/images/bg-1-p&b.gif')}}" class="jarallax-img" alt="">
    <div class="center-y relative text-center">
        <div class="v-center">
            <div class="container">
                <div class="row align-items-center text-center text-lg-start">
                    <div class="col-lg-6">
                        <h1 class="wow fadeInUp" data-wow-delay="">Uma visão global que orienta as suas decisões estratégicas</h1>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="legado" style="padding: 5% 0; margin: 3px 0; background-color: rgb(240, 240, 240);" class="text-light">
    <div class="container">
        <div class="row align-items-center">
            <!-- Text Section -->
            <div class="col-lg-5 col-md-6 col-sm-12 mb-4 text-center text-md-start">
                <h1 style="color: dimgray;">Um legado cheio de futuro</h1>
                <p style="color: dimgray;">
                    Com mais de 45 anos de experiência, atualmente somos um Grupo de cerca de 30 pessoas, contando com 7
                    Revisores Oficiais de Contas, guiados por um código de conduta exigente e por um elevado nível de
                    profissionalismo, confidencialidade e princípios éticos, ao serviço dos nossos clientes.
                </p>
            </div>

            <!-- Image Container Section -->
            <div class="col-lg-7 col-md-6 col-sm-12 mb-4">
                <div
                    class="image-container position-relative overflow-hidden"
                    style="
                        width: 100%;
                        height: auto;
                        max-height: 100vh;
                        aspect-ratio: 3 / 2;
                        background: url('{{ asset('assets/images/equipa/fotogrupo.jpg') }}') center center / cover no-repeat;
                    "
                    data-bgimage="url({{asset('assets/images/equipa/fotogrupo.jpg')}}) center"
                ></div>
            </div>
        </div>
    </div>
</section>

<section id="missao" style=" background-color: rgb(167,177,181);" data-bgcolor="rgb(167,177,181)">
    <div class="container">
        <div class="row align-items-center">
            <!-- Mission Text Section -->
            <div class="col-lg-5 col-md-6 col-sm-12 text-center text-md-start">
                <h2 style="color:white;">Os Nosso Valores</h2>
                <p style="color:white;">
                    Oferecer soluções de auditoria com excelência, assegurando transparência, conformidade e eficiência
                    nos processos empresariais, com uma visão global e estratégica que agrega valor, fortalece a confiança
                    e impulsiona o crescimento sustentável dos nossos clientes.
                </p>
            </div>

            <!-- Image Container Section -->
            <div class="col-lg-7 col-md-6 col-sm-12 mb-4">
                <div
                        class="image-container position-relative overflow-hidden"
                        style="
                        width: 100%;
                        height: auto;
                        max-height: 100vh;
                        aspect-ratio: 3 / 2;
                        background: url({{asset('assets/images/missao.gif')}}) center center / cover no-repeat;
                    "
                    data-bgimage="url({{asset('assets/images/missao.gif')}}) center"
                ></div>
            </div>
        </div>
    </div>
</section>

<section id="visao" style="padding: 150px 0; background: url({{ asset('assets/images/news.gif') }}) center center / cover no-repeat;" class="text-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <h1 class="text-white">
                    O Nosso Propósito
                </h1>
                <p class="text-white">
                    Ser a referência em auditoria e consultoria, promovendo confiança, transparência e crescimento sustentável através de soluções personalizadas e excelência profissional.
                </p>
            </div>
            <div class="col-lg-6 col-md-12 text-center">
                <div class="image-container" style="background: url({{ asset('assets/images/your-image.png') }}) center center / cover no-repeat; width: 100%; height: 350px; margin: 20px 0;">
                    <!-- You can use an actual img tag if you want it to be inline -->
                </div>
            </div>
        </div>
    </div>
</section>



<section id="servicos" style="padding: 250px 0 90px 0; background:url({{asset('assets/images/servicos.gif')}})"  data-bgcolor="" class="text-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <h1 style="color: white;">
                    Os Nossos Serviços
                </h1>
                <p style="color: white;">Os nossos serviços incluem auditorias internas e
                    externas, gestão de riscos, compliance e consultoria em
                    governação corporativa, sempre com o objetivo de
                    identificar oportunidades, mitigar riscos e garantir a
                    conformidade regulamentar.</p>           
            </div>
        </div>
    </div>
    <div class="image-container col-md-6 pos-right" style="width: 550px; height:400px; margin:10% 0 10% 10%; background-color:rgb(167,177,181);">
       <ul class="bg-lista-index" style="padding-top: 35px; font-size: 22px">
            <li class="lista-index upper-text">+ Auditoria</li>
            <li class="lista-index upper-text">+ Certificação de contas</li>
            <li class="lista-index upper-text">+ Consultoria de gestão</li>
            <li class="lista-index upper-text">+ Avaliação de empresas</li>
            <li class="lista-index upper-text">+ Fusão e cisão de empresas</li>
            <li class="lista-index upper-text">+ Transformação empresas</li>
            <li class="lista-index upper-text">+ Consolidação de contas</li>
            <li class="lista-index upper-text">+ Reporte internacional</li>
            <li class="lista-index upper-text">+ Preços de transferência</li>
       </ul>
    </div>
</section>

<section id="parcerias" style="padding: 250px 0 90px 0; border-top-width: 10px;" class="text-light quemSomos-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <h1 style="color: dimgray; font-family: 'RotundaLight', sans-serif; font-weight: 50">
                    Parcerias Sólidas e de Longo Prazo
                </h1>
                <p style="color: dimgray">Contamos com clientes de referência em diversos
                    setores. Esta diversidade permite-nos adquirir uma
                    experiência ampla e abrangente, proporcionando-nos
                    um conhecimento profundo das especificidades de cada
                    setor.</p>           
            </div>
        </div>
    </div>
    <div class="image-container col-md-6 pos-right" style="font-family: 'RotundaLight', sans-serif; font-weight: 50; width: 550px; height:420px; margin:10% 0 10% 10%; background-color:white; color:gray;">
       <ul class="bg-lista-index" style="padding-top: 49px; font-size: 22px">
            <li class="lista-index upper-text" style="padding-top: 5px;">+ Distribuição</li>
            <li class="lista-index upper-text" style="padding-top: 5px;">+ Construção civil</li>
            <li class="lista-index upper-text" style="padding-top: 5px;">+ Cooperativas agrícolas</li>
            <li class="lista-index upper-text" style="padding-top: 5px;">+ Vinho do porto</li>
            <li class="lista-index upper-text" style="padding-top: 5px;">+ Transporte terrestre</li>
            <li class="lista-index upper-text" style="padding-top: 5px;">+ Imobiliária</li>
            <li class="lista-index upper-text" style="padding-top: 5px;">+ Saúde</li>
            <li class="lista-index upper-text" style="padding-top: 5px;">+ Educação</li>
            <li class="lista-index upper-text" style="padding-top: 5px;">+ Entidas Públicas</li>
       </ul>
    </div>
</section>

{{-- <section id="parceiros" class="text-light" 
    style="padding: 20% 0; 
            background: url({{ asset('assets/images/parceiros.png') }}) center center / contain no-repeat; 
            margin: 20px 0;" 
    data-bgcolor="">
</section> --}}


<div class="spacer-single" style="background-size: cover; margin-top:100px"></div>


@component('site.component.section.carreseoul_footer', ['title' => ''])

@endcomponent 



{{-- @component('site.component.section.grid_photografe', ['title' => ''])

@endcomponent --}}

{{-- <section id="visao_global" style="padding: 10% 0; background: url({{asset('assets/images/visao_global.jpg')}}) center center / 80% no-repeat;" class="text-light">
    <div class="container">
        <div class="row align-items-center">
            <!-- Text Section -->
            <div class="col-lg-5 col-md-6 col-sm-12 mb-4 text-center text-md-start">
                <h1 style="color: white;">
                    Uma visão global <br> para decisões <br> estratégicas
                </h1>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 mb-4">
                <div
                    class="image-container position-relative overflow-hidden"
                    style="
                        width: 100%;
                        height: auto;
                        max-height: 100vh;
                        aspect-ratio: 3 / 2;
                    "                           
                ></div>
            </div>
        </div>
    </div>              
</section>  --}}

<section id="visao_global2" style="padding: 10% 0; background-color: rgb(167,177,181);" data-bgcolor="rgb(167,177,181)">
    <div class="container">
        <div class="row align-items-center">
            <!-- Mission Text Section -->
            <div class="col-lg-5 col-md-6 col-sm-12 text-center text-md-start mb-4">
                <h2 style="color: white;">
                    Uma visão global <br> para decisões <br> estratégicas
                </h2>
            </div>

            <!-- Image Container Section -->
            <div class="col-lg-7 col-md-6 col-sm-12 mb-4">
                <div
                    class="image-container position-relative overflow-hidden"
                    style="
                        width: 100%;
                        padding-top: 56%;
                        background: url({{ asset('assets/images/visao_global.jpg') }}) center center / cover no-repeat;
                        border-radius: 8px;
                    "
                    data-bgimage="url({{ asset('assets/images/visao_global.jpg') }}) center">
                </div>
            </div>
        </div>
    </div>


</section>

@component('site.component.section.noticias_footer', ['title' => 'Meu Título'])
@endcomponent


@endsection