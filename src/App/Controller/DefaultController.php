<?php
namespace App\Controller;

use App\Controller\Base\WebController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends WebController {

    /** @var Request */
    protected $request;

    function __construct(Request $request)
    {
        $this->request = $request;
    }

    function defaultAction()
    {
        $name = $this->request->get('name');
        return new Response("Hello $name");
    }
}