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
                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Avaliação de empresas
                </h3>
                <h2 class="wow fadeInUp animated" data-wow-delay=".6s"
                    style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Apoio especializado em processos de reestruturações empresariais, tais como fusões, aquisições, entradas de ativos e outros, nas suas diversas vertentes.</h2>

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
        <img src="{{ asset('assets/images/avaliacao_bg.jpg') }}"
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
                                                                <p style="color:#939da1"><b>Na ACM SROC, compreendemos a importância da avaliação de empresas e reestruturações empresariais, especialmente em momentos de mudança e tomada de decisão estratégica. A nossa equipa altamente qualificada e experiente está preparada para oferecer soluções personalizadas que garantam um suporte qualificado e decisivo à tomada de decisão.</b></p><p>Principais Competências:</p><ul><li>A avaliação de empresas em contextos como compra/venda de empresas, fusões, entrada de novos sócios, heranças, entre outros.</li><li>Análises e simulações de suporte a decisões estratégicas e ações subsequentes.</li><li>Adoção metodologias sólidas e inovadoras e critérios técnicos de diagnostico consensuais.</li></ul><p>Benefícios:</p><ul><li>Realização de análises abrangentes, considerando o histórico financeiro da empresa, projeções futuras e tendências de mercado.</li><li>Utilização de metodologias adequadas a cada situação específica, garantindo uma avaliação precisa e confiável.</li></ul><p>Na ACM contamos com uma equipa multidisciplinar e intensiva em conhecimento e experiência, contribuindo para uma abordagem de excelências na produção de relatórios de avaliação e na condução de processos de aquisição, venda ou fusão.</p>
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