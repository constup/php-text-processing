<?php

declare(strict_types = 1);

namespace Constup\PhpTextProcessing\General;

/**
 * Class DelimiterProcessor
 *
 * @package Constup\PhpTextProcessing\General
 */
interface DelimiterProcessorInterface
{
    /**
     * @param string   $source
     * @param string   $startDelimiter
     * @param string   $endDelimiter
     * @param string   $replacementText
     * @param bool     $preserveDelimiters
     * @param int      $limit
     * @param int|null $count
     *
     * @return string
     */
    public function replaceTextBetweenDelimiters(
        string $source,
        string $startDelimiter,
        string $endDelimiter,
        string $replacementText,
        bool $preserveDelimiters = true,
        int $limit = -1,
        ?int &$count = null
    ): string;
}
