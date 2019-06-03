# SIL PHP Utilities

A collection of utility classes share among SIL International PHP projects.

## Build Status

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/silinternational/php-env/badges/quality-score.png?b=develop)](https://scrutinizer-ci.com/g/silinternational/php-utils/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/silinternational/php-env/badges/build.png?b=develop)](https://scrutinizer-ci.com/g/silinternational/php-utils/build-status/master)

## Setup

1. Clone this repo.
1. Copy `local.env.dist` to `local.env` and update GitHub.com token as 
   appropriate.
1. Run `make test` to install dependencies and run PHPUnit tests.
   
### Makefile script

There is a Makefile in place to simplify common tasks.
- `make test` - does `composer install` and runs phpunit tests

___

## Sil/Arrays

Utility class for manipulating arrays.

### Classes in Sil/Arrays namespace

1. __ArrayCollapse__: `use Sil\Array\ArrayCollapse;`

### Class `ArrayCollapse`

Util class containing a method to collapse a multi-dimensional array into a
single-dimensional array. Array keys are combined using a dot to separate
levels of the array. For instance:

```
[
    'a' => [
        'x' => 'data1',
    ],
    'b' => 'data2',
]
```

will be collapsed to

```
[
    'a.x' => 'data1',
    'b' => 'data2',
]
```
