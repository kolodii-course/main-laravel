@include('partials/header')
@include('partials/nav')
@include('partials/banner')


<main>
	<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
		<ul>
				@foreach($posts as $post)
				<li class="mb-5 hover:underline text-blue-500 text-lg"><a href="/posts/<?= $post['id'] ?>"><?= $post['title'] ?></a></li>
				@endforeach
		</ul>

		<div>
			<a href="/posts/create" class="hover:underline bg-blue-500 text-white p-1">Create new post</a>
		</div>
	</div>
</main>

@include('partials/footer')
