<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Email;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    public function index()
    {
        $formulir = Email::all();
        return view('email.index', compact('formulir'));
    }

    public function send_email()
    {
        return view("email.send_email");
    }
    public function submitForm(Request $request)
    {
        // Validasi data formulir jika diperlukan
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pesan' => 'required|string',
        ]);

        // Simpan data ke database
        $formulir = new Email();
        $formulir->nama = $request->nama;
        $formulir->email = $request->email;
        $formulir->pesan = $request->pesan;
        $formulir->save();

        // Kirim email
        Mail::send('email.email', ['formulir' => $formulir], function ($message) use ($formulir) {
            $message->to($formulir->email)->subject('Subject Email');
        });

        return redirect()->back()->with('success', 'Formulir berhasil dikirim!');
    }
}
