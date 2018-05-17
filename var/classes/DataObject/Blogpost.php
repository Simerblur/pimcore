<?php 

/** 
* Generated at: 2018-05-17T10:55:43+02:00
* Inheritance: no
* Variants: no
* Changed by: admin (2)
* IP: 127.0.0.1


Fields Summary: 
- Title [input]
- Subtitle [input]
- content [wysiwyg]
- headerbackgroundimage [image]
- author [input]
- myDate [date]
- boximage [image]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\Blogpost\Listing getByTitle ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\Blogpost\Listing getBySubtitle ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\Blogpost\Listing getByContent ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\Blogpost\Listing getByHeaderbackgroundimage ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\Blogpost\Listing getByAuthor ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\Blogpost\Listing getByMyDate ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\Blogpost\Listing getByBoximage ($value, $limit = 0) 
*/

class Blogpost extends Concrete {

public $o_classId = 2;
public $o_className = "blogpost";
public $Title;
public $Subtitle;
public $content;
public $headerbackgroundimage;
public $author;
public $myDate;
public $boximage;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Blogpost
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get Title - title
* @return string
*/
public function getTitle () {
	$preValue = $this->preGetValue("Title"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->Title;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set Title - title
* @param string $Title
* @return \Pimcore\Model\DataObject\Blogpost
*/
public function setTitle ($Title) {
	$this->Title = $Title;
	return $this;
}

/**
* Get Subtitle - subtitle
* @return string
*/
public function getSubtitle () {
	$preValue = $this->preGetValue("Subtitle"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->Subtitle;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set Subtitle - subtitle
* @param string $Subtitle
* @return \Pimcore\Model\DataObject\Blogpost
*/
public function setSubtitle ($Subtitle) {
	$this->Subtitle = $Subtitle;
	return $this;
}

/**
* Get content - content
* @return string
*/
public function getContent () {
	$preValue = $this->preGetValue("content"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("content")->preGetData($this);
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set content - content
* @param string $content
* @return \Pimcore\Model\DataObject\Blogpost
*/
public function setContent ($content) {
	$this->content = $content;
	return $this;
}

/**
* Get headerbackgroundimage - headerbackgroundimage
* @return \Pimcore\Model\Asset\Image
*/
public function getHeaderbackgroundimage () {
	$preValue = $this->preGetValue("headerbackgroundimage"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->headerbackgroundimage;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set headerbackgroundimage - headerbackgroundimage
* @param \Pimcore\Model\Asset\Image $headerbackgroundimage
* @return \Pimcore\Model\DataObject\Blogpost
*/
public function setHeaderbackgroundimage ($headerbackgroundimage) {
	$this->headerbackgroundimage = $headerbackgroundimage;
	return $this;
}

/**
* Get author - author
* @return string
*/
public function getAuthor () {
	$preValue = $this->preGetValue("author"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->author;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set author - author
* @param string $author
* @return \Pimcore\Model\DataObject\Blogpost
*/
public function setAuthor ($author) {
	$this->author = $author;
	return $this;
}

/**
* Get myDate - myDate
* @return \Carbon\Carbon
*/
public function getMyDate () {
	$preValue = $this->preGetValue("myDate"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->myDate;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set myDate - myDate
* @param \Carbon\Carbon $myDate
* @return \Pimcore\Model\DataObject\Blogpost
*/
public function setMyDate ($myDate) {
	$this->myDate = $myDate;
	return $this;
}

/**
* Get boximage - boximage
* @return \Pimcore\Model\Asset\Image
*/
public function getBoximage () {
	$preValue = $this->preGetValue("boximage"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->boximage;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set boximage - boximage
* @param \Pimcore\Model\Asset\Image $boximage
* @return \Pimcore\Model\DataObject\Blogpost
*/
public function setBoximage ($boximage) {
	$this->boximage = $boximage;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = array (
);

}

