<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * SchoolRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SchoolRepository extends EntityRepository
{
	
	public function getSchools()
	{
		// ORM
		/* $em  = $this->getEntityManager();
		$qb = $em->createQueryBuilder();
		$qb->select('s.schoolname,s.username')
		   ->from('AppBundle:School','s')
		   ->orderBy('s.username');
			
		$query = $qb->getQuery();
		
		return $query->getArrayResult(); */
		
		
		// DBAL
		$em  = $this->getEntityManager();
		$conn = $em->getConnection();
		$qb = $conn->createQueryBuilder();
		$qb->select('s.schoolname,s.username,s.contact_pname')
		   ->from('school','s')
		   ->orderBy('s.username');
		
		$stmt = $qb->execute();
		
		return $stmt->fetchAll();
	}
}
