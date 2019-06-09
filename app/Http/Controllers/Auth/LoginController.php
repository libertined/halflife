<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Inspector;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use phpDocumentor\Reflection\Types\Callable_;

class LoginController extends Controller
{
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectPassenger = '/cabinet';

    protected $redirectInspector = '/inspector/cabinet';

    public function login(Request $request)
    {
        $authInfo = $request->input('auth');
        return $this->loginByUser($authInfo, array($this, "authUser"));
    }

    public function loginInspector(Request $request)
    {
        $authInfo = $request->input('auth');
        return $this->loginByUser($authInfo, array($this, "authInspector"));
    }

    /**
     * Выход
     * @return Redirector
     */
    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }

    protected function loginByUser($authInfo, callable $authUser)
    {
        // На будущее ))
        $result = [
            'response' => 'error',
            'message' => 'Какая-то ошибка'
        ];
        if (empty($authInfo['smscode'])) {
            $result = [
                'response' => 'sms',
            ];
        } else {
            $res = call_user_func_array($authUser, [$authInfo]);

            $result = [
                'response' => 'ok',
                'postaction' => 'redirect',
                'location' => $res['redirect']
            ];
        }
        return json_encode($result);
    }

    protected function authUser($userInfo)
    {
        $id = rand(1, 100);
        $user = User::find($id);
        Auth::login($user);
        return [
            'redirect' => $this->redirectPassenger
        ];
    }

    protected function authInspector($userInfo)
    {
        $id = rand(1, 100);
        $user = Inspector::find($id);
        Auth::login($user);
        return [
            'redirect' => $this->redirectInspector
        ];
    }
}
