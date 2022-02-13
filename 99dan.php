<?php
    # http://localhost:1331/99dan.php?dan=9

    $dan = $_GET['dan'];
    echo $dan."단을 출력합니다.<br/>";

    for($i = 1; $i < 10; $i++) {
        echo "{$dan} X {$i} = ".($dan*$i)." <br/>";
    }
?>