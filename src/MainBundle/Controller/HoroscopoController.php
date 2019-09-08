<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class HoroscopoController extends Controller
{
	/**
     * @Route("/", name="index")
     */
	public function indexAction(Request $request)
	{
		$params = $request->request->all();
		var_dump(sizeof($params));
		if (sizeof($params) > 0){
			echo "content";
		} else {
			echo "landing";
		}
		die();
		return $this->render('horoscopo/index.html.twig', 
				['controller_name' => 'HoroscopoController',]);
		/*
		$params = $request->query->all();
		if (empty($params)) {
			return $this->redirect('http://tarotayuda.com');
		} else {
			return $this->render('horoscopo/index.html.twig', 
				['controller_name' => 'HoroscopoController',]);
		}
		*/
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
     * @Route("/decanatos", name="decanatos")
     */
	public function decanatosAction()
	{
		return $this->render('horoscopo/decanatos.html.twig', 
			['controller_name' => 'HoroscopoController',]);
	}

	/**
     * @Route("/calcula_decanatos", name="calcula_decanatos")
     */
	public function calcula_decanatosAction()
	{
		return $this->render('horoscopo/calcula_decanatos.html.twig', 
			['controller_name' => 'HoroscopoController',]);
	}

	/**
     * @Route("/guia_astrologica", name="guia_astrologica")
     */
	public function guia_astrologicaAction()
	{
		return $this->render('horoscopo/guia_astrologica.html.twig', 
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
     * @Route("/caracteristica_signo", name="caracteristica_signo")
     */
	public function caracteristicasignoAction()
	{
		return $this->render('horoscopo/caracteristica_signo.html.twig', 
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
     * @Route("/puntog", name="puntog")
     */
	public function puntogAction()
	{
		return $this->render('horoscopo/puntog.html.twig', 
			['controller_name' => 'HoroscopoController',]);
	}

	/**
     * @Route("/kamasutra", name="kamasutra")
     */
	public function kamasutraAction()
	{
		return $this->render('horoscopo/kamasutra.html.twig', 
			['controller_name' => 'HoroscopoController',]);
	}

	/**
     * @Route("/papel_mujer", name="papel_mujer")
     */
	public function papel_mujerAction()
	{
		return $this->render('horoscopo/papel_mujer.html.twig', 
			['controller_name' => 'HoroscopoController',]);
	}

	/**
     * @Route("/besos", name="besos")
     */
	public function besosAction()
	{
		return $this->render('horoscopo/besos.html.twig', 
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
     * @Route("/sexo", name="sexo")
     */
	public function sexoAction()
	{
		return $this->render('horoscopo/sexo.html.twig', 
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
     * @Route("/meditacion", name="meditacion")
     */
	public function meditacionAction()
	{
		return $this->render('horoscopo/meditacion.html.twig', 
			['controller_name' => 'HoroscopoController',]);
	}

	/**
     * @Route("/relajacion", name="relajacion")
     */
	public function relajacionAction()
	{
		return $this->render('horoscopo/relajacion.html.twig', 
			['controller_name' => 'HoroscopoController',]);
	}

}
