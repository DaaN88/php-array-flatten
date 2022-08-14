<?php

declare(strict_types=1);

namespace Ashvedov\ArrayFlatten;

use Ashvedov\ArrayFlatten\Services\Rectifier;

final class ArrFlatten
{
    private Rectifier $rectifier;

    /**
     * @param array $array
     */
    public function __construct(array $array)
    {
        $this->rectifier = new Rectifier(original_array: $array);
    }

    /**
     * @return array
     */
    public function flattenArray(): array
    {
        return $this->rectifier->flatten();
    }
}
