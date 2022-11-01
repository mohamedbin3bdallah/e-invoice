<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spatie\Permission\Models\Permission;
use App\Spatie\Permission\Models\Role;
use App\Spatie\Permission\Models\RolePermission;
use App\Models\Company;
use App\Models\User;
use Session;

class RoleController extends Controller
{
	protected $view_folder = 'role';
	protected $main_redirection = 'roles';
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.'.$this->view_folder.'.index');
    }
	
	/**
	* Get resources
	*/
	public function get(Request $request)
    {
        $columns = array(
            0 => 'groups.id', 
            1 => 'groups.name',
			2 => 'company.name',
			3 => 'groups.active',
            4 => 'groups.created_at',
            5 => '',
        );
		
		//$query = Role::where([]);
		$query = Role::leftJoin('companies', 'groups.company_id', '=', 'companies.id')
				->select('groups.id as id','groups.name as name','groups.active as status','groups.created_at as created_at','companies.name as company');

		$totalData = $query->count();
		$totalFiltered = $totalData; 
		
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
				
		if(!empty($request->input('search')))
		{
			$search = $request->input('search');
			$query->where('groups.name', 'LIKE', "%{$search}%");
		}
		
		$totalFiltered = $query->count();
		$query_data = $query->orderBy($order, $dir)->limit($limit)->offset($start)->get();
		
		$data = array();
        if(!empty($query_data))
        {
            foreach ($query_data as $single)
            {
                $nestedData['id'] = ++$start;
				$nestedData['name'] = $single->name;
				$nestedData['company'] = $single->company;
				$nestedData['status'] = ($single->status)? __('trans.active'):__('trans.not_active');
				$nestedData['created_at'] = date('j M Y h:i a',strtotime($single->created_at));
				$nestedData['actions'] = '
																<form  method="post" action="'.route('role-delete', ['id'=>$single->id]).'">
																<a href="'.route('permissions-show', ['id'=>$single->id]).'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" title="'.__('trans.permissions').'">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
																	<span class="svg-icon svg-icon-3">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
																			<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</a>
																<a href="'.route('role-edit', ['id'=>$single->id]).'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" title="'.__('trans.edit').'">
																	<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																	<span class="svg-icon svg-icon-3">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																			<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</a>
																<input type="hidden" name="_token" value="'.csrf_token().'" /><input type="hidden" name="_method" value="DELETE">
																<button onclick="return confirm('."'".__('trans.are_you_sure_you_want_to_delete')."'".')" type="submit" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm" title="'.__('trans.delete').'">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
																	<span class="svg-icon svg-icon-3">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
																			<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
																			<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</button>
																</form>';
				
				$data[] = $nestedData;
            }
        }
		
		$json_data = array(
            "draw"            => intval($request->input('draw')),  
            "recordsTotal"    => intval($totalData),  
            "recordsFiltered" => intval($totalFiltered), 
            "data"            => $data   
        );
            
        echo json_encode($json_data); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $resources = Company::where(['active'=>1])->get();
		
        return view('dashboard.'.$this->view_folder.'.add')->with(['resources'=>$resources]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$companies = Company::where(['active'=>1])->pluck('id')->toArray();
		
		$validated = $request->validate([
			'name' => 'required|max:191',
			'status' => 'required|integer|in:0,1',
			'company' => 'required|integer|in:' . implode(',', $companies),
		]);
		
		Role::create([
			'name' => $request->name,
			'company_id' => $request->company,
			'active' => $request->status
		]);
		
		Session::flash('success', __('trans.added_successfully'));
		return redirect()->route($this->main_redirection);
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
    public function edit($id)
    {
        $resource = Role::find($id);
		if($resource)
		{
			return view('dashboard.'.$this->view_folder.'.edit')->with(['resource'=>$resource]);
		}
		else
		{
			Session::flash('danger', __('trans.record_not_found'));
			return redirect()->route($this->main_redirection);
		}
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		$resource = Role::find($id);
		if($resource)
		{
			$validated = $request->validate([
				'name' => 'required|max:191||unique:roles,name,'.$id,
				'status' => 'required|integer|in:0,1',
			]);
		
			$resource->update([
				'name' => $request->name,
				'active' => $request->status
			]);
			
			Session::flash('success', __('trans.updated_successfully'));
			return redirect()->route($this->main_redirection);
		}
		
		else
		{
			Session::flash('danger', __('trans.record_not_found'));
			return redirect()->route($this->main_redirection);
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resource = Role::find($id);
		$users_count = User::where(['group_id'=>$id])->count();
		if($resource and $users_count)
		{
			Session::flash('warning', __('trans.cant_delete_record'));
			return redirect()->route($this->main_redirection);
		}
		elseif($resource and !$users_count)
		{
			RolePermission::where(['group_id'=>$resource->id])->delete();
			$resource->delete();
			
			Session::flash('success', __('trans.deleted_successfully'));
			return redirect()->route($this->main_redirection);
		}
		else
		{
			Session::flash('danger', __('trans.record_not_found'));
			return redirect()->route($this->main_redirection);
		}
    }
	
	/**
     * Show the role permissions,
     *
	 * @param  int  $role
     * @return \Illuminate\Http\Response
     */
    public function permissionsShow($role_id)
    {
		$role = Role::find($role_id);
        if(isset($role))
		{
			$role_permissions = RolePermission::where(['group_id'=>$role_id])->pluck('permission_id')->toArray();
			$resources = Permission::where(['active'=>1])->get();
			return view('dashboard.'.$this->view_folder.'.permissions')->with(['role_permissions'=>$role_permissions, 'resources'=>$resources, 'role'=>$role]);
		}
		else
		{
			Session::flash('danger', __('trans.record_not_found'));
			return redirect()->route($this->main_redirection);
		}
    }
	
	/**
     * Edit the resource file.
     *
     * @param  \Illuminate\Http\Request  $request
	 * @param  $local
     * @return \Illuminate\Http\Response
     */
	public function permissionsUpdate(Request $request, $role_id)
    {
        $role = Role::find($role_id);
        if($role)
        {
			$validated = $request->validate([
				'permissions' => 'required|array',
				'permissions.*' => 'required|integer|gt:0',
			]);
			
			RolePermission::where(['group_id'=>$role_id])->delete();
			
			foreach($request->permissions as $permission)
			RolePermission::create([
				'group_id' => $role_id,
				'permission_id' => $permission
			]);
			
			Session::flash('success', __('trans.updated_successfully'));
			return redirect()->route($this->main_redirection);
		}
		else
		{
			Session::flash('danger', __('trans.record_not_found'));
			return redirect()->route($this->main_redirection);
		}
	}
}
