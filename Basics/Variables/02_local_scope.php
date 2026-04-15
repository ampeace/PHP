<?php
function testLocal() {
    $x = 10; // local variable (only inside function)
    echo "Value of x: $x";
}

testLocal();

// echo $x; ERROR (cannot access outside function)
?>