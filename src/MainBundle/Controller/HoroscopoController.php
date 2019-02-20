<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HoroscopoController extends Controller
{
	/**
     * @Route("/horoscopo", name="h-index")
     */
	public function indexAction()
	{
		die("dos");
	}
}
