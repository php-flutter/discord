<?

namespace widgets\clickables;

use widgets\widget;

class navigationLink extends widget
{
    /**
     * Link in navigation
     * @param object text and link
     */
    function __construct($opt){
        $this->obj = (object) $opt;
        $this->link = @$this->obj->link ?: "#";
        $this->text = @$this->obj->text ?: "";
    }
    function build(){
        ?>
            <a class="navigation-link" href="<?=$this->link; ?>">
                <span>
                    <?=$this->text; ?>
                </span>
            </a>
        <?
    }
}
