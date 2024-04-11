<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Post;


class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::all(); // Fetch all posts from the database

        return view('secrets.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('secrets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Form validation
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
        ]);

        // Handle file upload
        if ($request->hasFile('img')) {
            // Generate a unique filename for the image
            $imageName = time() . '_' . uniqid() . '.' . $request->file('img')->getClientOriginalExtension();

            // Store the image in the public/images directory
            $imgPath = $request->file('img')->storeAs('images', $imageName, 'public');

            // Update the request data with the image filename
            $validatedData['img'] = $imageName;
        }

        // Create a new record using the validated data
        Post::create($validatedData);

        // Redirect to the index route with a success message
        return redirect()->route('info.index')->with('success', 'Post created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('secrets.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Retrieve the post from the database
        $post = Post::findOrFail($id);

        return view('secrets.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Retrieve the post from the database
        $post = Post::findOrFail($id);

        // Form validation
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'img' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048', // 'sometimes' rule allows the field to be optional
            'description' => 'required|string',
        ]);

        // Handle file upload if a new image is provided
        if ($request->hasFile('img')) {
            // Generate a unique filename for the new image
            $imageName = time() . '_' . uniqid() . '.' . $request->file('img')->getClientOriginalExtension();

            // Store the new image in the public/images directory
            $imgPath = $request->file('img')->storeAs('images', $imageName, 'public');

            // Delete the previous image file if it exists
            if ($post->img) {
                Storage::disk('public')->delete('images/' . $post->img);
            }

            // Update the post with the new image filename
            $validatedData['img'] = $imageName;
        }

        // Update the post with the validated data
        $post->update($validatedData);

        // Redirect back with a success message
        return redirect()->route('info.index')->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('info.index')->with('success', 'Post deleted successfully.');
    }
}
