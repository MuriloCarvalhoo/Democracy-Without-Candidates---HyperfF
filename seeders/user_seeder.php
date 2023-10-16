<?php

declare(strict_types=1);

use App\Model\User;
use Hyperf\Database\Seeders\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(
            ['id' => 1],
            [
            'email' => 'teste@teste.com.br',
            'name' => 'Teste',
            'password' => password_hash('123456', PASSWORD_DEFAULT),
        ]);

    }
}
