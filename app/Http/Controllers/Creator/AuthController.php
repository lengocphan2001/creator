<?php

namespace App\Http\Controllers\Creator;

use App\Helpers\AdminHelper;
use App\Helpers\CreatorHelper;
use App\Http\Requests\Admin\Auth\LoginRequest;
use App\Models\Creator;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin(){
         if (auth()->guard('creator')->check()) {
            return redirect()->route('creator.dashboard');
        }
        $data['title'] = CreatorHelper::getPageTitle('Đăng nhập');

        return view('creator.auth.login')->with(['data' => $data]);
    }
    /**
     * Login admin
     *
     * @param LoginRequest $request
     * @return RedirectResponse
     */
    public function login(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->only(['email', 'password']);
        // dd($credentials);
        if (!Auth()->guard('creator')->attempt($credentials)) {
            toastr(trans('auth.failed'), 'error');
            return redirect()->back()->withInput();
        }//end if

        return redirect()->route('creator.dashboard');
    }

    public function showRegister(){
         if (auth()->guard('creator')->check()) {
            return redirect()->route('creator.dashboard');
        }//end if

        $data['title'] = CreatorHelper::getPageTitle('Đăng ký tài khoản');

        return view('creator.auth.register')->with(['data' => $data]);
    }
    /**
     * Login admin
     *
     * @param LoginRequest $request
     * @return RedirectResponse
     */
    public function register(LoginRequest $request): RedirectResponse
    {
        $creator = Creator::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'total_time' => 0,
            'numberof_projects' => 0
        ]);
        toastr(trans('auth.success'), 'success');
        return redirect()->route('creator.login');
    }

    /**
     * Logout admin
     *
     * @return RedirectResponse
     */
    public function logout(): RedirectResponse
    {
        auth()->guard('creator')->logout();

        return redirect()->route('creator.login');
    }

    /**
     * Get profile
     *
     * @return Application|Factory|View
     */
    public function profile()
    {
        $data['user'] = auth()->guard('creator')->user();
        $data['title'] = AdminHelper::getPageTitle(trans('admin.sidebar.profile'));

        return view('creator.auth.profile')->with(['data' => $data]);
    }
}
