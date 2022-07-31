<?php

    for ($i = 0; $i <= 1000; $i++) {
        echo '.mr' . $i . '{margin-right:' . $i . 'px;}';
        echo '.ml' . $i . '{margin-left:' . $i . 'px;}';
        echo '.mt' . $i . '{margin-top:' . $i . 'px;}';
        echo '.mb' . $i . '{margin-bottom:' . $i . 'px;}';

        if ($i > 0) { 
            echo '.mrm' . $i . '{margin-right:' . $i . 'px;}';
            echo '.mlm' . $i . '{margin-left:' . $i . 'px;}';
            echo '.mtm' . $i . '{margin-top:' . $i . 'px;}';
            echo '.mbm' . $i . '{margin-bottom:' . $i . 'px;}';
        }
    } 
?>
