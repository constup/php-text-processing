# `generateMatchPatternWithPrefixes()`

## Description

Generates a regular expression used for matching patterns of various lengths. The pattern can have none, one or more prefixes.

## Parameters

- `array $pattern`
  - Array of array entries describing a pattern. An entry has two fields
    - `isRegex`: `true` if the `value` should be interpreted as a regular expression. `false` if the `value` should be interpreted as a text and run through [`preg_quote()`](https://www.php.net/manual/en/function.preg-quote.php).
    - `value`: a string representing the part of the pattern to search for.
  - `CommonRegexElementsInterface` has several constants defined to be used as a quick shortcut for using the most common regular expression search patterns. The names of these constants start with `CONTENT_`. The format of adata inside these constants is compatible with the format of data `pattern` parameter can use. For example, to pass a wildcard: `(.*?)`, use `CommonRegexElementsInterface::CONTENT_WILDCARD`.
- `array $prefixes`
  - Array of possible prefixes.
  - The format of the `prefixes` array is the same as for `pattern` (`isRegex` and `value` fields)
- `string $regexOptions`
  - default value: `'s'` (`PCRE_DOTALL`)
  - PRCE pattern modifiers. Official documentation is available here: [https://www.php.net/manual/en/reference.pcre.pattern.modifiers.php](https://www.php.net/manual/en/reference.pcre.pattern.modifiers.php)

This method uses `PREG_PATTERN_ORDER` and `0` as `offset` when using [`preg_match_all()`](https://www.php.net/manual/en/function.preg-match-all.php) to generate the result.

## Returns

A regular expression string which you can use to search for patterns with none, one or more prefixes.

## Related processor methods

- [`matchPatternWithPrefixes()`](../../General/methods/matchPatternWithPrefixes.md)

## Examples

## Links

- [Home](../../Fearures_and_documentation.md)
- [Parent: General regular expression generator (`GeneralRegexGeneratorInterface()`)](../GeneralRegexGenerator.md)
- [Common regular expression elements (`CommonRegexElementsInterface`)](../../CommonRegexElementsInterface.md)