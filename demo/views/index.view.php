<?php require "partials/head.php"; ?>
<?php require "partials/nav.php"; ?>

<?php require "partials/banner.php"; ?>
<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <h1 class="text-2xl font-bold">
      Welcome to my website
    </h1>
    <p class="bg-cyan-600 p-2  rounded-full mt-4 text-white">Hello <?= $_SESSION['user']['email'] ?? 'Guest' ?></p>
  </div>
</main>

<?php require "partials/footer.php"; ?>