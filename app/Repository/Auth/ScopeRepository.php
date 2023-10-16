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

use League\OAuth2\Server\Repositories\ScopeRepositoryInterface;

class ScopeRepository implements ScopeRepositoryInterface
{
    public function getScopeEntityByIdentifier($identifier)
    {
        // Retrieve scope information from your database or other storage mechanism
        // and return an instance of League\OAuth2\Server\Entities\ScopeEntityInterface

    }

    public function finalizeScopes(array $scopes, $grantType, $clientEntity, $userIdentifier = null)
    {
        // Filter the list of scopes based on the grant type, client, and user
        // and return an array of League\OAuth2\Server\Entities\ScopeEntityInterface instances
    }
}