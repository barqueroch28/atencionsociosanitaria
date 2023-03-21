@extends('layouts.app')
@section('title', 'Contacto - Curso Teleoperador Online')
@section('description', 'Realiza ahora el Curso de Teloperador')
@section('content')
<div class="container-fluid">
    <div class="row mt-5">
        <div id="bg-contact">
            <div class="text-center">
                <div class="col-10 offset-1 col-lg-10 offset-lg-1">
                    <div class="bg-white bg-opacity-50 p-3 rounded">
                        <h1 class="big-title purple"><b>Contacta con Nosotros</b></h1>
                    </div>
                    <div class="row d-flex justify-content-between mt-5">
                        <div class="col-12 col-lg-4 mt-2">
                            <div class="bg-white p-2 rounded text-center purple">
                                <i class="fa-solid fa-envelope litle-title"></i>
                                <p class="mb-0 litle-title yellow"><b>Correo</b></p>
                                <p class="mb-0 gray">cursos-online@academiatecnas.com</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 mt-2">
                            <div class="bg-white p-2 rounded text-center purple">
                                <i class="fa-solid fa-phone litle-title"></i>
                                <p class="mb-0 litle-title yellow"><b>Teléfono</b></p>
                                <p class="mb-0 gray">926 92 26 58</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 mt-2">
                            <div class="bg-white p-2 rounded text-center purple">
                                <i class="fa-solid fa-clock litle-title"></i>
                                <p class="mb-0 litle-title yellow"><b>Horario</b></p>
                                <p class="mb-0 gray">Lunes a Viernes de 9 a 20H</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row bg-white py-4 px-4"> 
        <div class="row d-flex justify-content-between">
            <div class="col-12 col-lg-6">
                <div class="bg-white rounded p-3 text-center">
                    <h2 class="litle-title purple"><b>Puedes contactar para...</b></h2>
                    <p class="mb-1 gray text">»  Para ayudarte en la obtención de cualquiera de los títulos que ofrecemos.</p>
                    <p class="mb-1 gray text">»  Si dudas a la hora de elegir el curso.</p>
                    <p class="mb-1 gray text">»  Si necesitas cualquier aclaración en las formas de pago.</p>
                    <p class="mb-1 gray text">En Tecnas Formación estaremos encantados de resolver cualquier tipo de duda.</p>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <h3 class="med-title"><b>¿Preguntas o Dudas?</b></h3>
                <p class="text">Lo antes posible responderemos tu consulta.</p>
                <form method="POST" enctype="multipart/form-data" action="{{ route('form') }}">
                    @csrf
                    <input type="text" class="form-control mt-3" placeholder="Nombre" id="name" name="name" aria-label="Nombre">
                        
                    <input type="text" class="form-control mt-2" placeholder="Dirección de correo" id="email" name="email" aria-label="Email">
                        
                    <textarea name="message" id="message" cols="30" rows="3" placeholder="Mensaje" class="form-control mt-2" aria-label="Mensaje"></textarea>
                    @if (\Session::has('danger'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <div class="d-flex justify-content-between align-items-center">
                                {!! \Session::get('danger') !!}
                                <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    @endif
                    {!! NoCaptcha::renderJs() !!}
                    {!! NoCaptcha::display() !!}
                    <p class="mt-2 mb-2 tiny-text"><b>Aceptar Política de Privacidad</b></p>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="true" id="privacity" name="privacity">
                        <label class="form-check-label" for="flexCheckDefault">
                            <small>He leído, entiendo y acepto la cláusula de Protección de Datos y consiento el tratamiento de mis Datos Personales abajo expuesta. <a href="{{route('privacity')}}" class="text-black"><b>Leer Política de Privacidad</b> </a></small>
                        </label>
                    </div>
                    <button class="btn btn-danger mt-2">Enviar</button>
                </form>
            </div>
        </div>     
    </div>
</div>
@endsection