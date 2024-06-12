<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\File;

class AdminBlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('bkblog.viewallblog', compact('blogs'));
    }

    public function create()
    {
        return view('bkblog.addnewblog');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'content' => 'required|string',
            'date' => 'required|date',
            'key_words' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        $baseSlug = $input['slug']; // Save the base slug
        $slugCount = Blog::where('slug', $baseSlug)->count();

        if ($slugCount > 0) {
            // If slug exists, start incrementing from 1
            $newSlug = $baseSlug . '-' . ($slugCount + 1);
            while (Blog::where('slug', $newSlug)->exists()) {
                $slugCount++;
                $newSlug = $baseSlug . '-' . $slugCount;
            }
            $input['slug'] = $newSlug;
        }

       
        // Handle file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = mt_rand(100000, 999999) . str_replace(' ', '', $file->getClientOriginalName());
            $folder_thumbnail = 'uploads/blogs-thumbnails/' . $file_name;
            $this->createDirectoryIfNotExists('uploads/blogs-thumbnails/');
            $file->move(public_path('uploads/blogs-thumbnails/'), $file_name);
            $input['image'] = $folder_thumbnail;
        }

        Blog::create($input);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully.');
    }

    function createDirectoryIfNotExists($path)
    {
        if (!File::exists($path)) {
            mkdir($path, 0777, true);
        }
    }

    public function edit(Blog $blog)
    {
        return view('bkblog.editblog', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'content' => 'required|string',
            'date' => 'required|date',
            'key_words' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        // Handle file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = mt_rand(100000, 999999) . str_replace(' ', '', $file->getClientOriginalName());
            $folder_thumbnail = 'uploads/blogs-thumbnails/' . $file_name;
            $this->createDirectoryIfNotExists('uploads/blogs-thumbnails/');
            $file->move(public_path('uploads/blogs-thumbnails/'), $file_name);
            $input['image'] = $folder_thumbnail;
        }

        $blog->update($input);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully.');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blogs.index');
    }
}
