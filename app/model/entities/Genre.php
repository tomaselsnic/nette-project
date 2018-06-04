<?php

namespace App\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Genre
{
	
/**
 * @ORM\Column(type="string")
 */
protected $title;

 /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
protected $id;

/**
 * @ORM\OneToMany(targetEntity="CD")
 */
protected $cds;
}