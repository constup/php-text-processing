<?php

declare(strict_types = 1);

namespace Constup\PhpTextProcessing\StringProcessor;

/**
 * Class GeneralStringProcessor
 *
 * @package Constup\PhpTextProcessing\StringProcessor
 */
class GeneralStringProcessor implements GeneralStringProcessorInterface
{
    /**
     * @param string $source
     * @param bool   $capitalizeFirstCharacter
     *
     * @return string
     */
    public function snakeToCamel(string $source, bool $capitalizeFirstCharacter = false): string
    {
        $result = str_replace('_', '', ucwords($source, '_'));

        return $capitalizeFirstCharacter
            ? $result
            : lcfirst($result);
    }
}
