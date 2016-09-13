<?php

namespace App\Repositories;

use Validator;
use App\Models\User;

class UserRepository
{
	/**
	 * 注入的user
	 *
	 * @var \App\Models\User
	 */
	protected $user;

	/**
	 * UserRepository constructor
	 *
	 * @param User $user
	 */
	public function __construct(User $user)
	{
		$this->user = $user;
	}

	/**
	 * Create a new user instance after a valid registration
	 *
	 * @param array $data
	 * @return App\Models\User User
	 */
	public function createNewUser(array $data)
	{
		return $this->user->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
	}
	
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
	public function validForCreation(array $data)
	{
		return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
	}

	/**
	 * 
	 */
	public function updateLastIpAndLastLogin($request, $user)
	{
		$user->last_ip = $request->ip();
		$user->save();
	}
}