<?php

declare(strict_types = 1);

namespace Constup\PhpTextProcessing\General;

use Constup\PhpTextProcessing\CommonRegexElementsInterface;
use Constup\PhpTextProcessing\RegexGenerator\General\GeneralRegexGeneratorInterface;

/**
 * Class DelimiterProcessor
 *
 * @package Constup\PhpTextProcessing\General
 */
class DelimiterProcessor implements DelimiterProcessorInterface
{
    /** @var GeneralRegexGeneratorInterface */
    private $generalRegexGenerator;

    /**
     * DelimiterProcessor constructor.
     *
     * @param GeneralRegexGeneratorInterface $generalRegexGenerator
     */
    public function __construct(GeneralRegexGeneratorInterface $generalRegexGenerator)
    {
        $this->generalRegexGenerator = $generalRegexGenerator;
    }

    /**
     * @return GeneralRegexGeneratorInterface
     */
    public function getGeneralRegexGenerator(): GeneralRegexGeneratorInterface
    {
        return $this->generalRegexGenerator;
    }

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

        $regex = $this->getGeneralRegexGenerator()->generateReplaceTextBetweenDelimiters($startDelimiter, $endDelimiter);

        return preg_replace($regex, $replacementText, $source, $limit, $count);
    }

    /**
     * @param string $source
     * @param string $startDelimiter
     * @param string $endDelimiter
     * @param bool   $includeDelimitersInResult
     *
     * @return string[]
     */
    public function extractTextBetweenDelimiters(
        string $source,
        string $startDelimiter,
        string $endDelimiter,
        bool $includeDelimitersInResult = true
    ): array {
        $pattern = [$startDelimiter, CommonRegexElementsInterface::CONTENT_WILDCARD, $endDelimiter];
        $result = $this->matchPattern($source, $pattern);

        return ($includeDelimitersInResult === true)
            ? $result[0]
            : $result[2];
    }

    /**
     * @param string  $source
     * @param array[] $pattern Format: ['isRegex' => bool, 'value' => string]
     * @param int     $flags
     * @param int     $offset
     *
     * @return array
     */
    public function matchPattern(
        string $source,
        array $pattern,
        $flags = PREG_PATTERN_ORDER,
        $offset = 0
    ): array {
        $regex = $this->getGeneralRegexGenerator()->generateMatchPattern($pattern);
        preg_match_all($regex, $source, $matches, $flags, $offset);

        return $matches;
    }

    /**
     * @param string  $source
     * @param array[] $pattern  Format: ['isRegex' => bool, 'value' => string]
     * @param array[] $prefixes Format: ['isRegex' => bool, 'value' => string]
     *
     * @return array
     */
    public function matchPatternWithPrefixes(
        string $source,
        array $pattern,
        array $prefixes
    ): array {
        $regex = $this->getGeneralRegexGenerator()->generateMatchPatternWithPrefixes($pattern, $prefixes);
        preg_match_all($regex, $source, $matches);

        return $matches[0];
    }
}
