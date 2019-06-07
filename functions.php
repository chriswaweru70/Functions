<?php



function dd ($val) {
    if ( $val >= 21 ) {
        echo 'You can join the Night Club now that you are: ', $val;
    } else {
        echo ' You are not eligible go back home and come back when you are: ', $val - $age;
    }
}