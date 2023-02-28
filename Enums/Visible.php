<?php

namespace Modules\Cms\Enums;

use Catch\Enums\Enum;

enum Visible: int implements Enum
{
    case PUBLIC = 1; // 公开
    case SECRET = 2; // 私密
    case PASSWORD = 3; // 密码查看

    public function value(): int
    {
        // TODO: Implement value() method.
        return match ($this) {
            self::PUBLIC => 1,
            self::SECRET => 2,
            self::PASSWORD => 3,
        };
    }

    public function name(): string
    {
        // TODO: Implement name() method.
        return match ($this) {
            self::PUBLIC => '公开',
            self::SECRET => '私密',
            self::PASSWORD => '密码查看',
        };
    }

    /**
     *
     * @param int $value
     * @return bool
     */
    public function assert(int $value): bool
    {
        return $this->value === $value;
    }
}
