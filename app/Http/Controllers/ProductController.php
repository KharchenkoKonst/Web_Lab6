<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

/**
 * Контроллер для управления товарами
 */
class ProductController extends Controller
{
    public $arr = array(
        [
            'id' => 1,
            'title' => 'Карты, деньги, два ствола.',
            'description' => 'Описание добавится в бд...',
            'year' => 1998,
            'rate' => 8.5,
            'img' => 'C:\Users\khars\PhpstormProjects\Lab1\frontend\src\assets\images\posters\1.jpg'
        ],
        [
            'id' => 2,
            'title' => 'Большой куш.',
            'description' => 'Описание добавится в бд...',
            'year' => 2000,
            'rate' => 8.5,
            'img' => 'C:\Users\khars\PhpstormProjects\Lab1\frontend\src\assets\images\posters\2.jpg'
        ],
        [
            'id' => 3,
            'title' => 'Меч короля Артура.',
            'description' => 'Описание добавится в бд...',
            'year' => 2017,
            'rate' => 7.1,
            'img' => 'C:\Users\khars\PhpstormProjects\Lab1\frontend\src\assets\images\posters\3.jpg'
        ],
        [
            'id' => 4,
            'title' => 'Рок-н-рольщик.',
            'description' => 'Описание добавится в бд...',
            'year' => 2008,
            'rate' => 7.8,
            'img' => 'C:\Users\khars\PhpstormProjects\Lab1\frontend\src\assets\images\posters\4.jpg'
        ],
        [
            'id' => 5,
            'title' => 'Револьвер.',
            'description' => 'Описание добавится в бд...',
            'year' => 2005,
            'rate' => 7.4,
            'img' => 'C:\Users\khars\PhpstormProjects\Lab1\frontend\src\assets\images\posters\5.jpg'
        ],
        [
            'id' => 6,
            'title' => 'Джентльмены.',
            'description' => 'Описание добавится в бд...',
            'year' => 2019,
            'rate' => 8.5,
            'img' => 'C:\Users\khars\PhpstormProjects\Lab1\frontend\src\assets\images\posters\6.jpg'
        ]
    );

    /**
     * Список товаров.
     * @return array[]
     */
    public function list()
    {
        return $this->arr;
    }

    /**
     * Информация о товаре
     * @param $id
     * @return array
     */
    public function info($id)
    {
        foreach ($this->arr as $item) {
            if ($item['id'] == $id)
                return $item;
        }
    }
}
