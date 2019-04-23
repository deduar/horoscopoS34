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
		$idmsisdn = $request->get('idmsisdn');
	 	if(empty($idmsisdn) )
	 	{
	   		return new View("NULL VALUES ARE NOT ALLOWED on id_ms_isdn", Response::HTTP_NOT_ACCEPTABLE); 
	 	} else {
	 		$em = $this->getDoctrine()->getManager();
	 		$newUser = new User;
		   	$userInput = $request->query->all();
		   	foreach ($userInput as $key => $value) {
		   		$k = "set".ucfirst($key);
		   		$newUser->$k($value);
		   	}
	 		$user = $this->getDoctrine()->getRepository('MainBundle:User')->findByIdmsisdn($idmsisdn);
	 		if (sizeof($user) == 0) {
			  	$em->persist($newUser);
			  	$em->flush();
			   	return new View("User Added Successfully", Response::HTTP_OK);
	 		} else {
	 			$this->updateAction($user[0]->getId(), $request);
	 			return new View("User Updated Successfully !", Response::HTTP_OK);
	 		}
	 	}
	}

	/**
	 * @Rest\Put("/user/{id}")
	 */
	public function updateAction($id,Request $request)
	{ 
		$sn = $this->getDoctrine()->getManager();
		$user = $this->getDoctrine()->getRepository('MainBundle:User')->find($id);
		$userInput = $request->query->all();
		foreach ($userInput as $key => $value) {
	   		$k = "set".ucfirst($key);
	   		$user->$k($value);
	   	}
	   	$sn->flush();
	   	return new View("User Updated Successfully", Response::HTTP_OK);
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