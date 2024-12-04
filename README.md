# PHP Foreach Loop and Unset() Unexpected Behavior

This repository demonstrates a common, yet subtle, bug in PHP involving the `foreach` loop and the `unset()` function when used together to modify an array during iteration. 

The `bug.php` file shows the incorrect implementation, while `bugSolution.php` provides the corrected version using pass-by-reference.

**Problem:**
When you use `unset()` inside a `foreach` loop on an array, and the array is not passed by reference,  the internal pointer of the `foreach` loop is not updated correctly when elements are removed.  This leads to some elements being skipped.

**Solution:**
Passing the array by reference (`&` before the array parameter) fixes this issue.  With pass-by-reference, modifications inside the function directly affect the original array.