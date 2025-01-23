<?php

use Core\Container;

test('it can resolve something from the container', function () {
    $container = new Container();

    $container->bind('foo', fn() => 'foo');

    $result = $container->resolve('foo');

    expect($result)->toBe('foo');
});
