<?php
class AnyModel extends CFormModel
{
	protected function relations()
	{
		return array(
			'relationName'=>array(self::MANY_MANY,'Model','intermediary_Table(sslc,user)')
		);
	}
}