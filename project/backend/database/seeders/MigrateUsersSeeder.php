<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class MigrateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            // Hash uniquement si ce n'est pas déjà hashé
            if (!str_starts_with($user->password, '$2y$')) {
                $user->password = Hash::make($user->password);
                $user->save();
                $this->command->info("Password hashed for user: {$user->email}");
            } else {
                $this->command->info("Password already hashed for user: {$user->email}");
            }
        }
    }
}
