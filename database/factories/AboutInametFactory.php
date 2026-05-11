<?php

namespace Database\Factories;

use App\Models\AboutInamet;
use Illuminate\Database\Eloquent\Factories\Factory;

class AboutInametFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model= AboutInamet::class;

    public function definition()
    {
        return [
            'title' => 'Sobre o Inamet',
            'body' => 'Aqui vai a descrição sobre o quê é o Inamet'
        ];
    }
}
