<?php
// src/AppBundle/Repository/NoticiaRepository.php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class NoticiaRepository extends EntityRepository
{
    public function findAllOrderedByDescripcion()
    {	
    	$entityManager = $this->getEntityManager();

    	$query = $entityManager->createQuery("
    		SELECT n 
    		FROM AppBundle:Noticia n 
    		ORDER BY n.descripcion DESC
    		");

        return $query->getResult();
    }
}