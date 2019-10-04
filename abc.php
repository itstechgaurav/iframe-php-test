<?php

if(isset($_SERVER['HTTP_REFERER'])) {
    echo "<h3>IFRAME</h3>";
} else {
    echo "<h3>Normal Page</h3>";

}


?>