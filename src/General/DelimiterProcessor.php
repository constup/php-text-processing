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

    /**
     * @param string $source
     * @param string $startDelimiter
     * @param string $endDelimiter
     * @param bool   $includeDelimitersInResult
     *
     * @return array
     */
    public function extractTextBetweenDelimiters(
        string $source,
        string $startDelimiter,
        string $endDelimiter,
        bool $includeDelimitersInResult = true
    ): array {
        $pattern = [$startDelimiter, self::CONTENT_WILDCARD, $endDelimiter];
        $result = $this->matchPattern($source, $pattern);

        return ($includeDelimitersInResult === true)
            ? $result[0]
            : $result[2];
    }

    /**
     * @param string   $source
     * @param string[] $pattern
     * @param int      $flags
     * @param int      $offset
     *
     * @return array
     */
    public function matchPattern(string $source, array $pattern, $flags = PREG_PATTERN_ORDER, $offset = 0): array
    {
        $regex = '#';
        foreach ($pattern as $keyword) {
            if ($keyword !== self::CONTENT_WILDCARD) {
                $regex .= '(' . preg_quote($keyword) . ')';
            } else {
                $regex .= self::CONTENT_WILDCARD;
            }
        }
        $regex .= '#s';
        preg_match_all($regex, $source, $matches, $flags, $offset);

        return $matches;
    }
}
