<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		$posts = Post::all();

		return view('posts/index', [
			'header' => 'Posts',
			'posts'  => $posts
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		return view('posts/create', [
			'header' => 'Create post'
		]);
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request)
	{
		//todo validation

		$validated = $request->validate([
			'title' => 'required|max:255',
			'text' => 'required|min:2',
		]);

		$post = new Post($request->all());

		$post->save();

		return  redirect('/posts');
	}

	/**
	 * Display the specified resource.
	 */
	public function show(string $id)
	{
		$post = Post::find($id);

		return view('posts/view', ['post' => $post, 'header' => 'View post']);
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(string $id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, string $id)
	{
		$validated = $request->validate([
			'title' => 'required|max:255',
			'text' => 'required|min:2',
		]);

		$post = Post::find($id);
		$post->fill($validated);
		$post->save();

		$post = Post($request->all());

		$post->save();
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(string $id)
	{
		Post::destroy($id);

		return redirect('/posts');
	}
}
