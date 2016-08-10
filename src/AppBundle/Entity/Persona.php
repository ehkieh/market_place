<?php
namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class Persona extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $avatar;
    
    /**
     * @ORM\OneToMany(targetEntity="Trayecto", mappedBy="conductor")
     */
     protected $trayectos;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}