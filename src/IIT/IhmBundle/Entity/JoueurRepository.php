<?php

namespace IIT\IhmBundle\Entity;

use Doctrine\ORM\EntityRepository;

class JoueurRepository extends EntityRepository {

    public function showPlayers($id) {

        $qt = $this->createQueryBuilder('j');
        $qt->select('j')
                 
                ->where('j.idequipe=:eq')
                
                ->setParameter('eq', $id);
         
        return $qt->getQuery()->getResult();
    }

}

?>
