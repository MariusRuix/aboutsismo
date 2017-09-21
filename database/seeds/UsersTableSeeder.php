<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * @var array
     */
    protected $admins = [
        ['name' => 'Carlos Hernandez', 'email' => 'chernandez@datacreativa.rocks'],
        ['name' => 'Mario Ruiz', 'email' => 'mruiz@datacreativa.rocks'],
    ];

    /**
     * Run the resource table seed.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->admins as $attributes) {
            $user = User::create($attributes + [
                'password' => 'password',
                'provisional_password' => 'password',
            ]);
        }
    }
}
