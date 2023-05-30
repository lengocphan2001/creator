<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\AdminHelper;
use App\Models\Project;
use App\Services\Admin\CreatorService;
use App\Services\Admin\ProjectService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CreatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = AdminHelper::getPageTitle('Nhà sáng tạo');
        $data['creators'] = CreatorService::getInstance()->getListCreators();

        return view('admin.creators.index')->with(['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = AdminHelper::getPageTitle('Dự án');

        return view('admin.projects.create')->with(['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ProjectService::getInstance()->create($request->only(['name', 'cost', 'partner', 'description']));
        $data['title'] = AdminHelper::getPageTitle('Dự án');
        toastr(trans('admin.response.create', ['name' => 'Dự án']));

        return redirect(route('admin.projects.index'))->with(['data', $data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $data['title'] = AdminHelper::getPageTitle('Dự án');
        $data['project'] = ProjectService::getInstance()->edit($project);

        return view('admin.projects.edit')->with(['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        ProjectService::getInstance()->update($project,  $request->only(['name', 'cost', 'partner', 'description']));
        toastr(trans('admin.response.update', ['name' => 'Dự án']));

        return redirect(route('admin.projects.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        ProjectService::getInstance()->delete($project);
        toastr(trans('admin.response.delete', ['name' => 'Dự án']));

        return redirect(route('admin.projects.index'));
    }

    public function assignment(){
        $data['title'] = AdminHelper::getPageTitle('Dự án');
        $data['projects'] = ProjectService::getInstance()->getListProjects();

        return view('admin.projects.assignment')->with(['data' => $data]);
    }
}
