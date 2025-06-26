<style>
    #modalPoliticasDev #modalTerminosCondiciones {
        height: 70vh;
        /* Establece la altura del modal al 70% de la altura de la ventana gráfica */
        overflow-y: auto;
        /* Permite el desplazamiento vertical si el contenido excede la altura del modal */
        /*grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 */
    }
</style>
<footer class="">
    <div class="grid grid-cols-1 w-full px-[5%] xl:px-[7%] py-10 lg:py-16 gap-10 md:gap-5 bg-[#031730]">
        <div class="w-full flex flex-col md:flex-row md:justify-between md:items-center gap-10 lg:gap-5 col-span-1">
            
            <div class="flex flex-col gap-7 md:text-center">
                <h3 class="text-2xl 2xl:text-3xl font-manrope font-bold text-white">Conversemos, agenda tu cita ahora</h3>
                
                <div class="flex">
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=51{{ $general[0]->whatsapp }}&text={{ $general[0]->mensaje_whatsapp }}" class="w-auto bg-[#4eba61] font-manrope font-extrabold text-white px-5 sm:px-10 py-3 rounded-md uppercase tracking-wide flex flex-row gap-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <g clip-path="url(#clip0_57_247)">
                          <path d="M0 24.0002C0.12869 23.5263 0.248084 23.0822 0.369923 22.6391C0.789268 21.1102 1.21302 19.5827 1.62355 18.0513C1.65487 17.9347 1.63432 17.7761 1.57805 17.6677C-0.391453 13.8705 -0.483445 10.0376 1.54037 6.26187C3.32344 2.93558 6.1419 0.835656 9.88077 0.209535C14.8752 -0.62692 18.9918 1.04257 21.8725 5.18873C26.7823 12.2547 22.7601 21.9403 14.246 23.5985C11.5635 24.1207 8.98826 23.7162 6.55195 22.4746C6.38607 22.3902 6.24221 22.3785 6.06557 22.4254C4.12787 22.9373 2.18822 23.4429 0.248573 23.9489C0.180068 23.967 0.110096 23.9777 0 24.0002ZM2.87327 21.178C4.04273 20.872 5.15593 20.5895 6.26276 20.2854C6.52014 20.2147 6.71587 20.2498 6.94438 20.384C9.13603 21.6714 11.4921 22.0984 13.9842 21.5962C21.021 20.1781 24.2955 12.0478 20.1246 6.21307C17.7309 2.86481 14.3575 1.50326 10.2923 2.17574C5.62323 2.94875 2.24645 6.94509 2.1207 11.6705C2.06638 13.7109 2.61882 15.5917 3.73006 17.3061C3.82988 17.4603 3.86071 17.595 3.80688 17.78C3.55978 18.6311 3.33029 19.4865 3.09591 20.3411C3.02349 20.6041 2.95547 20.8686 2.87327 21.178Z" fill="white"/>
                          <path d="M15.2814 17.9926C14.3845 17.9784 13.6417 17.6656 12.8847 17.3811C10.3271 16.4202 8.51662 14.6106 7.07656 12.3658C6.6626 11.7206 6.25695 11.0725 6.02844 10.3347C5.57191 8.86036 5.79406 7.53687 6.93857 6.43592C7.4 5.99231 7.95684 5.9196 8.55136 6.10651C8.83027 6.19435 9.01768 6.38907 9.12043 6.66919C9.40619 7.44757 9.71153 8.21912 9.97821 9.00335C10.0335 9.16537 10.0066 9.40059 9.92487 9.55286C9.79667 9.79198 9.59116 9.98963 9.41598 10.2029C9.34356 10.2907 9.26234 10.3717 9.19139 10.4606C8.90367 10.8217 8.8978 10.9554 9.12631 11.3605C9.99093 12.8928 11.2147 14.0494 12.7854 14.8429C12.894 14.8981 13.0056 14.9488 13.1206 14.9898C13.3897 15.0855 13.627 15.0567 13.8247 14.821C14.1178 14.472 14.4285 14.1387 14.7212 13.7893C14.9751 13.4853 15.1067 13.4311 15.4806 13.6165C16.1876 13.9679 16.8849 14.3398 17.5827 14.7092C18.2212 15.0469 18.2408 15.0942 18.1077 15.7994C17.8905 16.9506 16.9334 17.7905 15.6484 17.9569C15.5031 17.9755 15.3568 17.9852 15.2814 17.9926Z" fill="white"/>
                        </g>
                        <defs>
                          <clipPath id="clip0_57_247">
                            <rect width="24" height="24" fill="white"/>
                          </clipPath>
                        </defs>
                      </svg>
                      <span>Contáctanos</span>
                    </a>
                </div>
            </div>

            <div class="flex flex-col gap-5">
                <p class="font-manrope text-lg 2xl:text-xl text-white font-semibold">
                    Datos de contacto
                </p>
                <div class="flex flex-col gap-2 text-white font-manrope text-base">
                    <a class="flex flex-row gap-2 items-center justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                            <circle cx="3" cy="3" r="3" fill="white"/>
                        </svg>
                        (+51) {{ $general[0]->whatsapp ?? '999 999 999' }}
                    </a>
                    <a class="flex flex-row gap-2 items-center justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                            <circle cx="3" cy="3" r="3" fill="white"/>
                        </svg>
                        {{ $general[0]->email ?? 'contacto@codefinan.com' }}
                    </a>
                    <a class="flex flex-row gap-2 items-center justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                            <circle cx="3" cy="3" r="3" fill="white"/>
                        </svg>
                        RUC 20603672624
                    </a>
                    <a class="flex flex-row gap-2 items-center justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                            <circle cx="3" cy="3" r="3" fill="white"/>
                        </svg>
                        Razón social: CODEFINAN S.A.C.
                    </a>
                </div>
            </div>
        
            {{-- <div class="flex flex-col gap-5">
                <p class="font-gilroy_bold text-base uppercase text-white tracking-wider font-semibold">
                    Aviso legal
                </p>
                <div class="flex flex-col gap-2 text-white font-gilroy_regular text-base">
                    <a class="cursor-pointer" id="linkPoliticas">Política de Privacidad</a>
                    <a class="cursor-pointer" id="linkTerminos">Términos y Condiciones</a>
                </div>
            </div> --}}

            {{-- <div class="flex flex-col gap-5">
                <p class="font-gilroy_bold text-base uppercase text-white tracking-wider font-semibold">
                   DATOS DE CONTACTO
                </p>
                <div class="flex flex-col gap-2 text-white font-gilroy_regular text-base">
                    <a>{{ $general[0]->address }}, {{ $general[0]->inside }},
                                        {{ $general[0]->district }} - {{ $general[0]->city }}</a>
                    <a>Correo Electrónico: <br> {{ $general[0]->email }}</a> 
                    <a>Teléfono: {{ $general[0]->office_phone }}</a>
                </div>
            </div> --}}
        </div>
    </div>

    <div class="bg-[#E9EFFC] py-3 text-sm 2xl:text-base text-center font-manrope text-[#021226] font-medium">
        © 2025 Codefinan. Todos los derechos reservados.
    </div>

    {{-- <div
        class="bg-[#0E315D] flex flex-col items-start gap-3 md:flex-row md:justify-between md:items-center w-full px-[5%] lg:px-[8%] py-5 bg-cover">
        <a href="#" target="_blank" class="text-white font-gilroy_regular  text-sm text-center">Copyright &copy; 2025 PapayaHosting.
            Reservados todos los derechos</a>
       
        <div class="flex justify-start items-center gap-5 mx-auto sm:mx-0">
            <div class="flex flex-row gap-5">
                @if ($general[0]->facebook)
                    <a href="{{ $general[0]->facebook }}" target="_blank"
                        class="flex justify-start items-center gap-2 text-white font-roboto font-normal">
                        <i class="fa-brands fa-facebook-f text-xl"></i>
                    </a>
                @endif
                @if ($general[0]->instagram)
                    <a href="{{ $general[0]->instagram }}" target="_blank"
                        class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14">
                        <i class="fa-brands fa-instagram text-xl"></i>
                    </a>
                @endif
                @if ($general[0]->twitter)
                    <a href="{{ $general[0]->twitter }}" target="_blank"
                        class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14">
                        <i class="fa-brands fa-twitter text-xl"></i>
                    </a>
                @endif
                @if ($general[0]->linkedin)
                    <a href="{{ $general[0]->linkedin }}" target="_blank"
                        class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14">
                        <i class="fa-brands fa-linkedin text-xl"></i>
                    </a>
                @endif
                @if ($general[0]->tiktok)
                    <a href="{{ $general[0]->tiktok }}" target="_blank"
                        class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14">
                        <i class="fa-brands fa-tiktok text-xl"></i>
                    </a>
                @endif
            </div>
        </div>
    </div> --}}

    <div id="modalTerminosCondiciones" class="modal" style="max-width: 900px !important;width: 100% !important;  ">
        <!-- Modal body -->
        <div class="p-4 ">
            <h1 class="font-gilroy_bold text-2xl text-center">Terminos y condiciones</h1>
            <p class="font-gotham_book p-2 prose">{!! $termsAndCondicitions->content ?? '' !!}</p>
        </div>
    </div>

    <div id="modalPoliticasDev" class="modal" style="max-width: 900px !important; width: 100% !important;  ">
        <!-- Modal body -->
        <div class="p-4 ">
            <h1 class="font-gilroy_bold text-2xl text-center">Politicas de privacidad</h1>
            <p class="font-gotham_book p-2 prose">{!! $politicDev->content ?? '' !!}</p>
        </div>
    </div>

</footer>

<script>
    $(document).ready(function() {
        $(document).on('click', '#linkTerminos', function() {
            $('#modalTerminosCondiciones').modal({
                show: true,
                fadeDuration: 400,
            })
        });

        $(document).on('click', '#linkTerminos2', function() {
            $('#modalTerminosCondiciones').modal({
                show: true,
                fadeDuration: 400,
            })
        });

        $(document).on('click', '#linkPoliticas', function() {
            $('#modalPoliticasDev').modal({
                show: true,
                fadeDuration: 400,
            })
        });
    });
</script>
