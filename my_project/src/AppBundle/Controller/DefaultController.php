<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use \AppBundle\Model\CoreShow;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $cs = new CoreShow();
        $currentShow = $cs->getShows($type = "C");

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'showlists' => $currentShow
        ));
    }

    /**
     * @Route("/next-show", name="next-show")
     *
     *
     * @return array
     */
    public function nextShowAction(Request $request)
    {
        $cs = new CoreShow();
        $nextShow = $cs->getShows($type = "N");

        // replace this example code with whatever you need
        return $this->render('default/next-show.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'showlists' => $nextShow
        ));
    }

    /**
     * @Route("/previous-show", name="previous-show")
     *
     *
     * @return array
     */
    public function previousShowAction(Request $request)
    {
        $cs = new CoreShow();
        $preShows = $cs->getShows($type = "P");


        // replace this example code with whatever you need
        return $this->render('default/previous-show.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'showlists' => $preShows
        ));
    }
}
