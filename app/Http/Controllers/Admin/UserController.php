<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\UserHelper;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\Admin\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = UserHelper::getPageTitle('Người dùng');
        $data['users'] = UserService::getInstance()->getListUsers();

        return view('admin.users.index')->with(['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = UserHelper::getPageTitle('Người dùng');

        return view('admin.users.create')->with(['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        UserService::getInstance()->create($request->only(['name', 'email', 'password']));
        $data['title'] = UserHelper::getPageTitle('Người dùng');
        toastr(trans('admin.response.create', ['name' => 'Người dùng']));

        return redirect(route('admin.users.index'))->with(['data', $data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($user)
    {
        $data['title'] = UserHelper::getPageTitle('Người dùng');
        $data['user'] = UserService::getInstance()->edit($user);

        return view('admin.users.edit')->with(['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        UserService::getInstance()->update($user,  $request->only(['name', 'email', 'password']));
        toastr(trans('admin.response.update', ['name' => 'Người dùng']));

        return redirect(route('admin.users.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        UserService::getInstance()->delete($user);
        toastr(trans('admin.response.delete', ['name' => 'Người dùng']));

        return redirect(route('admin.users.index'));
    }
}
