<?

namespace widgets\layout;

use widgets\widget;
use widgets\layout\navigationSection;

class navigation extends widget
{
    /**
     * Navigation (aimed to be at footer)
     * @param object containing sections
     */
    function __construct($opt){
        $this->obj = (object) $opt;
    }
    function build(){
        ?>
            <div class="navigation">
                <?
                foreach ($this->obj as $buildable) {
                    if (!$buildable instanceof navigationSection && !$buildable instanceof navigationSection) throw new \Exception("Expected instance of navigationSection", 1);
                    $buildable->build();
                }
                ?>
            </div>
        <?
    }
}
