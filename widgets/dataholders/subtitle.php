<?

namespace widgets\dataholders; // /flutter/document.php

use widgets\widget;

class subtitle extends widget
{
    /**
     * New Subtitle widget
     * @param object containing text and/or variant
     */
    function __construct($opt){
        $this->obj = (object) $opt;
        $this->variant = @$this->obj->variant ?: "h4";
        $this->text = @$this->obj->text ?: "";
    }
    function build(){
        ?>
            <h2 class="title subtitle <?=$this->variant; ?>"><?=$this->textOrBuild($this->text); ?></h2>
        <?
    }
}
