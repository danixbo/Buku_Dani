<?php
include '../layout/header.php';
?>
<?php

if (isset($_POST['submit'])) {

    include("../db.php");

    $sql = "INSERT INTO kasir(nama,alamat,telepon,status,username,password,akses) VALUES(
        '" . $_POST["nama"] . "',
        '" . $_POST["alamat"] . "',
        '" . $_POST["telepon"] . "',
        '" . $_POST["status"] . "',
        '" . $_POST["username"] . "',
        '" . $_POST["password"] . "',
        '" . $_POST["akses"] . "'
        )";

    $conn->query($sql);

    header("Location: index.php");
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
                        Tambah Data kasir
                    </h2>
                    <div class="w-full overflow-hidden rounded-lg mt-16">
                        <div class="w-full overflow-x-auto">
                            <form method="post" action="">
                                <label class="text-sm">
                                    <span class="text-gray-700 dark:text-gray-400">Nama</span>
                                    <input class="mt-5 w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Jane Doe" id="nama" name="nama" />
                                </label>
                                <div class="mt-4">
                                    <label class="text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">Alamat</span>
                                        <input class="mt-5 w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="GG Slepet III" id="alamat" name="alamat" />
                                    </label>
                                </div>
                                <div class="mt-4">
                                    <label class="text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">Telepon</span>
                                        <input class="mt-5 w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="08598777777" id="telepon" name="telepon" />
                                    </label>
                                </div>
                                <div class="mt-4">
                                    <label class="text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">Status</span>
                                        <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-multiselect focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" multiple id="status" name="status">
                                            <option value="online" selected>Online</option>
                                            <option value="offline">Offline</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="mt-4">
                                    <label class="text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">Username</span>
                                        <input class="mt-5 w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="08598777777" id="username" name="username" />
                                    </label>
                                </div>
                                <div class="mt-4">
                                    <label class="text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">Password</span>
                                        <input class="mt-5 w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="08598777777" id="password" name="password" type="password"/>
                                    </label>
                                </div>
                                <div class="mt-4">
                                    <label class="text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">Akses</span>
                                        <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-multiselect focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" multiple id="akses" name="akses">
                                            <option value="admin" selected>Admin</option>
                                            <option value="Kasir">Kasir</option>
                                        </select>
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