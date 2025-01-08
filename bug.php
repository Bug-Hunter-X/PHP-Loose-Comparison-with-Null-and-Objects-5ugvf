function foo($bar) {
  if ($bar === null) {
    return 'bar is null';
  }
  return strlen($bar);
}

$result = foo(null); // Correctly returns 'bar is null'

$baz = new stdClass();
$baz->value = null;

$result = foo($baz->value); // Incorrectly returns 0 instead of 'bar is null'