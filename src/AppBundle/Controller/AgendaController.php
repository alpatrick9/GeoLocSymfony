<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/10/16
 * Time: 2:56 PM
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AgendaController extends Controller
{
    /**
     * @param Request $request
     * @Route("/agenda", name="agendaHome")
     */
    public function indexAction(Request $request) {
        return new Response(date('n'));
    }

}