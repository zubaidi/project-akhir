<?php
    $wil = array(
        "Kota Pekalongan", "Kab. Pekalongan", "Kab. Batang", "Kab. Pemalang"
    );
    $data = array(
        "Kota Pekalongan" => ["wil" => "Kota Pekalongan", "umr" => 2389801, "tap" => (2389801*3)/100, "gaji" => 2389801-((2389801*3)/100)], 
        "Kab. Pekalongan" => ["wil" => "Kabupaten Pekalongan", "umr" => 2389801, "tap" => (2389801*3)/100, "gaji" => 2389801-((2389801*3)/100)], 
        "Kab. Batang" => ["wil" => "Kabupaten Batang", "umr" => 2379702, "tap" => (2379702*3)/100, "gaji" => 2379702-((2379702*3)/100)], 
        "Kab. Pemalang" => ["wil" => "Kabupaten Pemalang", "umr" => 2156000, "tap" => (2156000*3)/100, "gaji" => 2156000-((2156000*3)/100)]
    );
    $selectedData = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // $pilihan = $_POST['pilihan'];
        // if(array_key_exists($pilihan, $data)) {
        //     $selectedData = $data[$pilihan];
        // } else {
        //     $selectedData = [];
        // }
        $selectedData = isset($_POST['pilihan']) ? $_POST['pilihan'] : null;
        $selectedData = !empty($_POST['pilihan']) ? $_POST['pilihan'] : '';
    }
?>
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
                <a href="/kelurahan.php" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Kota / Kabupaten</a>
                <a href="/kecamatan.php" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Kecamatan</a>
                <a href="/kelurahan.php" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Kelurahan</a>
                <a href="/simulasi-umr.php" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Simulasi Tapera</a>
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
    </nav>

    <header class="bg-white shadow">
        <div class="px-4 py-6 sm:px-6 lg:px-8 grid grid-cols-2">
            <div>
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">Simulasi Tapera</h1>
            </div>
            <div class="max-w-full text-right">
                <a href="/" class="text-blue-800 italic">
                    Ke Dashboard</a>
            </div>
        </div>
    </header>
    <main>
        <div class="px-6 py-6">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="items-center justify-center grid grid-cols-[90%_10%] w-full">
                    <div class="mr-3"> 
                        <select name="pilihan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>Pilih Kabupaten / Kota</option>
                        <?php foreach($wil as $key => $value) :?>
                            <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                        <?php endforeach ?>
                        </select>
                    </div>
                    <div class="">
                        <button class="rounded-md bg-indigo-600 text-white text-sm font-bold py-3 px-4 w-full">Simulasikan</button>
                    </div>
                </div>
            </form>
            <div class="py-4 grid-grid-cols-1">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="py-4 px-4 block max-w-sm bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <?php if($selectedData && isset($data[$selectedData])): ?>
                        <label>Kota / Kabupaten </label>
                        <input type="text" value="<?php echo $data[$selectedData]['wil']; ?>" disabled class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <label>Upah Minimum</label>
                        <input type="text" value="Rp. <?php echo number_format($data[$selectedData]['umr'], 0, ',', '.'); ?>" disabled class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <label>Biaya Tapera (3%)</label>
                        <input type="text" value="Rp. <?php echo number_format($data[$selectedData]['tap'], 0, ',', '.'); ?>" disabled class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <label>Gaji Diterima</label>
                        <input type="text" value="Rp. <?php echo number_format($data[$selectedData]['gaji'], 0, ',', '.'); ?>" disabled class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <?php else: ?>
                        <p class="text-4xl font-semibold text-gray-900 dark:text-white">Data Kota/Kabupaten Belum Dipilih</p>
                    <?php endif ?>
                </form>
            </div>
        </div>
    </main>
</body>
</html>