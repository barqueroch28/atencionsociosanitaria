<div class="fixed-top">
    <div class="row bg-purple">
        <div class="col-12 p-1 text-white text-center">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-lg-auto">
                    <span><small><i class="fa-solid fa-phone"></i> 926 92 26 58</small></span>
                </div>
                <div class="col-12 col-lg-auto">
                    <span class="ms-4"><small><i class="fa-solid fa-envelope"></i> cursos-online@academiatecnas.com</small></span>
                </div> 
            </div>   
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-light py-1 px-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{asset('/img/tecnas.webp')}}" alt="Curso de prevención de riesgos laborales Damito-Tecnas" title="Cursos online gratuitos" style="width:6rem;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mt-2" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link purple tiny-text {{ request()->is('/') ? 'active' : '' }}" href="{{route('home')}}">Home</a>
                    </li>
      
                    <li class="nav-item">
                        <a class="nav-link purple tiny-text" href="{{url('https://curso-atencion-sociosanitaria.com/test/atencion-sociosanitaria/b2qi5/15')}}">Test del Curso</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link purple tiny-text {{ request()->is('/contact') ? 'active' : '' }}" href="{{route('contact')}}">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>  
    </nav>
</div>
