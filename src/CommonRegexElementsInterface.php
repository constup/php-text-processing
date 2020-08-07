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
    const CONTENT_WORD = ['isRegex' => true, 'value' => '(\w+){1}'];
    const CONTENT_WORDS = ['isRegex' => true, 'value' => '(\w)+'];
}
