<?php
array_walk_recursive($_POST,function ($item, $key){
    echo "$key: $item <br/>\n";
});

?>
