
<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Akhir</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="src/output.css">
</head>
<body class="h-full">
    <div class="min-h-full">
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
            <div class="flex flex-shrink-0 items-center">
                        <img class="h-8 w-auto" src="/img/sa.png" alt="Your Company">
                    </div>
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="/" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white" >Dashboard</a>
                <a href="/kota.php" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Kota / Kabupaten</a>
                <a href="/kecamatan.php" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Kecamatan</a>
                <a href="/kelurahan.php" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Kelurahan</a>
                </div>
            </div>
            </div>
            
            <div class="relative ml-3">
                <div>
                    <a href="/about.php" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Tentang Saya</a>
                </div>
            </div>
        </div>
        </div>
    </nav>

    <header class="bg-white shadow">
        <div class="px-6 py-6 sm:px-6 lg:px-8 grid grid-cols-2">
            <div>
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">Tentang Saya</h1>
            </div>
        </div>
    </header>
    <main>
        <div class="py-6 px-6 w-3/4">
            <div class="text-center">
                <p class="border-solid border-blue-500">Prototype website ini digunakan sebagai Tugas Akhir Produktif Rekayasa Perangkat Lunak Mata Pelajaran Pemrograman Web (Backend Programming)</p>
            </div>
            <div class="py-5">
                <p class="m-auto">Nama Lengkap</p>
            </div>
        </div>
    </main>
</body>
</html>