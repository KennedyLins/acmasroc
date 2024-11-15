@extends('site.main')

@section('content')

<section id="subheader" class="jarallax text-white">
    <img src="{{ asset('assets/images/bg-1-p&b.gif') }}" class="jarallax-img" alt="">
    <div class="center-y relative text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="display-4">Relatórios de Transparência</h1>
                    <p class="lead">De forma a dar cumprimento ao disposto no Artigo 62º-A do Decreto-Lei nº 487/99, de 16 de novembro (Estatuto da Ordem dos Revisores Oficiais de Contas), tal como alterado pelo Decreto-Lei 224/2008, de 20 de novembro, apresentamos os nossos Relatórios de Transparência.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bgcolor="#f2f2f2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <span class="p-title">Relatórios</span><br>
                <h2 class="mb-4">Acesse os relatórios anuais</h2>

                <ul class="nav nav-pills mb-3 flex-wrap" id="pills-tab" role="tablist">
                    <!-- Define uma largura mínima para os itens para que sejam mais legíveis em telas pequenas -->
                    <li class="nav-item flex-fill text-center mb-2">
                        <a class="nav-link active" id="pills-2023-tab" data-toggle="pill" href="#pills-2023" role="tab" aria-controls="pills-2023" aria-selected="true">2023</a>
                    </li>
                    <!-- Repetição de itens de navegação com classes de responsividade -->
                    <li class="nav-item flex-fill text-center mb-2">
                        <a class="nav-link" id="pills-2022-tab" data-toggle="pill" href="#pills-2022" role="tab" aria-controls="pills-2022" aria-selected="false">2022</a>
                    </li>
                    <li class="nav-item flex-fill text-center mb-2">
                        <a class="nav-link" id="pills-2022-tab" data-toggle="pill" href="#pills-2021" role="tab" aria-controls="pills-2021" aria-selected="false">2021</a>
                    </li>
                    <li class="nav-item flex-fill text-center mb-2">
                        <a class="nav-link" id="pills-2022-tab" data-toggle="pill" href="#pills-2020" role="tab" aria-controls="pills-2020" aria-selected="false">2020</a>
                    </li>
                    <li class="nav-item flex-fill text-center mb-2">
                        <a class="nav-link" id="pills-2022-tab" data-toggle="pill" href="#pills-2019" role="tab" aria-controls="pills-2019" aria-selected="false">2019</a>
                    </li>
                    <li class="nav-item flex-fill text-center mb-2">
                        <a class="nav-link" id="pills-2022-tab" data-toggle="pill" href="#pills-2018" role="tab" aria-controls="pills-2018" aria-selected="false">2018</a>
                    </li>
                    <li class="nav-item flex-fill text-center mb-2">
                        <a class="nav-link" id="pills-2022-tab" data-toggle="pill" href="#pills-2017" role="tab" aria-controls="pills-2017" aria-selected="false">2017</a>
                    </li>
                    <li class="nav-item flex-fill text-center mb-2">
                        <a class="nav-link" id="pills-2022-tab" data-toggle="pill" href="#pills-2016" role="tab" aria-controls="pills-2016" aria-selected="false">2016</a>
                    </li>
                </ul>

                <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-2023" role="tabpanel" aria-labelledby="pills-2023-tab">
                <p><a class="btn btn-primary btn-block btn-lg" href="{{ asset('pdf/relatorio_transparencia_2023.pdf') }}">Download</a></p>
                </div>

                    <div class="tab-pane fade show " id="pills-2022" role="tabpanel" aria-labelledby="pills-2022-tab">
                        <p><a class="btn btn-primary btn-block btn-lg" href="{{ asset('pdf/relatorio_transparencia_2022.pdf')  }}">Download</a></p>
                    </div>
                    <div class="tab-pane fade show " id="pills-2021" role="tabpanel" aria-labelledby="pills-2021-tab">
                        <p><a class="btn btn-primary btn-block btn-lg" href="{{ asset('pdf/relatorio_transparencia_2021.pdf') }}">Download</a></p>
                    </div>
                    <div class="tab-pane fade show " id="pills-2020" role="tabpanel" aria-labelledby="pills-2020-tab">
                        <p><a class="btn btn-primary btn-block btn-lg" href="{{ asset('pdf/relatorio_transparencia_2020.pdf') }}">Download</a></p>
                    </div>
                    <div class="tab-pane fade show " id="pills-2019" role="tabpanel" aria-labelledby="pills-2019-tab">
                        <p><a class="btn btn-primary btn-block btn-lg" href="{{ asset('pdf/relatorio_transparencia_2019.pdf') }}">Download</a></p>
                    </div>
                    <div class="tab-pane fade show " id="pills-2018" role="tabpanel" aria-labelledby="pills-2018-tab">
                        <p><a class="btn btn-primary btn-block btn-lg" href="{{ asset('pdf/relatorio_transparencia_2018.pdf') }}">Download</a></p>
                    </div>
                    <div class="tab-pane fade show " id="pills-2017" role="tabpanel" aria-labelledby="pills-2017-tab">
                        <p><a class="btn btn-primary btn-block btn-lg" href="{{ asset('pdf/relatorio_transparencia_2017.pdf') }}">Download</a></p>
                    </div>
                    <div class="tab-pane fade show " id="pills-2016" role="tabpanel" aria-labelledby="pills-2016-tab">
                        <p><a class="btn btn-primary btn-block btn-lg" href="{{ asset('pdf/relatorio_transparencia_2016.pdf') }}">Download</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection