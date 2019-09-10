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
		if (sizeof($params) > 0){
			return $this->render('horoscopo/index.html.twig', 
				['controller_name' => 'HoroscopoController',]);
		} else {
			return $this->redirect('http://tarotayuda.com');
		}
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
	public function decanatosAction(Request $request)
	{
		$params = $request->request->all();
		if (sizeof($params) > 0){
			return $this->render('horoscopo/decanatos.html.twig', 
				['controller_name' => 'HoroscopoController',]);
			} else {
			return $this->redirect('http://tarotayuda.com');
		}
	}

	/**
     * @Route("/calcula_decanatos", name="calcula_decanatos")
     */
	public function calcula_decanatosAction(Request $request)
	{
		$params = $request->request->all();
		if (sizeof($params) > 0){
			return $this->render('horoscopo/calcula_decanatos.html.twig', 
				['controller_name' => 'HoroscopoController',]);
			} else {
			return $this->redirect('http://tarotayuda.com');
		}
	}

	/**
     * @Route("/guia_astrologica", name="guia_astrologica")
     */
	public function guia_astrologicaAction(Request $request)
	{
		$params = $request->request->all();
		if (sizeof($params) > 0){
			return $this->render('horoscopo/guia_astrologica.html.twig', 
				['controller_name' => 'HoroscopoController',]);
		} else {
			return $this->redirect('http://tarotayuda.com');
		}
	}

	/**
     * @Route("/signo", name="signo")
     */
	public function signoAction(Request $request)
	{
		$params = $request->request->all();
		if (sizeof($params) > 0){
			return $this->render('horoscopo/signo.html.twig', 
				['controller_name' => 'HoroscopoController',]);
		} else {
			return $this->redirect('http://tarotayuda.com');
		}
	}

	/**
     * @Route("/caracteristica_signo", name="caracteristica_signo")
     */
	public function caracteristicasignoAction(Request $request)
	{
		$params = $request->request->all();
		if (sizeof($params) > 0){
			return $this->render('horoscopo/caracteristica_signo.html.twig', 
				['controller_name' => 'HoroscopoController',]);
		} else {
			return $this->redirect('http://tarotayuda.com');
		}	
	}

	/**
     * @Route("/clarividencia", name="clarividencia")
     */
	public function clarividenciaAction(Request $request)
	{
		$params = $request->request->all();
		if (sizeof($params) > 0){
			return $this->render('horoscopo/clarividencia.html.twig', 
				['controller_name' => 'HoroscopoController',]);
		} else {
			return $this->redirect('http://tarotayuda.com');
		}	
	}

	/**
     * @Route("/puntog", name="puntog")
     */
	public function puntogAction(Request $request)
	{
		$params = $request->request->all();
		if (sizeof($params) > 0){
			return $this->render('horoscopo/puntog.html.twig', 
				['controller_name' => 'HoroscopoController',]);
		} else {
			return $this->redirect('http://tarotayuda.com');
		}	
	}

	/**
     * @Route("/kamasutra", name="kamasutra")
     */
	public function kamasutraAction(Request $request)
	{
		$params = $request->request->all();
		if (sizeof($params) > 0){
			return $this->render('horoscopo/kamasutra.html.twig', 
				['controller_name' => 'HoroscopoController',]);
			} else {
			return $this->redirect('http://tarotayuda.com');
		}
	}

	/**
     * @Route("/papel_mujer", name="papel_mujer")
     */
	public function papel_mujerAction(Request $request)
	{
		$params = $request->request->all();
		if (sizeof($params) > 0){
			return $this->render('horoscopo/papel_mujer.html.twig', 
				['controller_name' => 'HoroscopoController',]);
		} else {
			return $this->redirect('http://tarotayuda.com');
		}
	}

	/**
     * @Route("/besos", name="besos")
     */
	public function besosAction(Request $request)
	{
		$params = $request->request->all();
		if (sizeof($params) > 0){
			return $this->render('horoscopo/besos.html.twig', 
				['controller_name' => 'HoroscopoController',]);
		} else {
			return $this->redirect('http://tarotayuda.com');
		}
	}

	/**
     * @Route("/posiciones", name="posiciones")
     */
	public function posicionesAction(Request $request)
	{
		$params = $request->request->all();
		if (sizeof($params) > 0){
			return $this->render('horoscopo/posiciones.html.twig', 
				['controller_name' => 'HoroscopoController',]);
		} else {
			return $this->redirect('http://tarotayuda.com');
		}
	}

	/**
     * @Route("/sexo", name="sexo")
     */
	public function sexoAction(Request $request)
	{
		$params = $request->request->all();
		if (sizeof($params) > 0){
			return $this->render('horoscopo/sexo.html.twig', 
				['controller_name' => 'HoroscopoController',]);
		} else {
			return $this->redirect('http://tarotayuda.com');
		}
	}

	/**
     * @Route("/posiciones/carretilla", name="carretilla")
     */
	public function carretillaAction(Request $request)
	{
		$params = $request->request->all();
		if (sizeof($params) > 0){
			return $this->render('horoscopo/carretilla.html.twig', 
				['controller_name' => 'HoroscopoController',]);
		} else {
			return $this->redirect('http://tarotayuda.com');
		}
	}

	/**
     * @Route("/posiciones/fuerzag", name="fuerzag")
     */
	public function fuerzagAction(Request $request)
	{
		$params = $request->request->all();
		if (sizeof($params) > 0){
			return $this->render('horoscopo/fuerzag.html.twig', 
				['controller_name' => 'HoroscopoController',]);
		} else {
			return $this->redirect('http://tarotayuda.com');
		}
	}

	/**
     * @Route("/posiciones/jinete", name="jinete")
     */
	public function jineteAction(Request $request)
	{
		$params = $request->request->all();
		if (sizeof($params) > 0){
			return $this->render('horoscopo/jinete.html.twig', 
				['controller_name' => 'HoroscopoController',]);
		} else {
			return $this->redirect('http://tarotayuda.com');
		}
	}

	/**
     * @Route("/posiciones/tumbona", name="tumbona")
     */
	public function tumbonaAction(Request $request)
	{
		$params = $request->request->all();
		if (sizeof($params) > 0){
			return $this->render('horoscopo/tumbona.html.twig', 
				['controller_name' => 'HoroscopoController',]);
		} else {
			return $this->redirect('http://tarotayuda.com');
		}
	}

	/**
     * @Route("/posiciones/desafio", name="desafio")
     */
	public function desafioAction(Request $request)
	{
		$params = $request->request->all();
		if (sizeof($params) > 0){
			return $this->render('horoscopo/desafio.html.twig', 
				['controller_name' => 'HoroscopoController',]);
		} else {
			return $this->redirect('http://tarotayuda.com');
		}
	}

	/**
     * @Route("/meditacion", name="meditacion")
     */
	public function meditacionAction(Request $request)
	{
		$params = $request->request->all();
		if (sizeof($params) > 0){
			return $this->render('horoscopo/meditacion.html.twig', 
				['controller_name' => 'HoroscopoController',]);
		} else {
			return $this->redirect('http://tarotayuda.com');
		}
	}

	/**
     * @Route("/relajacion", name="relajacion")
     */
	public function relajacionAction(Request $request)
	{
		$params = $request->request->all();
		if (sizeof($params) > 0){
			return $this->render('horoscopo/relajacion.html.twig', 
				['controller_name' => 'HoroscopoController',]);
		} else {
			return $this->redirect('http://tarotayuda.com');
		}
	}

}
