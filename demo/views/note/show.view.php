<?php require base_path("views/partials/head.php"); ?>
<?php require base_path("views/partials/nav.php"); ?>
<?php require base_path("views/partials/banner.php"); ?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <p class="mb-4">
      <a href="/notes" class="text-blue-500 hover:underline">← Back to all notes</a>
    </p>
    <p><?= htmlspecialchars($note['body']) ?></p>

    <div class="mt-4 flex gap-4">
      <a href="/note/edit?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">Edit</a>
      <form method="post">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="id" value="<?= $note['id'] ?>">
        <button type="submit" class="text-red-500 hover:underline">Delete</button>
      </form>
    </div>
  </div>
</main>

<?php require base_path("views/partials/footer.php"); ?>