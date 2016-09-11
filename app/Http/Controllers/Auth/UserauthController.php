<?php

namespace App\Http\Controllers\Auth;

// use Validator;
// use App\Models\User;
// use Illuminate\Http\Request;

// use App\Http\Requests;
use App\Services\AuthService;
use App\Http\Controllers\Controller;
use Zionon\MultiAuth\Auth\AuthenticatesAndRegistersUsers;
use Zionon\MultiAuth\Auth\ThrottlesLogins;

class UserauthController extends Controller
{
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $loginView = 'auth.user.login';
    protected $registerView = 'auth.user.register';
    protected $loginPath = 'login';
    protected $redirectPath = 'home';
    protected $redirectAfterLogout = 'test';
    protected $username = ['email', 'name'];

    protected $authService;

    public function __construct(AuthService $authService)
    {
    	$this->authService = $authService;
    	$this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
    	return $this->authService->getValidatorResult($data);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return $this->authService->setCreateNewUser($data);
    }
}
