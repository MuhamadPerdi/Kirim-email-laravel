<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Mail\SendDataEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\BarangController;

class EmailController extends Controller
{
public function sendEmail() {
        $recipient = 'exemple@gmail.com'; // Change to the recipient's email address
        $data = [
            'name' => 'Deepak Prasad',
            'username' => 'deepak_pd',
           
        ];

        Mail::to($recipient)->send(new SendEmail($data['name'], $data['username'], $data['welcomeMessage'], $data['startLink']));

       dd("email succes");
}
}
