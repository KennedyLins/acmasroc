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
                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Formação
                </h3>
                <h2 class="wow fadeInUp animated" data-wow-delay=".6s"
                    style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Num cenário de constante mudança, mantemos atualizados os profissionais da área contabilística, financeira e fiscal, em matéria contabilística e legal.</h2>

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
        <img src="{{ asset('assets/images/background/formacao_bg.jpg') }}"
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
                                                                <p style="color:#939da1"><b>Na ACM SROC, reconhecemos a importância da formação e do apoio contínuo para profissionais da área contabilística, financeira e fiscal que lidam com matéria contabilística e legal.</b></p><p>Num ambiente onde a mudança é constante e a tomada de decisões estratégicas é essencial, a nossa equipa coloca o seu expertise ao serviço do mercado, para que possamos evoluir na oferta de soluções personalizadas.</p><p>Principais Competências:</p><ul><li>Contabilidade</li><li>Fiscalidade</li><li>Auditoria</li><li>Consultoria </li><li>Reporting </li></ul><p>Benefícios:</p><ul><li>Atualização de conhecimentos, mantendo-se atualizado com todas as regras e legislações relevantes&gt;/li&gt;</li><li>Utilização de metodologias adequadas a cada situação específica, garantindo uma avaliação precisa e confiável</li><li>Obter formação por parte de profissionais especializados em diversos setores de atividade económica com um conhecimento prático da aplicação de normas</li></ul><p>Na ACM SROC assumimos o compromisso de fornecer o suporte necessário para que nossos clientes possam tomar decisões informadas e estratégicas no âmbito contabilístico e financeiro. Estamos dedicados a ajudar os profissionais a enfrentar os desafios do mundo empresarial em constante mudança, proporcionando-lhes as ferramentas e o conhecimento necessário para o sucesso.</p>
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