<?php
include '../layout/header.php';
include '../db.php';


$sql = ("SELECT * FROM distributor");
$hasil = mysqli_query($conn, $sql);
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
        <!-- Remove everything INSIDE this div to a really blank page -->
        <div class="container px-6 mx-auto grid">
          <h2 class="my-8 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Data Distributor
          </h2>
          <div>
            <form method="post" action="tambahDistributor.php">
              <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Tambah Data
              </button>
            </form>
          </div>

          <div class="w-full overflow-hidden rounded-lg shadow-xs mt-16">
            <div class="w-full overflow-x-auto">
              <table class="w-full whitespace-no-wrap">
                <thead>
                  <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">No</th>
                    <th class="px-4 py-3">ID</th>
                    <th class="px-4 py-3">Nama</th>
                    <th class="px-4 py-3">Alamat</th>
                    <th class="px-4 py-3">Telepon</th>
                    <th class="px-4 py-3">Aksi</th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                  <?php
                  $i = 1;
                  foreach ($hasil as $asep) {
                  ?>
                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3 text-xs">
                        <?= $i ?>
                      </td>
                      <td class="px-4 py-3 text-xs">
                        <?= $asep['id_distributor']; ?>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        <?= $asep['nama_distributor']; ?>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        <?= $asep['alamat']; ?>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        <?= $asep['telepon']; ?>
                      </td>
                      <td class="px-4 py-3">
                        <div class="flex items-center space-x-4 text-sm">
                          <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Edit" name="id_distributor" onClick="location.href='editDistributor.php?id_distributor=<?= $asep['id_distributor'] ?>'">
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                              <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                              </path>
                            </svg>
                          </button>
                          <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete" name="id_distributor" onClick="location.href='deleteDistributor.php?id_distributor=<?= $asep['id_distributor'] ?>'">
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                              <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                          </button>
                        </div>
                      </td>
                    </tr>
                  <?php $i++;
                  } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>

</html>