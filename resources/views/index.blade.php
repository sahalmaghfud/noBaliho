<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No Baliho</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        body {
            background-image: url('https://images.pexels.com/photos/2916337/pexels-photo-2916337.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            background-size: cover;
            background-position: center;
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex flex-col h-screen items-center justify-center">
        <div>
            <h1
                class="text-9xl font-bold tracking-widest text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 animate-pulse mb-8">
                NOBALIHO</h1>
        </div>
        <form class="max-w-sm mx-auto" method="GET" action="{{ route('gubernur.search') }}">

            <select id="countries"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                onchange="navigateToURL(this)">
                <option selected disabled>Pilih Provinsi</option>
                @foreach ($provinsis as $provinsi)
                    <option value="{{ $provinsi->id }}/gubernur">{{ $provinsi->nama }}</option>
                @endforeach
            </select>

        </form>
    </div>
    <script>
        function navigateToURL(selectElement) {
            var url = selectElement.value;
            if (url) {
                window.location.href = url;
            }
        }
    </script>
</body>

</html>
