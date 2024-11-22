<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMenuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
    }
    public function home(Request $request)
    {
        // $banner = Menu::where(1);

        $banners = [
            [
                'title' => 'Bem-vindo ao nosso site!',
                'subtitle' => 'Explore nossos serviços.',
                'image' => asset('assets/images/5_statisc.jpg')
            ],
            [
                'title' => 'Ofertas Imperdíveis!',
                'subtitle' => 'Aproveite as promoções.',
                'image' => asset('assets/images/news/1.jpg')
            ],
            [
                'title' => 'Nossos Novos Produtos!',
                'subtitle' => 'Confira o lançamento.',
                'image' => asset('assets/images/news/2.jpg')
            ]
        ]; 

        $bannerCount = count($banners);

        return view('site.home', compact('banners', 'bannerCount'));
    }
    public function quemsomos(Request $request)
    {
        return view('site.quemsomos');
    }
    public function valores(Request $request)
    {
        return view('site.valores');
    }
    public function proposito(Request $request)
    {
        return view('site.proposito');
    }
    public function transparencia(Request $request)
    {
        return view('site.transparencia');
    }
    public function codigo(Request $request)
    {
        return view('site.codigo');
    }

    public function responsabilidade(Request $request)
    {
        return view('site.responsabilidade');
    }

    public function equipa(Request $request)
    {
        return view('site.equipa_old');
    }
   
    public function comunicacao_noticias(Request $request)
    {
        return view('site.noticias');
    }

    public function comunicacao_newsletter(Request $request)
    {
        return view('site.newsletter');
    }

    public function servicos(Request $request)
    {
        return view('site.servicos');
    }

    public function servicos_auditoria(Request $request)
    {
        return view('site.servicos_auditoria');
    }

    public function servicos_fiscalidade(Request $request)
    {
        return view('site.servicos_fiscalidade');
    }

    public function servicos_avaliacao(Request $request)
    {
        return view('site.servicos_avaliacao');
    }

    public function servicos_formacao(Request $request)
    {
        return view('site.servicos_formacao');
    }

    public function servicos_consultoria(Request $request)
    {
        return view('site.servicos_consultoria');
    }

    public function contact(Request $request)
    {
        return view('site.contact');
    }


}
