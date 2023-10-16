<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Repository\Auth;

use App\Model\User;
use App\Repository\AbstractRepository;

class AuthRepository extends AbstractRepository
{
    protected static $model = User::class;

    public static function findUserByUsername(string $username)
    {
        return self::loadModel()::query()->where('name', $username)->first();
    }
}