<?php
include '../layout/header.php';
include '../db.php';

if (isset($_GET['id_buku'])) {
    $sql = 'SELECT * FROM buku WHERE id_buku =' . $_GET['id_buku'];
    $result = $conn->query($sql);
    $tampilkan = ($result->fetch_assoc());

    if (isset($_POST['submit'])) {
        $sql = 'UPDATE buku SET
            judul = "' . $_POST['judul'] . '",
            noisbn = "' . $_POST['noisbn'] . '",
            penulis = "' . $_POST['penulis'] . '",
            penerbit = "' . $_POST['penerbit'] . '",
            tahun = "' . $_POST['tahun'] . '",
            stok = "' . $_POST['stok'] . '",
            harga_pokok = "' . $_POST['harga_pokok'] . '",
            harga_jual = "' . $_POST['harga_jual'] . '",
            ppn = "' . $_POST['ppn'] . '",
            diskon = "' . $_POST['diskon'] . '"
            WHERE id_buku=' . $_GET['id_buku'];

        $conn->query($sql);
        header('Location:index.php');
        exit;
    }
} else {
    echo "ID Buku tidak ditemukan.";
}
?>


<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen}">

        <?php
        include '../layout/menu.php';
        ?>

        <div class="flex flex-col flex-1">

            <?php
            include '../layout/navbar.php';
            ?>
            <main class="h-full pb-16 overflow-y-auto">
                <div class="container px-6 mx-auto grid">
                    <h2 class="my-8 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                        Edit Data Buku
                    </h2>
                    <div class="w-full overflow-hidden rounded-lg mt-16">
                        <div class="w-full overflow-x-auto">
                            <form method="post" action="">
                                <label class="text-sm">
                                    <span class="text-gray-700 dark:text-gray-400">Judul</span>
                                    <input class="mt-5 w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Pada Jaman Dahulu" id="judul" name="judul" value="<?= $tampilkan['judul'] ?>"/>
                                </label>
                                <div class="mt-4">
                                    <label class="text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">No ISBN</span>
                                        <input class="mt-5 w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="1234567890123" id="noisbn" name="noisbn" maxlength="13" value="<?= $tampilkan['noisbn'] ?>"/>
                                    </label>
                                </div>
                                <div class="mt-4">
                                    <label class="text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">Penulis</span>
                                        <input class="mt-5 w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Digidaw" id="penulis" name="penulis" value="<?= $tampilkan['penulis'] ?>"/>
                                    </label>
                                </div>
                                <div class="mt-4">
                                    <label class="text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">Penerbit</span>
                                        <input class="mt-5 w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Saepudin" id="penerbit" name="penerbit" value="<?= $tampilkan['penerbit'] ?>"/>
                                    </label>
                                </div>
                                <div class="mt-4">
                                    <label class="text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">Tahun</span>
                                        <input class="mt-5 w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="2024" id="tahun" name="tahun" maxlength="4" value="<?= $tampilkan['tahun'] ?>"/>
                                    </label>
                                </div>
                                <div class="mt-4">
                                    <label class="text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">Stok</span>
                                        <input class="mt-5 w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Unlimited" id="stok" name="stok" maxlength="10" value="<?= $tampilkan['stok'] ?>"/>
                                    </label>
                                </div>
                                <div class="mt-4">
                                    <label class="text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">Harga Pokok</span>
                                        <input class="mt-5 w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="1 M" id="harga_pokok" name="harga_pokok" maxlength="50" value="<?= $tampilkan['harga_pokok'] ?>"/>
                                    </label>
                                </div>
                                <div class="mt-4">
                                    <label class="text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">Harga Jual</span>
                                        <input class="mt-5 w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="2 M" id="harga_jual" name="harga_jual" maxlength="50" value="<?= $tampilkan['harga_jual'] ?>"/>
                                    </label>
                                </div>
                                <div class="mt-4">
                                    <label class="text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">PPN</span>
                                        <input class="mt-5 w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="12345" id="ppn" name="ppn" maxlength="5" value="<?= $tampilkan['ppn'] ?>"/>
                                    </label>
                                </div>
                                <div class="mt-4">
                                    <label class="text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">Diskon</span>
                                        <input class="mt-5 w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="200" id="diskon" name="diskon" maxlength="10" value="<?= $tampilkan['diskon'] ?>"/>
                                    </label>
                                </div>

                                <div>
                                    <button class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" type="submit" name="submit">
                                        Tambah Data
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>
</body>

</html>