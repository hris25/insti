<header style="width: 100%; position: relative; margin: 0; padding: 0; top: 0; display: block;">
    <div class="flex w-full" style="height: 110px;">
        <div class="flex-1 flex flex-col h-full">
            <div class="flex items-center justify-between bg-[#0d4293] flex-1 px-6 h-[65%] pl-[170px] pr-[170px]">
                <div class="text-white flex-1 min-w-0 truncate">
                    <h1 class="font-bold text-xl leading-tight truncate">INSTI</h1>
                    <p class="text-xs leading-tight truncate">Institut Nationale Supérieur de Technologie Industrielle<br>de Lokossa</p>
                </div>
                <div class="flex items-center gap-4 flex-shrink-0">
                    <a href="{{ route('acces-rapide') }}" class="flex items-center gap-1 text-white text-sm font-medium hover:opacity-80 transition">
                        <img src="{{ asset('images/info-circle-fill.svg') }}" alt="Info" class="w-4 h-4 text-white">
                        Accès rapide
                    </a>
                    <span class="text-white font-bold">|</span>
                    <a href="{{ route('observatoire') }}" class="flex items-center gap-1 text-white text-sm font-medium hover:opacity-80 transition">
                        <img src="{{ asset('images/snow3.svg') }}" alt="Observatoire" class="w-4 h-4 text-white">
                        Observatoire
                    </a>
                    <span class="text-white font-bold">|</span>
                    <a href="{{ route('contact') }}" class="flex items-center gap-1 text-white text-sm font-medium hover:opacity-80 transition">
                        <img src="{{ asset('images/person-fill.svg') }}" alt="Contact" class="w-4 h-4 text-white">
                        Nous écrire
                    </a>
                </div>
            </div>
            <nav class="bg-white shadow-sm w-full h-[35%]">
                <ul class="flex justify-center items-center gap-6 py-1 text-[#0d4293] font-bold text-base h-full">
                    <li><a href="{{ route('home') }}" class="hover:text-[#3B68B5] transition">ACCUEIL</a></li>
                    <span class="text-[#0d4293] font-bold">|</span>
                    <li><a href="{{ route('formations') }}" class="hover:text-[#3B68B5] transition">FORMATIONS</a></li>
                    <span class="text-[#0d4293] font-bold">|</span>
                    <li><a href="{{ route('vie-estudiantine') }}" class="hover:text-[#3B68B5] transition">VIE ACADÉMIQUE</a></li>
                    <span class="text-[#0d4293] font-bold">|</span>
                    <li><a href="{{ route('mediatheque.index') }}" class="hover:text-[#3B68B5] transition">MÉDIATHEQUE</a></li>
                    <span class="text-[#0d4293] font-bold">|</span>
                    <li><a href="#" class="hover:text-[#3B68B5] transition">CONTACTS</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <img src="{{ asset('images/logo-right.png') }}" alt="Logo UNSTIM" class="absolute left-10 top-[-10px] bottom-0 my-auto h-full w-[110px] object-contain z-20 logo-shadow-custom">
    <img src="{{ asset('images/logo-left.png') }}" alt="Logo INSTI LOK UKSTIM" class="absolute right-10 top-0 bottom-0 my-auto h-full w-[110px] object-contain z-20 logo-shadow-custom">
</header>