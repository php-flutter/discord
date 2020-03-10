<?

namespace widgets\dataholders;

use widgets\widget;

class navigationHeader extends widget
{
    /**
     * Header for navigation section
     * @param string Title
     */
    function __construct($opt){
        $this->obj = $opt;
    }
    function build(){
        ?>
            <h3 class="navigation-header">
                <?=$this->obj; ?>
            </h3>
        <?
    }
}
