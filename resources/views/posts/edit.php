<?php require(base_path('views/partials/header.php'))?>
<?php require(base_path('views/partials/nav.php'))?>

<main>
	<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
		<a class="text-blue-500 hover:underline" href="/post?id=<?= $post['id'] ?>"><-- Back to post</a>
	</div>

	<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
		<section>
			<div class="mt-10 sm:mt-0">
				<div class="md:grid md:grid-cols-3 md:gap-6">
					<div class="mt-5 md:col-span-2 md:mt-0">
						<form action="/post" method="POST">
							<input type="hidden" name="_method" value="PUT">
							<input type="hidden" name="id" value="<?= $post['id'] ?? $post_data['id'] ?>">
							<div class="overflow-hidden shadow sm:rounded-md">
								<div class="bg-white px-4 py-5 sm:p-6">
									<div>
										<div>
											<label for="title" class="block text-sm font-medium leading-6 text-gray-900">Post title</label>
											<input value="<?= $post_data['title'] ??  $post['title'] ?? '' ?>" type="text" name="title" id="title" class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
										</div>

										<?php if (isset($errors['title'])) : ?>
										<div>
											<span class="text-red-500 text-xs"><?= $errors['title'] ?></span>
										</div>
										<?php endif; ?>
									</div>

									<div class="mt-10">
										<label for="text" class="block text-sm font-medium leading-6 text-gray-900">Post description</label>
										<textarea name="text"
											  class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
											  id="description"
											  cols="30"
											  rows="10"><?= $post_data['text'] ?? $post['text'] ?? '' ?></textarea>
									</div>

									<?php if (isset($errors['text'])) : ?>
										<div>
											<span class="text-red-500 text-xs"><?= $errors['text'] ?></span>
										</div>
									<?php endif; ?>
								</div>
								<div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
									<button type="submit" class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Update</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>

		</section>
	</div>
</main>
<?php require(base_path('views/partials/footer.php'))?>
