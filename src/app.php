<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

function is_leap_year(int $year = null): bool
{
    if (null === $year) {
        $year = (int)date('Y');
    }

    return 0 === $year % 400 || (0 === $year % 4 && 0 !== $year % 100);
}

$routes = new RouteCollection();

$routes->add('hello', new Route('/hello/{name}', [
    'name' => 'World',
    '_controller' => function(Request $request) {
        return render_template($request);
    }
]));
$routes->add('bye', new Route('/bye', [
    '_controller' => function(Request $request) {
        return render_template($request);
    }
]));

$routes->add('leap_year', new Route('/is_leap_year/{year}', [
    'year' => null,
    '_controller' => 'Fetra\Simplex\Controller\LeapYearController::index'
]));

return $routes;
