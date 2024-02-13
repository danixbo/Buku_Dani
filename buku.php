<?php
include 'layout/header.php';
?>

<body>
  <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen}">

  <?php 
  include 'layout/menu.php';
  ?>

    <div class="flex flex-col flex-1">
    
    <?php 
    include 'layout/navbar.php';
    ?>
      <main class="h-full pb-16 overflow-y-auto">
        <!-- Remove everything INSIDE this div to a really blank page -->
        <div class="container px-6 mx-auto grid">
          <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Blank
          </h2>
        </div>
      </main>
    </div>
  </div>
</body>

</html>