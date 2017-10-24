<?php
namespace HTL3R\Flags;
require_once "vendor/autoload.php";
use \Resavac\Flags\RectangleFlag as RectangleFlag;
use \Resavac\Flags\CircleFlag as CircleFlag;
use \Resavac\Flags\TriangleFlag as TriangleFlag;

/*echo "<!DOCTYPE html"*/

$myflag = new RectangleFlag(
"Rechteck",
"Rot",
4,
4
);

$myflag2 = new CircleFlag(
"Kreis",
"blau",
5
);

$myflag3 = new TriangleFlag(
"Dreieck",
"Rot",
4,
5
);

$valuesArray = [
    "flag1" => $myflag,
    "flag2" => $myflag2,
    "flag3" => $myflag3,
];



/*
if(isset($_GET['name'])) {
    echo $_GET[name];
echo {
    echo blabla guter name bitte
}
*/



// Initializing the View: rendering in Fluid takes place through a View instance
// which contains a RenderingContext that in turn contains things like definitions
// of template paths, instances of variable containers and similar.
$view = new \TYPO3Fluid\Fluid\View\TemplateView();

// TemplatePaths object: a subclass can be used if custom resolving is wanted.
$paths = $view->getTemplatePaths();

// Assigning the template path and filename to be rendered. Doing this overrides
// resolving normally done by the TemplatePaths and directly renders this file.
$paths->setTemplatePathAndFilename(__DIR__ . '/Templates/Flaglistingg.html');

$view->assignMultiple($valuesArray);

// Rendering the View: plain old rendering of single file, no bells and whistles.
$output = $view->render();

echo $output;

