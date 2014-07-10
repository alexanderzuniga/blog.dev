<?php

use Carbon\Carbon;

class BaseModel extends Eloquent {


	public function getCreatedAtAttribute($value)
	{
	   return $this->convertToLocalTimezone($value);
	}
		
	public function getUpdatedAtAttribute($value)
	{
	   return $this->convertToLocalTimezone($value);
	}

	private function convertToLocalTimezone($value)
	{
	    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
	    return $utc->setTimezone('America/Chicago');
	}

}