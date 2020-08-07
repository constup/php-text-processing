# Features and documentation

## Introduction

There are two ways you can use this library:

- A default set of text and string processing methods grouped in the [Processors](#processors) section.
- A set of [regular expression generators](#regular-expression-generators), in case you want to use PHP's regular expression functions in your own code but don't want to mess around with writing regular expressions themselves.

So, if the default processor methods doesn't suit your needs for any reason, you can still use regular expression generators as a base which you can use in your own regular expression function calls (or modify them to fit your needs).

## Regular expression generators

- [General regular expression generators (`GeneralRegexGeneratorInterface`)](RegexGenerator/GeneralRegexGenerator.md)

## Processors

- [Delimiter processor (`DelimiterProcessorInterface`)](./General/DelimiterProcessor.md)

## Common regular expression elements

[`CommonRegexElementsInterface`](CommonRegexElementsInterface.md) contains constnats used when forming regular epressions. These constants hold the most commonly used expression parts.