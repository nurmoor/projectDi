<?php

namespace App\Http\Controllers;

use App\Models\Clients_Backup;
use Illuminate\Http\Request;

class Upload extends Controller
{
    public function upload(Request $request){
        Clients_Backup::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'order_number'=>$request->order_number,
            'file'=>$request->file 
         ]);
         $name = $request->name;
         $email = $request->email;
         $order_number = $request->order_number;
         $file = $request->file('file');
         $destination = 'uploads';
        $file->move($destination, $file->getClientOriginalName());
           echo 'Name: '.$name;
           echo '<br>';
           echo 'Email: '.$email;
           echo '<br>';
           echo 'Order number: '.$order_number;
           echo '<br>';
           echo 'File: '.$file->getClientOriginalName(); 
           echo '<br>';
           echo "Your file uploaded successfully!";
    }
}
