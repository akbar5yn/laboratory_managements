<html lang="en" class="h-full bg-white scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Layanan Lab Fisika UAD</title>

    <style>
        ::-webkit-scrollbar {
            width: 1px;
        }

        :root {
            --cyan: #C8E0ED;
        }


        /* Styling untuk link yang aktif */
        .active-dashboard::before,
        .active-dashboard::after {
            content: "";
            position: absolute;
            right: 0;
            width: 50px;
            height: 50px;
            background-color: transparent;
            border-radius: 50%;
            pointer-events: none;
        }

        .active-dashboard::before {
            top: -50px;
            box-shadow: 35px 35px 0 10px var(--cyan);
        }

        .active-dashboard::after {
            bottom: -50px;
            box-shadow: 35px -35px 0 10px var(--cyan);
        }


        .main-content {
            position: absolute;
            width: calc(100% - 250px);
            left: 250px;
        }

        @media (max-width: 1024px) {
            .main-content {
                left: 0px;
                width: calc(100%);
            }
        }
    </style>
</head>

<body class="h-full flex">
    <x-sidebar></x-sidebar>
    <div class="flex flex-col min-h-screen bg-[#C8E0ED] font-poppins main-content">
        <x-header>{{ $title }}</x-header>
        <main class="py-5 px-7">{{ $slot }}</main>
    </div>
</body>

</html>
