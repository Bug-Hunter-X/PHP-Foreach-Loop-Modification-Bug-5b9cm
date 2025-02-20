```php
function processData(array $data): array {
  // ... some code to process the data ...
  foreach ($data as $key => $value) {
    if (is_string($value)) {
      $data[$key] = strtolower($value); // Bug: Modifying the original array during iteration
    }
  }
  return $data;
}

$myData = ['Apple', 'Banana', 'Cherry'];
$processedData = processData($myData);
print_r($processedData); // Unexpected output due to in-place modification
```