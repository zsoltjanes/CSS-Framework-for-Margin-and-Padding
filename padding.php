<?php

    for ($i = 0; $i <= 1000; $i++) {
        echo '.pr' . $i . '{padding-right:' . $i . 'px;}';
        echo '.pl' . $i . '{padding-left:' . $i . 'px;}';
        echo '.pt' . $i . '{padding-top:' . $i . 'px;}';
        echo '.pb' . $i . '{padding-bottom:' . $i . 'px;}';

        if ($i > 0) { 
            echo '.prm' . $i . '{padding-right:' . $i . 'px;}';
            echo '.plm' . $i . '{padding-left:' . $i . 'px;}';
            echo '.ptm' . $i . '{padding-top:' . $i . 'px;}';
            echo '.pbm' . $i . '{padding-bottom:' . $i . 'px;}';
        }
    } 
?>
