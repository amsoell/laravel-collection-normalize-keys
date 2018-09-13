# Laravel normalizeKeys collection method

Ensure that every array / collection within a collection contains the same keys

```php
$collection = collect([
  [ 'a' => 1, 'b' => 2],
  [ 'a' => 1, 'c' => 3],
  [ 'b' => 1, 'c' => 3],
]);

$collection->normalizeKeys();

// [
//     [ 'a' => 1, 'b' => 2, 'c' => null ],
//     [ 'a' => 1, 'b' => null, 'c' => 3 ],
//     [ 'a' => null, 'b' => 1, 'c' => 3 ],
// ];
```

## Installation

`composer require amsoell/laravel-collection-normalize-keys`
