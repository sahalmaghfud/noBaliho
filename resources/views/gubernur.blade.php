<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .navbar {
            background: linear-gradient(90deg, purple, red);
            color: white;
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 1rem 2rem;
            transition: background-color 0.3s ease-in-out;
        }

        .navbar .logo {
            display: flex;
            align-items: center;
        }

        .navbar .logo img {
            height: 40px;
            margin-right: 10px;
        }

        .navbar .nav-item {
            font-weight: bold;
            position: relative;
            padding: 0.5rem 1rem;
            cursor: pointer;
            transition: color 0.3s ease-in-out;
        }

        .navbar .nav-item:hover {
            color: #a0aec0;
        }

        .navbar .nav-item::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            background-color: #a0aec0;
            bottom: -5px;
            left: 0;
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.3s ease-in-out;
        }

        .navbar .nav-item:hover::after {
            transform: scaleX(1);
            transform-origin: left;
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body>

    <nav class="navbar mb-9">
        <div class="logo">

            <div class="font-bold text-slate-950">No Baliho</div>
        </div>
        <div class="nav-item text-slate-500">GUBERNUR</div>

        <a href="/{{ $gubernurs[0]->idprovinsi }}/walikota">
            <div class="nav-item">WALIKOTA</div>
        </a>
        <div class="nav-item"><i class="fas fa-user"></i></div>
    </nav>
    <div class="flex flex-wrap flex-shrink-0">
        @foreach ($gubernurs as $gubernur)
            <a href="/gubernur/{{ $gubernur->id }}">
                <div class="w-64 rounded overflow-hidden shadow-lg mx-5 my-5">
                    <img class="w-52 h-48" src="{{ url('/images/gub' . rand(1, 4) . '.jpeg') }}"
                        alt={{ $gubernur->id }}>
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $gubernur->nama }}</div>
                        <div class="font-bold text-xl mb-2">{{ $gubernur->nama_w }}</div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>


</body>

</html>
