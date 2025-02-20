```php
function processData(array $data): array {
  $newData = []; // Create a new array to store the modified data
  foreach ($data as $key => $value) {
    if (is_string($value)) {
      $newData[$key] = strtolower($value); // Modify the new array
    } else {
      $newData[$key] = $value; // Copy other data types
    }
  }
  return $newData;
}

$myData = ['Apple', 'Banana', 'Cherry'];
$processedData = processData($myData);
print_r($processedData); // Correct output
```