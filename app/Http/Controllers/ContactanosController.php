<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index()
    {
        return view('contactanos.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required',
        ]);
        // dd($request->all());
        $correo = new ContactanosMailable($request->all());
        Mail::to('contacto@jfcm.com.co')->send($correo);
        // return 'Mensjae enviado';
        return redirect()->route('contactanos.index')->with('info', 'Mensaje enviado');
    }
}
