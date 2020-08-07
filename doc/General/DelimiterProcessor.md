# Delimiter processor (`DelimiterProcessorInterface`)

## Description

A set of utilities for processing text with delimiters.

## Methods

- **Replacing substrings**
  - [`replaceTextBetweenDelimiters($source, $startDelimiter, $endDelimiter, $replacementText, [$preserveDelimiters = true, $limit = -1, &$count = null])`](./methods/replaceTextBetweenDelimiters.md)
- **Extracting substrings**  
  -  [`matchPattern($source, $pattern, [$flags = PREG_PATTERN_ORDER, $offset = 0])`](./methods/matchPattern.md)
  -  [`matchPatternWithPrefixes($source, $pattern, $prefixes)`](./methods/matchPatternWithPrefixes.md)
  -  [`extractTextBetweenDelimiters($source, $startDelimiter, $endDelimiter, [$includeDelimitersInResult = true])`](./methods/extractTextBetweenDelimiters.md)

## Links

- [Home](../Fearures_and_documentation.md)