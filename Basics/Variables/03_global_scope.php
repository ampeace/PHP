<?php
$y = 50; // global variable

function testGlobal() {
    global $y; 
    // 'global' keyword is used to access global variable inside function
    
    echo "Value of y: $y";
}

testGlobal();
?>