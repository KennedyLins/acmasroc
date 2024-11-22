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
                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Fiscalidade
                </h3>
                <h2 class="wow fadeInUp animated" data-wow-delay=".6s"
                    style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Solução ao nível do aconselhamento, de gestão de riscos, do controlo de custos, e da garantia do cumprimento das obrigações fiscais.</h2>

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
        <img src="{{ asset('assets/images/fiscalidade_bg.jpg') }}"
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
                                                                <p style="color:#939da1"><b>Estamos conscientes da importância que a fiscalidade tem para o crescimento das empresas, tendo para isso que cumprir integralmente com as suas obrigações fiscais sem desprezar o adequado enquadramento por forma a alcançar uma otimização fiscal.</b></p><p>A nossa equipa está preparada para oferecer soluções especializadas que atendam às necessidades específicas de cada cliente.</p><p>Principais Competências:</p><ul><li>Informação fiscal periódica com alterações legislativas relevantes</li><li>Assessoria em matéria fiscal, parafiscal e contabilística</li><li>Fiscalidade nacional e internacional</li><li>Diagnóstico Fiscal/Tax Compliance</li><li>Estimativas regulares do imposto sobre lucros a pagar</li><li>Revisão de declarações fiscais e apuramento de impostos diferidos</li><li>Preparação e envio das Declarações Periódicas de IVA</li><li>Elaboração das declarações Modelo 22 do IRC, IES</li><li>Gestão e manutenção do Dossier Fiscal e Dossier de Preços de Transferência</li><li>Cálculo dos pagamentos por conta e especial por conta do IRC</li><li>Acompanhamento em inspeções tributárias e elaboração de Dossier de Preços de Transferência</li><li>Preparação de processos de reembolso de IVA</li></ul><p>Benefícios:</p><ul><li>Cumprimento adequado das obrigações fiscais das empresas</li><li>Assessoria especializada para uma tomada de decisão fiscal informada</li><li>Acompanhamento eficiente e oportuno, reduzindo riscos presentes e futuros</li><li>Identificação de soluções proativas através de diagnósticos antecipados</li></ul><p>Confie na ACM SROC enquanto parceiro de negócio para assegurar uma consultoria fiscal responsável e eficaz, orientada para o sucesso a longo prazo da sua empresa.</p>
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