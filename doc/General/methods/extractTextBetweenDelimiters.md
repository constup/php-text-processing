# `extractTextBetweenDelimiters()`

## Description

Extracts all substrings in `source` which start with `startDelimiter` and ends with `endDelimiter`.

## Parameters

- `string $source`
  - String to search in.
- `string $startDelimiter`
  - Start delimiter.
- `string $endDelimiter`
  - End delimiter.
- `bool $includeDelimitersInResult`
  - default value: `true`
  - Defines whether delimiters should be included in the results. 

## Returns

`array` (`string[]`)

Array of all matches. 

  If `includeDelimitersInResult` is set to `true`, the returning array of results will contain full string matches, including `startDelimiter` and `endDelimiter`. 
  
  If `includeDelimitersInResult` is set to `false`, the returning array of results will contain only matches bordered with `startDelimiter` and `endDelimiter`, without including `startDelimiter` and `endDelimiter`.

## Examples

## Links

- [Home](../../Fearures_and_documentation.md)
- [Parent: DelimiterProcessor (`DelimiterProcessorInterface`)](../DelimiterProcessor.md)
- [Related method: `matchPattern()`](./matchPattern.md)
- [Common regular expression elements (`CommonRegexElementsInterface`)](../../CommonRegexElementsInterface.md)