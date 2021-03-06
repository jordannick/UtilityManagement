<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="utility_meters_dev", schema="sym")
 */
class Meter
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="utility_type", type="string", length=50, nullable=true)
     */
    private $utilityType;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(name="external_id", type="string", length=50, nullable=true)
     */
    private $externalId;

    /**
     * @ORM\Column(name="external_system_name", type="string", length=50, nullable=true)
     */
    private $externalSystemName;

    /**
     * @ORM\Column(name="owned_by", type="string", length=50, nullable=true)
     */
    private $ownedBy;

    /**
     * @ORM\Column(name="property_id_1", type="string", length=50, nullable=true)
     */
    private $propertyId1;

    /**
     * @ORM\Column(name="property_id_2", type="string", length=50, nullable=true)
     */
    private $propertyId2;

    /**
     * @ORM\Column(name="property_id_3", type="string", length=50, nullable=true)
     */
    private $propertyId3;

    /**
     * @ORM\Column(type="datetime", scale=8, nullable=true)
     */
    private $created;

    /**
     * @ORM\Column(name="created_by", type="string", length=10, nullable=true)
     */
    private $createdBy;

    /**
     * @ORM\Column(type="datetime", scale=8, nullable=true)
     */
    private $modified;

    /**
     * @ORM\Column(name="modified_by", type="string", length=10, nullable=true)
     */
    private $modifiedBy;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $multiplier;

    /**
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive;

    /**
     * @ORM\Column(name="meter_location", type="text", nullable=true)
     */
    private $meterLocation;





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
     * Set utilityType
     *
     * @param string $utilityType
     *
     * @return Meter
     */
    public function setUtilityType($utilityType)
    {
        $this->utilityType = $utilityType;
    
        return $this;
    }

    /**
     * Get utilityType
     *
     * @return string
     */
    public function getUtilityType()
    {
        return $this->utilityType;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Meter
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Meter
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set externalId
     *
     * @param string $externalId
     *
     * @return Meter
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;
    
        return $this;
    }

    /**
     * Get externalId
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * Set externalSystemName
     *
     * @param string $externalSystemName
     *
     * @return Meter
     */
    public function setExternalSystemName($externalSystemName)
    {
        $this->externalSystemName = $externalSystemName;
    
        return $this;
    }

    /**
     * Get externalSystemName
     *
     * @return string
     */
    public function getExternalSystemName()
    {
        return $this->externalSystemName;
    }

    /**
     * Set ownedBy
     *
     * @param string $ownedBy
     *
     * @return Meter
     */
    public function setOwnedBy($ownedBy)
    {
        $this->ownedBy = $ownedBy;
    
        return $this;
    }

    /**
     * Get ownedBy
     *
     * @return string
     */
    public function getOwnedBy()
    {
        return $this->ownedBy;
    }

    /**
     * Set propertyId1
     *
     * @param string $propertyId1
     *
     * @return Meter
     */
    public function setPropertyId1($propertyId1)
    {
        $this->propertyId1 = $propertyId1;
    
        return $this;
    }

    /**
     * Get propertyId1
     *
     * @return string
     */
    public function getPropertyId1()
    {
        return $this->propertyId1;
    }

    /**
     * Set propertyId2
     *
     * @param string $propertyId2
     *
     * @return Meter
     */
    public function setPropertyId2($propertyId2)
    {
        $this->propertyId2 = $propertyId2;
    
        return $this;
    }

    /**
     * Get propertyId2
     *
     * @return string
     */
    public function getPropertyId2()
    {
        return $this->propertyId2;
    }

    /**
     * Set propertyId3
     *
     * @param string $propertyId3
     *
     * @return Meter
     */
    public function setPropertyId3($propertyId3)
    {
        $this->propertyId3 = $propertyId3;
    
        return $this;
    }

    /**
     * Get propertyId3
     *
     * @return string
     */
    public function getPropertyId3()
    {
        return $this->propertyId3;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Meter
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set createdBy
     *
     * @param string $createdBy
     *
     * @return Meter
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    
        return $this;
    }

    /**
     * Get createdBy
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set modified
     *
     * @param \DateTime $modified
     *
     * @return Meter
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
    
        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set modifiedBy
     *
     * @param string $modifiedBy
     *
     * @return Meter
     */
    public function setModifiedBy($modifiedBy)
    {
        $this->modifiedBy = $modifiedBy;
    
        return $this;
    }

    /**
     * Get modifiedBy
     *
     * @return string
     */
    public function getModifiedBy()
    {
        return $this->modifiedBy;
    }

    /**
     * Set multiplier
     *
     * @param integer $multiplier
     *
     * @return Meter
     */
    public function setMultiplier($multiplier)
    {
        $this->multiplier = $multiplier;
    
        return $this;
    }

    /**
     * Get multiplier
     *
     * @return integer
     */
    public function getMultiplier()
    {
        return $this->multiplier;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return Meter
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    
        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set meterLocation
     *
     * @param string $meterLocation
     *
     * @return Meter
     */
    public function setMeterLocation($meterLocation)
    {
        $this->meterLocation = $meterLocation;
    
        return $this;
    }

    /**
     * Get meterLocation
     *
     * @return string
     */
    public function getMeterLocation()
    {
        return $this->meterLocation;
    }
}
