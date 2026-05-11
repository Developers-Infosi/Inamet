<?php

namespace Database\Factories;

use App\Models\InametPrincipal;
use Illuminate\Database\Eloquent\Factories\Factory;

class InametPrincipalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = InametPrincipal::class;

    public function definition()
    {
        return [
            'name' => 'Aqui vai o nome do Director do Inamet',
            'photo'=> '',
            'biograph' => 'Aqui vai a biografia do Director do Inamet'
        ];
    }
}
