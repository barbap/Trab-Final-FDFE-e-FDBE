<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UsuarioFactory extends Factory
{
    protected $model = Usuario::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'cpf' => $this->faker->unique()->randomDigitNotNull,
            'celular' => $this->faker->cellphoneNumber,
            'email' => $this->faker->unique()->safeEmail(),
            'password' => password_hash('123', PASSWORD_BCRYPT),
        ];
    }

    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [];
        });
    }
}
