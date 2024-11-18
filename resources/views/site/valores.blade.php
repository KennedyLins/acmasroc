@extends('site.main')

@section('content')

<section id="subheader" class="jarallax text-white">
    <img src="{{asset('assets/images/bg-1-p&b.gif')}}" class="jarallax-img" alt="">
    <div class="center-y relative text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Valores</h1>
                    <p>Reputação. Respeito. Resultado.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="missao" style="padding: 10% 0; background-color: rgb(167,177,181);" data-bgcolor="rgb(167,177,181)">
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

@component('site.component.section.noticias_footer', ['title' => 'Meu Título'])
@endcomponent


@endsection