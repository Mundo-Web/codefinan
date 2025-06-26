<header id="main-header" class="sticky top-0 w-full z-40 bg-[#121b2e]">

    <div class="left-0 right-0">
        {{-- Navbar --}}
        <div class="flex flex-row items-center justify-between w-full px-[5%]">
            <nav class="flex h-[80px] 2xl:h-[100px] items-center justify-between gap-10">
                <div class="flex justify-center items-center z-40 mx-auto">
                    <a href="{{ url('/') }}">
                        <img
                            src="{{ asset('images/svg/logocodefinan.svg') }}"
                            alt="Adriana Pezo"
                            class=" max-w-52 md:max-w-80 w-full 2xl:max-w-96"
                        />
                    </a>
                </div>
            </nav>

            <div>
                <a target="_blank" href="https://api.whatsapp.com/send?phone=51{{ $general[0]->whatsapp }}&text={{ $general[0]->mensaje_whatsapp }}" class="bg-[#4eba61] font-manrope font-extrabold text-white px-5 sm:px-10 py-3 rounded-md uppercase tracking-wide flex flex-row gap-2">
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
                  <span class="hidden md:flex">Contáctanos</span>
                </a>
            </div>
        </div>
    </div>

    <div class="flex justify-end w-full mx-auto z-[100] relative">
      <div class="fixed bottom-6 sm:bottom-[2rem] lg:bottom-[4rem] z-20 cursor-pointer">
        <a target="_blank" id="whatsapp-toggle" 
          href="https://api.whatsapp.com/send?phone=51{{ $general[0]->whatsapp }}&text={{ $general[0]->mensaje_whatsapp }}"
          >
          <img src="{{ asset('images/svg/wsp.svg') }}" alt="whatsapp" class="mr-3 w-16 h-16 md:w-[85px] md:h-[85px]">
        </a>
      </div>
    </div>
  
  {{-- <div class="flex justify-end w-11/12 mx-auto z-[100] relative">
    <div class="fixed bottom-6 sm:bottom-[2rem] lg:bottom-[4rem] z-20 cursor-pointer">
      <a target="_blank" id="whatsapp-toggle" 
        href="https://api.whatsapp.com/send?phone={{ $general[0]->whatsapp }}&text={{ $general[0]->mensaje_whatsapp }}"
         >
        <img src="{{ asset('images/svg/image_31.svg') }}" alt="whatsapp" class="w-16 h-16 md:w-24 md:h-24">
      </a>
    </div>
  </div>

  <div class="fixed bottom-24 right-6 lg:bottom-40 z-[99] shadow-xl hidden animate-once animate-duration-1000" id="whatsapp-chat">
    <div class="w-72 h-auto rounded-xl">
      <div class="bg-green-500 font-mediumDisplay font-normal text-white text-center py-3 rounded-t-xl"> Whatsapp Chat </div>
      
      <div id="asesor-1" class="bg-white shadow-xl hover:bg-slate-100 cursor-pointer"  onclick="showForm('form-1')">
          <div class="flex flex-row p-3 activa">
              <div class="flex flex-col justify-center items-center"><img class="w-10" src="{{asset('images/img/asistente.png')}}"/></div>
              <div class="px-2">
                <a>
                  <p class="text-slate-400 font-roboto text-text14 ">Ventas de Productos Químicos</p>
                  <h3 class="text-slate-700 font-roboto text-text16 font-semibold">{{$general[0]->support_one}}</h3>
                  <div class="flex flex-row items-center "><p class="text-slate-400 font-roboto text-text12">En Línea </p><div class="w-2 h-2 bg-green-400 rounded-full ml-1"></div></div>
                </a>
              </div>
          </div>
      </div>
      
      <div id="asesor-2" class="bg-white shadow-xl rounded-b-xl hover:bg-slate-100 cursor-pointer"  onclick="showForm('form-2')">
        <div class="flex flex-row p-3">
            <div class="flex flex-col justify-center items-center"><img class="w-10" src="{{asset('images/img/asistente.png')}}"/>
            </div>
            <div class="px-2">
                <a >
                  <p class="text-slate-400 font-roboto text-text14 ">Ventas de Tratamiento de Agua</p>
                  <h3 class="text-slate-700 font-roboto text-text16 font-semibold ">{{$general[0]->support_two }}</h3>
                  <div class="flex flex-row items-center "><p class="text-slate-400 font-roboto text-text12">En Línea </p><div class="w-2 h-2 bg-green-400 rounded-full ml-1"></div></div>
                </a>
            </div>
        </div>
      </div>

      <div id="form-1" class="bg-white p-4 hidden">
        <form class="space-y-2" id="dataWhatsapp">
          @csrf
          <input type="text" name="full_name" placeholder="Nombre Completo" 
              class="border-green-500 border-2 focus:!border-green-500 focus:!border-2 focus:!ring-0 focus:!ring-transparent
                text-gray-600 font-regularDisplay w-full py-2 px-2 rounded-xl text-sm  placeholder-opacity-25 font-light  bg-white">

          <input type="email" name="email" 
              placeholder="Correo Electrónico"
              class="border-green-500 border-2 focus:!border-green-500 focus:!border-2 focus:!ring-0 focus:!ring-transparent
                  text-gray-600 font-regularDisplay w-full py-2 px-2 rounded-xl text-sm  placeholder-opacity-25 font-light  bg-white">

          <input type="text" name="phone" placeholder="Teléfono"
              class="border-green-500 border-2 focus:!border-green-500 focus:!border-2 focus:!ring-0 focus:!ring-transparent
                    text-gray-600 font-regularDisplay w-full py-2 px-2 rounded-xl text-sm  placeholder-opacity-25 font-light  bg-white">
          <input type="hidden" name="client_width" id="anchodispositivo">
          <input type="hidden" name="client_height" id="largodispositivo">
          <input type="hidden" name="client_latitude" id="latitud">
          <input type="hidden" name="client_longitude" id="longitud">
          <input type="hidden" name="client_system" id="sistema">
          <input type="hidden" id="tipo" placeholder="tipo" name="source" value="WSP - Productos Químicos" />
             

          <button type="submit"
              class="font-outfitRegular font-semibold text-white py-2 px-2 bg-green-500 justify-center items-center rounded-xl inline-flex text-text16 w-full">
              <span>Enviar</span>
          </button>
        </form>
        <button onclick="hideForm('form-1')" class="mt-2 text-red-500 font-regularDisplay font-semibold">Cerrar</button>
      </div>
     
      <div id="form-2" class="bg-white p-4 hidden">
        <form class="space-y-2" id="dataWhatsapp2">
          @csrf
          <input type="text" name="full_name" placeholder="Nombre Completo" required
              class="border-green-500 border-2 focus:!border-green-500 focus:!border-2 focus:!ring-0 focus:!ring-transparent
                text-gray-600 font-regularDisplay w-full py-2 px-2 rounded-xl text-sm  placeholder-opacity-25 font-light  bg-white">

          <input type="email" name="email" id="email_wsp"
              placeholder="Correo Electrónico" required
              class="border-green-500 border-2 focus:!border-green-500 focus:!border-2 focus:!ring-0 focus:!ring-transparent
                  text-gray-600 font-regularDisplay w-full py-2 px-2 rounded-xl text-sm  placeholder-opacity-25 font-light  bg-white">

          <input type="text" name="phone" id="telefono_wsp" placeholder="Teléfono"
              required
              class="border-green-500 border-2 focus:!border-green-500 focus:!border-2 focus:!ring-0 focus:!ring-transparent
                    text-gray-600 font-regularDisplay w-full py-2 px-2 rounded-xl text-sm  placeholder-opacity-25 font-light  bg-white">
            <input type="hidden" name="client_width" id="anchodispositivo">
            <input type="hidden" name="client_height" id="largodispositivo">
            <input type="hidden" name="client_latitude" id="latitud">
            <input type="hidden" name="client_longitude" id="longitud">
            <input type="hidden" name="client_system" id="sistema">
            <input type="hidden" id="tipo" placeholder="tipo" name="source" value="WSP - Tratamiento de Agua" />

            <button type="submit"
              class="font-outfitRegular font-semibold text-white py-2 px-2 bg-green-500 justify-center items-center rounded-xl inline-flex text-text16 w-full">
              <span>Enviar</span>
          </button>
        </form>
        <button onclick="hideForm('form-2')" class="mt-2 text-red-500 font-regularDisplay font-semibold">Cerrar</button>
      </div>
    </div>
  </div> --}}

</header>


<script>
  function showForm(formId) {
    // Oculta todos los formularios
    document.getElementById('form-1').classList.add('hidden');
    document.getElementById('form-2').classList.add('hidden');
    document.getElementById('asesor-1').classList.add('hidden');
    document.getElementById('asesor-2').classList.add('hidden');
    // Muestra el formulario correspondiente
    document.getElementById(formId).classList.remove('hidden');
    }

    function hideForm(formId) {
        document.getElementById(formId).classList.add('hidden');
        document.getElementById('asesor-1').classList.remove('hidden');
    document.getElementById('asesor-2').classList.remove('hidden');
    }

  const menu = document.querySelector(".menu");
  const body = document.body;
  menu.addEventListener("click", (e) => {
    body.classList.toggle("overflow-hidden");
  });
</script>

<script>
  document.getElementById('whatsapp-toggle').addEventListener('click', function() {
      var chatBox = document.getElementById('whatsapp-chat');
      if (chatBox.classList.contains('hidden')) {
          chatBox.classList.remove('hidden');
          chatBox.classList.add('animate-fade-up');
      } else {
          chatBox.classList.add('hidden');
          chatBox.classList.remove('animate-fade-up');
      }
  });
</script>

<script>
  
  $(document).ready(function() {
    $('#buscarproducto').keyup(function() {

      var query = $(this).val().trim();

      if (query !== '') {
        $.ajax({
          url: '{{ route('buscar') }}',
          method: 'GET',
          data: {
            query: query
          },
          success: function(data) {
            var resultsHtml = '';
            var url = '{{ asset('') }}';
            data.forEach(function(result) {
              resultsHtml +=
                '<a class="bg-white z-50" href="/producto/' + result.id +
                '"> <div class="bg-white z-50 w-full flex flex-row py-3 px-3 hover:bg-slate-200"> ' +
                ' <div class="w-[20%]"><img class="w-14 rounded-md" src="' +
                url + result.imagen + '" /></div>' +
                ' <div class="flex flex-col justify-center w-[80%] pl-3"> ' +
                ' <h2 class="text-left line-clamp-1">' + result.producto +
                '</h2> ' +
                '<p class="text-text12 text-left line-clamp-1">' + result.categoria.name + '</p></div> ' +
                '</div></a>';
            });

            $('#resultados').html(resultsHtml);
          }
        });
      } else {
        $('#resultados').empty();
      }
    });
  });


  $(document).ready(function() {
    $('#buscarproducto2').keyup(function() {

      var query = $(this).val().trim();

      if (query !== '') {
        $.ajax({
          url: '{{ route('buscar') }}',
          method: 'GET',
          data: {
            query: query
          },
          success: function(data) {
            var resultsHtml = '';
            var url = '{{ asset('') }}';
            data.forEach(function(result) {
              resultsHtml +=
                '<a class="bg-white z-50" href="/producto/' + result.id +
                '"> <div class="bg-white z-50 w-full flex flex-row py-3 px-3 hover:bg-slate-200"> ' +
                ' <div class="w-[20%]"><img class="w-14 rounded-md" src="' +
                url + result.imagen + '" /></div>' +
                ' <div class="flex flex-col justify-center w-[80%] pl-3"> ' +
                ' <h2 class="text-left line-clamp-1">' + result.producto +
                '</h2> ' +
                '<p class="text-text12 text-left line-clamp-1">' + result.categoria.name + '</p></div> ' +
                '</div></a>';
            });

            $('#resultados2').html(resultsHtml);
          }
        });
      } else {
        $('#resultados2').empty();
      }
    });
  });
</script>

<script>
    document.addEventListener('click', function(event) {
      var input = document.getElementById('buscarproducto2');
      var resultados = document.getElementById('resultados2');

      if (input && resultados) { // Verificar que ambos elementos existen
          var isClickInsideInput = input.contains(event.target);
          var isClickInsideResultados = resultados.contains(event.target);

          if (!isClickInsideInput && !isClickInsideResultados) {
              input.value = '';
              $('#resultados2').empty();
          }
      }
  });

  document.addEventListener('click', function(event) {
      var input = document.getElementById('buscarproducto2');
      var resultados = document.getElementById('resultados2');

      // Verificar que los elementos existen
      if (input && resultados) {
          var isClickInsideInput = input.contains(event.target);
          var isClickInsideResultados = resultados.contains(event.target);

          if (!isClickInsideInput && !isClickInsideResultados) {
              input.value = '';
              $('#resultados2').empty();
          }
      }
  });
</script>
