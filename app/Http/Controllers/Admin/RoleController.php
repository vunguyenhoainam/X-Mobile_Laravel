<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Roles\CreateRoleRequest;
use App\Http\Requests\Roles\UpdateRoleRequest;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function index()
    {
        $roles = Role::latest('id')->paginate(3);
        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        $permissions = Permission::all()->groupBy('group');
        return view('admin.roles.create', compact('permissions'));
    }

    public function store(CreateRoleRequest $request)
    {
        dd($request);
        $dataCreate = $request->all();
        $dataCreate['guard_name'] = 'web';
        $role = Role::create($dataCreate);

        $role->permissions()->attach($dataCreate['permission_ids']);
        // return to_route('roles.index')->with(['message' => 'Create success']);
        return redirect('roles');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $role = Role::with('permissions')->findOrFail($id);
        $permissions = Permission::all()->groupBy('group');
        return view('admin.roles.edit', compact('role', 'permissions'));
    }

    public function update(UpdateRoleRequest $request, $id)
    {
        $role = Role::findOrFail($id);
        $dataUpdate = $request->all();
        $role->update($dataUpdate);
        $role->permissions()->sync($dataUpdate['permission_ids']);
        return redirect('roles');
    }

    public function destroy($id)
    {
        $role = Role::destroy($id);
        return redirect('roles');
    }
}
