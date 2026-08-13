<!--
    Contenedor del sidebar.
    - fixed + inset-y-0 + left-0: lo pega al borde izquierdo y ocupa todo el alto
      de la pantalla, sin importar el scroll del contenido.
    - w-64: ancho fijo de 16rem (256px).
    - bg-white + border-r: fondo claro y una línea a la derecha que lo separa
      del contenido.
    - flex flex-col: apila verticalmente header / nav / footer.
-->
<div class="sidebar-panel fixed inset-y-0 left-0 z-40 flex w-64 flex-col border-r border-gray-200 bg-white">

    {{-- ===================== LOGO / MARCA ===================== --}}
    <div class="flex h-16 flex-shrink-0 items-center gap-2.5 border-b border-gray-200 px-5">
        <a href="#" class="flex items-center gap-2.5 min-w-0">
            <span class="text-base font-black tracking-tight text-gray-900">Max´Os</span>
        </a>
    </div>

    {{-- ===================== NAVEGACIÓN PRINCIPAL ===================== --}}
    {{--
        flex-1: hace que este bloque "crezca" y empuje el footer hacia abajo.
        overflow-y-auto: si algún día hay muchos enlaces, este bloque scrollea
        y el header/footer quedan fijos.
    --}}
    <div class="flex-col flex-1 overflow-y-auto px-3 py-4">
        <div>
            {{-- "Dashboard" queda marcado como activo a mano, con las clases
                bg-gray-100 text-gray-900. Cuando armes tus rutas reales,
                ahí sí conviene volver a hacerlo dinámico. --}}
            <a href="#" class="group mt-1 flex items-center gap-3 rounded-md px-3 py-2 text-sm font-semibold text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                <span class="material-symbols-outlined">
                home
                </span>
                inicio
            </a>

            <a href="#" class="group mt-1 flex items-center gap-3 rounded-md px-3 py-2 text-sm font-semibold text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                <span class="material-symbols-outlined">
                group
                </span>
                grupo
            </a>

            <a href="#" class="group mt-1 flex items-center gap-3 rounded-md px-3 py-2 text-sm font-semibold text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                <span class="material-symbols-outlined">
                work
                </span>
                Projectos
            </a>

            <a href="#" class="group mt-1 flex items-center gap-3 rounded-md px-3 py-2 text-sm font-semibold text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                <span class="material-symbols-outlined">
                calendar_today
                </span>
                Calendario
            </a>

            <a href="#" class="group mt-1 flex items-center gap-3 rounded-md px-3 py-2 text-sm font-semibold text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                <span class="material-symbols-outlined">
                description
                </span>
                Documentos
            </a>

            <a href="#" class="group mt-1 flex items-center gap-3 rounded-md px-3 py-2 text-sm font-semibold text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                <span class="material-symbols-outlined">
                analytics
                </span>
                Reportes
            </a>
        </div>

        <div class="mt-auto p-2">
            <div class="text-xs font-semibold uppercase text-gray-400">Configuración</div>

            <a href="#" class="group mt-1 flex items-center gap-3 rounded-md px-3 py-2 text-sm font-semibold text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                <span class="material-symbols-outlined">
                settings
                </span>
                Ajustes
            </a>

            <a href="#" class="group mt-1 flex items-center gap-3 rounded-md px-3 py-2 text-sm font-semibold text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                <span class="material-symbols-outlined">
                help
                </span>
                Ayuda
            </a>
        </div>
    </div>

</div>