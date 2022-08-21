<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PedulidiriResource;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    // catatan perjalanan
    public function index()
    {
        //get catper
        $catper = Post::latest()->paginate(5);

        //return collection of posts as a resource
        return new PedulidiriResource(true, 'List Data Catatan Perjalanan', $catper);
    }

    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'tanggal'     => 'required',
            'waktu'     => 'required',
            'lokasi'   => 'required',
            'suhu'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create post
        $catper = Post::create([
            'tanggal'     => $request->tanggal,
            'waktu'     => $request->waktu,
            'lokasi'   => $request->lokasi,
            'suhu'   => $request->suhu,
        ]);

        //return response
        return new PedulidiriResource(true, 'Data Post Berhasil Ditambahkan!', $catper);

    }

    public function show(Post $catper)
    {
        //return single post as a resource
        return new PedulidiriResource(true, 'Data Post Ditemukan!', $catper);
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $post
     * @return void
     */
    public function update(Request $request, Post $catper)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'tanggal'     => 'required',
            'waktu'   => 'required',
            'lokasi'     => 'required',
            'suhu'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //check if image is not empty
        if ($request->hasFile('image')) {

            //upload image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            //delete old image
            Storage::delete('public/posts/'.$post->image);

            //update post with new image
            $catper->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
                'content'   => $request->content,
            ]);

        } else {

            //update post without image
            $catper->update([
                'tanggal'     => $request->tanggal,
                'waktu'   => $request->waktu,
                'lokasi'     => $request->lokasi,
                'suhu'   => $request->suhu,
            ]);
        }

        //return response
        return new PedulidiriResource(true, 'Data Post Berhasil Diubah!', $catper);
    }

    public function destroy(Post $catper)
    {
        //delete post
        $catper->delete();

        //return response
        return new PedulidiriResource(true, 'Data Post Berhasil Dihapus!', null);
    }
}
