

@php
    if ($bannerCount <= 1) {
@endphp

    <img src="{{ asset('assets/images/5_statisc.jpg') }}" class="jarallax-img" alt="">

@php
    }else{
@endphp

    <img id="banner-image" src="{{ asset('assets/images/5_statisc.jpg') }}" class="jarallax-img" alt="">

    <script>
        
    const banners = @json($banners); // Converte o array do PHP para um array JS

    let currentBannerIndex = 0;
    const bannerImageElement = document.getElementById('banner-image');
    // const bannerTitleElement = document.getElementById('banner-title');
    // const bannerSubtitleElement = document.getElementById('banner-subtitle');

    function changeBanner() {
        const currentBanner = banners[currentBannerIndex];
        
        bannerImageElement.src = currentBanner.image;
        bannerImageElement.alt = currentBanner.title;
        // bannerTitleElement.textContent = currentBanner.title;
        // bannerSubtitleElement.textContent = currentBanner.subtitle;
        
        currentBannerIndex = (currentBannerIndex + 1) % banners.length;
    }

    // Chama a função para mudar o banner a cada 5 segundos
    setInterval(changeBanner, 5000);

    // Chama a função uma vez para definir o banner inicial
    changeBanner();

    </script>
@php
    }
@endphp