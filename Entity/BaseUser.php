<?php

/*
 * This file is part of the Sonata project.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\UserBundle\Entity;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Esprit\UserBundle\Entity\Etudiant;
use Esprit\UserBundle\Form\EtudiantType;
use Sonata\UserBundle\Model\User as AbstractedUser;

/**
 * Represents a Base User Entity
 */
class BaseUser extends AbstractedUser  
{
    /**
     * Hook on pre-persist operations
     */   
    public function prePersist()
    {  
        $this->createdAt = new \DateTime;
        $this->updatedAt = new \DateTime;
    }

    /**
     * Hook on pre-update operations
     */
    public function preUpdate()
    {
        $this->updatedAt = new \DateTime;
    }
}
