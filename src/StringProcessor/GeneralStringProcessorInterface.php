<?php

declare(strict_types = 1);

namespace Constup\PhpTextProcessing\StringProcessor;

/**
 * Class GeneralStringProcessor
 *
 * @package Constup\PhpTextProcessing\StringProcessor
 */
interface GeneralStringProcessorInterface
{
    /**
     * @param string $source
     * @param bool   $capitalizeFirstCharacter
     *
     * @return string
     */
    public function snakeToCamel(string $source, bool $capitalizeFirstCharacter = false): string;
}
