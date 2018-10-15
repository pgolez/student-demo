<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use DateTime;

class StudentController extends Controller
{
    /**
     * @Route("/student", name="list_students_page")
     */
    public function listStudentsAction(Request $request)
    {
		$students = [
			[
				'id'	=> '153423523',
				'fname'	=> 'John'
			],
			[
				'id'	=> '16234344',
				'fname'	=> 'Jane'
			],
			[
				'id'	=> '15237160',
				'fname'	=> 'Joshua'
			]
		];

        return $this->render('student/list.html.twig', [
			'students' => $students
        ]);
    }

	/**
	 * @Route("/student/{student_id}", name="view_student_page")
	 */
	public function viewStudentAction($student_id, Request $request)
	{
		$students = [
			'153423523'	=> [
					'id'	=> '153423523',
					'fname'	=> 'John',
					'lname'	=> 'Doe',
					'bdate'	=> new DateTime('1/22/1990')
				],
			'16234344'	=> [
					'id'	=> '16234344',
					'fname'	=> 'Jane',
					'lname'	=> 'Doe',
					'bdate'	=> new DateTime('11/13/1989')
				],
			'15237160'	=> [
					'id'	=> '15237160',
					'fname'	=> 'Joshua',
					'lname'	=> 'Doe',
					'bdate'	=> new DateTime('9/16/2003')
				]
		];

		$student = $students[$student_id];

		return $this->render('student/view.html.twig', [
			'student'	=> $student
		]);
	}
}
