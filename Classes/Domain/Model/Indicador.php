<?php
namespace Unal\IndicadoresCarrusel\Domain\Model;

/***
 *
 * This file is part of the "Carrusel de Indicadores Estadisticos" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Camilo Neiva <jcneivaa@unal.edu.co >, Unal
 *
 ***/

/**
 * Indicador
 */
class Indicador extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * nombre
     * 
     * @var string
     */
    protected $nombre = '';

    /**
     * nombreDisplay
     * 
     * @var string
     */
    protected $nombreDisplay = '';

    /**
     * subtext
     * 
     * @var string
     */
    protected $subtext = '';

    /**
     * descripcion
     * 
     * @var string
     */
    protected $descripcion = '';

    /**
     * badge
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $badge = null;

    /**
     * altbadge
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $altbadge = null;

    /**
     * Returns the nombre
     * 
     * @return string $nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Sets the nombre
     * 
     * @param string $nombre
     * @return void
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Returns the nombreDisplay
     * 
     * @return string $nombreDisplay
     */
    public function getNombreDisplay()
    {
        return $this->nombreDisplay;
    }

    /**
     * Sets the nombreDisplay
     * 
     * @param string $nombreDisplay
     * @return void
     */
    public function setNombreDisplay($nombreDisplay)
    {
        $this->nombreDisplay = $nombreDisplay;
    }

    /**
     * Returns the subtext
     * 
     * @return string $subtext
     */
    public function getSubtext()
    {
        return $this->subtext;
    }

    /**
     * Sets the subtext
     * 
     * @param string $subtext
     * @return void
     */
    public function setSubtext($subtext)
    {
        $this->subtext = $subtext;
    }

    /**
     * Returns the descripcion
     * 
     * @return string $descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Sets the descripcion
     * 
     * @param string $descripcion
     * @return void
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * Returns the badge
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $badge
     */
    public function getBadge()
    {
        return $this->badge;
    }

    /**
     * Sets the badge
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $badge
     * @return void
     */
    public function setBadge(\TYPO3\CMS\Extbase\Domain\Model\FileReference $badge)
    {
        $this->badge = $badge;
    }

    /**
     * Returns the altbadge
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $altbadge
     */
    public function getAltbadge()
    {
        return $this->altbadge;
    }

    /**
     * Sets the altbadge
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $altbadge
     * @return void
     */
    public function setAltbadge(\TYPO3\CMS\Extbase\Domain\Model\FileReference $altbadge)
    {
        $this->altbadge = $altbadge;
    }
}
