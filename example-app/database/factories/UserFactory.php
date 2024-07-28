<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(), // Sử dụng thời gian hiện tại
            'password' => Hash::make('password'), // Hash mật khẩu
            'so_dien_thoai' => $this->faker->numerify('##########'), // Sử dụng số điện thoại giả lập
            'dia_chi' => $this->faker->address, // Sử dụng address() cho địa chỉ
            'vai_tro' => $this->faker->randomElement(['3']), // Sử dụng randomElement() cho vai trò
            'remember_token' => Str::random(10),
        ];
    }
}