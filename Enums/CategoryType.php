<?php

namespace Modules\Cms\Enums;

use Catch\Enums\Enum;

enum CategoryType: int implements Enum
{
    case ARTICLE = 1; // 文章
    case HREF = 2; // 链接

    public function value(): int
    {
        // TODO: Implement value() method.
        return match ($this) {
            self::ARTICLE => 1,
            self::HREF => 2,
        };
    }

    public function name(): string
    {
        // TODO: Implement name() method.
        return match ($this) {
            self::ARTICLE => '文章类型',
            self::HREF => '链接类型',
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
