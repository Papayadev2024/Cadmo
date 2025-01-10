@extends('components.public.matrix', ['pagina' => 'contacto'])
@section('titulo', 'Contacto')
@section('css_importados')

@stop


@section('content')
    <main>

        <section
            class="flex flex-col lg:flex-row gap-10 lg:gap-10 justify-center items-center px-[5%] lg:pl-0 lg:pr-0 -mt-24 bg-cover bg-top pt-32"
            style="background-image:url({{ asset('images/img/portadaimagen.png') }})">
        </section>

        <section class="w-full bg-[#F5F7F9] py-10 lg:py-20 px-[5%]">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 md:gap-16 w-full ">
                <div class="flex flex-col justify-between">

                    <div class="flex flex-col gap-2">
                        <h2 class="leading-tight font-gotham_medium  text-4xl xl:text-5xl text-[#0181AA]">
                           {{$textoshome->title6section ?? "Ingrese un texto"}}</h2>
                        <div class="h-[3px] bg-[#0181AA] w-32 rounded-full"> </div>
                        <p class="text-[#02324A] font-gotham_book font-normal text-lg mt-5">
                            {{$textoshome->description6section ?? "Ingrese un texto"}}
                        </p>
                    </div>

                    <div class="flex flex-col gap-2">
                        <div class="flex flex-col gap-1">
                            <p class="font-gotham_medium  text-2xl text-[#0181AA] ">Horario
                            </p>
                            <p class="font-gotham_book text-base text-[#11355a] font-normal">
                                @foreach (explode(',', $general[0]->schedule) as $item)
                                    {{ $item }}<br>
                                @endforeach
                            </p>
                        </div>
                        <div class="flex flex-col gap-1">
                            <p class="font-gotham_medium  text-2xl text-[#0181AA] ">Dirección
                            </p>
                            <p class="font-gotham_book text-base text-[#11355a] font-normal">
                                {{ $general[0]->address }}, {{ $general[0]->inside }},
                                {{ $general[0]->district }} - {{ $general[0]->city }}
                            </p>
                        </div>
                        <div class="flex flex-col gap-1">
                            <p class="font-gotham_medium  text-2xl text-[#0181AA] ">Ponerse en contacto
                            </p>
                            <p class="font-gotham_book text-base text-[#11355a] font-normal">
                                {{ $general[0]->cellphone }}<br>
                                {{ $general[0]->office_phone }}
                            </p>
                        </div>
                    </div>

                </div>

                <div class="flex flex-col gap-10 w-full sm:px-[5%] md:px-[10%]  ">

                    <div class="flex flex-col gap-10 bg-white rounded-xl p-6">
                        <h2 class="leading-tight font-gotham_medium  text-4xl text-[#0181AA]">
                            {{$textoshome->title7section ?? "Ingrese un texto"}}
                        </h2>
                        <form id="formContactos" class="grid grid-cols-1 gap-4">
                            @csrf

                            <div class="relative w-full">
                                <label for="fullNameContacto"
                                    class="font-gotham_book font-semibold text-sm text-[#11355a]">Nombre completo</label>
                                <input required name="full_name" id="fullNameContacto" type="text"
                                    placeholder="Nombre completo"
                                    class="mt-1 w-full py-3 px-4 focus:outline-none font-gotham_book text-base text-[#11355a] focus:ring-0 placeholder:text-[#11355a]  border-[#d7dee6] border transition-all focus:outline-0 focus:font-medium bg-transparent focus:bg-transparent focus:border-[#d7dee6] rounded-xl" />
                            </div>

                            <div class="relative w-full">
                                <label for="telefonoContacto"
                                    class="font-gotham_book font-semibold text-sm text-[#11355a]">Número de Teléfono</label>
                                <input id="telefonoContacto" name="phone" placeholder="Teléfono" type="tel"
                                    maxlength="12" required
                                    class="mt-1 w-full py-3 px-4 focus:outline-none font-gotham_book text-base text-[#11355a] focus:ring-0 placeholder:text-[#11355a]  border-[#d7dee6] border transition-all focus:outline-0 focus:font-medium bg-transparent focus:bg-transparent focus:border-[#d7dee6] rounded-xl" />
                            </div>

                            <div class="relative w-full">
                                <label for="emailContacto"
                                    class="font-gotham_book font-semibold text-sm text-[#11355a]">E-Mail</label>
                                <input type="email" name="email" placeholder="E-mail" required id="emailContacto"
                                    class="mt-1 w-full py-3 px-4 focus:outline-none font-gotham_book text-base text-[#11355a] focus:ring-0 placeholder:text-[#11355a]  border-[#d7dee6] border transition-all focus:outline-0 focus:font-medium bg-transparent focus:bg-transparent focus:border-[#d7dee6] rounded-xl" />
                            </div>

                            <input type="hidden" id="tipo" placeholder="tipo" name="source" value="Inicio" />

                            <div class="relative w-full">
                                <label for="message" class="font-gotham_book font-semibold text-sm text-[#11355a]">Escribe
                                    un mensaje</label>
                                <textarea name="message" id="message" rows="3" cols="30"
                                    class="mt-1 w-full py-3 px-4 focus:outline-none font-gotham_book text-base text-[#11355a] focus:ring-0 placeholder:text-[#11355a]  border-[#d7dee6] border transition-all focus:outline-0 focus:font-medium bg-transparent focus:bg-transparent focus:border-[#d7dee6] rounded-xl"
                                    placeholder="Mensaje"></textarea>
                            </div>

                            <div class="relative w-full flex flex-row items-center gap-3">

                                <input type="checkbox" required id="polytic"
                                    class="w-6 h-6  focus:outline-none font-gotham_book text-base text-[#11355a] focus:ring-0 placeholder:text-[#11355a]  border-[#d7dee6] border transition-all focus:outline-0 focus:font-medium bg-transparent focus:bg-transparent focus:border-[#d7dee6] rounded-lg" />
                                <label for="polytic" class="font-gotham_book font-semibold text-sm text-[#11355a]">Usted
                                    acepta nuestra amigable política de privacidad.</label>
                            </div>

                            <input type="hidden" name="client_width" id="anchodispositivo">
                            <input type="hidden" name="client_height" id="largodispositivo">
                            <input type="hidden" name="client_latitude" id="latitud">
                            <input type="hidden" name="client_longitude" id="longitud">
                            <input type="hidden" name="client_system" id="sistema">
                            <input type="hidden" id="tipo" placeholder="tipo" name="source" value="Inicio" />
                            <div class="flex justify-center items-center py-5">
                                <button type="submit"
                                    class="flex flex-row justify-center gap-3 items-center text-lg font-gotham_book font-semibold text-white bg-[#11355a] py-3 px-6 w-full text-center rounded-3xl">Enviar
                                    solicitud
                                    <span><img src="{{ asset('images/svg/flechaderecha.svg') }}" /></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <div class="w-full bg-[#F5F7F9] pb-10 lg:pb-20 px-0 lg:px-[5%]">
            <img class="w-full object-cover object-center h-60 sm:h-96 lg:h-[450px]" src="{{asset('images/img/bannercontacto.png')}}" />
        </div>

        @if ($preguntasfrec->isEmpty())
        @else
            <section>
                <div class="flex flex-col gap-10 w-full px-[5%] mx-auto pb-10 lg:pb-20 bg-[#F5F7F9]">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 sm:gap-10 lg:gap-20">
                        
                                <div class="flex flex-col justify-center gap-5 rounded-xl">
                                    <h2 class="leading-tight font-gotham_medium text-4xl text-[#0181AA]">
                                        Preguntas Frecuentes</h2>
                                    <div class="h-[3px] bg-[#0181AA] w-32 rounded-full -mt-2"> </div>   
                            
                                    <div class="font-poppins">
                                        <div class="relative bg-white px-[5%] ring-gray-900/5 sm:mx-auto sm:rounded-lg">
                                            <div class="mx-auto">
                                                <div class="mx-auto mt-8 grid max-w-[900px] divide-y divide-neutral-200">
                                                    @foreach ($preguntasfrec as $preguntas)  
                                                        <div class="py-3 sm:py-4">
                                                            <details class="group">
                                                                    <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                                                        <span class="font-gotham_medium text-lg sm:text-xl text-[#0181AA] leading-tight">
                                                                        {{$preguntas->pregunta}}</span>
                                                                        <span class="transition group-open:rotate-180">
                                                                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M17 10.5L11.9992 15.08L7 10.5" stroke="#0181AA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                            </svg>
                                                                        </span>
                                                                    </summary>
                                                                    <div class="group-open:animate-fadeIn mt-3 text-[#02324A] font-gotham_book font-normal text-base">
                                                                        {!!$preguntas->respuesta!!}
                                                                    </div>
                                                            </details>
                                                        </div>
                                                    @endforeach    
                                                </div> 
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                
                                <div class="flex flex-col items-center justify-center">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15604.322139862717!2d-77.0165134!3d-12.1066391!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c7e150f2e221%3A0x21876935c1e5963!2sCADMO%20Soluciones%20SAC!5e0!3m2!1ses-419!2spe!4v1729968311226!5m2!1ses-419!2spe" 
                                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                        
                        </div>
                </div>
            </section>
        @endif    
    </main>


@section('scripts_importados')
    <script>
        // Obtener información del navegador y del sistema operativo
        const platform = navigator.platform;
        document.getElementById('sistema').value = platform;

        // Obtener la geolocalización del usuario (si se permite)
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                document.getElementById('latitud').value = position.coords.latitude;
                document.getElementById('longitud').value = position.coords.longitude;
            });
        }

        // Obtener la página de referencia
        const referrer = document.referrer;
        document.getElementById('llegade').value = referrer;


        // Obtener la resolución de la pantalla
        const screenWidth = window.screen.width;
        const screenHeight = window.screen.height;
        document.getElementById('anchodispositivo').value = screenWidth;
        document.getElementById('largodispositivo').value = screenHeight;
    </script>

@stop

@stop
