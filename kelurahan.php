<?php
    $wil = array(
        'Wonopringgo', 'Karanganyar', 'Bojong', 'Kedungwuni', 'Doro', 'Buaran', 'Kajen', 'Kandangserang', 'dst...'
    );
    $data = array(
        'Wonopringgo' => [
            'Galang Pengampong', 'Getas', 'Gondang', 'Jetak Kidul', 'Rowokembu', 'Kwagean', 'Pegaden', 'Legok Gunung', 'Sampih', 'Sastrodirjan', 'Surabayan', 'Wonopringgo'
        ],
        'Karanganyar' => [
            'Banjarejo', 'Gutomo', 'Karang Gondang', 'Karangsari', 'Kayugeritan', 'Kulu', 'Kutosari', 'Legok Kalong', 'Limbangan', 'Lolong', 'Pedawang', 'Pododadi', 'Sidomukti', 'Sukosari', 'Wonosari'
        ],
        'Bojong' => [
            'Babalan Kidul', 'Babalanlor', 'Bojong Minggir', 'Bojong Wetan', 'Bojonglor', 'Bukur', 'Duwet', 'Jajar Wayang', 'Kalipancur', 'Karangsari', 'Kemasan', 'Ketitang Kidul', 'Ketitanglor', 'Legok Clile', 'Menjangan', 'Pantianom', 'Randu Muktiwaren','Rejosari', 'Sembung Jambu', 'Sumur Jomblangbogo', 'Wangandowo', 'Wiroditan'
        ],
        'Kedungwuni' => [
            'Ambokembang', 'Bugangan', 'Karangdowo', 'Kedung Patangewu', 'Kwayangan','Langkap','Pajomblangan','Pakisputih','Podo','Proto','Rengas','Rowocacing','Salakbrojo','Tangkil Kulon','Tangkil Tengah','Tosaran', 'Kel. Kedungwuni Barat', 'Kel. Kedungwuni Timur', 'Kel. Pekajangan'
        ]
        
    );
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pilihan = $_POST['pilihan'];
        if(array_key_exists($pilihan, $data)) {
            $selectData = $data[$pilihan];
        } else {
            $selectData = [];
        }
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
                <a href="/kota.php" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Kota / Kabupaten</a>
                <a href="/kecamatan.php" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Kecamatan</a>
                <a href="/kelurahan.php" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Kelurahan</a>
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
    </nav>

    <header class="bg-white shadow">
        <div class="px-4 py-6 sm:px-6 lg:px-8 grid grid-cols-2">
            <div>
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">Data Kelurahan / Desa di Kab. Pekalongan</h1>
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
                            <option>Pilih Kecamatan</option>
                            <?php foreach($wil as $w => $value) :?>
                                <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="">
                        <button class="rounded-md bg-indigo-600 text-white text-sm font-bold py-3 px-4 w-full">Pilih Kec.</button>
                    </div>
                </div>
            </form>
            <div class="py-4 grid-grid-cols-1">
                <table class="md:table-auto border-Collapse border border-slate-400 w-full" id="tabeldata">
                    <thead>
                        <tr>
                            <th class="border border-slate-400 py-2 bg-slate-700 text-white">#</th>
                            <th class="border border-slate-400 bg-slate-700 text-white">Data Desa dan Kelurahan</th>
                            <th class="border border-slate-400 bg-slate-700 text-white">Aksi</th>
                        </tr>
                    </thead>
                    <?php if(!empty($selectData)) : ?>
                        <?php foreach($selectData as $s => $value): ?>
                        <tr>
                            <td class="border border-slate-400 text-center py-2"><?php echo $s+1; ?></td>
                            <td class="border border-slate-400 px-2"><?php echo $value; ?></td>
                            <td class="border border-slate-400 text-center w-36">
                                <button type="submit" class="rounded-md bg-red-600 px-3 py-2 text-xs font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600 w-4/5">Hapus Data</button>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="3" class="text-center font-bold">Data tidak ditemukan!!!</td>
                        </tr>
                    <?php endif ?>
                </table>
            </div>
        </div>
    </main>
</body>
<script src="src/jquery.js"></script>
<script src="src/dataTables.js"></script>
<script>
    $(document).ready(function(){
        $('#tabeldata').DataTable();
    });
</script>
</html>