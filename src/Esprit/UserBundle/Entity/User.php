<?php
namespace Esprit\UserBundle\Entity;


use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="esp_user")
*/
class User extends BaseUser
{
    /**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue(strategy="AUTO")
*/
    protected $id;
    
      /**
* @ORM\OneToOne(targetEntity="Etudiant", cascade={"persist", "merge", "remove"})
* @ORM\JoinColumn(name="Etudiant_id", referencedColumnName="id")
*/
    private $etudiant;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set etudiant
     *
     * @param \Esprit\UserBundle\Entity\Etudiant $etudiant
     * @return User
     */
    public function setEtudiant(\Esprit\UserBundle\Entity\Etudiant $etudiant = null)
    {
        $this->etudiant = $etudiant;
    
        return $this;
    }

    /**
     * Get etudiant
     *
     * @return \Esprit\UserBundle\Entity\Etudiant 
     */
    public function getEtudiant()
    {
        return $this->etudiant;
    }
}