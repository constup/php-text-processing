<?php

declare(strict_types = 1);

namespace Constup\PhpTextProcessing\General;

/**
 * Class DelimiterProcessor
 *
 * @package Constup\PhpTextProcessing\General
 */
class DelimiterProcessor implements DelimiterProcessorInterface
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
    ): string {
        if ($preserveDelimiters === true) {
            $replacementText = '$1' . $replacementText . '$3';
        }

        return preg_replace('#(' . preg_quote($startDelimiter) . ')(.*?)(' . preg_quote($endDelimiter) . ')#s', $replacementText, $source, $limit, $count);
    }
}
