<?php

namespace App\Services;


use MailchimpMarketing\ApiClient;

class Newsletter
{
    public function __construct(protected ApiClient $apiClient)
    {

    }

    public function subscribe(string $email, $list = null)
    {
        $list ??= config('services.mailchimp.list.subscribers');
        return $this->client()->lists->addListMember($list, [
            "email_address" => $email,
            "status" => "subscribed",
        ]);
    }

    protected function client()
    {
        return $this->apiClient->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us20'
        ]);
    }
}
