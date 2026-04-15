<?php
function counter() {
    static $count = 0; 
    // static variable retains value between function calls
    
    $count++;
    echo $count . "<br>";
}

counter(); // 1
counter(); // 2
counter(); // 3
?>