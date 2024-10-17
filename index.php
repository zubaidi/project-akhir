<?php
    $user_data = 'admin@codepelita.com';
    $pass_data = 'codepelita54';
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['email'])){ $username = $_POST['email']; } else { $username = ''; }
        if(isset($_POST['password'])) { $password = $_POST['password']; } else { $password = ''; }
        if(!empty($_POST['email'])) {
            if ($username == $user_data && $password == $pass_data) {
                header('location:dashboard.php');
            } else {
                echo "<center>Username atau Password Salah</center>";
            }
        } else {

        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/output.css">
</head>
<body class="h-full">
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
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
                                <a href="/" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Dashboard</a>
                                <a href="/kota.php" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Kota / Kabupaten</a>
                                <a href="/kecamatan.php" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Kecamatan</a>
                                <a href="/kelurahan.php" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Kelurahan</a>
                                <a href="/simulasi-umr.php" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Simulasi Tapera</a>
                            </div>
                        </div>
                    </div>
                    <div class="relative ml-3">
                        <div>
                            <a href="/about.php" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Tentang Saya</a>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <ul role="list" class="divide-y divide-gray-100">
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                        <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="/img/province.png" alt="">
                        <div class="min-w-0 flex-auto">
                            <p class="text-lg font-semibold leading-6 text-gray-900">Data Kota dan Kabupaten</p>
                            <a href="/kota.php" class="text-sm text-blue-600 dark:text-blue-500 hover:underline cursor-pointer">Lihat selengkapnya...</a>
                        </div>
                    </div>
                </li>
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="/img/city.png" alt="">
                    <div class="min-w-0 flex-auto">
                        <p class="text-lg font-semibold leading-6 text-gray-900">Data Kecamatan per Kabupaten</p>
                        <a href="/kecamatan.php" class="text-sm text-blue-600 dark:text-blue-500 hover:underline cursor-pointer">Lihat selengkapnya...</a>
                    </div>
                    </div>
                </li>
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="/img/village.png" alt="">
                    <div class="min-w-0 flex-auto">
                        <p class="text-lg font-semibold leading-6 text-gray-900">Data Kelurahan / Desa</p>
                        <a href="/kelurahan.php" class="text-sm text-blue-600 dark:text-blue-500 hover:underline cursor-pointer">Lihat selengkapnya...</a>
                    </div>
                    </div>
                </li>
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="/img/tapera.png" alt="">
                    <div class="min-w-0 flex-auto">
                        <p class="text-lg font-semibold leading-6 text-gray-900">Simulasi TAPERA</p>
                        <a href="/simulasi-umr.php" class="text-sm text-blue-600 dark:text-blue-500 hover:underline cursor-pointer">Lihat selengkapnya...</a>
                    </div>
                    </div>
                </li>
            </ul>
            </div>
            
        </main> 
    </div>
</body>
</html>