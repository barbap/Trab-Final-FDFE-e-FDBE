<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CursoFactory extends Factory
{
    protected $model = Curso::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'valor' => ''
        ];
    }

    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [];
        });
    }
}
