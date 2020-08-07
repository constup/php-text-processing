<?php

declare(strict_types = 1);

namespace Constup\PhpTextProcessing;

/**
 * Interface CommonRegexElementsInterface
 *
 * @package Constup\PhpTextProcessing
 */
interface CommonRegexElementsInterface
{
    const CONTENT_WILDCARD = ['isRegex' => true, 'value' => '(.*?)'];
}
