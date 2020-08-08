# `matchPattern()`

## Description

Runs through `source` and searches for all substrings which match the `pattern`.

This method is used as a base for other string extracting methods. You can either use this method directly or its more specialized versions.

## Parameters

- `string $source`
  - String to search in.
- `array $pattern`
  - Array of array entries describing a pattern. An entry has two fields:
    - `isRegex`: `true` if the `value` should be interpreted as a regular expression. `false` if the `value` should be interpreted as a text and run through [`preg_quote()`](https://www.php.net/manual/en/function.preg-quote.php).
    - `value`: a string representing the part of the pattern to search for.
  - `CommonRegexGeneratorInterface` has several constants defined to be used as a quick shortcut for using the most common regular expression search patterns. The names of these constants start with `CONTENT_`. The format of adata inside these constants is compatible with the format of data `pattern` parameter can use. For example, to pass a wildcard: `(.*?)`, use `CommonRegexGeneratorInterface::CONTENT_WILDCARD`.
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

## Related methods

### Related processor methods

- [`extractTextBetweenDelimiters()`](./extractTextBetweenDelimiters.md) - Extracts text betwen defined start and end delimiters.

### Related generator methods

- [`generateMatchPattern()`](../../RegexGenerator/methods/generateMatchPattern.md) - Generates a regular expression used in this (`matchPattern()`) method.

## Examples

---

Match the following pattern: word *"brown"* followed by random set of characers, followed by word *"over"* followed by random set of characters, followed by word *"lazy"*.

```php
$source = 'The quick brown fox jumps over the lazy dog.';
$pattern = [
    ['isRegex' => false, 'value' => 'brown'],
    CommonRegexGeneratorInterface::CONTENT_WILDCARD,
    ['isRegex' => false, 'value' => 'over'],
    CommonRegexGeneratorInterface::CONTENT_WILDCARD,
    ['isRegex' => false, 'value' => 'lazy']
];
$matches = (new DelimiterProcessor())->matchPattern($source, $pattern);
print_r($matches);
```

Result:

```
Array
(
    [0] => Array
        (
            [0] => brown fox jumps over the lazy
        )

    [1] => Array
        (
            [0] => brown
        )

    [2] => Array
        (
            [0] =>  fox jumps
        )

    [3] => Array
        (
            [0] => over
        )

    [4] => Array
        (
            [0] =>  the
        )

    [5] => Array
        (
            [0] => lazy
        )

)
```

---

## Links

- [Home](../../Fearures_and_documentation.md)
- [Parent: DelimiterProcessor (`DelimiterProcessorInterface`)](../DelimiterProcessor.md)
- [Common regular expression elements (`CommonRegexElementsInterface`)](../../CommonRegexElementsInterface.md)  