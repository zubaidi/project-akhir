
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
    <main class="mt-8 mx-auto max-w-2xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
        <div class="py-6 px-3 grid-grid-cols-1">
            <div class="py-4 px-4 block max-w-sm bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <div class="bg-white overflow-hidden shadow rounded-lg border">
                    <div class="px-4 py-5 sm:px-6 mt-3">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            User Profile
                        </h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">
                            This is some information about the user.
                        </p>
                    </div>
                    <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                        <dl class="sm:divide-y sm:divide-gray-200">
                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Full name
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    John Doe
                                </dd>
                            </div>
                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Email address
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    johndoe@example.com
                                </dd>
                            </div>
                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Phone number
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    (123) 456-7890
                                </dd>
                            </div>
                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Address
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    123 Main St<br>
                                    Anytown, USA 12345
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