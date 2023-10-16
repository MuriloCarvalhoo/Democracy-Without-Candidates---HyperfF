<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace App\Constants;

use Hyperf\Constants\AbstractConstants;
use Hyperf\Constants\Annotation\Constants;

/**
 * @Constants
 */
class ErrorCode extends AbstractConstants
{
    /**
     * @Message("Server Error！")
     */
    const SERVER_ERROR = 500;

    const AUTH_ERROR = 401;

    const VALIDATION_ERROR = 422;

    const NOT_FOUND = 404;

    const UNAUTHORIZED = 401;

    const FORBIDDEN = 403;

    const TOKEN_INVALID = 10001;

    const TOKEN_EXPIRED = 10002;

    const TOKEN_BLACKLISTED = 10003;

    const ERROR = 400;
}
