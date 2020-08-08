# `generateMatchPattern()`

## Description

Generates a regular expression used for matching patterns of various lengths.

## Parameters

- `array $pattern`
  - Array of array entries describing a pattern. An entry has two fields:
    - `isRegex`: `true` if the `value` should be interpreted as a regular expression. `false` if the `value` should be interpreted as a text and run through [`preg_quote()`](https://www.php.net/manual/en/function.preg-quote.php).
    - `value`: a string representing the part of the pattern to search for.
  - `CommonRegexGeneratorInterface` has several constants defined to be used as a quick shortcut for using the most common regular expression search patterns. The names of these constants start with `CONTENT_`. The format of adata inside these constants is compatible with the format of data `pattern` parameter can use. For example, to pass a wildcard: `(.*?)`, use `CommonRegexGeneratorInterface::CONTENT_WILDCARD`.
- `string $regexOptions`
  - default value: `'s'` (`PCRE_DOTALL`)
  - PCRE pattern modifiers. Official documentation is available here: [https://www.php.net/manual/en/reference.pcre.pattern.modifiers.php](https://www.php.net/manual/en/reference.pcre.pattern.modifiers.php)

## Returns

`string`

A regular expression string which you can use to search for patterns.

## Related processor methods

- [`matchPattern()`](../../General/methods/matchPattern.md)

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
$result = (new GeneralRegexGenerator())->generateMatchPattern($source, $pattern);
print_r($matches);
```

Result:

```
#(brown)(.*?)(over)(.*?)(lazy)#s
```

---

## Links

- [Home](../../Fearures_and_documentation.md)
- [Parent: General regular expression generator (`GeneralRegexGeneratorInterface()`)](../GeneralRegexGenerator.md)
- [Common regular expression elements (`CommonRegexElementsInterface`)](../../CommonRegexElementsInterface.md)