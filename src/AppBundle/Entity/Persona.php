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
     * @ORM\Column(type="string", nullable=true)
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

    /**
     * Set avatar
     *
     * @param string $avatar
     *
     * @return Persona
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Add trayecto
     *
     * @param \AppBundle\Entity\Trayecto $trayecto
     *
     * @return Persona
     */
    public function addTrayecto(\AppBundle\Entity\Trayecto $trayecto)
    {
        $this->trayectos[] = $trayecto;

        return $this;
    }

    /**
     * Remove trayecto
     *
     * @param \AppBundle\Entity\Trayecto $trayecto
     */
    public function removeTrayecto(\AppBundle\Entity\Trayecto $trayecto)
    {
        $this->trayectos->removeElement($trayecto);
    }

    /**
     * Get trayectos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTrayectos()
    {
        return $this->trayectos;
    }
}
