<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Student;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/student")
 *
 */
class StudentController extends Controller
{
	
	/**
	 * @Route("/get", name="get_all_students")
	 */
	public function getAction()
	{
		$em = $this->getDoctrine()->getManager();
		$students = $em->getRepository('AppBundle:Student')->getAllStudents();
		return $this->render('student/getstudents.html.twig', array(
			'students' => $students		
		));
	}
	
	
    /**
     * @Route("/create", name="student_create")
     */
    public function createAction()
    {
    	$student = new Student();
		$student->setName('Studenttow');
		$student->setParentid('2');
		$student->setSchoolid('2');
		$student->setAcademicYear('2016');
		$student->setRegNo('12ff');
		$student->setGender('M');
		$student->setAddress('sadflkjslfjsd fkdsjfsf ');
		$student->setRemark('fsdfasfsdf safasf sfas');
		$student->setBlockStudent('1');
		
		$date = new \DateTime('12/12/1221');
		//$date = $date->format($date);
		$student->setRegDate($date);
		
		$date = new \DateTime('12/12/1221');
		//$date = $date->format($date);
		$student->setDob($date);
		
		$em = $this->getDoctrine()->getManager();
		$em->persist($student);
		$em->flush();
		return new Response('Created student id '.$student->getId());
    }

    /**
     * @Route("/edit", name="student_edit")
     */
    public function editAction()
    {
        return $this->render('student/edit.html.twig', array(
            // ...
        ));
    }

}
