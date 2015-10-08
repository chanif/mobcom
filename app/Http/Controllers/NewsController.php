<?php

namespace App\Http\Controllers;

use App\News;
use App\User;
use Redirect;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostFormRequest;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

// note: use true and false for active posts in postgresql database
// here '0' and '1' are used for active posts because of mysql database

class NewsController extends Controller {

	private $_table_name = 'news_image_files';
	private $_news_image = 'images/news';
	private $_news_id = '0';


	public function index()
	{
		$posts = News::where('active','1')->orderBy('created_at','desc')->paginate(5);
		$title = 'Latest Posts';
		return view('home')->withPosts($posts)->withTitle($title);
	}

	public function home()
	{
		$posts = News::where('active','1')->orderBy('created_at','desc')->paginate(5);
		$title = 'Latest Posts';
		return view('body')->withPosts($posts)->withTitle($title);
	}

	public function create(Request $request)
	{
		if($request->user()->can_post())
		{
            $news = new News();
            $this->_news_id = strval( $news->max('id')+1 );
            $path = public_path() . '/' . $this->_news_image . '/' . $this->_news_id;

            if(!\File::exists($path)) {
                \File::makeDirectory($path, 0777, true);
            }

            $surpass = \Surpass::path($this->_table_name, $this->_news_image)
                ->dir($this->_news_id)
                ->progress('Uploading..')
                ->css([
                    'div' => 'pull-left text-center preview',
                    'button' => 'btn btn-danger btn-md'
                ]);
            //return view('posts.edit')->with('post', $post)->with('surpass', $surpass);

            return view('posts.create', [
                'surpass' => $surpass
            ]);

			//return view('posts.create');
		}	
		else 
		{
			return redirect('/')->withErrors('You have not sufficient permissions for writing post');
		}
	}

	public function store(PostFormRequest $request)
	{
		$news = new News();

        //$this->_news_id = strval( $news->max('id')+1 );

        //$news->title = $request->get('title');
		$news->body = $request->get('body');
		//$news->slug = str_slug($news->title);
		$news->author_id = $request->user()->id;
		if($request->has('save'))
		{
			$news->active = 0;
			$message = 'Post saved successfully ';
		}
		else 
		{
			$news->active = 1;
			$message = 'Post published successfully ';
		}
		$news->save();
		return redirect('edit/'.$news->id)->withMessage($message);
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
        $this->_news_id = strval($id);
        $path = public_path() . '/' . $this->_news_image . '/' . $this->_news_id;
        if(!\File::exists($path)) {
            \File::makeDirectory($path, 0777, true);
        }

		$post = News::where('id',$id)->first();
		if($post && ($request->user()->id == $post->author_id || $request->user()->is_admin())) {
			// added backslash cz we want to call class inside global namespace
            $surpass = \Surpass::path($this->_table_name, $this->_news_image)
				->dir($this->_news_id)
				->progress('Uploading..')
				->css([
					'div' => 'pull-left text-center preview',
					'button' => 'btn btn-danger btn-md'
				]);
			//return view('posts.edit')->with('post', $post)->with('surpass', $surpass);


            //$cek_image = \Surpass::imageFileIds(public_path() . '/' . $this->_news_image . '/' .$id);
            //var_dump($cek_image);
            return view('posts.edit', [
                'post' => $post,
                'surpass' => $surpass
            ]);
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
		/*
			$title = $request->input('title');

			$slug = str_slug($title);
			$duplicate = News::where('id',$post_id)->first();
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
			*/
			//$post->title = $title;
			$post->body = $request->input('body');
			
			if($request->has('save'))
			{
				$post->active = 0;
				$message = 'Post saved successfully';
				$landing = 'edit/'.$post->id;
			}			
			else {
				$post->active = 1;
				$message = 'Post updated successfully';
				$landing = $post->id;
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
        $surpass = \Surpass::path($this->_table_name, $this->_news_image);
        if($surpass->save()) {
            // Something..
            //$cek_image = \Surpass::imageFileIds(public_path() . '/' . $this->_news_image . '/' .$id);
            //var_dump($cek_image);
        }

        return $surpass->result();
    }

    public function image_remove() {
        $surpass = \Surpass::path($this->_table_name, $this->_news_image);
        // You may need to check authorization here.

        if($surpass->remove()) {
            // Something..
        }
        return $surpass->result();
    }
}
