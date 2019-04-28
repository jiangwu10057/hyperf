<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace Hyperf\Contract;

use Swoole\Server as SwooleServer;

interface OnReceiveInterface
{
    public function onReceive(SwooleServer $server, int $fd, int $fromId, string $data): void;
}
