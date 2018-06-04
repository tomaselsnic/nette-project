<?php

namespace App\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class CD
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
 * @ORM\ManyToOne(targetEntity="Genre")
 */
protected $genre;
}