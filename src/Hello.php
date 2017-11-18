<?php

namespace Sergiors\Dolly;

use Zend\Diactoros\Response\JsonResponse;

final class Hello
{
    public function __invoke()
    {
        return new JsonResponse([
            'message' => 'hello dolly'
        ]);
    }
}
