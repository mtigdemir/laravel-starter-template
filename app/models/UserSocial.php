<?php
use Mmanos\Social\SocialTrait;

/**
 * UserSocial 
 */
class UserSocial extends Eloquent{
	use SocialTrait;
//        use UserTrait, RemindableTrait;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
}