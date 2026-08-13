<!--
    Barra superior.
    - flex + items-center: alinea verticalmente todo su contenido.
    - h-16: misma altura que el header del sidebar, para que ambos "calcen".
    - border-b + bg-white: la línea separadora y el fondo claro que se ve en la captura.
    - gap-x-4: separación entre el buscador y los íconos de la derecha.
-->
<header class="navbar flex h-16 flex-shrink-0 items-center gap-x-4 border-b border-gray-200 bg-white px-4 sm:px-6">

    {{-- ===================== BUSCADOR ===================== --}}
    {{--
        flex-1: ocupa todo el espacio sobrante, empujando los íconos de la
        derecha hacia el borde derecho.
        relative en el contenedor + absolute en el ícono: así el ícono de la
        lupa queda "flotando" dentro del input sin usar JS.
    --}}
    <div class="relative flex flex-1 items-center">
        <svg class="pointer-events-none absolute left-0 h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
        </svg>
        <input
            type="search"
            name="buscador"
            placeholder="Buscador..."
            class="w-full border-0 bg-transparent py-2 pl-7 text-sm text-gray-900 placeholder:text-gray-400 focus:outline-none focus:ring-0"
        >
    </div>

    {{-- ===================== ÍCONOS DE LA DERECHA ===================== --}}
    <div class="flex items-center gap-x-3">

        {{-- Campana de notificaciones --}}
        <button type="button" class="flex h-9 w-9 items-center justify-center rounded-full text-gray-400 hover:bg-gray-100 hover:text-gray-600">
            <span class="material-symbols-outlined">notifications</span>
        </button>

        {{-- Línea divisoria vertical--}}
        <div class="hidden h-6 w-px bg-gray-200 lg:block"></div>

        {{-- ===================== PERFIL DE USUARIO ===================== --}}
        <div class="flex items-center gap-x-3">
            <img
                src="https://ui-avatars.com/api/?name={{ 'Max Horna' }}&background=e5e7eb&color=374151"
                alt="Avatar"
                class="h-8 w-8 flex-shrink-0 rounded-full bg-gray-100"
            >
            <span class="hidden text-sm font-semibold text-gray-900 lg:block">
                {{ 'Max Horna' }}
            </span>
            <svg class="hidden h-4 w-4 text-gray-400 lg:block" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </div>
    </div>
</header>