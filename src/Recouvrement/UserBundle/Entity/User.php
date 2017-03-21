<?php
/**
 * Created by PhpStorm.
 * User: yassine
 * Date: 07/03/2017
 * Time: 12:00
 */

namespace Recouvrement\UserBundle\Entity;


use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
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
     * @ORM\Column(name="NomPrenom", type="string", length=255, nullable=true)
     */
    protected $NomPrenom;
    /**
     * @ORM\Column(name="CIN", type="string", length=255, nullable=true)
     */
    protected $cin;
    /**
     * @ORM\Column(name="dateNaissance", type="date", nullable=true)
     */
    protected $dateNaissance;
    /**
     * @ORM\Column(name="lieuNaissance", type="string", length=255, nullable=true)
     */
    protected $lieuNaissance;
    /**
     * @ORM\Column(name="tel", type="bigint", nullable=true)
     */
    protected $tel;
    /**
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    protected $adresse;
    /**
     * @ORM\OneToOne(targetEntity="Recouvrement\UserBundle\Entity\ImageUser", cascade={"persist"})
     */
    protected $image;



//    /**
//     * @return mixed
//     */
//    public function getNomPrenom()
//    {
//        return $this->NomPrenom;
//    }
//
//    /**
//     * @param mixed $NomPrenom
//     */
//    public function setNomPrenom($NomPrenom)
//    {
//        $this->NomPrenom = $NomPrenom;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getCin()
//    {
//        return $this->cin;
//    }
//
//    /**
//     * @param mixed $cin
//     */
//    public function setCin($cin)
//    {
//        $this->cin = $cin;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getDateNaissance()
//    {
//        return $this->dateNaissance;
//    }
//
//    /**
//     * @param mixed $dateNaissance
//     */
//    public function setDateNaissance($dateNaissance)
//    {
//        $this->dateNaissance = $dateNaissance;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getLieuNaissance()
//    {
//        return $this->lieuNaissance;
//    }
//
//    /**
//     * @param mixed $lieuNaissance
//     */
//    public function setLieuNaissance($lieuNaissance)
//    {
//        $this->lieuNaissance = $lieuNaissance;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getTel()
//    {
//        return $this->tel;
//    }
//
//    /**
//     * @param mixed $tel
//     */
//    public function setTel($tel)
//    {
//        $this->tel = $tel;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getAdresse()
//    {
//        return $this->adresse;
//    }
//
//    /**
//     * @param mixed $adresse
//     */
//    public function setAdresse($adresse)
//    {
//        $this->adresse = $adresse;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getImage()
//    {
//        return $this->image;
//    }
//
//    /**
//     * @param mixed $image
//     */
//    public function setImage(ImageUser $image = null)
//    {
//        $this->image = $image;
//    }
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }


    /**
     * Set nomPrenom
     *
     * @param string $nomPrenom
     *
     * @return User
     */
    public function setNomPrenom($nomPrenom)
    {
        $this->NomPrenom = $nomPrenom;

        return $this;
    }

    /**
     * Get nomPrenom
     *
     * @return string
     */
    public function getNomPrenom()
    {
        return $this->NomPrenom;
    }

    /**
     * Set cin
     *
     * @param string $cin
     *
     * @return User
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return string
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return User
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set lieuNaissance
     *
     * @param string $lieuNaissance
     *
     * @return User
     */
    public function setLieuNaissance($lieuNaissance)
    {
        $this->lieuNaissance = $lieuNaissance;

        return $this;
    }

    /**
     * Get lieuNaissance
     *
     * @return string
     */
    public function getLieuNaissance()
    {
        return $this->lieuNaissance;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     *
     * @return User
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return integer
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return User
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set image
     *
     * @param \Recouvrement\UserBundle\Entity\ImageUser $image
     *
     * @return User
     */
    public function setImage(\Recouvrement\UserBundle\Entity\ImageUser $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Recouvrement\UserBundle\Entity\ImageUser
     */
    public function getImage()
    {
        return $this->image;
    }
}
