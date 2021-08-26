<?php

namespace App\Http\Controllers;

use \http\Env\Response;
use \Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    /**
     * @param  Request  $request
     * @return Response
     */
    public function all(Request $request){
        $connection = DB::table('contacts');

        $contacts = $connection->get();

        $this->addData('contacts',$contacts);
        $this->addMessage('success','All your Contacts.');

        return $this->getResponse();
    }

    /**
     * @param  Request  $request
     * @return Response
     */
    public function id(Request $request, int $id){
        $contact = DB::table('contacts')
            ->where('id','=',$id);

        $count = $contact->count();

        if($count === 1){
            $this->addData('contact',$contact->first());
        }
        else{
            $this->addMessage('success','Contact doesnt exists.');
        }

        return $this->getResponse();
    }
}
