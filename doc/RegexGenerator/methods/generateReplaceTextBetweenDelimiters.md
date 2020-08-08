# `generateReplaceTextBetweenDelimiters()`

## Description

Generates a regular expression used for replacing text within start and end delimiters.


Since `replaceTextBetweenDelimiters` uses [`preg_replace()`](https://www.php.net/manual/en/function.preg-replace), parameters
`$limit` and `$count` are inherited from [`preg_replace()`](https://www.php.net/manual/en/function.preg-replace).

## Parameters

- `string $startDelimiter`
  - Start delimiter.
- `string $endDelimiter`
  - End delimiter.
- `string $regexOptions`
  - default value: `'s'` (`PCRE_DOTALL`)
  - PRCE pattern modifiers. Official documentation is available here: [https://www.php.net/manual/en/reference.pcre.pattern.modifiers.php](https://www.php.net/manual/en/reference.pcre.pattern.modifiers.php)

## Returns

`string`

A regular expression used for replacing text within start and end delimiters.

## Examples

## Links

- [Home](../../Fearures_and_documentation.md)
- [Parent: General regular expression generator (`GeneralRegexGeneratorInterface()`)](../GeneralRegexGenerator.md)
- [Common regular expression elements (`CommonRegexElementsInterface`)](../../CommonRegexElementsInterface.md)