# Text processing utilities for PHP

## Description

Have you ever searched StackOverflow for a solution on how to do something with a string or text in PHP? Feel a bit lost
inside all that regex or simply can't be bothered to learn it for the n-th time?

This library should provide easy to use solutions for the most common text and string processing tasks. The solutions 
implemented in this library are usually curated from a set of different methods of solving a problem and should 
represent the best solution for the given task.

Think you can do something better? Submit a pull request and contribute.

## Installation

```bash
php composer.phar require constup/php-text-processing
```

## Features and Documentation

[Table of contents](./doc/Fearures_and_documentation.md)

## Usage

All classes in this package are built as **services** which can be **autowired**.

You can read more about autowiring here:

- Laravel: [Automatic Resolution](https://laravel.com/docs/4.2/ioc#automatic-resolution).
- Symfony: [Autowing](https://symfony.com/doc/current/service_container/autowiring.html) 

#### Example

```php
use Constup\PhpTextProcessing\General\DelimiterProcessorInterface;

class YourClass
{
    private \Constup\PhpTextProcessing\General\DelimiterProcessorInterface $delimiterProcessor;
    
    public function __construct(DelimiterProcessorInterface $delimiterProcessor)
    {
        $this->delimiterProcessor = $delimiterProcessor;
    }
    
    public function getDelimiterProcessor(): DelimiterProcessorInterface
    {
        return $this->delimiterProcessor;
    }

    public function yourMethod(string $something): string
    {
        $processedText = $this->getDelimiterProcessor()
            ->replaceTextBetweenDelimiters($something, 'start', 'end', 'replacement text');
        ...
    }   
}
```

## License

[MIT License](./LICENSE)