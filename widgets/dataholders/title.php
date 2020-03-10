<?

namespace widgets\dataholders; // /flutter/document.php

use widgets\widget;

class title extends widget
{
    /**
     * Create new document root
     * @param object containing text and/or variant
     */
    function __construct($opt){
        $this->obj = (object) $opt;
        $this->variant = @$this->obj->variant ?: "h1";
        $this->text = @$this->obj->text ?: "";
    }
    /**
     * Build the document
     */
    function build(){
        ?>
            <h2 class="title theme-header <?=$this->variant; ?>"><?=$this->textOrBuild($this->text); ?></h2>
        <?
    }

    function textOrBuild($arg){
        if($arg instanceof widget) return $arg->build();
        echo $arg;
    }
}
