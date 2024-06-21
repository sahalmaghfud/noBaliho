<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Paslon</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <script src="https://kit.fontawesome.com/da2f3c7553.js" crossorigin="anonymous"></script>
    <link
        rel="stylesheet"href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">
    <header class="bg-gradient-to-br from-pink-400 to-orange-400 py-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="" class="font-bold text-xl"><span class="material-symbols-outlined">
                    arrow_back
                </span></a>
            <nav>
                <ul class="flex space-x-4">

                </ul>
            </nav>
        </div>
    </header>
    <main class="flex-grow">
        <div class="container mx-auto py-8">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/4 mb-4 md:mb-0">
                    <div class="bg-white p-4 rounded shadow">
                        <h2 class="text-lg font-bold mb-2">Profile Photo</h2>
                        <div class="w-32 h-32 bg-gray-300 rounded-full mx-auto overflow-hidden">
                            <img class="w-52 h-48" src="{{ url('/images/gub' . rand(1, 4) . '.jpeg') }}">
                        </div>
                    </div>
                </div>
                <div class="md:w-3/4 md:pl-4">
                    <div class="bg-white p-4 rounded shadow mb-4">
                        <h2 class="text-lg font-bold mb-2">Data Diri Calon</h2>
                        <p class="text-gray-600 leading-relaxed">Nama : {{ $paslon->nama }}</p>
                        <p class="text-gray-600 leading-relaxed">Jenis Kelamin : {{ $paslon->jeniskelamin }}</p>
                        <p class="text-gray-600 leading-relaxed">TTL : {{ $paslon->ttl }}</p>
                        <p class="text-gray-600 leading-relaxed">Agama: {{ $paslon->agama }}</p>

                    </div>
                    <div class="bg-white p-4 rounded shadow mb-4">
                        <h2 class="text-lg font-bold mb-2">Data Diri Wakil</h2>
                        <p class="text-gray-600 leading-relaxed">Nama : {{ $paslon->nama_w }}</p>
                        <p class="text-gray-600 leading-relaxed">Jenis Kelamin : {{ $paslon->jeniskelamin_w }}</p>
                        <p class="text-gray-600 leading-relaxed">TTL : {{ $paslon->ttl_w }}</p>
                        <p class="text-gray-600 leading-relaxed">Agama: {{ $paslon->agama_w }}</p>
                    </div>
                    <div class="bg-white p-4 rounded shadow mb-4">
                        <h2 class="text-lg font-bold mb-2">Profil singkat paslon</h2>
                        <p class="text-gray-600 leading-relaxed">{{ $paslon->profil }}</p>
                    </div>
                    <div class="bg-white p-4 rounded shadow mb-4">
                        <h2 class="text-lg font-bold mb-2">Visi Misi</h2>
                        <p class="text-gray-600 leading-relaxed">{{ $paslon->visimisi }}</p>
                    </div>
                    <div class="bg-white p-4 rounded shadow mb-4">
                        <h2 class="text-lg font-bold mb-2">Program Unggulan</h2>
                        <p class="text-gray-600 leading-relaxed">{{ $paslon->program }}</p>
                    </div>
                    <div class="bg-white p-4 rounded shadow mb-4">
                        <h2 class="text-lg font-bold mb-2">Link Sosial Media</h2>
                        <div class="container mx-auto flex justify-center">
                            <a href={{ $paslon->facebook }} class="mx-2 hover:text-gray-300"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href={{ $paslon->instagram }} class="mx-2 hover:text-gray-300"><i
                                    class="fab fa-instagram"></i></a>
                            <a href={{ $paslon->twitter }} class="mx-2 hover:text-gray-300"><i
                                    class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

</body>

</html>
