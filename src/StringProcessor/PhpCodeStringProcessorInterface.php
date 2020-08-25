<?php

declare(strict_types = 1);

namespace Constup\PhpTextProcessing\StringProcessor;

/**
 * Class PhpCodeStringProcessor
 *
 * @package Constup\PhpTextProcessing\StringProcessor
 */
interface PhpCodeStringProcessorInterface
{
    /**
     * @return GeneralStringProcessorInterface
     */
    public function getGeneralStringProcessor(): GeneralStringProcessorInterface;

    /**
     * @param string $source_string
     *
     * @return string
     */
    public function extractNamespaceFromFQN(string $source_string): string;

    /**
     * @param string $source
     *
     * @return string
     */
    public function extractNameFromFQN(string $source): string;

    /**
     * @param string $source
     *
     * @return string
     */
    public function generateGetterNameFromPropertyName(string $source): string;

    /**
     * @param string $source
     *
     * @return string
     */
    public function generateSetterNameFromPropertyName(string $source): string;

    /**
     * @param string $source
     *
     * @return string
     */
    public function generateWitherNameFromPropertyName(string $source): string;
}
