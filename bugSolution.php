function foo(array &$arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]);
    }
  }
}

$arr = ['foo', 'bar', 'baz'];
foo($arr);
print_r($arr); // Output: Array ( [0] => foo [2] => baz )