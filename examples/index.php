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
use widgets\dataholders\title;
use widgets\dataholders\subtitle;

$document = new Document([
    "head" => new WidgetList([
        new HeadTitle("PHP Flutter"),
        new Responsiveness(),
        new Styles()
    ]),
    "body" => new WidgetList([
        new Title([
            "text" => "Hey there!"
        ]),
        new Subtitle([
            "text"=> "PHP Flutter is great!"
        ]),
        new Button([
            "text" => "Test"
        ])
    ])
]);

$document->build();