<?

namespace widgets\head; // /flutter/document.php

use widgets\widget;

class styles extends widget
{
    /**
     * Aimed at examples, create your own widget if this doesn't work
     */
    function __construct(){}
    /**
     * Show the styles
     */
    function build(){
        ?>
            <link rel="stylesheet" href="../styles/main.css">
        <?
    }
}
