# Array Dot Notation for PHP

A utility to use dot notation in PHP arrays.

## Setup

1. Clone this repo.
1. Copy `local.env.dist` to `local.env` and update GitHub.com token as 
   appropriate.
1. Run `make test` to install dependencies and run PHPUnit tests.
   
### Makefile script

There is a Makefile in place to simplify common tasks.
- `make test` - does `composer install` and runs phpunit tests

___

### Class `DotNotation`

Util class containing a single method to collapse a multi-dimensional array into a
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
