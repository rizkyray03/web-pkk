{{-- bg-blue-500 --}}
<div class="flex py-4 px-5 items-center bg-info text-gray-100 top-0 z-10">
    <div class="flex-1">
        <div class="flex items-center gap-2">
            <span class="w-12 h-12"><img src="assets/gambar/logo-kendari.png" alt="Logo"></span>
            <div class="text-xl font-bold  flex flex-col">
                <span>TP.PKK</span>
                <span>KELURAHAN LAPULU</span>
            </div>

        </div>
    </div>
    <div class="flex-none lg:hidden">
        <button id="nav-toggle"
            class="flex items-center px-3 py-2 border border-2 rounded text-gray-100 border-gray-300 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
        </button>
    </div>
    <div class="hidden lg:flex lg:items-center lg:w-auto">
        <ul class="menu menu-horizontal px-1">
            <li><a class="text-md font-bold text-yellow-200">Home</a></li>
            <li>
                <details onclick="toggleDetails(event)">
                    <summary class="text-md font-bold hover:text-yellow-200">Profile</summary>
                    <ul class="bg-gray-100 text-gray-900 rounded-none z-10">
                        <li class="w-full"><a>Sejarah PKK</a></li>
                        <li><a>10 Program Pokok PKK</a></li>
                        <li><a>Arti dan Logo PKK</a></li>
                        <li><a>Visi & Misi</a></li>
                        <li><a>Struktur Organisasi</a></li>
                        <li><a>Profil Pj.Pembina PKK</a></li>
                        <li><a>Mars PKK</a></li>
                    </ul>
                </details>
            </li>
            <li>
                <details onclick="toggleDetails(event)">
                    <summary class="text-md font-bold hover:text-yellow-200">POKJA & Sekretariat</summary>
                    <ul class="bg-gray-100 text-md text-gray-900 rounded-none z-10">
                        <li><a>Sekretariat</a></li>
                        <li><a>Pokja I</a></li>
                        <li><a>Pokja II</a></li>
                        <li><a>Pokja III</a></li>
                        <li><a>Pokja IV</a></li>
                    </ul>
                </details>
            </li>
            <li>
                <details onclick="toggleDetails(event)">
                    <summary class="text-md font-bold hover:text-yellow-200">Informasi</summary>
                    <ul class="bg-gray-100 text-md text-gray-900 rounded-none z-10">
                        <li><a>Agenda Kegiatan</a></li>
                        <li><a>Informasi Terbaru</a></li>
                        <li><a>Galeri</a></li>
                        <li><a>Kontak</a></li>
                    </ul>
                </details>
            </li>
            <li>
                <details onclick="toggleDetails(event)">
                    <summary class="text-md font-bold hover:text-yellow-200">Daerah</summary>
                    <ul class="bg-gray-100 text-md text-gray-900 rounded-none z-10">
                        <li><a>Link 1</a></li>
                        <li><a>Link 2</a></li>
                    </ul>
                </details>
            </li>
            <li>
                <details onclick="toggleDetails(event)">
                    <summary class="text-md font-bold hover:text-yellow-200">Data</summary>
                    <ul class="bg-gray-100 text-md text-gray-900 rounded-none z-10">
                        <li><a>Link 1</a></li>
                        <li><a>Link 2</a></li>
                    </ul>
                </details>
            </li>
        </ul>
    </div>
</div>

<div id="mobile-menu" class="hidden lg:hidden absolute bg-blue-500 z-50 w-full">
    <ul class="bg-blue-500 text-gray-100">
        <li><a class="block py-2 px-4 font-bold text-yellow-200 hover:bg-blue-600">Home</a></li>
        <li>
            <details onclick="toggleDetails(event)">
                <summary class="block py-2 px-4 font-bold hover:text-yellow-200 hover:bg-blue-600">Profile</summary>
                <ul class="bg-gray-100 text-gray-900 py-2 px-4 rounded-none">
                    <li><a class="block py-1 hover:bg-blue-200">Sejarah PKK</a></li>
                    <li><a class="block py-1 hover:bg-blue-200">10 Program Pokok PKK</a></li>
                    <li><a class="block py-1 hover:bg-blue-200">Arti dan Logo PKK</a></li>
                    <li><a class="block py-1 hover:bg-blue-200">Visi & Misi</a></li>
                    <li><a class="block py-1 hover:bg-blue-200">Struktur Organisasi</a></li>
                    <li><a class="block py-1 hover:bg-blue-200">Profil Pj.Pembina PKK</a></li>
                    <li><a class="block py-1 hover:bg-blue-200">Mars PKK</a></li>
                </ul>
            </details>
        </li>
        <li>
            <details onclick="toggleDetails(event)">
                <summary class="block py-2 px-4 font-bold hover:text-yellow-200 hover:bg-blue-600">POKJA & Sekretariat
                </summary>
                <ul class="bg-gray-100 text-gray-900 py-2 px-4 rounded-none">
                    <li><a class="block py-1 hover:bg-blue-200">Sekretariat</a></li>
                    <li><a class="block py-1 hover:bg-blue-200">Pokja I</a></li>
                    <li><a class="block py-1 hover:bg-blue-200">Pokja II</a></li>
                    <li><a class="block py-1 hover:bg-blue-200">Pokja III</a></li>
                    <li><a class="block py-1 hover:bg-blue-200">Pokja IV</a></li>
                </ul>
            </details>
        </li>
        <li>
            <details onclick="toggleDetails(event)">
                <summary class="block py-2 px-4 font-bold hover:text-yellow-200 hover:bg-blue-600">Informasi</summary>
                <ul class="bg-gray-100 text-gray-900 py-2 px-4 rounded-none">
                    <li><a class="block py-1 hover:bg-blue-200">Agenda Kegiatan</a></li>
                    <li><a class="block py-1 hover:bg-blue-200">Informasi Terbaru</a></li>
                    <li><a class="block py-1 hover:bg-blue-200">Galeri</a></li>
                    <li><a class="block py-1 hover:bg-blue-200">Kontak</a></li>
                </ul>
            </details>
        </li>
        <li>
            <details onclick="toggleDetails(event)">
                <summary class="block py-2 px-4 font-bold hover:text-yellow-200 hover:bg-blue-600">Daerah</summary>
                <ul class="bg-gray-100 text-gray-900 py-2 px-4 rounded-none">
                    <li><a class="block py-1 hover:bg-blue-200">Link 1</a></li>
                    <li><a class="block py-1 hover:bg-blue-200">Link 2</a></li>
                </ul>
            </details>
        </li>
        <li>
            <details onclick="toggleDetails(event)">
                <summary class="block py-2 px-4 font-bold hover:text-yellow-200 hover:bg-blue-600">Data</summary>
                <ul class="bg-gray-100 text-gray-900 py-2 px-4 rounded-none">
                    <li><a class="block py-1 hover:bg-blue-200">Link 1</a></li>
                    <li><a class="block py-1 hover:bg-blue-200">Link 2</a></li>
                </ul>
            </details>
        </li>
    </ul>
</div>


{{-- <div id="mobile-menu" class="hidden lg:hidden absolute bg-blue-500 z-50 w-full">
    <ul class="bg-blue-500 text-gray-100">
        <li><a class="block py-2 px-4 text-yellow-200">Home</a></li>
        <li>
            <details onclick="toggleDetails(event)">
                <summary class="block py-2 px-4 font-bold hover:text-yellow-200">Profile</summary>
                <ul class="bg-gray-100 text-gray-900 py-2 px-4  rounded-none">
                    <li class="w-full"><a>Sejarah PKK</a></li>
                    <li><a>10 Program Pokok PKK</a></li>
                    <li><a>Arti dan Logo PKK</a></li>
                    <li><a>Visi & Misi</a></li>
                    <li><a>Struktur Organisasi</a></li>
                    <li><a>Profil Pj.Pembina PKK</a></li>
                    <li><a>Mars PKK</a></li>
                </ul>
            </details>
        </li>
        <li>
            <details onclick="toggleDetails(event)">
                <summary class="block py-2 px-4 font-bold hover:text-yellow-200">POKJA & Sekretariat</summary>
                <ul class="bg-gray-100 text-gray-900 py-2 px-4 rounded-none">
                    <li><a>Sekretariat</a></li>
                    <li><a>Pokja I</a></li>
                    <li><a>Pokja II</a></li>
                    <li><a>Pokja III</a></li>
                    <li><a>Pokja IV</a></li>
                </ul>
            </details>
        </li>
        <li>
            <details onclick="toggleDetails(event)">
                <summary class="block py-2 px-4 font-bold hover:text-yellow-200">Informasi</summary>
                <ul class="bg-gray-100 text-gray-900 py-2 px-4 rounded-none">
                    <li><a>Agenda Kegiatan</a></li>
                    <li><a>Informasi Terbaru</a></li>
                    <li><a>Galeri</a></li>
                    <li><a>Kontak</a></li>
                </ul>
            </details>
        </li>
        <li>
            <details onclick="toggleDetails(event)">
                <summary class="block py-2 px-4 font-bold hover:text-yellow-200">Daerah</summary>
                <ul class="bg-gray-100 text-gray-900 py-2 px-4 rounded-none">
                    <li class="w-full"><a>Link 1</a></li>
                    <li><a>Link 2</a></li>
                </ul>
            </details>
        </li>
        <li>
            <details onclick="toggleDetails(event)">
                <summary class="block py-2 px-4 font-bold hover:text-yellow-200">Data</summary>
                <ul class="bg-gray-100 text-gray-900 py-2 px-4 rounded-none">
                    <li class="w-full"><a>Link 1</a></li>
                    <li><a>Link 2</a></li>
                </ul>
            </details>
        </li>

    </ul>
</div> --}}
