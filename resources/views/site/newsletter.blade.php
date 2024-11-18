@extends('site.main')

@section('content')
<section id="subheader" class="jarallax text-white">
    <img src="{{ asset('assets/images/background/subheader1.jpg') }}" class="jarallax-img" alt="">
    <div class="center-y relative text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Newsletter</h1>
                    <p>Mensagem. Notícia. Informação.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section aria-label="section">
    <div class="container">
        <div class="row text-center text-md-left">
            <div class="col-md-4 mb-4">
                <img src="{{ asset('assets/images/misc/p1.jpg') }}" alt="" class="img-fluid mb-3">
                <h3 style="color:gray">Sede</h3>
                <address class="s1">
                    <span><i class="id-color fa fa-map-marker fa-lg"></i> Avenida da Liberdade, Edifício dos Granjinhos, nº 432 Piso 6, Sala 41-42 | 4711-912 Braga</span>
                    <span><i class="id-color fa fa-phone fa-lg"></i> 253 206 730</span>
                    <span><i class="id-color fa fa-envelope-o fa-lg"></i> <a href="mailto:geral@acmsroc.pt">geral@acmsroc.pt</a></span>
                </address>
            </div>
            <div class="col-md-4 mb-4">
                <img src="{{ asset('assets/images/misc/p2.jpg') }}" alt="" class="img-fluid mb-3">
                <h3 style="color:gray">Trofa</h3>
                <address class="s1">
                    <span><i class="id-color fa fa-map-marker fa-lg"></i> Rua Fernão Magalhães, nº 254, 2º, Sala 14, 4785-319 Trofa</span>
                    <span><i class="id-color fa fa-phone fa-lg"></i> 252 400 780</span>
                    <span><i class="id-color fa fa-envelope-o fa-lg"></i> <a href="mailto:geral.trofa@acmsroc.pt">geral.trofa@acmsroc.pt</a></span>
                </address>
            </div>
            <div class="col-md-4 mb-4">
                <img src="{{ asset('assets/images/misc/p3.jpg') }}" alt="" class="img-fluid mb-3">
                <h3 style="color:gray">Porto</h3>
                <address class="s1">
                    <span><i class="id-color fa fa-map-marker fa-lg"></i> Rua Encosta do Sol, n.º 212, Hab. 2.2, Bloco D 4400-438 Canidelo, Vila Nova de Gaia</span>
                    <span><i class="id-color fa fa-phone fa-lg"></i> 96 692 06 98</span>
                    <span><i class="id-color fa fa-envelope-o fa-lg"></i> <a href="mailto:joao.ribeiro@acmsroc.pt">joao.ribeiro@acmsroc.pt</a></span>
                </address>
            </div>
        </div>
    </div>
</section>

<section aria-label="section" class="text-light" data-bgcolor="gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 mb-sm-30 text-center">
                <h3>Como podemos ajudá-lo?</h3>
                <form name="contactForm" id="contact_form" class="form-border" method="post" action="">
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