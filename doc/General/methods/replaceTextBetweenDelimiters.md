# `replaceTextBetweenDelimiters()`

## Description

Replaces all substrings of `$source` which starts with `$startDelimiter` and
ending with `$endDelimiter`with `$replacementText`.


Since `replaceTextBetweenDelimiters` uses `preg_replace`, parameters
`$limit` and `$count` are inherited from `preg_replace`. Documentation
is available at:
[https://www.php.net/manual/en/function.preg-replace.php](https://www.php.net/manual/en/function.preg-replace.php)

## Parameters

- `string $source`
  - String to process.
- `string $startDelimiter`
  - Start delimiter.
- `string $endDelimiter`
  - End delimiter.
- `string $replacementText`
  - Replacemet text.
- `bool $preserveDelimiters`
  - default value: `true`
  - If `preserveDelimiters` is set to `true`, start and end delimiter
strings will not be affected by replacements (they will stay in the resulting string). If it's set to `false`,
the whole sub-string including start and end delimiters will be
replaced.
- `int $limit`
  - default value: `-1`
  - inherited from `preg_match`
- `?int &$count`
  - default value: `null`
  - inherited from `preg_match`

## Returns

`null|string|string[]`

Returns an array if the `source` parameter is an array, or a string
otherwise.

If matches are found, the new `source` will be returned, otherwise
`source` will be returned unchanged or `null` if an error occurred.

```
This method returns the result of a `preg_replace()` function, so the return types and rules are the same as for 
`preg_replace()`.
```

## Examples

## Links

- [Home](../../Fearures_and_documentation.md)
- [Parent: Delimiter Processor (`DelimiterProcessorInterface`)](../DelimiterProcessor.md)