@include('partials/header')
@include('partials/nav')

<main>
	<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
		<a class="text-blue-500 hover:underline" href="/posts"><-- Back to posts</a>
	</div>

	<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
		<section>
			<div class="mt-10 sm:mt-0">
				<div class="md:grid md:grid-cols-3 md:gap-6">
					<div class="mt-5 md:col-span-2 md:mt-0">
						<form action="/posts" method="POST">
							@csrf

							<div class="overflow-hidden shadow sm:rounded-md">
								<div class="bg-white px-4 py-5 sm:p-6">
									<div>
										<div>
											<label for="title" class="block text-sm font-medium leading-6 text-gray-900">Post title</label>
											<input value="{{ old('title') }}" type="text" name="title" id="title" class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
										</div>

										@error('title')
											<div>
												<span class="text-red-500 text-xs">{{ $message }}</span>
											</div>
										@enderror
									</div>

									<div class="mt-10">
										<label for="text" class="block text-sm font-medium leading-6 text-gray-900">Post description</label>
										<textarea name="text"
											  class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
											  id="description"
											  cols="30"
											  rows="10">{{ old('text') }}</textarea>
									</div>

									@error('text')
										<div>
											<span class="text-red-500 text-xs">{{ $message }}</span>
										</div>
									@enderror
								</div>
								<div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
									<button type="submit" class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Create</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>

		</section>
	</div>
</main>

@include('partials/footer')
