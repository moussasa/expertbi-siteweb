<?php

use App\Mail\UserSendMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

Route::get('/', function () {
    return view('accueil.index');
})->name('accueil');
Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');
Route::get('/apropos', function () {
    return view('apropos.index');
})->name('apropos');
Route::get('/equipe', function () {
    return view('equipe.index');
})->name('equipe');
Route::get('/service', function () {
    return view('service.index');
})->name('service');


Route::post('/SendMail', function (Request $request) {
    try {
        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|email',
                'message' => 'required',
                'telephone' => 'required',
                'nom' => 'required',
            ],
            [
                'email.required' => 'Veuillez saisir un email.',
                'email.email' => 'Veuillez saisir un email valide.',
                'message.required' => 'Veuillez saisir un message.',
                'telephone.required' => 'Veuillez saisir le numero de téléphone.',
                'nom.required' => 'Veuillez saisir le nom.',
            ]
        );

        if ($validator->fails()) {
            return redirect()->route('contact')->withErrors($validator)->withInput();
        }

        $message = [
            'nom' => $request->nom,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'message' => $request->message,
        ];

        // Envoi de l'e-mail
        Mail::to('expertbi18@gmail.com')->send(new UserSendMail($message));

        return redirect()->route('contact')->with('message', 'Merci, nous allons vous contacter bientôt.');
    } catch (\Throwable $th) {
        return redirect()->route('contact')->with('messerror', $th->getMessage());
    }
})->name('SendMail');
