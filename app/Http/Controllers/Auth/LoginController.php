<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'cabinet';

    public function login(Request $request)
    {
        $result = [
            'response' => 'error',
            'message' => 'Какая-то ошибка'
        ];
        $smsCode = $request->input('auth')['smscode'];
        if (empty($smsCode)) {
            $result = [
                'response' => 'sms',
            ];
        } else {
            $res = $this->authUser($request->input('auth'));

            $result = [
                'response' => 'ok',
                'postaction' => 'redirect',
                'location' => $this->redirectTo
            ];
        }
        return json_encode($result);
    }

    protected function authUser($userInfo)
    {
        $id = rand(1, 100);
        $user = User::find($id);
        Auth::login($user);
    }
}
