<html lang="en" class="h-full bg-white">

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
    <title>Layanan Lab Fisika UAD</title>
</head>

<body class="h-full">

    <main class="flex min-h-screen items-center justify-center bg-[#f1faff]">
        <div class="flex w-full p-10 lg:p-0 lg:max-w-4xl gap-20 justify-center">

            <!-- ANCHOR Left Side: Image Section -->
            <aside class="hidden lg:block  w-1/2 font-poppins">
                <div class="flex flex-col text-center gap-12">
                    <div>
                        <h1 class="font-light">Selamat Datang di Website</h1>
                        <h1 class="font-semibold text-xl">Layanan Lab Fisika UAD</h1>
                    </div>
                    <img src="img/banner.png" alt="Desk setup" class="h-full w-full object-cover">
                    <div>
                        <h1 class="font-light">Fakultas sains dan Teknologi Terapan</h1>
                        <h1 class="font-semibold text-xl">Universitas Ahmad Dahlan</h1>
                    </div>
                </div>
            </aside>

            <!-- ANCHOR Right Side: Form Section -->
            <section
                class="flex w-full lg:w-1/2 p-8 min-h-full flex-col justify-center lg:px-8 bg-[#265166] rounded-2xl shadow-lg font-poppins">
                <header class="sm:mx-auto sm:w-full sm:max-w-sm w-full flex flex-col items-center gap-2">
                    <img class="filter invert w-20 h-20" src="img/logo-uad-black-white-hitam-putih.png" alt="Logo UAD">
                    <h2 class=" text-center text-lg lg:text-xl font-bold leading-9 tracking-tight text-[#f6fafd]">
                        Universitas Ahmad Dahlan
                    </h2>
                </header>

                <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                    <form class="space-y-6" action="#" method="POST">
                        <div>
                            <label for="username"
                                class="block text-xs font-medium leading-6 text-[#f6fafd]">Username</label>
                            <div class="mt-2">
                                <input id="username" name="username"
                                    class="block w-full rounded-md border-0 sm:py-1.5 text-[#265166] shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#ffbd97] text-xs sm:text-sm sm:leading-6"
                                    required>
                            </div>
                        </div>

                        <div>
                            <div class="flex items-center justify-between">
                                <label for="password"
                                    class="block text-xs sm:text-sm font-medium leading-6 text-[#f6fafd]">Password</label>
                                <div class="text-sm">
                                    <a href="#"
                                        class="font-semibold text-[#b5f9e2] hover:text-[#70ffcf] transition duration-300 ease-in-out text-xs sm:text-sm">Forgot
                                        password?</a>
                                </div>
                            </div>
                            <div class="mt-2">
                                <input id="password" name="password" type="password" autocomplete="current-password"
                                    required
                                    class="block w-full rounded-md border-0 sm:py-1.5 text-[#265166] shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#ffbd97] text-xs sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div>
                            <button type="submit"
                                class="flex w-full justify-center rounded-md bg-[#d0f1e6] px-3 py-[5px] sm:py-1.5 font-semibold leading-6 text-[#265166] shadow-sm hover:bg-[#b5f9e2] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 transition duration-300 ease-in-out text-xs sm:text-sm">Sign
                                in</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </main>

</body>

</html>
