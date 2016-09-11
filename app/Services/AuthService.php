<?php

namespace App\Services;

// use Illuminate\Database\Eloquent\Model;
use App\Repositories\UserRepository;

class AuthService
{
	/**
	 * eloquent
	 * @var Illuminate\Database\Eloquent\Model
	 */
	protected $user;

	/**
	 * AuthService constructor
	 *
	 *@param  
	 */
	public function __construct(UserRepository $user)
	{
		$this->user = $user;
	}

	public function getValidatorResult(array $data)
	{
		return $this->user->validForCreation($data);
	}

	public function setCreateNewUser(array $data)
	{
		return $this->user->createNewUser($data);
	}
}