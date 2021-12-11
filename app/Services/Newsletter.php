<?php

namespace App\Services;

//This is an interface for Convertkit and Mailchimp newsletter service

interface Newsletter
{
    public function subscribe(string $email, $list = null);
}
