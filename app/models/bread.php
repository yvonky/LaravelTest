<?php 
class Blead extends Eloquent {
	public $timestamp=false;
	public function cats(){
		return $this->hasMany('Cat');
	}
}