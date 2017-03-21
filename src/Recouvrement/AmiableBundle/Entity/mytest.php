<?php

namespace Recouvrement\AmiableBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * mytest
 *
 * @ORM\Table(name="mytest")
 * @ORM\Entity(repositoryClass="Recouvrement\AmiableBundle\Repository\mytestRepository")
 */
class mytest
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var array
     *
     * @ORM\Column(name="mytest", type="array")
     */
    private $mytest;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set mytest
     *
     * @param array $mytest
     *
     * @return mytest
     */
    public function setMytest($mytest)
    {
        $this->mytest = $mytest;

        return $this;
    }

    /**
     * Get mytest
     *
     * @return array
     */
    public function getMytest()
    {
        return $this->mytest;
    }
}

