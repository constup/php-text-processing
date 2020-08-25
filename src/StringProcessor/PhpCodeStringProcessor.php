<?php

declare(strict_types = 1);

namespace Constup\PhpTextProcessing\StringProcessor;

/**
 * Class PhpCodeStringProcessor
 *
 * @package Constup\PhpTextProcessing\StringProcessor
 */
class PhpCodeStringProcessor implements PhpCodeStringProcessorInterface
{
    private GeneralStringProcessorInterface $generalStringProcessor;

    /**
     * PhpCodeStringProcessor constructor.
     *
     * @param GeneralStringProcessorInterface $generalStringProcessor
     */
    public function __construct(GeneralStringProcessorInterface $generalStringProcessor)
    {
        $this->generalStringProcessor = $generalStringProcessor;
    }

    /**
     * @return GeneralStringProcessorInterface
     */
    public function getGeneralStringProcessor(): GeneralStringProcessorInterface
    {
        return $this->generalStringProcessor;
    }

    /**
     * @param string $source_string
     *
     * @return string
     */
    public function extractNamespaceFromFQN(string $source_string): string
    {
        return preg_replace('#\\\\[^\\\\]*$#', '', $source_string);
    }

    /**
     * @param string $source
     *
     * @return string
     */
    public function extractNameFromFQN(string $source): string
    {
        $sourceArray = explode('\\', $source);

        return end($sourceArray);
    }

    /**
     * @param string $source
     *
     * @return string
     */
    public function generateGetterNameFromPropertyName(string $source): string
    {
        return  'get' . $this->getGeneralStringProcessor()->snakeToCamel($source, true);
    }

    /**
     * @param string $source
     *
     * @return string
     */
    public function generateSetterNameFromPropertyName(string $source): string
    {
        return 'set' . $this->getGeneralStringProcessor()->snakeToCamel($source, true);
    }

    /**
     * @param string $source
     *
     * @return string
     */
    public function generateWitherNameFromPropertyName(string $source): string
    {
        return 'with' . $this->getGeneralStringProcessor()->snakeToCamel($source, true);
    }
}
