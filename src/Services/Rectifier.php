<?php

declare(strict_types=1);

namespace Ashvedov\ArrayFlatten\Services;

final class Rectifier
{
    private array $original_array;

    /**
     * @param array $original_array
     */
    public function __construct(array $original_array)
    {
        $this->original_array = $original_array;
    }

    /**
     * @return array
     */
    public function flatten(): array
    {
        $flattened_array = function (array $original_array) use (&$flattened_array) {
            return array_reduce(
                $original_array,
                fn($acc, $element) =>
                is_array($element)
                    ? [...$acc, ...$flattened_array($element)]
                    : [...$acc, $element],
                [],
            );
        };

        return $flattened_array(original_array: $this->original_array);
    }
}
