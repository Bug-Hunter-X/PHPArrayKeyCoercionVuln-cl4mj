To avoid this type of error, you should enforce stricter key typing in your PHP code.

One solution is to ensure that your array keys are explicitly defined as integers or strings, based on your application's requirements. For example, if you need integer keys, explicitly convert them or use array_filter to remove non-integer keys:

```php
$data = [1 => 'apple', '2' => 'banana', 3 => 'cherry'];

// Ensure all keys are integers
$data = array_filter($data, function($key){return is_int($key);}, ARRAY_FILTER_USE_KEY);

$keys = array_keys($data);
print_r($keys); // Output: Array ( [0] => 1 [1] => 3 )
```

Another approach is to use functions like `array_map()` to explicitly type cast keys before applying functions like `array_keys()`.  This offers better control and predictability over the key types involved, thereby reducing the likelihood of these unexpected conversions and resultant errors.