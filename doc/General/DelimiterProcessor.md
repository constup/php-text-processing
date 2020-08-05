# Delimiter processor (`DelimiterProcessorInterface`)

## Description

A set of utilities for processing text with delimiters.

---

## Methods

### `replaceTextBetweenDelimiters()`

##### Description

Replaces a substring of `$source` starting with `$startDelimiter` and ending with `$endEdlimiter`with 
`$replacementText`.

If `$preserveDelimiters` is set to `true`, start and end delimiter strings will not be affected by replacements. 
If it's set to `false`, the whole sub-string including start and end delimiters will be replaced.

Since `replaceTextBetweenDelimiters` uses `preg_replace`, parameters `$limit` and `$count` are inherited from 
`preg_replace`. Documentation is available at 
[https://www.php.net/manual/en/function.preg-replace.php](https://www.php.net/manual/en/function.preg-replace.php)

##### Parameters

- `string $source`
- `string $startDelimiter`
- `string $endDelimiter`
- `string $replacementText`
- `bool $preserveDelimiters`
    - default value: `true`
- `int $limit`
    - default value: `-1`
    - inherited from `preg_match`
- `?int &$count`
    - default value: `null`
    - inherited from `preg_match`        

##### Returns
Returns an array if the **source** parameter is an array, or a string otherwise.

If matches are found, the new **source** will be returned, otherwise **source** will be returned unchanged or `null` 
if an error occurred.

`null|string|string[]`

```
This method returns the result of a `preg_replace()` function, so the return types and rules are the same as for 
`preg_replace()`.
```