<?php
// Tabla.php
// src/Model/Entity/Article.php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Tabla extends Entity {
	protected $_accessible = [
		'*' => true,
		'id' => false,
		'slug' => false,
	];
}