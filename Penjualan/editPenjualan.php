<?php
include '../layout/header.php';
include '../db.php';

if (isset($_GET['id_penjualan'])) {
    $sql = 'SELECT * FROM penjualan WHERE id_penjualan=' . $_GET['id_penjualan'];
    $result = $conn->query($sql);
    $tampil = ($result->fetch_assoc());

    if (isset($_POST['submit'])) {
        $sql = 'UPDATE penjualan SET
            id_buku = "' . $_POST['id_buku'] . '",
            id_kasir = "' . $_POST['id_kasir'] . '",
            jumlah = "' . $_POST['jumlah'] . '",
            total = "' . $_POST['total'] . '",
            tanggal = "' . $_POST['tanggal'] . '"
            WHERE id_penjualan=' . $_GET['id_penjualan'];

        $conn->query($sql);
        header('Location:index.php');
        exit;
    }
} else {
    echo "ID Penjualan tidak ditemukan.";
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
                        Edit Data Penjualan
                    </h2>
                    <div class="w-full overflow-hidden rounded-lg mt-16">
                        <div class="w-full overflow-x-auto">
                            <form method="post" action="">
                                <label class="text-sm">
                                    <span class="text-gray-700 dark:text-gray-400">ID Buku</span>
                                    <input class="mt-5 w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Jane Doe" id="id_buku" name="id_buku" value="<?= $tampil['id_buku'] ?>" />
                                </label>
                                <div class="mt-4">
                                    <label class="text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">ID Kasir</span>
                                        <input class="mt-5 w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="GG Slepet III" id="id_kasir" name="id_kasir" value="<?= $tampil['id_kasir'] ?>" />
                                    </label>
                                </div>
                                <div class="mt-4">
                                    <label class="text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">Jumlah</span>
                                        <input class="mt-5 w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="08598777777" id="jumlah" name="jumlah" value="<?= $tampil['jumlah'] ?>" />
                                    </label>
                                </div>
                                <div class="mt-4">
                                    <label class="text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">Total</span>
                                        <input class="mt-5 w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="08598777777" id="total" name="total" value="<?= $tampil['total'] ?>" />
                                    </label>
                                </div>
                                <div class="mt-4">
                                    <label class="text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">Tanggal</span>
                                        <input class="mt-5 w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="08598777777" id="tanggal" name="tanggal" value="<?= $tampil['tanggal'] ?>" />
                                    </label>
                                </div>

                                <div>
                                    <button class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" type="submit" name="submit">
                                        Edit Data
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