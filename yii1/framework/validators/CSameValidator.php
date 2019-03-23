<?php
class CSameValidator extends CValidator
{
	public $value=1;
	public $allowEmpty=true;

	protected function validateAttribute($object,$attribute)
	{
$value=$object->$attribute;
if($this->allowEmpty&&$this->isEmpty($value))
return;
$valid=false;
if(!is_array($value))
{
	// $formats=is_string($this->format) ? array($this->format) : $this->format;
	// foreach ($formats as $formate) {
		if($value==97)
		{
			$valid=true;
			// break;
		}
	
}
	

	if(!$valid)
		{
			$message=$this->message!==null?$this->message : Yii::t('yii','The format of {attribute} is invalid.');
			$this->addError($object,$attribute,$message);
		}
}

}