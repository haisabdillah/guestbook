<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class GuestBook extends Component
{
    public $email,$comment ,$key, $error;
    public $guestBookList;

    public function render()
    {
        //get data guest book api
        $response = Http::get('http://localhost:8080/guestbook');
        if ($response->failed() == 1 ) {
            $this->error = 'Error '.$response->status;
        }
        else
        $this->guestBookList = $response->json()['data']; 
        return view('livewire.guest-book');
    }

    public function create(){
        // post data gueatbook api
        $response = Http::post('http://localhost:8080/guestbook',['email'=>$this->email,'comment'=>$this->comment]);
        if ($response->failed() == 1 ) {
            $this->error = 'Error '.$response->status;
        }
    }
    public function delete($key){
        // delete data guestbook api
        $response = Http::post('http://localhost:8080/guestbook/delete/'.$key);
        if ($response->failed() == 1 ) {
            $this->error = 'Error '.$response->status();
        }
    }

}
