<?php

namespace App\Http\Controllers;

use App\Services\MailchimpNewsletter;
use App\Services\Newsletter;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter)
    {
        request()->validate([
            'email' => 'required|email'
        ]);

        try {
            $newsletter->subscribe(\request('email'));
        } catch (Exception $exception) {
            throw ValidationException::withMessages([
                'email' => 'This email cannot be added. Try another email.'
            ]);
        }
        return redirect(\Session::get('url'))
            ->with('success', 'Thank you for signing up!');
    }
}
