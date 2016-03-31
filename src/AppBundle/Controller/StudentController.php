<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Student;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

/**
 * @Route("/student")
 *
 */
class StudentController extends Controller
{
	
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
	 *
	 * @Route("/insertform")
	 * @param Request $request
	 * 
	 */
	public function insertFormAction(Request $request) {
	
		// create a task and give it some dummy data for this example
		$student = new Student ();
		 
		$form = $this->createFormBuilder ( $student )
		->add ( 'name', TextType::class )
		->add ( 'parentid', IntegerType::class )
		->add ( 'schoolid', IntegerType::class )
		->add ( 'academic_year', TextType::class )
		->add ( 'reg_no', TextType::class )
		->add ( 'reg_date', DateType::class )
		->add ( 'dob', DateType::class )
		->add ( 'gender', TextType::class )
		->add ( 'address', TextareaType::class )
		->add ( 'remark', TextareaType::class )
		->add ( 'status', TextareaType::class )
		->add ( 'save', SubmitType::class, array ( 'label' => 'Create Task' ) )->getForm ();
		
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
			
			
			/* $all = $form->getData(); print_r($all);
			echo $name = $form['name']->getData();
			$array = $form['dob']->getData();
			
			$json = json_encode($array);
			$datefull = json_decode($json, true);
			
			$dob = $datefull["date"]; */
			
			$em = $this->getDoctrine()->getManager();
			$em->persist($student);
			$em->flush();
			
			return $this->redirectToRoute('success_page');
		}
	
		return $this->render ( 'student/new.html.twig', array (
				'form' => $form->createView ()
		) );
	}
	

    /**
     * @Route("/edit", name="student_edit")
     */
    public function editAction($id = "1680")
    {
    	$em = $this->getDoctrine()->getManager();
    	
    	$student = $em->getRepository('AppBundle:Student')->find($id);
    	if (!$student) {
    		throw $this->createNotFoundException('No student found for id '.$id);
    	}
    	
    	$student->setName('New student name');
    	
    	$em->flush();
    	
        return $this->render('student/edit.html.twig', array(
           	'id' => $id
        ));
    }
    
    /**
     * @Route("/editform/{id}", name="student_editForm")
     */
    public function editFormAction(Request $request, $id)
    {
    	
    	$em = $this->getDoctrine()->getManager();
    	
    	$student = $em->getRepository('AppBundle:Student')->find($id);
    	if (!$student) {
    		throw $this->createNotFoundException('No student found for id '.$id);
    	}
    	
    	
    	$student->setName('New student name');
    	
    	$em->flush();
    	
    	return $this->render('student/edit.html.twig', array(
           	'id' => $id, 'post' => $_POST
        ));
    	
    }
    
    
    /**
     * @Route("/delete", name="student_delete")
     */
    public function deleteAction($id = "1680")
    {
    	$em = $this->getDoctrine()->getManager();
    	 
    	$student = $em->getRepository('AppBundle:Student')->find($id);
    	if (!$student) {
    		throw $this->createNotFoundException('No student found for id '.$id);
    	}
    	 
    	$em->remove($student);
    	 
    	$em->flush();
    	 
    	return $this->render('student/delete.html.twig', array(
    			'id' => $id
    	));
    }
    
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
     * @Route("/getall", name="get_all_students_details")
     */
    public function getAllAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$students = $em->getRepository('AppBundle:Student')->FindAll();
    	return $this->render('student/getallstudents.html.twig', array(
    			'students' => $students
    	));
    }
    
    
    /**
     * @Route("/success_page", name="success_page")
     */
    public function successFormAction()
    {
    	return $this->render('student/success.html.twig');
    }
    
    /**
     * @Route("/default_page", name="default_page")
     */
    public function defaultFormAction()
    {
    	return $this->render('student/default.html.twig');
    }
    
    

}
