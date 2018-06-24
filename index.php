<?php
require_once 'autoload.php';

use App\Director\FrameworksDirector;
use App\Builder\FrameworksBuilder;

$builder = new FrameworksBuilder();
$json_path = 'App/files/frameworks.json';

$director = new FrameworksDirector($builder, $json_path);

$data = $director->getFrameworks();

foreach ($data as $d) {
    echo sprintf(
        '<li>%s：%s [%s]</li>',
        $d->getId(),
        $d->getName(),
        $d->getCategory()
    );
}