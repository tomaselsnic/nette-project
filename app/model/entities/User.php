<?php

namespace App\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class User
{
	
	const ROLE_USER=1;
	const ROLE_ADMIN=2;
	
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
	
	/**
     * @ORM\Column(type="string")
     */
	protected $password;
	
	/**
     * @ORM\Column(type="string")
     */
	protected $name;

	/**
	*@ORM\Column(type="integer")
	*/
	protected $role;
}