@extends('_layouts.main')

@section('body')
<div class="min-h-screen relative bg-cover" style="background-image: url(assets/images/home.jpg)">
    <div class="backdrop-blur-lg bg-black/40 absolute w-full min-h-screen flex items-center">
        <div class="container mx-auto">
            <div class="text-center space-y-6">
                <h1 class="uppercase text-white font-bold text-2xl md:text-5xl">Nos estamos renovando</h1>
                <p class="text-base md:text-lg text-white uppercase tracking-widest">Este sitio se encuentra en construcción</p>
                <div>
                    <div class="relative w-2/3 sm:w-1/4 bg-gray-200 rounded-full mx-auto">
                        <div style="width: 80%" class="absolute top-0 h-4 rounded-full shim-blue"></div>
                    </div>
                    <div class="flex w-2/3 sm:w-1/4 mx-auto">
                        <div class="w-1/2 flex justify-start pt-3 text-sm text-white">0%</div>
                        <div class="w-1/2 flex justify-end pt-3 text-sm text-white">100%</div>
                    </div>
                    <div class="flex justify-center mt-5">
                        <a href="https://www.facebook.com/focosalemanes.mx" target="blank">
                        <div class="flex items-center justify-center w-10 h-10 rounded-full border border-white text-white text-2xl transition transform hover:scale-110">
                            <i class="lni lni-facebook-fill"></i>
                        </div>
                        </a>

                    </div>
                </div>
                <div class="text-white text-sm space-y-3">
                   <div>
                    <a href="tel:3336368500"><p>Tel: 33 3636 8500</p></a>
                   </div>
                   <div>
                    <a href="mailto:sbravoc@focosalemanes.mx"><p>sbravoc@focosalemanes.mx</p></a>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute top-10 w-full">
        <img class="mx-auto md:h-full h-16" src="assets/images/logo.png" alt="">
    </div>
    <div class="absolute bottom-10 w-full">
        <p class="text-white text-center">2023 Todos los derechos reservados Focos Alemanes</p>
    </div>


</div>
</div>
@endsection
