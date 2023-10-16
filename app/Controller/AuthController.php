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

namespace App\Controller;

use App\Request\AuthLoginRequest;
use Phper666\JWTAuth\JWT;
use App\Service\Api\Auth\AuthService;

class AuthController extends AbstractController
{
  public function login(AuthLoginRequest $request, AuthService $authService, JWT $jwt)
  {
    $validated = $request->validated();

    $username = $validated['username'];
    $password = $validated['password'];

    $user = $authService->login($username, $password);

    $userData = [
      'uid' => $user?->id,
      'username' => $user?->username,
  ];

  $token = $jwt->getToken('default', $userData);

    // echo '<pre>';
    // var_dump($token);
    // echo '</pre>';

    $data = [
      'token' => $token->toString(),
      'exp' => $jwt->getTTL($token->toString()),
    ];

    return $this->response->json($data);
  }
}
