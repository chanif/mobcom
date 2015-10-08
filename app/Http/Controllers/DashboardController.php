<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home(Request $request)
    {
        $posts = DB::select('SELECT DAYOFMONTH(created_at) as period, click, terbayar, tak_terbayar FROM statistic WHERE group_id=(select group_id from group_user where user_id = ?)', [$request->user()->id]);
        $json = json_encode($posts);
        $string = (string)$json;
        $string = str_replace('"', "", $string);
        $string = str_replace('period:', "period:'", $string);
        $statis = str_replace(',click', " ".date('F Y')."',click", $string);

        $foll = DB::select('SELECT telp as Telepon,sms as SMS,email as Email,nothing as Unfollow_up FROM follow_up WHERE group_id=(select group_id from group_user where user_id = ?)', [$request->user()->id]);
        $follo = json_encode($foll);
        $follow = (string)$follo;
        $follow = str_replace(':', 'data:', $follow);
        $follow = str_replace('{"', '{label:"', $follow);
        $follow = str_replace(',"', '},{label:"', $follow);
        $follow = str_replace('"data', '",data', $follow);
        //$statis = str_replace(',click', " ".date('F Y')."',click", $string);
        //dd($posts);
        return view('body')->withPosts($statis)->withFollow($follow);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
