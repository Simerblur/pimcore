<?php 

/** 
* Generated at: 2018-05-11T10:15:22+02:00
* Inheritance: no
* Variants: no
* Changed by: admin (2)
* IP: 127.0.0.1


Fields Summary: 
*/ 

namespace Pimcore\Model\DataObject;



/**
*/

class MySample extends Concrete {

public $o_classId = 1;
public $o_className = "mySample";


/**
* @param array $values
* @return \Pimcore\Model\DataObject\MySample
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

}

