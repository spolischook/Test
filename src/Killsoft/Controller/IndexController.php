<?php

namespace Killsoft\Controller;

use Symfony\Component\HttpFoundation\Response;

class IndexController
{
    /**
     * @return Response
     */
    public function indexAction()
    {
        return new Response('Hello World!');
    }
}