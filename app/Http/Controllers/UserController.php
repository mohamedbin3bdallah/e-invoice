<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UsersImport;
use App\Models\User;
use App\Models\Company;
use App\Models\Branch;
use App\Spatie\Permission\Models\Role;
use App\Http\Controllers\Resize;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File; 
use Session;

class UserController extends Controller
{
	protected $view_folder = 'user';
	protected $main_redirection = 'users';
	
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
            0 => 'users.id', 
            1 => 'users.image_thumbnail',
			2 => 'users.fname',
			3 => 'groups.name',
			4 => 'companies.name',
			5 => 'branches.name',
			6 => 'users.email',
			7 => 'users.gender',
			8 => 'users.active',
            9 => 'users.created_at',
            10 => '',
        );
		
		$query = User::leftJoin('groups', 'users.group_id', '=', 'groups.id')
				->leftJoin('companies', 'users.company_id', '=', 'companies.id')
				->leftJoin('branches', 'users.branch_id', '=', 'branches.id')
				->select('users.id as id','users.image_thumbnail as image','users.fname as fname','users.lname as lname','users.email as email','users.gender as gender','users.active as status','users.created_at as created_at','groups.name as role','companies.name as company','branches.name as branch');
		
		$customer_role = Role::where(['name'=>'Customer'])->first();
		if($customer_role) $query = $query->where('users.group_id', '!=', $customer_role->id);
		
		$totalData = $query->count();
		$totalFiltered = $totalData; 
		
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
				
		if(!empty($request->input('search')))
		{
			$search = $request->input('search');
			$query->where('users.fname', 'LIKE', "%{$search}%")
				  ->orWhere('users.lname', 'LIKE', "%{$search}%");
		}
		
		$totalFiltered = $query->count();
		$query_data = $query->orderBy($order, $dir)->limit($limit)->offset($start)->get();
		
		$data = array();
        if(!empty($query_data))
        {
            foreach ($query_data as $single)
            {
                $nestedData['id'] = ++$start;
				$nestedData['image'] = ($single->image)? '<img src="'.url($this->main_redirection.'/images/thumbnails/'.$single->image).'" />':'<img src="'.url($this->main_redirection.'/blank.png').'" />';
				$nestedData['name'] = $single->fname.' '.$single->lname;
				$nestedData['role'] = $single->role;
				$nestedData['company'] = $single->company;
				$nestedData['branch'] = $single->branch;
				$nestedData['email'] = $single->email;
				$nestedData['gender'] = ($single->gender == 1)? __('trans.male'):__('trans.female');
				$nestedData['status'] = ($single->status)? __('trans.active'):__('trans.not_active');
				$nestedData['created_at'] = date('j M Y h:i a',strtotime($single->created_at));
				$nestedData['actions'] = '
																<form  method="post" action="'.route('user-delete', ['id'=>$single->id]).'">
																<a href="'.route('user-edit', ['id'=>$single->id]).'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" title="'.__('trans.edit').'">
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
		$branches = Branch::where(['company_id'=>$request->company, 'active'=>1])->pluck('id')->toArray();
		$roles = Role::where(['company_id'=>$request->company, 'active'=>1])->pluck('id')->toArray();
		
		$validated = $request->validate([
			'image' => 'required|image|mimes:jpeg,jpg,png|max:10000',
			'fname' => 'required|max:191',
			'lname' => 'required|max:191',
			'email' => 'required|max:191|unique:users',
			'gender' => 'required|integer|in:1,2',
			'password' => 'required|max:191|gte:8',
			'status' => 'required|integer|in:0,1',
			'company' => 'required|integer|in:' . implode(',', $companies),
			'branch' => 'required|integer|in:' . implode(',', $branches),
			'role' => 'required|integer|in:' . implode(',', $roles),
		]);
		
		$insert = [
			'fname' => $request->fname,
			'lname' => $request->lname,
			'email' => $request->email,
			'gender' => $request->gender,
			'password' => Hash::make($request->password),
			'active' => $request->status,
			'company_id' => $request->company,
			'branch_id' => $request->branch,
			'group_id' => $request->role
		];
		
		if($request->file('image'))
		{
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path($this->main_redirection.'/images'), $filename);
            $insert['image_url'] = $filename;
			
			$resize = new Resize;
			$resize->construct($this->main_redirection.'/images/'.$filename);
			
			$resize->resizeImage(75, 100, 'exact');
			$resize->saveImage($this->main_redirection.'/images/thumbnails/'.$filename, 100);
			$insert['image_thumbnail'] = $filename;
        }
		
		User::create($insert);
		
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
        $resource = User::find($id);
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
		$resource = User::find($id);
		if($resource)
		{
			$validated = $request->validate([
				'fname' => 'required|max:191',
				'lname' => 'required|max:191',
				'email' => 'required|max:191|unique:users,email,'.$id,
				'gender' => 'required|integer|in:1,2',
				'password' => 'nullable|max:191|gte:8',
				'status' => 'required|integer|in:0,1',
			]);
		
			$resource->update([
				'fname' => $request->fname,
				'lname' => $request->lname,
				'email' => $request->email,
				'gender' => $request->gender,
				'password' => ($request->password)? Hash::make($request->password):$resource->password,
				'active' => $request->status,
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
        $resource = User::find($id);
		if($resource)
		{
			if(File::exists(public_path($this->main_redirection.'/images/'.$resource->image_url))) File::delete(public_path($this->main_redirection.'/images/'.$resource->image_url));
			if(File::exists(public_path($this->main_redirection.'/images/thumbnails/'.$resource->image_thumbnail))) File::delete(public_path($this->main_redirection.'/images/thumbnails/'.$resource->image_thumbnail));
			
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
     * Get the resources.
     *
     * @param  \Illuminate\Http\Request  $request
	 * @param  $id
     * @return \Illuminate\Http\Response
     */
	public function getBranchesRolesFromCompany(Request $request, $id)
    {
        $resource = Company::find($id);
        if($resource)
        {
			$return = ['code'=>1];
			
			$return['branches'] = Branch::where(['company_id'=>$id, 'active'=>1])->pluck('name','id')->toArray();
			$return['roles'] = Role::where(['company_id'=>$id, 'active'=>1])->pluck('name','id')->toArray();
		}
		else
		{
			$return = ['code'=>0, 'message'=>__('trans.record_not_found')];
		}
		
		return response()->json($return);
	}
	
	/**
     * Show the form for creating multi-resources.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_excel()
    {
        return view('dashboard.'.$this->view_folder.'.add_'.$this->main_redirection);
    }
	
	/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_excel(Request $request)
    {
		$validated = $request->validate([
			'file' => 'required|mimes:xlsx,xls|max:50000'
		]);
		
		$errors = [];
		$import = new UsersImport();
		$import->import(request()->file('file'));
		foreach ($import->failures() as $failure)
		{
			$errors = array_merge($errors, $failure->errors());
		}
		
		if(!empty($errors)) return redirect()->back()->withErrors(['file' => implode(', ', $errors)]);
		else
		{
			Session::flash('success', __('trans.added_successfully'));
			return redirect()->route($this->main_redirection);
			
		}
    }
}
