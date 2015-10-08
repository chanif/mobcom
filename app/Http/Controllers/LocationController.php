<?php

namespace App\Http\Controllers;

use App\Locations;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{

    private $_surpass_test_path = 'img/uploads';
    private $_surpass_test_dir = 'news';


    public function index()
    {
        $posts = Locations::where('active','1')->orderBy('created_at','desc')->paginate(5);
        $title = 'Latest Posts';
        return view('home')->withPosts($posts)->withTitle($title);
    }

    public function create(Request $request)
    {
        //
        if($request->user()->can_post())
        {
            return view('posts.create');
        }
        else
        {
            return redirect('/')->withErrors('You have not sufficient permissions for writing post');
        }
    }

    public function store(PostFormRequest $request)
    {
        $post = new Posts();
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        $post->slug = str_slug($post->title);
        $post->author_id = $request->user()->id;
        if($request->has('save'))
        {
            $post->active = 0;
            $message = 'Post saved successfully';
        }
        else
        {
            $post->active = 1;
            $message = 'Post published successfully';
        }
        $post->save();
        return redirect('edit/'.$post->slug)->withMessage($message);
    }

    public function show($id)
    {
        $post = News::where('id',$id)->first();

        if($post)
        {
            if($post->active == false)
                return redirect('/')->withErrors('requested page not found');
            $comments = $post->comments;
        }
        else
        {
            return redirect('/')->withErrors('requested page not found');
        }
        return view('posts.show')->withPost($post)->withComments($comments);
    }

    public function edit(Request $request,$id)
    {
        $post = News::where('id',$id)->first();
        if($post && ($request->user()->id == $post->author_id || $request->user()->is_admin())) {
            // added backslash cz we want to call class inside global namespace
            $surpass = \Surpass::path($this->_surpass_test_path)
                ->dir($this->_surpass_test_dir)
                ->progress('Uploading..')
                ->css([
                    'div' => 'pull-left text-center preview',
                    'button' => 'btn btn-danger btn-md'
                ]);
            return view('posts.edit')->with('post', $post)->with('surpass', $surpass);
        } else {
            return redirect('/')->withErrors('you have not sufficient permissions');
        }
    }

    public function update(Request $request)
    {
        //
        $post_id = $request->input('post_id');
        $post = News::find($post_id);
        if($post && ($post->author_id == $request->user()->id || $request->user()->is_admin()))
        {
            $title = $request->input('title');
            $slug = str_slug($title);
            $duplicate = News::where('slug',$slug)->first();
            if($duplicate)
            {
                if($duplicate->id != $post_id)
                {
                    return redirect('edit/'.$post->slug)->withErrors('Title already exists.')->withInput();
                }
                else
                {
                    $post->slug = $slug;
                }
            }

            $post->title = $title;
            $post->body = $request->input('body');

            if($request->has('save'))
            {
                $post->active = 0;
                $message = 'Post saved successfully';
                $landing = 'edit/'.$post->slug;
            }
            else {
                $post->active = 1;
                $message = 'Post updated successfully';
                $landing = $post->slug;
            }
            $post->save();
            return redirect($landing)->withMessage($message);
        }
        else
        {
            return redirect('/')->withErrors('you have not sufficient permissions');
        }
    }

    public function destroy(Request $request, $id)
    {
        //
        $post = News::find($id);
        if($post && ($post->author_id == $request->user()->id || $request->user()->is_admin()))
        {
            $post->delete();
            $data['message'] = 'Post deleted Successfully';
        }
        else
        {
            $data['errors'] = 'Invalid Operation. You have not sufficient permissions';
        }

        return redirect('/')->with($data);
    }

    public function image_upload() {
        $surpass = \Surpass::path($this->_surpass_test_path);
        if($surpass->save()) {
            // Something..
        }
        return $surpass->result();
    }

    public function image_remove() {
        $surpass = \Surpass::path($this->_surpass_test_path);
        // You may need to check authorization here.

        if($surpass->remove()) {
            // Something..
        }
        return $surpass->result();
    }
}
