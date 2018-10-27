<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demande
 *
 * @ORM\Table(name="demande")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DemandeRepository")
 */
class Demande
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
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=90)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="type_carte", type="string", length=90)
     */
    private $typeCarte;

    /**
     * @var int
     *
     * @ORM\Column(name="num_serie", type="integer")
     */
    private $numSerie;

    /**
     * @var string
     *
     * @ORM\Column(name="demandeur", type="string", length=150)
     */
    private $demandeur;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_serie", type="string", length=90)
     */
    private $libelleSerie;

    /**
     * @var int
     *
     * @ORM\Column(name="nombre_demande", type="integer")
     */
    private $nombreDemande;

    /**
     * @var int
     *
     * @ORM\Column(name="nombre_realise", type="integer")
     */
    private $nombreRealise;

    /**
     * @var int
     *
     * @ORM\Column(name="nombre_erreur", type="integer")
     */
    private $nombreErreur;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=90)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="realisateur", type="string", length=90)
     */
    private $realisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=90)
     */
    private $action;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;


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
     * Set type
     *
     * @param string $type
     *
     * @return Demande
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set typeCarte
     *
     * @param string $typeCarte
     *
     * @return Demande
     */
    public function setTypeCarte($typeCarte)
    {
        $this->typeCarte = $typeCarte;

        return $this;
    }

    /**
     * Get typeCarte
     *
     * @return string
     */
    public function getTypeCarte()
    {
        return $this->typeCarte;
    }

    /**
     * Set numSerie
     *
     * @param integer $numSerie
     *
     * @return Demande
     */
    public function setNumSerie($numSerie)
    {
        $this->numSerie = $numSerie;

        return $this;
    }

    /**
     * Get numSerie
     *
     * @return int
     */
    public function getNumSerie()
    {
        return $this->numSerie;
    }

    /**
     * Set demandeur
     *
     * @param string $demandeur
     *
     * @return Demande
     */
    public function setDemandeur($demandeur)
    {
        $this->demandeur = $demandeur;

        return $this;
    }

    /**
     * Get demandeur
     *
     * @return string
     */
    public function getDemandeur()
    {
        return $this->demandeur;
    }

    /**
     * Set libelleSerie
     *
     * @param string $libelleSerie
     *
     * @return Demande
     */
    public function setLibelleSerie($libelleSerie)
    {
        $this->libelleSerie = $libelleSerie;

        return $this;
    }

    /**
     * Get libelleSerie
     *
     * @return string
     */
    public function getLibelleSerie()
    {
        return $this->libelleSerie;
    }

    /**
     * Set nombreDemande
     *
     * @param integer $nombreDemande
     *
     * @return Demande
     */
    public function setNombreDemande($nombreDemande)
    {
        $this->nombreDemande = $nombreDemande;

        return $this;
    }

    /**
     * Get nombreDemande
     *
     * @return int
     */
    public function getNombreDemande()
    {
        return $this->nombreDemande;
    }

    /**
     * Set nombreRealise
     *
     * @param integer $nombreRealise
     *
     * @return Demande
     */
    public function setNombreRealise($nombreRealise)
    {
        $this->nombreRealise = $nombreRealise;

        return $this;
    }

    /**
     * Get nombreRealise
     *
     * @return int
     */
    public function getNombreRealise()
    {
        return $this->nombreRealise;
    }

    /**
     * Set nombreErreur
     *
     * @param integer $nombreErreur
     *
     * @return Demande
     */
    public function setNombreErreur($nombreErreur)
    {
        $this->nombreErreur = $nombreErreur;

        return $this;
    }

    /**
     * Get nombreErreur
     *
     * @return int
     */
    public function getNombreErreur()
    {
        return $this->nombreErreur;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Demande
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set realisateur
     *
     * @param string $realisateur
     *
     * @return Demande
     */
    public function setRealisateur($realisateur)
    {
        $this->realisateur = $realisateur;

        return $this;
    }

    /**
     * Get realisateur
     *
     * @return string
     */
    public function getRealisateur()
    {
        return $this->realisateur;
    }

    /**
     * Set action
     *
     * @param string $action
     *
     * @return Demande
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Demande
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
}

