@extends('site.main')

@section('content')



<section aria-label="section" class="jarallax" style="z-index: 0; background-size: cover;">
    <div
        style="position: absolute; inset: 0px; background-color: rgba(255, 255, 255, 0.5); background-size: cover;">
    </div>

    <div class="container" style="background-size: cover;">
        <div class="row align-items-center" style="background-size: cover;">
            <div class="col-lg-5 offset-md-7 wow fadeInRight animated" data-wow-delay=".5s"
                style="background-size: cover; visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                <div class="spacer-double" style="background-size: cover;"></div>
                <div class="spacer-double" style="background-size: cover;"></div>
                <h3 class="id-color wow fadeInUp animated" data-wow-delay=".4s"
                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Consultoria e Reporting
                </h3>
                <h2 class="wow fadeInUp animated" data-wow-delay=".6s"
                    style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Acompanhando as necessidades mais variadas das empresas, a ACM SROC presta serviços de apoio à gestão e análise de dados financeiros.</h2>

                <div class="spacer-20" style="background-size: cover;"></div>
                <a class="btn-custom wow fadeInUp animated" data-wow-delay="1s"
                    href="{{  route('site.contact')  }}"
                    style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">Contactar</a>
                <div class="spacer-double" style="background-size: cover;"></div>
            </div>
        </div>
    </div>
    <div id="jarallax-container-0"
        style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%); background-size: cover;">
        <img src="{{ asset('assets/images/background/consultoria_bg.jpg') }}"
            class="jarallax-img" alt=""
            style="object-fit: cover; object-position: 50% 50%; max-width: none; position: absolute; top: 0px; left: 0px; width: 1903px; height: 859.992px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: 42.5039px; transform: translate3d(0px, -64.9023px, 0px);">
    </div>
</section>

<section data-bgcolor="var(--terceary-color)" style="background-color: var(--terceary-color); background-size: cover;">
                <div class="container" style="min-height: 245px; background-size: cover;">
                    <div class="row align-items-center" style="background-size: cover;">
                        <div class="col-lg-8 offset-lg-2" style="background-size: cover;">
                                                                            <div class="tab-content" id="pills-tabContent" style="background-size: cover;">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" style="background-size: cover;">
                                                                <p style="color:#939da1"><b>Desafiamos os nossos clientes a otimizarem processos contabilísticos e adotarem metodologias para a definição de estratégias fiscais avançadas.</b></p><p>Entendemos que cada empresa é única. Por isso, adaptamos os nossos serviços de consultoria aos desafios individuais de cada cliente.</p><p>Principais competências:</p><ul><li>Consolidação de contas para grupos empresariais que possuem várias entidades</li><li>Estudo e implementação de Sistemas de Controlo Interno</li><li>Estudos de viabilidade de negócios, considerando fatores como mercado-alvo, concorrência, estrutura de custos e projeções financeiras</li><li>Relatórios de apoio à gestão adaptados às necessidades individuais das empresas</li><li>Consolidadas e individuais em conformidade com as IFRS</li><li>Serviços de Reporting internacional, adaptados às exigências regulatórias e às melhores práticas contabilísticas de diversos países</li></ul><p>Benefícios:</p><ul><li>Obter relatórios detalhados e análises profundas para apoio à tomada de decisão estratégica, para minimizar riscos e maximizar as oportunidades de crescimento</li><li>Identificar áreas de melhoria nos processos contabilísticos e financeiros, ajudando os clientes a otimizar seus recursos e alocar capital de forma mais eficiente.</li><li>Usar ferramentas avançadas de gestão e visualização de dados para que a informação seja apresentada de forma clara e compreensível</li><li>Suporte na Estratégia Empresarial, através da implementação de estratégias de negócios sólidas, para impulsionar o crescimento sustentável e a rentabilidade.</li></ul><p>Na ACM SROC, estamos comprometidos em fornecer soluções sob medida que impulsionem o crescimento e o sucesso empresarial a longo prazo.</p>
                                                        </div>
                                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" style="background-size: cover;">
                                    <p></p>
                                </div>
                                                                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" style="background-size: cover;">
                                    <p></p>
                                </div>
                                                </div>
                        </div>
                    </div>
                </div>
            
            
            
            </section>

@endsection