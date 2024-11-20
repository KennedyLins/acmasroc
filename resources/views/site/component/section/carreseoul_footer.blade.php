

<style>
  .owl-nav button {
  background-color: #333;
  color: #fff;
  border: none;
  padding: 10px;
  border-radius: 50%;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}
.owl-nav .owl-prev {
  left: -40px;
}
.owl-nav .owl-next {
  right: -40px;
}
.owl-dots {
  text-align: center;
  margin-top: 15px;
}
.owl-dots .owl-dot {
  display: inline-block;
  width: 12px;
  height: 12px;
  background-color: #ccc;
  border-radius: 50%;
  margin: 0 5px;
}
.owl-dots .owl-dot.active {
  background-color: #333;
}
/* Botões de navegação */
.container {
  position: relative;
}

.custom-prev,
.custom-next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(0, 0, 0, 0.5);
  color: #fff;
  border: none;
  border-radius: 50%;
  width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  z-index: 1000;
}

.custom-prev {
  left: -50px; /* Ajuste para posicionar o botão à esquerda */
}

.custom-next {
  right: -50px; /* Ajuste para posicionar o botão à direita */
}

.custom-prev:hover,
.custom-next:hover {
  background: rgba(0, 0, 0, 0.8);
}


</style>

<section id="parcerias_longo_pz" class="jarallax text-black" data-bgcolor="">
  <img src="{{asset('assets/images/equipa/fotogrupo.jpg')}}"  alt="" height="100%" width="100%">
  <div class="center-y relative text-center">
      <div class="container">
          <div class="row">
              <div class="col text-center">
                  <div class="spacer-single"></div>
                  <h1>Parcerias Sólidas e de Longo Prazo</h1>
                  {{-- <p>Reputação. Respeito. Resultado.</p> --}}
              </div>
              <div class="clearfix"></div>
          </div>
      </div>
  </div>
</section>

<div class="container">
  <div class="owl-carousel">
    <div class="item"><img src="{{ asset('assets/images/parceiros/parceiros_' . rand(1, 4) . '.png') }}" alt="Slide 1"></div>
    <div class="item"><img src="{{ asset('assets/images/parceiros/parceiros_' . rand(1, 4) . '.png') }}" alt="Slide 2"></div>
    <div class="item"><img src="{{ asset('assets/images/parceiros/parceiros_' . rand(1, 4) . '.png') }}" alt="Slide 3"></div>
    <div class="item"><img src="{{ asset('assets/images/parceiros/parceiros_' . rand(1, 4) . '.png') }}" alt="Slide 4"></div>
    <div class="item"><img src="{{ asset('assets/images/parceiros/parceiros_' . rand(1, 4) . '.png') }}" alt="Slide 5"></div>
  </div>
  <button class="custom-prev"><i class="fa fa-angle-left"></i></button>
  <button class="custom-next"><i class="fa fa-angle-right"></i></button>
</div>


<script>
  document.addEventListener("DOMContentLoaded", function () {

    $('.owl-carousel').owlCarousel({
      loop: true,             
      margin: 10,            
      nav: false, 
      navText: [
        '<i class="fa fa-angle-left"></i>',  
        '<i class="fa fa-angle-right"></i>' 
      ],             
      autoplay: true,         
      autoplayTimeout: 3000,   // Intervalo de 3 segundos
      responsive: {            // Configurações responsivas
        0: { items: 1 },       // 1 item para telas menores
        600: { items: 2 },     // 2 itens para telas médias
        1000: { items: 5 }     // 3 itens para telas grandes
      }
    });

    const owl = $('.owl-carousel');

    document.querySelector('.custom-next').addEventListener('click', function () {
      owl.trigger('next.owl.carousel');
    });

    document.querySelector('.custom-prev').addEventListener('click', function () {
      owl.trigger('prev.owl.carousel');
    });
    
  });
</script>



