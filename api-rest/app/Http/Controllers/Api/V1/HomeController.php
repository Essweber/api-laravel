<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\OrderShipped;
use App\Notifications\InvoicePaid;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    public function __invoke()
    {
        // return new OrderShipped;
        Notification::route('mail', ['aessotchossim@gmail.com' => 'Aloua essotchossim'])
        ->notify(new InvoicePaid);

        dd('done');

        // $user->notify(new InvoicePaid);

        return [
            'success' => true,
            'message' => __('message.welcome'),
            'data' => [
                'service' => 'API REST',
                'version' => '1.0',
                'language' => app()->getLocale(),
                'support' => 'contact@mtc',

            ]

        ];
    }
}
