# `matchPattern()`

## Description

Runs through `source` and searches for all substrings which match the `pattern`.

This method is used as a base for other string extracting methods. You can either use this method directly or its more specialized versions.

### Related methods

- [`extractTextBetweenDelimiters()`](./extractTextBetweenDelimiters.md) - Extracts text betwen defined start and end substrings.

## Parameters

- `string $source`
  - String to search in.
- `array (string[]) $pattern`
  - Array of strings describing a pattern
  - To pass a wildcard, use `DelimiterProcessorInterface::CONTENT_WILDCARD`
- `int $flags`
  - default value: `PREG_PATTERN_ORDER`
  - inherited from [`preg_match_all()`](https://www.php.net/manual/en/function.preg-match-all.php)
- `int $offset`
  - default value: `0`
  - inherited from [`preg_match_all()`](https://www.php.net/manual/en/function.preg-match-all.php)

## Returns

`array` (`string[]`)

Array of all matches in multi-dimensional array ordered according to `flags`, as described at 
[`preg_match_all()`](https://www.php.net/manual/en/function.preg-match-all.php).

## Examples

## Links

- [Home](../../Fearures_and_documentation.md)
- [Parent: DelimiterProcessor (`DelimiterProcessorInterface`)](../DelimiterProcessor.md)