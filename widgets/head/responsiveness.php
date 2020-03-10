<?

namespace widgets\head; // /flutter/document.php

use widgets\widget;

class responsiveness extends widget
{
    /**
     * Create new document root
     * @param array containing head and body
     */
    function __construct(){}
    /**
     * Build the document
     */
    function build(){
        ?>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?
    }
}
