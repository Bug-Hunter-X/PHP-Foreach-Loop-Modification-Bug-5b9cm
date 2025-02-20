# PHP Foreach Loop Modification Bug

This repository demonstrates a common error in PHP: unexpected behavior when modifying an array during a foreach loop iteration.  The `bug.php` file contains code that illustrates the issue, while `bugSolution.php` provides a corrected version.

The core problem lies in modifying the array being iterated over within the loop. This can lead to skipped elements or incorrect results due to the loop's internal pointer not advancing correctly.

The solution involves creating a copy of the array or using a different approach to avoid altering the original array during iteration.