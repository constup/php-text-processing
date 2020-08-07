# Common regular expression elements (`CommonRegexElementsInterface`)

## Description

`CommonRegexElementsInterface` contains constnats used when forming regular epressions. These constants hold the most commonly used expression parts.

## Constants

```
NOTE:
Most of the methods in processor classes of this package uses `s` modifier when processing regular expressions. This means `.` will match new lines as well.
```

- `CONTENT_WILDCARD = ['isRegex' => true, 'value' => '(.*?)']`: matches any character except for line terminators. 
