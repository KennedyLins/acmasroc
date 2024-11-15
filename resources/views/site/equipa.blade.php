@extends('site.main')

@section('content')
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <!-- section begin -->
    <section id="subheader" class="jarallax text-black" data-bgcolor="">
        <img src="{{asset('assets/images/equipa/fotogrupo.jpg')}}"  alt="" height="100%" width="100%">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="spacer-single"></div>
                        <h1>Equipa</h1>
                        <p>Reputação. Respeito. Resultado.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->
    <section style="padding: 250px 0 90px 0;" data-bgcolor="rgb(167,177,181)" class="text-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <span class="p-title">Sócio</span><br>
                    <h2>
                        Armindo Costa
                    </h2>
                    <p>Mestre em Gestão pela Universidade do Minho;
                        Licenciado em Auditoria pelo Iscap- Porto;
                        Pós-graduação Avançada em Direito Fiscal – Estratégias de Planeamento Fiscal pela Universidade de Direito de Lisboa;
                        Docente Universitário;
                        Doutorando em Gestão pela Universidade de Vigo;</p>
                    
                </div>
            </div>
        </div>
        <div class="image-container col-md-6 pos-right" data-bgimage="url({{asset('assets/images/equipa/socios/armindo_costa.jpg')}}) center"></div>
    </section>
    <section style="padding: 250px 0 90px 0;" data-bgcolor="">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 offset-md-7">
                    <span class="p-title">Sócio</span><br>
                    <h2>
                        Serra Cruz
                    </h2>
                    <p style="color: darkgrey;">Consequat occaecat ullamco amet non eiusmod nostrud dolore irure incididunt est duis anim sunt officia. Fugiat velit proident aliquip nisi incididunt nostrud exercitation proident est nisi. Irure magna elit commodo anim ex veniam culpa eiusmod id nostrud sit cupidatat in veniam ad. Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.</p>
                                                                                                                                                                                                                                                                                                                                                                                                                
                    
                </div>
            </div>
        </div>
        <div class="image-container col-md-6" data-bgimage="url({{asset('assets/images/equipa/socios/serra_cruz.jpg')}}) center"></div>
    </section>
    <section style="padding: 250px 0 90px 0;" data-bgcolor="rgb(167,177,181)" class="text-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <span class="p-title">Sócia</span><br>
                    <h2>
                        Silvia Borges
                    </h2>
                    <p>Consequat occaecat ullamco amet non eiusmod nostrud dolore irure incididunt est duis anim sunt officia. Fugiat velit proident aliquip nisi incididunt nostrud exercitation proident est nisi. Irure magna elit commodo anim ex veniam culpa eiusmod id nostrud sit cupidatat in veniam ad. Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.</p>
                   
                </div>
            </div>
        </div>
        <div class="image-container col-md-6 pos-right" data-bgimage="url({{asset('assets/images/equipa/socios/silvia_borges.jpg')}}) center"></div>
    </section>
    <section style="padding: 250px 0 90px 0;" data-bgcolor="" >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 offset-md-7">
                    <span class="p-title">Sócia</span><br>
                    <h2>
                        Rosalia Lousano
                    </h2>
                    <p style="color: darkgrey;">Pós-graduada em Finanças Empresariais pela Universidade Lusíada;
                        Licenciada em Ciências Económicas e Empresariais pela Universidade Lusíada;
                        Mestranda em Fiscalidade (IPCA);
                        Certificada em Relato Financeiro Internacional (ACCA);
                        Certificada em Auditoria Internacional (ACCA);</p>
                </div>
            </div>
        </div>
        <div class="image-container col-md-6" data-bgimage="url({{asset('assets/images/equipa/socios/rosalia_lousano.jpg')}})center"></div>
    </section>
    <section style="padding: 270px 0 90px 0;" data-bgcolor="rgb(167,177,181)" class="text-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <span class="p-title">Sócio</span><br>
                    <h2>
                        João Sousa
                    </h2>
                    <p>Licenciado em Economia pela Faculdade de Economia do Porto;
                        Pós Graduado em Fiscalidade pelo IPCA;</p>
                    
                </div>
            </div>
        </div>
        <div class="image-container col-md-6 pos-right" data-bgimage="url({{asset('assets/images/equipa/socios/joao_sousa.jpg')}}) center"></div>
    </section>
    

    <section aria-label="section"></section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" id="auditores">
                    <h2>Nossos auditores</h2>
                    <div class="small-border"></div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb30 wow fadeInRight" data-wow-delay=".2s">
                    <div class="f-profile text-center">
                        <div class="fp-wrap f-invert">
                            <div class="fpw-overlay">
                            </div>
                            <div class="fpw-overlay-btm"></div>
                            <img src="({{asset('assets/images/equipa/auditores/bruno.jpg')}}" class="fp-image img-fluid" alt="">
                        </div>
                        <h4>Bruno</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb30 wow fadeInRight" data-wow-delay=".2s">
                    <div class="f-profile text-center">
                        <div class="fp-wrap f-invert">
                            <div class="fpw-overlay">
                            </div>
                            <div class="fpw-overlay-btm"></div>
                            <img src="{{asset('assets/images/equipa/auditores/carlos.jpg')}}" class="fp-image img-fluid" alt="">
                        </div>
                        <h4>Carlos</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb30 wow fadeInRight" data-wow-delay=".2s">
                    <div class="f-profile text-center">
                        <div class="fp-wrap f-invert">
                            <div class="fpw-overlay">
                            </div>
                            <div class="fpw-overlay-btm"></div>
                            <img src="{{asset('assets/images/equipa/auditores/claudio.jpg')}}" class="fp-image img-fluid" alt="">
                        </div>
                        <h4>Claudio</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb30 wow fadeInRight" data-wow-delay=".2s">
                    <div class="f-profile text-center">
                        <div class="fp-wrap f-invert">
                            <div class="fpw-overlay">
                            </div>
                            <div class="fpw-overlay-btm"></div>
                            <img src="{{asset('assets/images/equipa/auditores/conceicao.jpg')}}" class="fp-image img-fluid" alt="">
                        </div>
                        <h4>Conceição</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container"></div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 mb30 wow fadeInRight" data-wow-delay=".2s">
                    <div class="f-profile text-center">
                        <div class="fp-wrap f-invert">
                            <div class="fpw-overlay">
                            </div>
                            <div class="fpw-overlay-btm"></div>
                            <img src="{{asset('assets/images/equipa/auditores/cristianesousa.jpg')}}" class="fp-image img-fluid" alt="">
                        </div>
                        <h4>Cristiane Sousa</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb30 wow fadeInRight" data-wow-delay=".2s">
                    <div class="f-profile text-center">
                        <div class="fp-wrap f-invert">
                            <div class="fpw-overlay">
                            </div>
                            <div class="fpw-overlay-btm"></div>
                            <img src="{{asset('assets/images/equipa/auditores/daniel.jpg')}}" class="fp-image img-fluid" alt="">
                        </div>
                        <h4>Daniel</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb30 wow fadeInRight" data-wow-delay=".2s">
                    <div class="f-profile text-center">
                        <div class="fp-wrap f-invert">
                            <div class="fpw-overlay">
                            </div>
                            <div class="fpw-overlay-btm"></div>
                            <img src="{{asset('assets/images/equipa/auditores/joao.jpg')}}" class="fp-image img-fluid" alt="">
                        </div>
                        <h4>João</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb30 wow fadeInRight" data-wow-delay=".2s">
                    <div class="f-profile text-center">
                        <div class="fp-wrap f-invert">
                            <div class="fpw-overlay">
                            </div>
                            <div class="fpw-overlay-btm"></div>
                            <img src="{{asset('assets/images/equipa/auditores/joel.jpg')}}" class="fp-image img-fluid" alt="">
                        </div>
                        <h4>Joel</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 mb30 wow fadeInRight" data-wow-delay=".2s">
                        <div class="f-profile text-center">
                            <div class="fp-wrap f-invert">
                                <div class="fpw-overlay">
                                </div>
                                <div class="fpw-overlay-btm"></div>
                                <img src="{{asset('assets/images/equipa/auditores/leonor.jpg')}}" class="fp-image img-fluid" alt="">
                            </div>
                            <h4>Leonor</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb30 wow fadeInRight" data-wow-delay=".2s">
                        <div class="f-profile text-center">
                            <div class="fp-wrap f-invert">
                                <div class="fpw-overlay">
                                </div>
                                <div class="fpw-overlay-btm"></div>
                                <img src="{{asset('assets/images/equipa/auditores/mariana.jpg')}}" class="fp-image img-fluid" alt="">
                            </div>
                            <h4>Mariana</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb30 wow fadeInRight" data-wow-delay=".2s">
                        <div class="f-profile text-center">
                            <div class="fp-wrap f-invert">
                                <div class="fpw-overlay">
                                </div>
                                <div class="fpw-overlay-btm"></div>
                                <img src="{{asset('assets/images/equipa/auditores/mariana_.jpg')}}" class="fp-image img-fluid" alt="">
                            </div>
                            <h4>Mariana</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb30 wow fadeInRight" data-wow-delay=".2s">
                        <div class="f-profile text-center">
                            <div class="fp-wrap f-invert">
                                <div class="fpw-overlay">
                                </div>
                                <div class="fpw-overlay-btm"></div>
                                <img src="{{asset('assets/images/equipa/auditores/paula.jpg')}}" class="fp-image img-fluid" alt="">
                            </div>
                            <h4>Paula</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 mb30 wow fadeInRight" data-wow-delay=".2s">
                    <div class="f-profile text-center">
                        <div class="fp-wrap f-invert">
                            <div class="fpw-overlay">
                            </div>
                            <div class="fpw-overlay-btm"></div>
                            <img src="{{asset('assets/images/equipa/auditores/paula_cardoso.jpg')}}" class="fp-image img-fluid" alt="">
                        </div>
                        <h4>Paula Cardoso</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb30 wow fadeInRight" data-wow-delay=".2s">
                    <div class="f-profile text-center">
                        <div class="fp-wrap f-invert">
                            <div class="fpw-overlay">
                            </div>
                            <div class="fpw-overlay-btm"></div>
                            <img src="{{asset('assets/images/equipa/auditores/pedro.jpg')}}" class="fp-image img-fluid" alt="">
                        </div>
                        <h4>Pedro</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb30 wow fadeInRight" data-wow-delay=".2s">
                    <div class="f-profile text-center">
                        <div class="fp-wrap f-invert">
                            <div class="fpw-overlay">
                            </div>
                            <div class="fpw-overlay-btm"></div>
                            <img src="{{asset('assets/images/equipa/auditores/rita.jpg')}}" class="fp-image img-fluid" alt="">
                        </div>
                        <h4>Rita</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb30 wow fadeInRight" data-wow-delay=".2s">
                    <div class="f-profile text-center">
                        <div class="fp-wrap f-invert">
                            <div class="fpw-overlay">
                            </div>
                            <div class="fpw-overlay-btm"></div>
                            <img src="{{asset('assets/images/equipa/auditores/sara.jpg')}}" class="fp-image img-fluid" alt="">
                        </div>
                        <h4>Sara</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

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