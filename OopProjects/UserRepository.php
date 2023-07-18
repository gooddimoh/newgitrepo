<?php
declare(strict_types=1);
namespace App\Modules\Users\Repositories;

use App\Modules\Users\User;
use Illuminate\Database\Eloquent\Collection;

class UserRepository
{
    /**
     * @return Collection
     */
    public function getUsers(): Collection
    {
        return User::all();
    }

    /**
     * @param int $userId
     * @return User
     */
    public function getUserById(int $userId): User
    {
        return User::find($userId);
    }

    /**
     * @param string $email
     * @return User
     */
    public function getUserByEmail(string $email): User
    {
        return User::where('email', $email)->first();
    }
}