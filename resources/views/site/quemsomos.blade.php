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
                <h2 style="color:white;">A Nossa Missão</h2>
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
                    A Nossa Visão
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

<section id="numeros" style="padding: 250px 0 90px 0; margin: 3px 0;" data-bgcolor="" class="text-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6 col-sm-12 mb-4 text-center text-md-start">
                    <h1 style="color: dimgray;">
                    Muito Mais que Números
                    </h1>
                    <p style="color: dimgray;">Oferecemos muito mais do que uma análise financeira
                        tradicional. Adotamos uma abordagem estratégica e
                        integrada, que não se limita a rever os números, mas que
                        compreende a fundo a saúde organizacional dos nossos
                        clientes. Com uma visão abrangente e personalizada,
                        ajudamos as empresas a tomar decisões informadas,
                        promovendo a transparência e impulsionando um
                        crescimento sustentável
                    </p>                         
            </div>
            
            <div class="col-lg-7 col-md-6 col-sm-12 mb-4">
                <div
                    class="image-container position-relative overflow-hidden"
                    style="
                        width: 100%;
                        height: auto;
                        max-height: 100vh;
                        aspect-ratio: 3 / 2;
                        background: url({{asset('assets/images/mais_numeros.png')}}) center center / cover no-repeat;
                    "
                    data-bgimage="url({{asset('assets/images/mais_numeros.png')}}) center"
                ></div>
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
       <ul class="bg-lista-index" style="padding-top: 25px;">
            <li class="lista-index">+ AUDITORIA</li>
            <li class="lista-index">+ CERTIFICAÇÃO DE CONTAS</li>
            <li class="lista-index">+ CONSULTORIA DE GESTÃO</li>
            <li class="lista-index">+ AVALIAÇÃO DE EMPRESAS</li>
            <li class="lista-index">+ FUSÃO E CISÃO DE EMPRESAS</li>
            <li class="lista-index">+ TRANSFORMAÇÃO EMPRESAS</li>
            <li class="lista-index">+ CONSOLIDAÇÃO DE CONTAS</li>
            <li class="lista-index">+ REPORTE INTERNACIONAL</li>
            <li class="lista-index">+ PREÇOS DE TRANSFERÊNCIA</li>
       </ul>
    </div>
</section>

<section id="parcerias" style="padding: 250px 0 90px 0; border-top-width: 10px;"  data-bgcolor="rgb(167,177,181)" class="text-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <h1 style="color: dimgray; font-style: bold;">
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
    <div class="image-container col-md-6 pos-right" style="width: 550px; height:450px; margin:10% 0 10% 10%; background-color:white; color:gray;">
       <ul class="bg-lista-index" style="padding-top: 25px;">
            <li class="lista-index">+ DISTRIBUIÇÃO</li>
            <li class="lista-index">+ COSTRUÇÃO CIVIL</li>
            <li class="lista-index">+ COOPERATIVAS AGRÍCULAS</li>
            <li class="lista-index">+ VINHO DO PORTO</li>
            <li class="lista-index">+ TRANSPORTE TERRESTRE</li>
            <li class="lista-index">+ IMOBILIÁRIO</li>
            <li class="lista-index">+ SAÚDE</li>
            <li class="lista-index">+ EDUCAÇÃO</li>
            <li class="lista-index">+ ENTIDADES PÚBLICAS</li>
       </ul>
    </div>
</section>

<section id="parceiros" class="text-light" 
    style="padding: 20% 0; 
            background: url({{ asset('assets/images/parceiros.png') }}) center center / contain no-repeat; 
            margin: 20px 0;" 
    data-bgcolor="">
</section>
  
<section id="equipa" style="padding: 150px 0; margin: 3px 0;" class="text-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6 col-sm-12 mb-4 text-center text-md-start">
                <h1 style="color: dimgray;">
                    A Nossa Equipa
                </h1>
                <p style="color: dimgray;">
                    Temos uma equipa multidisciplinar composta por especialistas altamente qualificados, a nossa equipa alia experiência, rigor e inovação para garantir soluções eficazes e personalizadas, proporcionando confiança e resultados que impulsionam o sucesso dos nossos clientes.
                </p>
            </div>

            <div class="col-lg-7 col-md-6 col-sm-12 mb-4">
                <div class="image-container position-relative overflow-hidden"
                    style="
                        width: 100%;
                        height: auto;
                        padding-top: 150%;
                        background: url({{ asset('assets/images/equipa.png')}}) center center / cover no-repeat;
                        border-radius: 8px;
                    "
                    data-bgimage="url({{ asset('assets/images/equipa.png')}}) center">
                </div>
            </div>
        </div>
    </div>
</section>

@component('site.component.section.grid_photografe', ['title' => ''])

@endcomponent

<section id="visao_global" style="padding: 10% 0; background: url({{asset('assets/images/visao_global.jpg')}}) center center / 80% no-repeat;" class="text-light">
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
</section> 


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