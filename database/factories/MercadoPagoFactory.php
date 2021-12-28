<?php

namespace Database\Factories;

use App\Models\MercadoPago;
use Illuminate\Database\Eloquent\Factories\Factory;

class MercadoPagoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MercadoPago::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'mercado_pago_id' => 0,
            'cliente_id' => 0,
            'curso_id' => 0
        ];
    }

    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [];
        });
    }
}
