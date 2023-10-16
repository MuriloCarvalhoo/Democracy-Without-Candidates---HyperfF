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

use League\OAuth2\Server\Repositories\AccessTokenRepositoryInterface;

class AccessTokenRepository implements AccessTokenRepositoryInterface
{
    public function getNewToken($clientIdentifier, array $scopes, $userIdentifier = null)
    {
        // Create a new access token and return an instance of League\OAuth2\Server\Entities\AccessTokenEntityInterface
    }

    public function persistNewAccessToken($accessTokenEntity)
    {
        // Store the access token in your database or other storage mechanism
    }

    public function revokeAccessToken($tokenId)
    {
        // Revoke the access token with the given ID
    }

    public function isAccessTokenRevoked($tokenId)
    {
        // Check if the access token with the given ID has been revoked
    }
}
?>