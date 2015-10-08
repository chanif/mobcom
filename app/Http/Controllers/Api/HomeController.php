<?php

namespace App\Http\Controllers\Api;

use App\News;
use App\Locations;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function news_note()
    {
        //return $news = News::all();
        $noted = Locations::where('active','1')->orderBy('created_at','desc')->take(10)->get();
        //dd($noted);
        foreach ($noted as $noted_detail) {
            $news_images = Locations::find($noted_detail['id'])->image_files;
            foreach ($news_images as $news_image) {
                $images[] = asset('/images/news/'.$noted_detail->id.'/'.$news_image->filename);
            }

            $noted_detail['image_files'] = $images[0];
            $noted_detail->author;
        }

        $news = News::where('active','1')->orderBy('created_at','desc')->get();
        foreach ($news as $news_detail) {
            $news_detail['count_comments'] = 10;
            $news_detail['count_likes'] = 5;
            $news_detail->author;
            $news_detail->image_files;
        }

        return response()->json([
            'noted' => $noted,
            'news' => $news
        ]);
    }

    public function news_detail($id)
    {
        $post = News::find($id);

        if (!$post){
            return response()->json([
                'error' => [
                    'message' => 'News does not exist'
                ]
            ], 404);
        }
        $post['count_comments'] = 10;
        $post['count_likes'] = 5;

        $news_image = News::find($id)->image_files;
        $post['images'] = asset('/images/news/'.$id.'/'.$news_image->filename);

        $post['author'] = $post->author;

        $komentars =News::find($id)->comments;

        foreach ($komentars as $komentar) {
            $komentar->author;
        }
        $post['comments'] = $komentars;

        return response()->json([
            'news' => $post
        ]);
    }

    public function note_preview()
    {
        //return $news = News::all();
        $noted = Locations::where('active','1')->orderBy('created_at','desc')->take(10)->get();
        foreach ($noted as $noted_detail) {

            $news_images = Locations::find($noted_detail->id)->image_files;
            foreach ($news_images as $news_image) {
                $images[] = asset('/images/news/'.$noted_detail->id.'/'.$news_image->filename);
            }

            $noted_detail['image_files'] = $images[0];


            $noted_detail->author;
            $noted_detail->review;
        }


        return response()->json([
            'noted' => $noted
        ]);
    }

    public function note_detail($id)
    {
        $location = Locations::find($id);

        if (!$location){
            return response()->json([
                'error' => [
                    'message' => 'News does not exist'
                ]
            ], 404);
        }

        $news_images = Locations::find($id)->image_files;
        foreach ($news_images as $news_image) {
            $images[] = asset('/images/news/'.$id.'/'.$news_image->filename);
        }

        $location['image_files'] = $images;
        $location['author'] = $location->author;

        $reviews = Locations::find($id)->review;

        //$reviews->author;
        $location['review'] = $reviews;

        return response()->json([
            'noted' => $location
        ]);
    }

    public function locations()
    {
        //return $news = News::all();
        $noted = Locations::where('active','1')->orderBy('created_at','desc')->take(10)->get();
        foreach ($noted as $noted_detail) {
            $news_images = Locations::find($noted_detail['id'])->image_files;
            foreach ($news_images as $news_image) {
                $images[] = asset('/images/news/'.$noted_detail->id.'/'.$news_image->filename);
            }

            $noted_detail['image_files'] = $images[0];

            $noted_detail->author;
            $reviews = $noted_detail->reviews;
            foreach ($reviews as $review){
                $review->author;
            }
        }

        return response()->json([
            'locations' => $noted
        ]);
    }

    public function location_detail($id)
    {
        $location = Locations::find($id);

        if (!$location){
            return response()->json([
                'error' => [
                    'message' => 'News does not exist'
                ]
            ], 404);
        }

        $news_images = Locations::find($id)->image_files;
        foreach ($news_images as $news_image) {
            $images[] = asset('/images/news/'.$id.'/'.$news_image->filename);
        }

        $location['image_files'] = $images;
        $location['author'] = $location->author;

        $reviews = Locations::find($id)->reviews;

        foreach ($reviews as $review) {
            $review->author;
        }
        $location['reviews'] = $reviews;

        return response()->json([
            'Location' => $location
        ]);
    }

    public function location_reviews($id)
    {
        /*
        $location = Locations::find($id);

        if (!$location){
            return response()->json([
                'error' => [
                    'message' => 'News does not exist'
                ]
            ], 404);
        }

        $location['author'] = $location->author;

        */
        $reviews = Locations::find($id)->reviews;

        foreach ($reviews as $review) {
            $review->author;
        }
        //$location['reviews'] = $reviews;

        return response()->json([
            'reviews' => $reviews
        ]);
    }
}
