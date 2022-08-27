<?php

include_once 'geometry/GeometryFigure.php';
include_once 'geometry/Rectangle.php';
include_once 'geometry/Sphere.php';

$params =[
    'figure' => $_GET['figure']
];

$figure = new $params['figure']();

echo $figure;