<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HoroscopoController extends Controller
{
	/**
     * @Route("/", name="index")
     */
	public function indexAction()
	{
		return $this->render('horoscopo/index.html.twig', 
			['controller_name' => 'HoroscopoController',]);
	}

	/**
     * @Route("/singin", name="singin")
     */
	public function singinAction()
	{
		return $this->render('horoscopo/singin.html.twig', 
			['controller_name' => 'HoroscopoController',]);
	}

	/**
     * @Route("/astrologica", name="astrologica")
     */
	public function astrologicaAction()
	{
		return $this->render('horoscopo/astrologica.html.twig', 
			['controller_name' => 'HoroscopoController',]);
	}

	/**
     * @Route("/signo", name="signo")
     */
	public function signoAction()
	{
		return $this->render('horoscopo/signo.html.twig', 
			['controller_name' => 'HoroscopoController',]);
	}

	/**
     * @Route("/clarividencia", name="clarividencia")
     */
	public function clarividenciaAction()
	{
		return $this->render('horoscopo/clarividencia.html.twig', 
			['controller_name' => 'HoroscopoController',]);
	}

	/**
     * @Route("/sexo", name="sexo")
     */
	public function sexoAction()
	{
		return $this->render('horoscopo/sexo.html.twig', 
			['controller_name' => 'HoroscopoController',]);
	}

	/**
     * @Route("/posiciones", name="posiciones")
     */
	public function posicionesAction()
	{
		return $this->render('horoscopo/posiciones.html.twig', 
			['controller_name' => 'HoroscopoController',]);
	}

	/**
     * @Route("/posiciones/carretilla", name="carretilla")
     */
	public function carretillaAction()
	{
		return $this->render('horoscopo/carretilla.html.twig', 
			['controller_name' => 'HoroscopoController',]);
	}

	/**
     * @Route("/posiciones/fuerzag", name="fuerzag")
     */
	public function fuerzagAction()
	{
		return $this->render('horoscopo/fuerzag.html.twig', 
			['controller_name' => 'HoroscopoController',]);
	}

	/**
     * @Route("/posiciones/jinete", name="jinete")
     */
	public function jineteAction()
	{
		return $this->render('horoscopo/jinete.html.twig', 
			['controller_name' => 'HoroscopoController',]);
	}

	/**
     * @Route("/posiciones/tumbona", name="tumbona")
     */
	public function tumbonaAction()
	{
		return $this->render('horoscopo/tumbona.html.twig', 
			['controller_name' => 'HoroscopoController',]);
	}

	/**
     * @Route("/posiciones/desafio", name="desafio")
     */
	public function desafioAction()
	{
		return $this->render('horoscopo/desafio.html.twig', 
			['controller_name' => 'HoroscopoController',]);
	}

	/**
     * @Route("/forma", name="forma")
     */
	public function formaAction()
	{
		return $this->render('horoscopo/forma.html.twig', 
			['controller_name' => 'HoroscopoController',]);
	}

}
