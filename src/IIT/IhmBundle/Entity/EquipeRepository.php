<?php

namespace IIT\IhmBundle\Entity;

use Doctrine\ORM\EntityRepository;

class EquipeRepository extends EntityRepository {

    public function showPlayers($id) {

        $qt = $this->createQueryBuilder('r');
        $qt->select('j')
                ->from('IITIhmBundle:Joueur', 'j')
                ->where('j.idequipe=:eq')
                ->setParameter('eq', 1);
        echo $qt->getQuery()->getResult() ;
        return $qt;
    }

}

?>
