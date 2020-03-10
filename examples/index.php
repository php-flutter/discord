<?
namespace examples;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "../autoInclude.php";

use widgets\document;
use widgets\head\title as HeadTitle;
use widgets\head\responsiveness;
use widgets\head\styles;
use widgets\widgetList;
use widgets\clickables\button;
use widgets\clickables\navigationLink;
use widgets\dataholders\title;
use widgets\dataholders\subtitle;
use widgets\layout\wrapper;
use widgets\layout\footer;
use widgets\layout\separator;
use widgets\layout\navigation;
use widgets\layout\navigationSection;
use widgets\dataholders\navigationHeader;

$document = new Document([
    "head" => new WidgetList([
        new HeadTitle("PHP Flutter"),
        new Responsiveness(),
        new Styles()
    ]),
    "body" => new Wrapper(new WidgetList([
        new Title([
            "text" => "Hey there!"
        ]),
        new Subtitle([
            "text"=> "PHP Flutter is great!"
        ]),
        new Button([
            "text" => "Yeah!"
        ]),
        new Separator(),
        new Footer([
            new Navigation([
                new NavigationSection([
                    new NavigationHeader("Test"),
                    new navigationLink([
                        "text" => "test 1",
                        "link" => "#test"
                    ]),
                    new navigationLink([
                        "text" => "test 2",
                        "link" => "#test2"
                    ]),
                ]),
                new NavigationSection([
                    new NavigationHeader("Test 2"),
                    new navigationLink([
                        "text" => "test 1",
                        "link" => "#test"
                    ]),
                    new navigationLink([
                        "text" => "test 2",
                        "link" => "#test2"
                    ]),
                ])
            ])
        ])
    ]))
]);

$document->build();