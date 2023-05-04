@include('partials/header')
@include('partials/nav')
@include('partials/banner')

<main>
	<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
		<a class="text-blue-500 hover:underline" href="/posts"><-- Back to posts</a>
	</div>

	<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
		<article class="ml-10">
			<h2 class="text-4xl"><?= $post['title'] ?></h2>

			<section class="mt-10">
				<?= $post['text'] ?>
			</section>

			<footer class="mt-10">
				<form action="/posts/{{ $post['id'] }}" method="POST">
					@csrf
					@method('DELETE')
					<button class="text-red-500 hover:underline" type="submit">Delete post</button>
				</form>

				<div>
					<a class="text-blue-500 hover:underline" href="/post/edit?id=<?= $post['id'] ?>">Edit</a>
				</div>
			</footer>
		</article>
	</div>


</main>
@include('partials/footer')
