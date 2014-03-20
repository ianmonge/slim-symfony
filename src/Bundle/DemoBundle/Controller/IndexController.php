<?php

namespace Bundle\DemoBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class IndexController
 *
 * @package Bundle\DemoBundle\Controller
 */
class IndexController extends ContainerAware
{
    public function indexAction()
    {
        $data = array('name' => 'Ian');

        $response = new JsonResponse($data);

        return $response;
    }
}
