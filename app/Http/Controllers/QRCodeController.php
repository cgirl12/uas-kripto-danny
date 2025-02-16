<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeController extends Controller
{
    public function index()
    {
        $text = 'https://example.com'; 

        // Generate QR Code
        $qrCode = QrCode::size(200)->generate($text);

        return view('home.index', compact('qrCode'));
    }
}