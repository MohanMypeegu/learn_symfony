<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/school")
 * @author nes
 *
 */
class SchoolController extends Controller
{
	/**
	 * @Route("/", name="school_list")
	 */
	public function indexAction()
	{
		$em = $this->getDoctrine()->getManager();
		//$schools = $em->getRepository('AppBundle:School')->findAll();
		$schools = $em->getRepository('AppBundle:School')->getSchools();
		
		
		return $this->render('school/index.html.twig', array(
			'schools' => $schools	
		));
	}
	
    /**
     * @Route("/create", name="school_create")
     */
    public function createAction()
    {
        return $this->render('school/create.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/edit", name="school_edit")
     */
    public function editAction()
    {
        return $this->render('school/edit.html.twig', array(
            // ...
        ));
    }

}
