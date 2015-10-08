<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SurpassTestController extends Controller {

    private $_surpass_test_path = 'images';
    private $_surpass_test_dir = 'tes';

    public function surpass_test() {

        // added backslash cz we want to call class inside global namespace
        $surpass = \Surpass::path($this->_surpass_test_path)
            ->dir($this->_surpass_test_dir)
            ->progress('Uploading..')
            ->css([
                'div' => 'pull-left text-center preview',
                'button' => 'btn btn-danger btn-md'
            ]);

        /*
        return View::make('surpass_test', [
            'surpass' => $surpass
        ]); */

        return view('surpass_test', [
            'surpass' => $surpass
        ]);

    }

    public function surpass_upload_test() {

        $surpass = \Surpass::path($this->_surpass_test_path);

        if($surpass->save()) {

            // Something..

        }

        //var_dump($surpass);
        return $surpass->result();

    }

    public function surpass_remove_test() {

        $surpass = \Surpass::path($this->_surpass_test_path);

        // You may need to check authorization here.

        if($surpass->remove()) {

            // Something..

        }

        return $surpass->result();

    }

}
