<?php

namespace App\Service\Api\Auth;

use App\Constants\ErrorCode;
use App\Exception\BusinessException;
use App\Repository\Auth\AuthRepository;

class AuthService 
{
    public function login(string $username, string $password)
    {
        $user = AuthRepository::findUserByUsername($username);

        if (empty($user)) {
            throw new BusinessException(ErrorCode::SERVER_ERROR, "Wrong username");
        }

        if (!password_verify($password, $user['password'])) {
            throw new BusinessException(ErrorCode::SERVER_ERROR, "Wrong username or password");
        }

        return $user;
    }
} 