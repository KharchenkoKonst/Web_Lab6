<?php

namespace App\Http\Controllers;

use App\Domain\Cart\Services\CartService;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

/**
 * Контроллер для управления библиотекой
 */
class CartController extends Controller
{

    public function info($userId)
    {
        $service = new CartService();
        return $service->getCart($userId);
    }

    /**
     * Добавляет товар в библиотеку
     * @param Request request
     * @return array
     */
    public function addToCart(Request $request)
    {
        $service = new CartService();
        $service->addToCart($request->get('id'), $request->get('count', 1), $request->get('userId'));

        return [
            'inCart' => true
        ];
    }
}
