<?php

namespace App\Http\Controllers;

use \App\Models\GuestBook;

class GuestBookController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public $arrayData = [
    //     ['email'=>'haisabdillah@gmail.com','comment'=>'Percobaan Pertama']
    // ];

    public function getAll()
    {
        //array_push($this->arrayData,['email'=>'haisabdillah@gmail.com','comment'=>'Percobaan 2']);
        return response()->json([
            'success' => 1,
            'message' => 'Success get data',
            'data'    => GuestBook::all(),
        ], 200);
    }

    public function add()
    {
        GuestBook::create(['email'=>request('email'),'comment'=>request('comment')]);
        return response()->json([
            'success' => 1,
            'message' => 'Success stored data',
        ], 201);
    }

    public function delete($id)
    {
        GuestBook::findOrFail($id)->delete();
        return response()->json([
            'success' => 1,
            'message' => 'Success stored data',
        ], 201);
    }
}
