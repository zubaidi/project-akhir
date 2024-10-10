
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
                        <img class="h-8 w-auto" src="/project-akhir/img/sa.png" alt="Your Company">
                    </div>
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="/project-akhir/" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white" >Dashboard</a>
                <a href="/project-akhir/kota.php" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Kota / Kabupaten</a>
                <a href="/project-akhir/kecamatan.php" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Kecamatan</a>
                <a href="/project-akhir/kelurahan.php" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Kelurahan</a>
                <a href="/project-akhir/simulasi-umr.php" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Simulasi Tapera</a>
                </div>
            </div>
            </div>
            
            <div class="relative ml-3">
                <div>
                    <a href="/project-akhir/about.php" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Tentang Saya</a>
                </div>
            </div>
        </div>
        </div>
    </nav>

    <header class="bg-white shadow">
        <div class="px-4 py-6 sm:px-6 lg:px-8 grid grid-cols-2">
            <div>
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">Tentang Saya</h1>
            </div>
            <div class="max-w-full text-right">
                <a href="/project-akhir" class="text-blue-800 italic">
                    Ke Dashboard</a>
            </div>
        </div>
    </header>
    <main class="mt-8 mx-auto max-w-2xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
        <div class="py-6 px-3 grid-grid-cols-1">
            <div class="py-4 px-4 block max-w-sm bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 grid grid-cols-2">
                <div class="flex justify-center items-center">
                    <img src="/project-akhir/img/sa.png" alt="" height="400" width="400">
                </div>
                <div class="bg-white overflow-hidden shadow rounded-lg border">
                    <div class="px-4 py-5 sm:px-6 mt-3">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Profil Saya
                        </h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">
                            Deskripsi singkat tentang pengembang sistem.
                        </p>
                    </div>
                    <hr>
                    <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                        <dl class="sm:divide-y sm:divide-gray-200">
                            <div class="py-1 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Nama Lengkap
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    < <em>Diisi nama lengkap kamu</em> >
                                </dd>
                            </div>
                            <div class="py-2 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Nomor Induk Siswa
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    < <em>Diisi NIS kamu</em> >
                                </dd>
                            </div>
                            <div class="py-2 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Alamat Email
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    < <em>Diisi email kamu yang aktif</em> >
                                </dd>
                            </div>
                            <div class="py-2 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Nomor Telpon dan Whatsapp
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    < <em>Diisi nomor whatsapp</em> >
                                </dd>
                            </div>
                            <div class="py-2 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Kelas
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    < <em>Diisi kelas kamu</em> >
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>