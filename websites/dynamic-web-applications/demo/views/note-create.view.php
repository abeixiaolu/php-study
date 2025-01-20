<?php require "partials/head.php"; ?>
<?php require "partials/nav.php"; ?>

<?php require "partials/banner.php"; ?>
<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <p class="mb-4">
      <a href="/notes" class="text-blue-500 hover:underline">← Back to all notes</a>
    </p>
    <form method="POST">
      <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
          <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="col-span-full">
              <label for="body" class="block text-sm/6 font-medium text-gray-900">Body</label>
              <div class="mt-2">
                <textarea name="body" id="body" rows="3"
                  placeholder="Here is an idea for a note..."
                  class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"><?= $body ?? '' ?></textarea>
              </div>
              <?php if (isset($errors['body'])): ?>
                <p class="mt-2 text-sm/6 text-red-500"><?= $errors['body'] ?></p>
              <?php endif; ?>
            </div>
          </div>
          <div class="mt-6 flex items-center gap-x-6">
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
          </div>
    </form>

  </div>
</main>

<?php require "partials/footer.php"; ?>