<?php

namespace Modules\Cms\Enums;

use Catch\Enums\Enum;

enum UrlPattern: int implements Enum
{
    case DYNAMIC = 1; // 动态模式
    case STATIC = 2; // 静态
    case MONTH_DAY = 3; // 月日
    case YEAR_MON_DAY = 4; // 年月日
    public function value(): int
    {
        // TODO: Implement value() method.
        return match ($this) {
            self::DYNAMIC => 1,
            self::STATIC => 2,
            self::MONTH_DAY => 3,
            self::YEAR_MON_DAY => 4
        };
    }

    public function name(): string
    {
        // TODO: Implement name() method.
        return match ($this) {
            self::DYNAMIC => '动态模式',
            self::STATIC => '静态模式',
            self::MONTH_DAY => '月日模式',
            self::YEAR_MON_DAY => '年月日模式',
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
