<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HoroscopoController extends Controller
{
	/**
     * @Route("/", name="horoscopo_index")
     */
	public function indexAction()
	{
		return $this->render('horoscopo/index.html.twig', [
            'controller_name' => 'HoroscopoController',
        ]);
		//return $this->render('horoscopo/index.html.twig');
	}
}
