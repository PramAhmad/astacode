<?php

namespace App\Http\Controllers;

use App\Models\Contant;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store() {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'wa' => 'required',
            'message' => 'required'
        ]);
        Contant::create($data);

        return redirect()->back()->with('success', 'Pesan berhasil dikirim');
        
    }
}
