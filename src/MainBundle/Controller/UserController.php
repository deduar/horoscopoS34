<?php

namespace MainBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use MainBundle\Entity\User;

class UserController extends FOSRestController
{
	/**
     * @Rest\Get("/user")
     */
    public function getAction()
    {
      $restresult = $this->getDoctrine()->getRepository('MainBundle:User')->findAll();
        if ($restresult === null) {
          return new View("there are no users exist", Response::HTTP_NOT_FOUND);
     }
        return $restresult;
    }

    /**
	 * @Rest\Get("/user/{id}")
	 */
	public function idAction($id)
	{
		$singleresult = $this->getDoctrine()->getRepository('MainBundle:User')->find($id);
		if ($singleresult === null) {
			return new View("user not found", Response::HTTP_NOT_FOUND);
		}
	 	return $singleresult;
	}

	/**
	 * @Rest\Post("/user/")
	 */
	public function postAction(Request $request)
	{
		$data = new User;
	   	$name = $request->get('name');
	   	$apellido = $request->get('apellido');
	   	$idmsisdn = $request->get('idmsisdn');
	   	$idprovedor = $request->get('idprovedor');
	   	$msisdn = $request->get('msisdn');
	   	$sexo = $request->get('sexo');
	   	$fechanacimiento = $request->get('fechanacimiento');
	   	$fechaingreso = $request->get('fechaingreso');
	   	$status = $request->get('status');
	   	$statuspay = $request->get('statuspay');
	 	if(empty($idmsisdn) )
	 	{
	   		return new View("NULL VALUES ARE NOT ALLOWED on id_ms_isdn", Response::HTTP_NOT_ACCEPTABLE); 
	 	} 
	  	$data->setName($name);
	  	$data->setApellido($apellido);
	  	$data->setIdmsisdn($idmsisdn);
	  	$data->setIdprovedor($idprovedor);
	  	$data->setMsisdn($msisdn);
	  	$data->setSexo($sexo);
	  	$data->setFechanacimiento($fechanacimiento);
	  	$data->setFechaingreso($fechaingreso);
	  	$data->setStatus($status);
	  	$data->setStatuspay($statuspay);
	  	$em = $this->getDoctrine()->getManager();
	  	$em->persist($data);
	  	$em->flush();
	   	return new View("User Added Successfully", Response::HTTP_OK);
	}

	/**
	 * @Rest\Put("/user/{id}")
	 */
	public function updateAction($id,Request $request)
	{ 
	 	$data = new User;
		$name = $request->get('name');
	 	$apellido = $request->get('apellido');
	 	$sn = $this->getDoctrine()->getManager();
	 	$user = $this->getDoctrine()->getRepository('MainBundle:User')->find($id);
		if (empty($user)) {
	   		return new View("user not found", Response::HTTP_NOT_FOUND);
	 	} 
		elseif(!empty($name) && !empty($apellido)){
	   		$user->setName($name);
	   		$user->setApellido($apellido);
	   		$sn->flush();
	   		return new View("User Updated Successfully", Response::HTTP_OK);
	 	}
		elseif(empty($name) && !empty($apellido)){
	   		$user->setApellido($apellido);
	   		$sn->flush();
	   		return new View("apellido Updated Successfully", Response::HTTP_OK);
		}
		elseif(!empty($name) && empty($apellido)){
	 		$user->setName($name);
	 		$sn->flush();
	 		return new View("User Name Updated Successfully", Response::HTTP_OK); 
		}
		else return new View("User name or apellido cannot be empty", Response::HTTP_NOT_ACCEPTABLE); 
	}

	/**
	 * @Rest\Delete("/user/{id}")
	 */
	public function deleteAction($id)
	{
		$data = new User;
		$sn = $this->getDoctrine()->getManager();
		$user = $this->getDoctrine()->getRepository('MainBundle:User')->find($id);
		if (empty($user)) {
			return new View("user not found", Response::HTTP_NOT_FOUND);
		}
		else {
			$sn->remove($user);
			$sn->flush();
		}
		return new View("deleted successfully", Response::HTTP_OK);
	}

}