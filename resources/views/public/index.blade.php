@extends('components.public.matrix', ['pagina' => 'Inicio'])
@section('titulo', 'Inicio')
@section('css_importados')
    <style>
        .swiper-testimonios .swiper-pagination-bullet {
            width: 14px;
            height: 8px;
            border-radius: 6px;
            background-color: #052F4E !important;
        
        }

        .swiper-testimonios .swiper-pagination-bullet:not(.swiper-pagination-bullet-active) {
            background-color: #05304e56!important;
            opacity: 1;
        }

        .swiper-servicios .swiper-pagination-bullet {
            width: 14px;
            height: 8px;
            border-radius: 6px;
            background-color: #052F4E !important;
        
        }

        .swiper-servicios .swiper-pagination-bullet:not(.swiper-pagination-bullet-active) {
            background-color: #05304e56!important;
            opacity: 1;
        }
    </style>
@stop
@section('content')
    
    <main>
        <section id="bannerprincipal">
            <div class="flex flex-col justify-center gap-10 w-full  px-[5%] py-10 2xl:py-14 overflow-hidden bg-cover bg-center" style="background-image: url({{ asset('images/img/texturahero.png') }})">
                
                <div class="grid grid-cols-1 lg:grid-cols-5 gap-5">
                    
                    <div class="lg:col-span-3 flex flex-col justify-center pb-0 lg:pb-10">
                        <div class="flex flex-col p-2 justify-center items-start gap-1 max-w-lg 2xl:max-w-2xl">
                            <h2 class="text-[#f26824] font-manrope font-extrabold text-lg xl:text-xl 2xl:text-2xl !tracking-normal">
                                EMPRESA DE DESARROLLO DE SOFTWARE
                            </h2>
                            
                            <h2 class="text-white text-3xl xl:text-[40px] 2xl:text-5xl font-manrope font-extrabold" >
                                Impulsamos tu Empresa con Soluciones Financieras
                            </h2>

                            <p class="text-white text-lg 2xl:text-xl font-manrope font-normal !tracking-normal mt-6" >
                                Digitaliza tu empresa, con soluciones de casa de cambio digital e inversiones con tecnología hecha para crecer.
                            </p>
                        </div>
                        <div class="flex flex-col p-2 justify-center items-start w-full mt-10">
                            <h2 class="text-[#f26824] text-base xl:text-lg 2xl:text-xl font-manrope font-extrabold">
                                Haz tu consulta
                            </h2>
                            <p class="text-white text-base xl:text-lg 2xl:text-xl font-manrope font-bold">
                                (+51) 999 999 999
                            </p>
                        </div>
                    </div>
    
    
                    <div class="lg:col-span-2 flex flex-col sm:flex-row gap-5 sm:gap-10 lg:flex-col justify-around items-start lg:items-end order-1 lg:order-2">
                        
                        <div class="grid grid-cols-1 gap-2 xl:gap-4 z-20 min-w-[320px] xl:w-[450px] 3xl:w-[600px] max-w-[600px] animate-jump-out animate-once animate-duration-[2000ms] animate-reverse">
                            <div id="form-1" class="bg-[#031730] p-6 2xl:p-8 rounded-2xl flex flex-col gap-3">
                                <h2 class="text-white text-base sm:text-lg xl:text-xl 2xl:text-2xl font-manrope font-medium !tracking-wide">
                                    Consultoría y tecnología  financiera adaptadas a tu  medida
                                </h2>
                                <form class="space-y-2 4xs:space-y-4 2xl:space-y-4" id="formContactos">
                                  @csrf
                                  
                                  <div class="flex flex-col gap-1">
                                    <label class="text-white font-manrope text-sm 2xl:text-lg">Nombre completo</label>
                                    <input type="text" name="full_name" placeholder="Ingresa tu nombre y apellido" 
                                      class="border-0  focus:!border-0 focus:!ring-0 focus:!ring-transparent
                                      placeholder:text-[#AAC3E6] text-[#031730] font-manrope w-full py-2.5 px-2 rounded-lg text-sm 2xl:text-lg  placeholder-opacity-25 font-light  bg-white">
                                  </div>

                                  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="flex flex-col gap-1">
                                        <label class="text-white font-manrope text-sm 2xl:text-lg">DNI/RUC (*)</label>
                                        <input type="text" name="ruc" placeholder="Ingresa tu DNI/RUC" 
                                          class="border-0  focus:!border-0 focus:!ring-0 focus:!ring-transparent
                                          placeholder:text-[#AAC3E6] text-[#031730] font-manrope w-full py-2.5 px-2 rounded-lg text-sm 2xl:text-lg  placeholder-opacity-25 font-light  bg-white">
                                    </div>

                                    <div class="flex flex-col gap-1">
                                        <label class="text-white font-manrope text-sm 2xl:text-lg">Teléfono (*)</label>
                                        <input type="text" name="phone" placeholder="+51" id="telefonoContacto"
                                          class="border-0  focus:!border-0 focus:!ring-0 focus:!ring-transparent
                                          placeholder:text-[#AAC3E6] text-[#031730] font-manrope w-full py-2.5 px-2 rounded-lg text-sm 2xl:text-lg  placeholder-opacity-25 font-light  bg-white">
                                    </div>
                                  </div>

                                  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="flex flex-col gap-1">
                                        <label class="text-white font-manrope text-sm 2xl:text-lg">Correo electrónico (*)</label>
                                        <input type="email" name="email" placeholder="tu@mail.com" id="emailContacto"
                                          class="border-0  focus:!border-0 focus:!ring-0 focus:!ring-transparent
                                          placeholder:text-[#AAC3E6] text-[#031730] font-manrope w-full py-2.5 px-2 rounded-lg text-sm 2xl:text-lg  placeholder-opacity-25 font-light  bg-white">
                                    </div>

                                    <div class="flex flex-col gap-1">
                                        <label class="text-white font-manrope text-sm 2xl:text-lg">Empresa</label>
                                        <input type="text" name="business" placeholder="Nombre de la empresa" 
                                          class="border-0  focus:!border-0 focus:!ring-0 focus:!ring-transparent
                                          placeholder:text-[#AAC3E6]  text-[#031730] font-manrope w-full py-2.5 px-2 rounded-lg text-sm 2xl:text-lg  placeholder-opacity-25 font-light  bg-white">
                                    </div>
                                  </div>

                                  <div class="flex flex-col gap-1">
                                    <label class="text-white font-manrope text-sm 2xl:text-lg">Requerimiento (*)</label>
                                    <textarea rows="1" name="message" placeholder="Necesito..." 
                                      class="border-0  focus:!border-0 focus:!ring-0 focus:!ring-transparent
                                      placeholder:text-[#AAC3E6] text-[#031730] font-manrope w-full py-2.5 px-2 rounded-lg text-sm 2xl:text-lg  placeholder-opacity-25 font-light  bg-white"></textarea>
                                  </div>
                                  
                                  
                                  <input type="hidden" name="client_width" id="anchodispositivo">
                                  <input type="hidden" name="client_height" id="largodispositivo">
                                  <input type="hidden" name="client_latitude" id="latitud">
                                  <input type="hidden" name="client_longitude" id="longitud">
                                  <input type="hidden" name="client_system" id="sistema">
                                  <input type="hidden" id="tipo" placeholder="tipo" name="source" value="WSP - Landing" />
                                     
                        
                                  <button type="submit"
                                      class="font-manrope text-white py-3 px-2 bg-[#FF680F] justify-center items-center rounded-lg inline-flex text-base 2xl:text-xl w-full">
                                      <span>Enviar solicitud</span>
                                  </button>

                                  <div class="font-manrope font-normal text-sm 2xl:text-base text-white text-center">Al registrarte, aceptas nuestros términos de servicio y política de privacidad.</div>
                                </form>
                                
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <section  class="w-full items-start px-[5%] py-8 bg-[#E9EFFC] text-[#021226] bg-cover bg-center">
            <div class="grid grid-cols-1" data-aos="fade-down">
                <div>
                    <div class="swiper beneficios">
                        <div class="swiper-wrapper">
                            
                            <div class="swiper-slide">
                                <div class="flex flex-col gap-4 items-start min-w-[240px] xl:w-96 mx-auto">
                                    <div class="flex flex-col">
                                        <h2 class="text-3xl md:text-4xl xl:text-5xl 2xl:text-6xl font-manrope font-bold !leading-none max-w-xs flex flex-row gap-1"><span class="text-[#FF680F]">+</span>20</h2>
                                        <p class="mt-2 text-base 2xl:text-lg font-manrope font-normal leading-5">
                                            Años de experiencia del equipo en  proyectos
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex flex-col gap-4 items-start min-w-[240px] xl:w-96 mx-auto">
                                    <div class="flex flex-col">
                                        <h2 class="text-3xl md:text-4xl xl:text-5xl 2xl:text-6xl font-manrope font-bold !leading-none max-w-xs flex flex-row gap-1">100<span class="text-[#FF680F]">%</span></h2>
                                        <p class="mt-2 text-base 2xl:text-lg font-manrope font-normal leading-5">
                                            de satisfacción en entregas
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex flex-col gap-4 items-start min-w-[240px] xl:w-96 mx-auto">
                                    <div class="flex flex-col">
                                        <h2 class="text-3xl md:text-4xl xl:text-5xl 2xl:text-6xl font-manrope font-bold !leading-none max-w-xs flex flex-row gap-1"><span class="text-[#FF680F]">+</span>500 hrs.</h2>
                                        <p class="mt-2 text-base 2xl:text-lg font-manrope font-normal leading-5">
                                            de consultoría especializada en tesorería
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="px-[5%] bg-cover bg-center" style="background-image: url({{ asset('images/img/texturamid.png') }})">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 lg:gap-10">
                
                <div class="py-10 lg:py-20 flex flex-col gap-10">
                    <div class="flex flex-col gap-3">
                        <h2 class="text-[#021226] text-3xl xl:text-[40px] 2xl:text-5xl font-manrope font-bold" data-aos="fade-down">
                            Tu Socio Estratégico en Innovación Financiera
                        </h2>

                        <p class="text-[#021226] text-lg 2xl:text-xl font-manrope font-normal !tracking-normal" data-aos="fade-down">
                            Llevamos más de 6 años digitalizando y optimizando operaciones financieras. Desarrollamos soluciones tecnológicas y consultoría especializada para fintech, casas de cambio y entidades  financieras.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        <div class="flex flex-col gap-2 justify-center font-manrope font-normal text-base 2xl:text-lg items-start bg-[#E9EFFC] rounded-xl overflow-hidden p-6" data-aos="fade-down">
                            <h2 class="text-[#021226] text-lg xl:text-xl 2xl:text-2xl font-manrope font-bold" >
                                Clientes...
                            </h2>
                            <ul class="flex flex-col gap-1">
                                <li class="flex flex-row gap-2 items-center justify-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M3.33398 9.33301L5.66732 11.6663L12.6673 4.33301" stroke="#FF680F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Kyodai ETF</span>
                                </li>
                                <li class="flex flex-row gap-2 items-center justify-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M3.33398 9.33301L5.66732 11.6663L12.6673 4.33301" stroke="#FF680F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Caja Maynas</span>
                                </li>
                                <li class="flex flex-row gap-2 items-center justify-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M3.33398 9.33301L5.66732 11.6663L12.6673 4.33301" stroke="#FF680F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Caja Huancayo</span>
                                </li>
                                <li class="flex flex-row gap-2 items-center justify-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M3.33398 9.33301L5.66732 11.6663L12.6673 4.33301" stroke="#FF680F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Primus Capital Perú</span>
                                </li>
                                <li class="flex flex-row gap-2 items-center justify-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M3.33398 9.33301L5.66732 11.6663L12.6673 4.33301" stroke="#FF680F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Cambia FX</span>
                                </li>
                                <li class="flex flex-row gap-2 items-center justify-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M3.33398 9.33301L5.66732 11.6663L12.6673 4.33301" stroke="#FF680F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Sonda</span>
                                </li>
                                <li class="flex flex-row gap-2 items-center justify-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M3.33398 9.33301L5.66732 11.6663L12.6673 4.33301" stroke="#FF680F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Clínica Santa Lucía</span>
                                </li>
                            </ul>
                            <h2 class="text-[#021226] text-lg xl:text-xl 2xl:text-2xl font-manrope font-bold">
                                confían en nosotros.
                            </h2>
                        </div>

                        <div class="flex flex-col gap-2 justify-center items-center font-manrope font-normal text-base 2xl:text-lg text-center bg-[#E9EFFC] rounded-xl overflow-hidden p-6" data-aos="fade-down">
                                <img class="object-bottom" src="{{ asset('images/img/iconocod.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                                <h2 class="text-[#021226] text-lg xl:text-xl 2xl:text-2xl font-manrope font-bold" >
                                    Innovación con confianza total
                                </h2>
                                <p>Comprometidos con la seguridad, la eficiencia y la innovación.</p>
                        </div>
                    </div>
                </div>
                
                <div class="flex flex-col justify-end items-center">
                    <img class="object-bottom" src="{{ asset('images/img/chucos.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                </div>

            </div>
        </section>
        
        <section class="px-[5%] bg-cover bg-center relative py-10 lg:py-16" style="background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url({{ asset('images/img/texturaf.png') }})">
           
            <div class="grid grid-cols-1 gap-20">
                
                <div class="flex flex-col gap-10">
                    <div class="flex flex-col max-w-xl 2xl:max-w-2xl mx-auto text-center">
                        <h2 class="text-[#FF680F] text-3xl xl:text-[40px] 2xl:text-5xl font-manrope font-bold" data-aos="fade-down">
                            Nuestros Servicios y Soluciones Financieras
                        </h2>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="flex flex-col rounded-xl overflow-hidden ">
                        <img class="object-bottom" src="{{ asset('images/img/item1.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                        <div class="bg-white p-6 flex flex-col gap-3 rounded-b-xl">
                            <h2 class="text-[#021226] text-lg xl:text-2xl 2xl:text-3xl font-manrope font-medium" >
                                Consultoría Financiera  Especializada
                            </h2>

                            <div class="flex flex-col gap-2 2xl:gap-4">
                                <div class="flex flex-row gap-1 items-start justify-start">
                                    <svg class="mt-1.5 min-w-5 2xl:min-w-5" xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 12 10" fill="none">
                                        <path d="M1.33398 6.33301L3.66732 8.66634L10.6673 1.33301" stroke="#FF680F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="flex flex-col">
                                        <h2 class="text-[#021226] leading-none text-sm xl:text-base 2xl:text-lg font-manrope font-semibold" >
                                            Gestión de liquidez
                                        </h2>
                                        <p class="text-[#021226] text-sm xl:text-base 2xl:text-lg font-manrope font-light" >
                                            Estrategias para mantener el flujo de caja bajo control.
                                        </p>
                                    </div>
                                </div>

                                <div class="flex flex-row gap-1 items-start justify-start">
                                    <svg class="mt-1.5 min-w-5 2xl:min-w-5" xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 12 10" fill="none">
                                        <path d="M1.33398 6.33301L3.66732 8.66634L10.6673 1.33301" stroke="#FF680F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="flex flex-col">
                                        <h2 class="text-[#021226] leading-none text-sm xl:text-base 2xl:text-lg font-manrope font-semibold" >
                                            Inversiones para pequeñas empresas
                                        </h2>
                                        <p class="text-[#021226] text-sm xl:text-base 2xl:text-lg font-manrope font-light" >
                                            Asesoría para rentabilizar excedentes con bajo riesgo.
                                        </p>
                                    </div>
                                </div>

                                <div class="flex flex-row gap-1 items-start justify-start">
                                    <svg class="mt-1.5 min-w-5 2xl:min-w-5" xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 12 10" fill="none">
                                        <path d="M1.33398 6.33301L3.66732 8.66634L10.6673 1.33301" stroke="#FF680F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="flex flex-col">
                                        <h2 class="text-[#021226] leading-none text-sm xl:text-base 2xl:text-lg font-manrope font-semibold" >
                                            Estructuraciónde productos financieros
                                        </h2>
                                        <p class="text-[#021226] text-sm xl:text-base 2xl:text-lg font-manrope font-light" >
                                            Diseño e implementación de  mesas de cambio, casas de  cambio digitales y programas de  capacitación.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <a class="bg-[#FF680F] text-center font-manrope font-bold text-white py-2.5 w-full rounded-lg">
                                Comenzar ahora    
                            </a>
                        </div>
                    </div>

                    <div class="flex flex-col rounded-xl overflow-hidden ">
                        <img class="object-bottom" src="{{ asset('images/img/item2.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                        <div class="bg-white p-6 flex flex-col gap-3 rounded-b-xl">
                            <h2 class="text-[#021226] text-lg xl:text-2xl 2xl:text-3xl font-manrope font-medium" >
                                Desarrollo de Software
                            </h2>

                            <div class="flex flex-col gap-2 2xl:gap-4">
                                <div class="flex flex-row gap-1 items-start justify-start">
                                    <svg class="mt-1.5 min-w-5 2xl:min-w-5" xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 12 10" fill="none">
                                        <path d="M1.33398 6.33301L3.66732 8.66634L10.6673 1.33301" stroke="#FF680F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="flex flex-col">
                                        <h2 class="text-[#021226] leading-none text-sm xl:text-base 2xl:text-lg font-manrope font-semibold" >
                                            Software a medida para cada cliente
                                        </h2>
                                        <p class="text-[#021226] text-sm xl:text-base 2xl:text-lg font-manrope font-light" >
                                            Nos adaptamos a tus flujos.  Desarrollo totalmente personalizado.
                                        </p>
                                    </div>
                                </div>

                                <div class="flex flex-row gap-1 items-start justify-start">
                                    <svg class="mt-1.5 min-w-5 2xl:min-w-5" xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 12 10" fill="none">
                                        <path d="M1.33398 6.33301L3.66732 8.66634L10.6673 1.33301" stroke="#FF680F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="flex flex-col">
                                        <h2 class="text-[#021226] leading-none text-sm xl:text-base 2xl:text-lg font-manrope font-semibold" >
                                            Integración con bancos, ERPs y  sistemas contables
                                        </h2>
                                        <p class="text-[#021226] text-sm xl:text-base 2xl:text-lg font-manrope font-light" >
                                            Conectamos tu operación con tus  herramientas actuales para máxima  eficiencia.
                                        </p>
                                    </div>
                                </div>

                                <div class="flex flex-row gap-1 items-start justify-start">
                                    <svg class="mt-1.5 min-w-5 2xl:min-w-5" xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 12 10" fill="none">
                                        <path d="M1.33398 6.33301L3.66732 8.66634L10.6673 1.33301" stroke="#FF680F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="flex flex-col">
                                        <h2 class="text-[#021226] leading-none text-sm xl:text-base 2xl:text-lg font-manrope font-semibold" >
                                            Implementación ágil y  acompañamiento continuo
                                        </h2>
                                        <p class="text-[#021226] text-sm xl:text-base 2xl:text-lg font-manrope font-light" >
                                            Trabajamos con metodologías ágiles y  brindamos soporte post-lanzamiento.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <a class="bg-[#FF680F] text-center font-manrope font-bold text-white py-2.5 w-full rounded-lg">
                                Comenzar ahora    
                            </a>
                        </div>
                    </div>

                    <div class="flex flex-col rounded-xl overflow-hidden ">
                        <img class="object-bottom" src="{{ asset('images/img/item3.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                        <div class="bg-white p-6 flex flex-col gap-3 rounded-b-xl">
                            <h2 class="text-[#021226] text-lg xl:text-2xl 2xl:text-3xl font-manrope font-medium" >
                                Soluciones Financieras
                            </h2>

                            <div class="flex flex-col gap-2 2xl:gap-4">
                                <div class="flex flex-row gap-1 items-start justify-start">
                                    <svg class="mt-1.5 min-w-5 2xl:min-w-5" xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 12 10" fill="none">
                                        <path d="M1.33398 6.33301L3.66732 8.66634L10.6673 1.33301" stroke="#FF680F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="flex flex-col">
                                        <h2 class="text-[#021226] leading-none text-sm xl:text-base 2xl:text-lg font-manrope font-semibold" >
                                            Plataforma de casa de cambio  digital
                                        </h2>
                                        <p class="text-[#021226] text-sm xl:text-base 2xl:text-lg font-manrope font-light" >
                                            Cotización, operaciones y gestión  cambiaria automatizada en un solo  lugar.
                                        </p>
                                    </div>
                                </div>

                                <div class="flex flex-row gap-1 items-start justify-start">
                                    <svg class="mt-1.5 min-w-5 2xl:min-w-5" xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 12 10" fill="none">
                                        <path d="M1.33398 6.33301L3.66732 8.66634L10.6673 1.33301" stroke="#FF680F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="flex flex-col">
                                        <h2 class="text-[#021226] leading-none text-sm xl:text-base 2xl:text-lg font-manrope font-semibold" >
                                            Sistema back office de tesorería
                                        </h2>
                                        <p class="text-[#021226] text-sm xl:text-base 2xl:text-lg font-manrope font-light" >
                                            Control total de operaciones  financieras, conciliaciones y flujos de  caja.
                                        </p>
                                    </div>
                                </div>

                                <div class="flex flex-row gap-1 items-start justify-start">
                                    <svg class="mt-1.5 min-w-5 2xl:min-w-5" xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 12 10" fill="none">
                                        <path d="M1.33398 6.33301L3.66732 8.66634L10.6673 1.33301" stroke="#FF680F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="flex flex-col">
                                        <h2 class="text-[#021226] leading-none text-sm xl:text-base 2xl:text-lg font-manrope font-semibold" >
                                            Integración de pagos con bancos
                                        </h2>
                                        <p class="text-[#021226] text-sm xl:text-base 2xl:text-lg font-manrope font-light" >
                                            Conectamos tu sistema con múltiples  bancos para pagos directos y seguros.
                                        </p>
                                    </div>
                                </div>

                                {{-- <div class="flex flex-row gap-1 items-start justify-start">
                                    <svg class="mt-1.5 min-w-5 2xl:min-w-5" xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 12 10" fill="none">
                                        <path d="M1.33398 6.33301L3.66732 8.66634L10.6673 1.33301" stroke="#FF680F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="flex flex-col">
                                        <h2 class="text-[#021226] leading-none text-sm xl:text-base 2xl:text-lg font-manrope font-semibold" >
                                            Dashboard de monitoreo y control
                                        </h2>
                                        <p class="text-[#021226] text-sm xl:text-base 2xl:text-lg font-manrope font-light" >
                                            Visualiza y gestiona indicadores en  tiempo real.
                                        </p>
                                    </div>
                                </div> --}}
                            </div>
                            
                            <a class="bg-[#FF680F] text-center font-manrope font-bold text-white py-2.5 w-full rounded-lg">
                                Comenzar ahora    
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="px-[5%] bg-cover bg-center" style="background-image: url({{ asset('images/img/texturaend.png') }})">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 lg:gap-10">
                
                <div class="flex flex-col justify-end items-center">
                    <img class="object-bottom" src="{{ asset('images/img/chicoc.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                </div>
                
                <div class="py-10 lg:py-20 flex flex-col gap-3">
                    
                    <div class="flex flex-col gap-2">
                        <h2 class="text-[#f26824] font-manrope font-extrabold text-lg xl:text-xl 2xl:text-2xl !tracking-normal" data-aos="fade-down">
                            Quienes somos
                        </h2>
                        <p class="text-[#021226] text-lg 2xl:text-xl font-manrope font-normal !tracking-normal" data-aos="fade-down">
                            Nuestro equipo combina experiencia en tecnología y  finanzas para brindar servicios diferenciados
                        </p>
                    </div>
                   
                    <div class="flex flex-col gap-3">
                        <h2 class="text-[#021226] text-3xl xl:text-4xl 2xl:text-5xl font-manrope font-bold" data-aos="fade-down">
                            Nuestro compromiso
                        </h2>
                    </div>

                    <div class="grid grid-cols-1">
                        <div class="flex flex-col gap-2 justify-center text-base 2xl:text-lg items-start bg-white rounded-xl overflow-hidden p-6" data-aos="fade-down">
                            
                            <div class="flex flex-row gap-2 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                    <path d="M9.04894 0.927052C9.3483 0.00574112 10.6517 0.00573993 10.9511 0.927051L12.4697 5.60081C12.6035 6.01284 12.9875 6.2918 13.4207 6.2918H18.335C19.3037 6.2918 19.7065 7.53141 18.9228 8.10081L14.947 10.9894C14.5966 11.244 14.4499 11.6954 14.5838 12.1074L16.1024 16.7812C16.4017 17.7025 15.3472 18.4686 14.5635 17.8992L10.5878 15.0106C10.2373 14.756 9.7627 14.756 9.41221 15.0106L5.43648 17.8992C4.65276 18.4686 3.59828 17.7025 3.89763 16.7812L5.41623 12.1074C5.55011 11.6954 5.40345 11.244 5.05296 10.9894L1.07722 8.10081C0.293507 7.53141 0.696283 6.2918 1.66501 6.2918H6.57929C7.01252 6.2918 7.39647 6.01284 7.53035 5.60081L9.04894 0.927052Z" fill="#FF680F"/>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                    <path d="M9.04894 0.927052C9.3483 0.00574112 10.6517 0.00573993 10.9511 0.927051L12.4697 5.60081C12.6035 6.01284 12.9875 6.2918 13.4207 6.2918H18.335C19.3037 6.2918 19.7065 7.53141 18.9228 8.10081L14.947 10.9894C14.5966 11.244 14.4499 11.6954 14.5838 12.1074L16.1024 16.7812C16.4017 17.7025 15.3472 18.4686 14.5635 17.8992L10.5878 15.0106C10.2373 14.756 9.7627 14.756 9.41221 15.0106L5.43648 17.8992C4.65276 18.4686 3.59828 17.7025 3.89763 16.7812L5.41623 12.1074C5.55011 11.6954 5.40345 11.244 5.05296 10.9894L1.07722 8.10081C0.293507 7.53141 0.696283 6.2918 1.66501 6.2918H6.57929C7.01252 6.2918 7.39647 6.01284 7.53035 5.60081L9.04894 0.927052Z" fill="#FF680F"/>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                    <path d="M9.04894 0.927052C9.3483 0.00574112 10.6517 0.00573993 10.9511 0.927051L12.4697 5.60081C12.6035 6.01284 12.9875 6.2918 13.4207 6.2918H18.335C19.3037 6.2918 19.7065 7.53141 18.9228 8.10081L14.947 10.9894C14.5966 11.244 14.4499 11.6954 14.5838 12.1074L16.1024 16.7812C16.4017 17.7025 15.3472 18.4686 14.5635 17.8992L10.5878 15.0106C10.2373 14.756 9.7627 14.756 9.41221 15.0106L5.43648 17.8992C4.65276 18.4686 3.59828 17.7025 3.89763 16.7812L5.41623 12.1074C5.55011 11.6954 5.40345 11.244 5.05296 10.9894L1.07722 8.10081C0.293507 7.53141 0.696283 6.2918 1.66501 6.2918H6.57929C7.01252 6.2918 7.39647 6.01284 7.53035 5.60081L9.04894 0.927052Z" fill="#FF680F"/>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                    <path d="M9.04894 0.927052C9.3483 0.00574112 10.6517 0.00573993 10.9511 0.927051L12.4697 5.60081C12.6035 6.01284 12.9875 6.2918 13.4207 6.2918H18.335C19.3037 6.2918 19.7065 7.53141 18.9228 8.10081L14.947 10.9894C14.5966 11.244 14.4499 11.6954 14.5838 12.1074L16.1024 16.7812C16.4017 17.7025 15.3472 18.4686 14.5635 17.8992L10.5878 15.0106C10.2373 14.756 9.7627 14.756 9.41221 15.0106L5.43648 17.8992C4.65276 18.4686 3.59828 17.7025 3.89763 16.7812L5.41623 12.1074C5.55011 11.6954 5.40345 11.244 5.05296 10.9894L1.07722 8.10081C0.293507 7.53141 0.696283 6.2918 1.66501 6.2918H6.57929C7.01252 6.2918 7.39647 6.01284 7.53035 5.60081L9.04894 0.927052Z" fill="#FF680F"/>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                    <path d="M9.04894 0.927052C9.3483 0.00574112 10.6517 0.00573993 10.9511 0.927051L12.4697 5.60081C12.6035 6.01284 12.9875 6.2918 13.4207 6.2918H18.335C19.3037 6.2918 19.7065 7.53141 18.9228 8.10081L14.947 10.9894C14.5966 11.244 14.4499 11.6954 14.5838 12.1074L16.1024 16.7812C16.4017 17.7025 15.3472 18.4686 14.5635 17.8992L10.5878 15.0106C10.2373 14.756 9.7627 14.756 9.41221 15.0106L5.43648 17.8992C4.65276 18.4686 3.59828 17.7025 3.89763 16.7812L5.41623 12.1074C5.55011 11.6954 5.40345 11.244 5.05296 10.9894L1.07722 8.10081C0.293507 7.53141 0.696283 6.2918 1.66501 6.2918H6.57929C7.01252 6.2918 7.39647 6.01284 7.53035 5.60081L9.04894 0.927052Z" fill="#FF680F"/>
                                </svg>
                            </div>

                            <p class="text-[#021226] text-lg 2xl:text-xl font-manrope font-medium !tracking-normal">
                                En Codefinan, no solo brindamos soluciones:  nos comprometemos con tus resultados.
                            </p>
                            <p class="text-[#021226] text-lg 2xl:text-xl font-manrope font-medium !tracking-normal">
                                Nuestra experiencia se traduce en estrategias  efectivas, seguras y escalables que impulsan el  crecimiento sostenible de cada proyecto que  acompañamos.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>


@section('scripts_importados')
    <script>
        const servicios = document.querySelectorAll('.grilla .servicio');

        // Añade event listeners para el hover
        servicios.forEach(servicio => {
            servicio.addEventListener('mouseenter', () => {
                servicio.style.transform = 'scale(1.05)'; // Aplica el zoom
                servicio.style.transition = 'transform 0.3s ease'; // Suaviza la transición
            });

            servicio.addEventListener('mouseleave', () => {
                servicio.style.transform = 'scale(1)'; // Vuelve al tamaño original
            });
        });
    </script>

    <script>
        document.getElementById('scrollButton').addEventListener('click', function(event) {
            event.preventDefault(); // Evita el comportamiento predeterminado del enlace
            smoothScroll('#productoscarrusel', 800); // 800ms de duración del desplazamiento
        });

        document.getElementById('irawsp').addEventListener('click', function(event) {
            event.preventDefault(); // Evita el comportamiento predeterminado del enlace
            smoothScroll('#bannerprincipal', 800); // 800ms de duración del desplazamiento
        });

        // Función para desplazamiento suave
        function smoothScroll(target, duration) {
            const targetElement = document.querySelector(target);
            const targetPosition = targetElement.getBoundingClientRect().top;
            const startPosition = window.pageYOffset;
            let startTime = null;

            function animation(currentTime) {
                if (startTime === null) startTime = currentTime;
                const timeElapsed = currentTime - startTime;
                const run = easeInOutQuad(timeElapsed, startPosition, targetPosition, duration);
                window.scrollTo(0, run);
                if (timeElapsed < duration) requestAnimationFrame(animation);
            }

            // Función de easing para suavizar el desplazamiento
            function easeInOutQuad(t, b, c, d) {
                t /= d / 2;
                if (t < 1) return c / 2 * t * t + b;
                t--;
                return -c / 2 * (t * (t - 2) - 1) + b;
            }

            requestAnimationFrame(animation);
        }
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
    
        const whatsappNumber = {{ $general[0]->whatsapp }};
        const servicios = document.querySelectorAll(".servicio");
   
                servicios.forEach((servicio) => {
                    
                    const nombreServicio = servicio.querySelector(".nombreServicio").textContent;
                    const mensaje = encodeURIComponent(`Estoy interesad@ en el servicio de tratamiento: *${nombreServicio}*`);
                    const whatsappLink = `https://wa.me/${whatsappNumber}?text=${mensaje}`;
                    const botonAgendar = servicio.querySelector("a");
                    botonAgendar.setAttribute("href", whatsappLink);
                });
        });
    </script>

    <script>   
        $('#modalformcotizar').submit(function(event) {
            event.preventDefault();
            let formDataArray = $(this).serializeArray();

            if (!validarTelefono($('#phone').val())) {
                return;
            };

            Swal.fire({

                title: 'Procesando información',
                html: `Enviando...
                    <p class=" text-text12">Revise su correo de Span</p>
                            <div class="max-w-2xl mx-auto overflow-hidden flex justify-center items-center mt-4 ">
                                <div role="status">
                                    <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                                    </svg>
                                    
                                </div>
                                
                            </div>

            `,
                allowOutsideClick: false,
                onBeforeOpen: () => {
                    Swal.showLoading();
                }
            });

           
            $.ajax({
                url: '{{ route('cotizar') }}',
                method: 'POST',
                data: formDataArray,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').val() // Incluye el token CSRF
                },
                success: function(response) {
                
                    Swal.close();

                    Swal.fire({
                        title: response.message,
                        icon: "success",
                    });

                    $('#modalformcotizar')[0].reset();
                },
                error: function(error) {
                    Swal.close();
                    const obj = error.responseJSON.message;
                    const keys = Object.keys(error.responseJSON.message);
                    let flag = false;
                    keys.forEach(key => {
                        if (!flag) {
                            const e = obj[key];
                            Swal.fire({
                                title: error.message,
                                text: "Ha ocurrido un error",
                                icon: "warning",
                            });
                            flag = true; 
                        }
                    });
                }
            });
        })
    </script>

    <script>
        $(document).ready(function () {
            $(document).on('click', '.btn-cotizar', function () {
                const id = $(this).data('id');

                $.ajax({
                    url: '{{ route('obtenerdata') }}',
                    method: 'POST',
                    data: {
                        id: id, 
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
                    },
                    success: function(response) {
                        $('#nombreplan').text(response.producto.producto);
                        $('#caracteristicas').text(response.producto.extract);
                        $('#name').val(response.producto.producto);
                        $('#extract').val(response.producto.extract);
                    },
                    error: function(error) {
                        console.error('Error:', error);
                    }
                });


                $(`#modalcotizar`).modal({
                    show: true,
                    fadeDuration: 400,
                });
            });

            $(document).on('click', '.botoncanales', function () {
                const id = $(this).data('id');
                $(`#modaldetalleplan-${id}`).modal({
                    show: true,
                    fadeDuration: 400,
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const items = document.querySelectorAll('.swiper-slide .flex');
            const mainImage = document.getElementById('imagen-zona');

            items.forEach(item => {
                item.addEventListener('click', function () {
                    const newImageSrc = this.getAttribute('data-image');
                    
                    // Aplicar efecto fade-out
                    mainImage.style.opacity = 0;

                    // Cambiar la imagen después del fade-out
                    setTimeout(() => {
                        mainImage.src = newImageSrc;

                        // Aplicar efecto fade-in
                        mainImage.style.opacity = 1;
                    }, 300); // Coincide con la duración de la transición CSS
                });
            });
        });

        var swiper = new Swiper(".slider", {
            slidesPerView: 1,
            spaceBetween: 0,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
            },
            pagination: {
                el: ".slider-pagination",
                clickable: true,
            },
        });



        var swiper = new Swiper(".ofertas", {
            slidesPerView: 2.2,
            spaceBetween: 10,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            scrollbar: {
                el: '.swiper-scrollbar',
                draggable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                   
                },
                768: {
                    slidesPerView: 1.2,

                  
                },
                850: {
                    slidesPerView: 1.3,

                  
                },
                920: {
                    slidesPerView: 1.4,

                  
                },
                1024: {
                    slidesPerView: 1.6,
                  
                },
                1280: {
                    slidesPerView: 2.2,
                    spaceBetween: 20,
                  
                },
                1300: {
                    slidesPerView: 2.2,
                    spaceBetween: 20,
                  
                },
                1500: {
                    slidesPerView: 2.4,
                    spaceBetween: 20,
                  
                },
                1600: {
                    slidesPerView: 2.9,
                    spaceBetween: 20,
                  
                },
            },
        });

        var swiper = new Swiper(".servicios", {
            slidesPerView: 1,
            spaceBetween: 10,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            scrollbar: {
                el: '.swiper-scrollbar',
                draggable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                   
                },
            },
            pagination: {
                    el: ".swiper-servicios",
                    clickable: true,
                    dynamicBullets: true,
            },
        });

        var swiper = new Swiper(".lugares", {
            slidesPerView: 3,
            direction: 'vertical',
            spaceBetween: 10,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            scrollbar: {
                el: '.swiper-scrollbar',
                draggable: true,
            },
        });

        var swiper = new Swiper(".slider_blog", {
            slidesPerView: 3,
            spaceBetween: 30,
            centeredSlides: false,
            initialSlide: 0,
            grabCursor: true,
            loop: true,
             autoplay: {
                delay: 2500, 
                disableOnInteraction: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                   
                },
                750: {
                    slidesPerView: 2,
                   
                },
                1250: {
                    slidesPerView: 3,
                   
                },
            },
            pagination: {
                el: ".swiper-pagination_productos",
                clickable: true,
            },
        });

        var swiper = new Swiper(".categorias", {
            slidesPerView: 4,
            spaceBetween: 15,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            navigation: true,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                   
                },
                768: {
                    slidesPerView: 2,
                  
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1500: {
                    slidesPerView: 4,
                    spaceBetween: 50,
                },
            },
        });


        var swiper = new Swiper(".beneficios", {
            slidesPerView: 3,
            spaceBetween: 30,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 2000, 
                disableOnInteraction: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                   
                },
                600: {
                    slidesPerView: 2,
                   
                },
                950: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
                1600: {
                    slidesPerView: 3,
                    spaceBetween: 60,
                },
            },
            pagination: {
                el: ".swiper-pagination_productos",
                clickable: true,
            },
        });


        var swiper = new Swiper(".testimonios", {
            slidesPerView: 1,
            spaceBetween: 15,
            loop: true,
            centeredSlides: false,
            pagination: {
                    el: ".swiper-testimonios",
                    clickable: true,
                    dynamicBullets: true,
            },
        });
    </script>

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
