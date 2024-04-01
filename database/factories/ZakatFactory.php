<?php

namespace Database\Factories;

use App\Models\Zakat;
use Illuminate\Database\Eloquent\Factories\Factory;

class ZakatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Zakat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->unique()->name,
            'alamat' => $this->faker->city() ,
            'jumlah_jiwa' => $this->faker->randomDigit() ,
            'harga_beras_dikonsumsi' => $this->faker->randomDigit() ,
            'tagihan' => $this->faker->randomDigit() ,
            'pembayaran' => $this->faker->randomDigit() ,
        ];
    }
}
