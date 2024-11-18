@extends('site.main')

@section('content')
<section id="subheader" class="jarallax text-white">
    <img src="{{ asset('assets/images/bg-1-p&b.gif') }}" class="jarallax-img" alt="">
    <div class="center-y relative text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>O nosso próposito</h1>
                    <p>Reputação. Respeito. Resultado.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="visao" style="padding: 150px 0; background: url({{ asset('assets/images/visao.gif') }}) center center / cover no-repeat;" class="text-light">
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

@component('site.component.section.noticias_footer', ['title' => 'Meu Título'])
@endcomponent



@endsection