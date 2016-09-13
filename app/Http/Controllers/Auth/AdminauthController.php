<?php

namespace App\Http\Controllers\Auth;

// use Illuminate\Http\Request;

// use App\Http\Requests;
use App\Http\Controllers\Controller;
use Zionon\MultiAuth\Auth\AuthenticatesAndRegistersUsers;
use Zionon\MultiAuth\Auth\ThrottlesLogins;

class AdminauthController extends Controller
{
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $authModel = 'admin';

    /**
     * 登录视图文件路径
     * @var string
     */
    protected $loginView = 'auth.admin.login';

    /**
     * login route
     * @var string
     */
    protected $loginPath = '/admin/login';

    /**
     * 登录成功跳转路径
     * @var string
     */
    protected $redirectPath = 'admin';

    /**
     * 登出跳转路径
     * @var string
     */
    protected $redirectAfterLogout = 'test';

    /**
     * 不使用记住我
     * @var boolean
     */
    protected $remember = false;

    // public function __construct()
    // {
    //     // $this->middleware('guest', ['except' => 'getLogout']);
    // }
    protected function authenticated($request, $admin)
    {
        return redirect($this->redirectPath);
    }
}
