<a class="card-case card-case--home" href="{{ $url }}">
    <div class="card-case__img">
        <img loading="lazy" src="{{ $image }}" alt="{{ $title }}" title="{{ $title }}" width="500" height="500">
        <div class="card-case__tag">
            <div class="icon">
                <img loading="lazy" src="{{ $categoryIcon }}" alt="{{ $title }}" title="{{ $title }}" width="40" height="40">
            </div>
            <div class="">
                <p class="app">Application</p>
                <p class="category">{{ $category }}</p>
            </div>
            <svg class="svgcorner" id="Capa_2" data-name="Capa 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.91 18.38">
                <g id="Capa_1-2" data-name="Capa 1">
                    <path class="cls-1" d="m18.91,18.38V0H0c10.27,0,18.61,8.18,18.91,18.38Z"></path>
                </g>
            </svg>
            <svg class="svgcorner svgcorner--2" id="Capa_2" data-name="Capa 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.91 18.38">
                <g id="Capa_1-2" data-name="Capa 1">
                    <path class="cls-1" d="m18.91,18.38V0H0c10.27,0,18.61,8.18,18.91,18.38Z"></path>
                </g>
            </svg>
        </div>
        <div class="btn-arrow btn-arrow--white">
            <span class="btn-arrow__text">See case</span>
            <span class="arrow">
                <i class="icon-arrow-long"></i>
            </span>
        </div>
    </div>
    <h3 class="card-case__title">{{ $title }}</h3>
</a>
