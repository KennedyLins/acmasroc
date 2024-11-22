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
                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Auditoria
                </h3>
                <h2 class="wow fadeInUp animated" data-wow-delay=".6s"
                    style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Análise de
                    contas e documentos internos para empresas e outras entidades. A auditoria independente
                    às finanças das empresas garante integridade e transparência.</h2>

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
        <img src="{{ asset('assets/images/auditoria.jpg') }}"
            class="jarallax-img" alt=""
            style="object-fit: cover; object-position: 50% 50%; max-width: none; position: absolute; top: 0px; left: 0px; width: 1903px; height: 859.992px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: 42.5039px; transform: translate3d(0px, -64.9023px, 0px);">
    </div>
</section>

<section data-bgcolor="var(--terceary-color)"
                style="background-color: var(--terceary-color); background-size: cover;">
                <div class="container" style="min-height: 245px; background-size: cover;">
                    <div class="row align-items-center" style="background-size: cover;">
                        <div class="col-lg-8 offset-lg-2" style="background-size: cover;">
                            <div class="tab-content" id="pills-tabContent" style="background-size: cover;">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab" style="background-size: cover;">
                                    <p style="color:#939da1"><b>Reconhecemos a importância da auditoria como ferramenta
                                            crucial para a transparência financeira e a gestão eficaz dos negócios. Os
                                            nossos serviços de auditoria são projetados para garantir o máximo de rigor
                                            técnico e conformidade com as normas legais e fiscais exigidas.</b></p>
                                    <p>Principais Competências:</p>
                                    <ul>
                                        <li>Auditorias financeiras de aquisição/venda e contratuais</li>
                                        <li>Revisão de procedimentos e controlos internos</li>
                                        <li>Identificação de deficiências nos sistemas de controlo interno e financeiro
                                        </li>
                                        <li>Memorandos de auditoria e notas de síntese</li>
                                        <li>Auditoria à gestão de pessoal e projetos</li>
                                        <li>Apresentação de recomendações para melhorar o funcionamento da organização
                                        </li>
                                        <li>Serviços de interesse público</li>
                                        <li>Auditorias internas de avaliação e reconstituição</li>
                                        <li><i>Due Dilligence</i> contabilística financeira</li>
                                    </ul>
                                    <p>Benefícios:</p>
                                    <ul>
                                        <li>Assegurar a Fidelidade dos registos e proporcionar credibilidade às
                                            demonstrações financeiras</li>
                                        <li>Obter informação fidedigna sobre a situação económica e financeira da
                                            empresa</li>
                                        <li>Identificar potenciais riscos para o negócio</li>
                                        <li>Assegurar a eficiência dos processos de controlo interno</li>
                                    </ul>
                                    <p>A ACM posiciona-se junto dos seus clientes com uma proposta de auditoria
                                        independente e rigorosa, que promove a confiança dos investidores e a saúde
                                        financeira de cada empresa.</p>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab" style="background-size: cover;">
                                    <p></p>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                    aria-labelledby="pills-contact-tab" style="background-size: cover;">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

@endsection