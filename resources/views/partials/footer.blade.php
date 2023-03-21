<footer>
    <div class="row">
        <div class="bg-gray py-3 px-5">
            <div class="row d-flex justify-content-between">
                <div class="col-12 col-lg-4 black">
                    <div class="text-center">
                        <p class="small-title mb-2"><b>¿Por qué formarse con nosotros?</b></p>
                        <p>Tecnas Servicios Integrales de Formación y Desarrollo SL (B-13321005) es Centro de Formación Presencial y Online legalmente constituido con casi 20 años de experiencia en el sector.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 black">
                    <div class="text-center">
                        <p class="small-title mb-2"><b>Contacto</b></p>
                        <p class="mb-1">C/Carmen nº8 Ciudad Real 13003</p>
                        <p class="mb-1">Teléfono: 926 92 26 58</p>
                        <p class="mb-1">Horario: L-V de 9:00 a 20:00</p>
                        <p class="mb-1">Email:</p>
                        <p class="mb-1">cursos-online@academiatecnas.com</p>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="text-center">
                        <p class="text black"><b>Pago 100% Seguro</b></p>
                        <img src="{{asset('/img/paypal.webp')}}" alt="" style="width:10rem;">
                        <p class="text black mt-3"><b>Enlace de interés</b></p>
                        <a href="{{url('https://www.seg-social.es/wps/portal/wss/internet/Inicio')}}" target="_blank"><img src="{{asset('/img/ministerio.webp')}}" alt="" style="width:10rem;"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-dark px-5 py-2">
            <div class="d-flex"> 
                <a href="{{route('privacity')}}" class="tiny-text text-black text-opacity-50 semi"><small>Política de Privacidad</small> </a>
                <a href="{{route('cookies')}}" class="tiny-text text-black text-opacity-50 semi ms-3"><small>Política de Cookies</small> </a>
            </div>
        </div>
        <div class="bg-gray px-5 py-1">
            <small class="text-opacity-50">Copyright 2010-{{$date}} Curso Atención Sociosanitaria | Todos los Derechos Reservados.</small>
        </div>
    </div>
    <div class="fixed-bottom">
        <div class="d-flex justify-content-end">
            <button onclick="topFunction()" id="up" class="btn bg-purple text-white" title="Go to top"><i class="fa-solid fa-chevron-up"></i></button>
        </div>
    </div>
    <?php $token = csrf_token(); ?>

    @if(App\Models\Access::where('tokens', $token)
    ->get()
    ->isEmpty())
    
    <div class="fixed-bottom">
        <form method="POST" enctype="multipart/form-data" action="{{ route('session') }}">
        @csrf
            <div class="col-12">            
                <div class="bg-dark bg-opacity-75 px-3 py-2" role="alert">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-10">
                            <small class="text-white">Tecnas Formación utiliza cookies propias y de terceros para fines analíticos y de publicidad.
                            <a href="{{url('/politica-de-cookies')}}" class="text-white" aria-label="Política de cookies" data-bs-toggle="modal" data-bs-target="#exampleModal"><b>Configurar cookies.</b></a></small>
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn bg-purple text-white px-3" id="accept"><small>Aceptar todas</small> </button>
                        </div>
                    </div>
                </div>
            </div>    
        </form>            
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Configuración cookies</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <small>TECNAS FORMACIÓN, usa cookies propias y de terceros para fines analíticos y de publicidad (cookies de rendimiento o analíticas y cookies de publicidad) y para el correcto funcionamiento de nuestro sitio web (cookies técnicas). Puede aceptar todas las cookies, seleccionar aquellas que desee en “Configuración de Cookies” y rechazarlas todas. Puede obtener más información sobre cookies en nuestra <a href="{{route('cookies')}}">política de cookies</a></small>
                    <form method="POST" enctype="multipart/form-data" action="{{ route('session') }}" class="mt-2">
                    @csrf                        
                        <input type="checkbox" id="essentials" name="essentials" value="1" checked class="form-checkbox">
                        <label for="essentials">Cookies esenciales</label>
                        <br>                        
                        <input type="checkbox" id="marketing" name="marketing" value="1" checked class="form-checkbox">
                        <label for="marketing">Cookies de marketing</label>
                        <br>                        
                        <input type="checkbox" id="preferences" name="preferences" value="1" checked class="form-checkbox">
                        <label for="preferences">Cookies de preferencias</label>
                        <br>                        
                        <input type="checkbox" id="analysis" name="analysis" value="1" checked class="form-checkbox">
                        <label for="analysis">Cookies de análisis</label>
                        <br>
                        <button class="btn bg-purple text-white mt-3" id="accept" type="submit">Guardar preferencias</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endif
</footer>