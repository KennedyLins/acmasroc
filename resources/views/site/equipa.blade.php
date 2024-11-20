@extends('site.main')

@section('content')
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <!-- section begin -->
    
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
   

<section aria-label="section" class="text-light gray-contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 mb-sm-30 text-center">
                <h3>Como podemos ajudá-lo?</h3>
                <form name="contactForm" id="contact_form" class="form-border contact" method="post" action="">
                    <div class="form-group">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Nome" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" id="email" class="form-control" placeholder="E-mail" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Telefone" />
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" class="form-control" placeholder="Mensagem"></textarea>
                    </div>
                    <div class="spacer-half"></div>
                    <div id="submit">
                        <input type="submit" id="send_message" value="Enviar Formulário" class="btn btn-custom" />
                    </div>
                    <div id="mail_success" class="success">Sua mensagem foi enviada com sucesso.</div>
                    <div id="mail_fail" class="error">Ocorreu um erro ao enviar sua mensagem.</div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection