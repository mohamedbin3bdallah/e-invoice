<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\Company;
use App\Models\CompanyType;
use App\Spatie\Permission\Models\Role;
use App\Http\Controllers\Resize;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File; 
use Session;

class CompanyController extends Controller
{
	protected $view_folder = 'company';
	protected $main_redirection = 'companies';
	
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
            0 => 'companies.id', 
            1 => 'companies.logo',
			2 => 'company_types.name_'.$this->cur_lang,
			3 => 'companies.name',
			4 => 'countries.name',
			5 => 'companies.email',
			6 => 'companies.mobile',
			7 => 'companies.active',
            8 => 'companies.created_at',
            9 => '',
        );
		
		$query = Company::leftJoin('countries', 'companies.country_id', '=', 'countries.id')
				->leftJoin('company_types', 'companies.company_type_id', '=', 'company_types.id')
				->select('companies.id as id','companies.logo as image','companies.name as name','companies.mobile as mobile','companies.email as email','companies.active as status','companies.created_at as created_at','company_types.name_'.$this->cur_lang.' as type','countries.name as country');

		$totalData = $query->count();
		$totalFiltered = $totalData; 
		
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
				
		if(!empty($request->input('search')))
		{
			$search = $request->input('search');
			$query->where('companies.name', 'LIKE', "%{$search}%")
				  ->orWhere('companies.email', 'LIKE', "%{$search}%")
				  ->orWhere('companies.mobile', 'LIKE', "%{$search}%");
		}
		
		$totalFiltered = $query->count();
		$query_data = $query->orderBy($order, $dir)->limit($limit)->offset($start)->get();
		
		$data = array();
        if(!empty($query_data))
        {
            foreach ($query_data as $single)
            {
                $nestedData['id'] = ++$start;
				$nestedData['image'] = ($single->image)? '<img width="75" height="100" src="'.url($this->main_redirection.'/images/'.$single->image).'" />':'';
				$nestedData['type'] = $single->type;
				$nestedData['name'] = $single->name;
				$nestedData['country'] = $single->country;
				$nestedData['email'] = $single->email;
				$nestedData['mobile'] = $single->mobile;
				$nestedData['status'] = ($single->status)? __('trans.active'):__('trans.not_active');
				$nestedData['created_at'] = date('j M Y h:i a',strtotime($single->created_at));
				$nestedData['actions'] = '
																<form  method="post" action="'.route('company-delete', ['id'=>$single->id]).'">
																<a href="'.route('company-edit', ['id'=>$single->id]).'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" title="'.__('trans.edit').'">
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
		$types = CompanyType::where(['active'=>1])->pluck('name_'.$this->cur_lang, 'id')->toArray();
		$resources = Country::all();
		
        return view('dashboard.'.$this->view_folder.'.add')->with(['types'=>$types, 'resources'=>$resources]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$types = CompanyType::where(['active'=>1])->pluck('id')->toArray();
		$countries = Country::pluck('id')->toArray();
		$states = State::pluck('id')->toArray();
		$cities = City::pluck('id')->toArray();
		
		$validated = $request->validate([
			'image' => 'nullable|image|mimes:jpeg,jpg,png|max:10000',
			'name' => 'required|max:191',
			'address' => 'required|max:191',
			'email' => 'nullable|max:191',
			'website' => 'nullable|url|max:191',
			'mobile' => 'required|between:0000000000,99999999999',
			'landline' => 'nullable|between:00000000,9999999999',
			'status' => 'required|integer|in:0,1',
			'identity' => 'required|string|max:191',
			'sign_type' => 'required|string|in:I,S',
			'sign_value' => 'required_if:sign_type,I|string',
			'street' => 'required|string|max:191',
			'building_number' => 'required|string|max:191',
			'postal_code' => 'nullable|string|max:191',
			'floor' => 'nullable|string|max:191',
			'room' => 'nullable|string|max:191',
			'landmark' => 'nullable|string',
			'additional_information' => 'nullable|string',
			'type' => 'required|integer|in:' . implode(',', $types),
			'country' => 'required|integer|in:' . implode(',', $countries),
			'state' => 'required|integer|in:' . implode(',', $states),
			'city' => 'required|integer|in:' . implode(',', $cities),
			'erp_client_id' => 'nullable|max:191',
			'erp_client_secret_1' => 'nullable|max:191',
			'erp_client_secret_2' => 'nullable|max:191',
		]);
		
		$insert = [
			'name' => $request->name,
			'address' => $request->address,
			'email' => $request->email,
			'website' => $request->website,
			'mobile' => $request->mobile,
			'landline' => $request->landline,
			'active' => $request->status,
			'identity' => $request->identity,
			'sign_type' => $request->sign_type,
			'sign_value' => $request->sign_value,
			'street' => $request->street,
			'building_number' => $request->building_number,
			'postal_code' => $request->postal_code,
			'floor' => $request->floor,
			'room' => $request->room,
			'landmark' => $request->landmark,
			'additional_information' => $request->additional_information,
			'company_type_id' => $request->type,
			'country_id' => $request->country,
			'state_id' => $request->state,
			'city_id' => $request->city,
			'erp_client_id' => $request->erp_client_id,
			'erp_client_secret_1' => $request->erp_client_secret_1,
			'erp_client_secret_2' => $request->erp_client_secret_1
		];
		
		if($request->file('image'))
		{
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path($this->main_redirection.'/images'), $filename);
            $insert['logo'] = $filename;
        }
		
		Company::create($insert);
		
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
        $resource = Company::find($id);
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
		$resource = Company::find($id);
		if($resource)
		{
			$validated = $request->validate([
				'image' => 'nullable|image|mimes:jpeg,jpg,png|max:10000',
				'name' => 'required|max:191',
				'address' => 'required|max:191',
				'email' => 'nullable|max:191',
				'website' => 'nullable|url|max:191',
				'mobile' => 'required|between:0000000000,99999999999',
				'landline' => 'nullable|between:00000000,9999999999',
				'status' => 'required|integer|in:0,1',
				'identity' => 'required|string|max:191',
				'sign_type' => 'required|string|in:I,S',
				'sign_value' => 'required_if:sign_type,I|string',
				'street' => 'required|string|max:191',
				'building_number' => 'required|string|max:191',
				'postal_code' => 'nullable|string|max:191',
				'floor' => 'nullable|string|max:191',
				'room' => 'nullable|string|max:191',
				'landmark' => 'nullable|string',
				'additional_information' => 'nullable|string',
				'erp_client_id' => 'nullable|max:191',
				'erp_client_secret_1' => 'nullable|max:191',
				'erp_client_secret_2' => 'nullable|max:191',
			]);
			
			if($request->file('image'))
			{
				$file = $request->file('image');
				$filename = date('YmdHi').$file->getClientOriginalName();
				$file->move(public_path($this->main_redirection.'/images'), $filename);
			}
		
			$resource->update([
				'logo' => (isset($filename))? $filename:'',
				'name' => $request->name,
				'address' => $request->address,
				'email' => $request->email,
				'website' => $request->website,
				'mobile' => $request->mobile,
				'landline' => $request->landline,
				'active' => $request->status,
				'identity' => $request->identity,
				'sign_type' => $request->sign_type,
				'sign_value' => $request->sign_value,
				'street' => $request->street,
				'building_number' => $request->building_number,
				'postal_code' => $request->postal_code,
				'floor' => $request->floor,
				'room' => $request->room,
				'landmark' => $request->landmark,
				'additional_information' => $request->additional_information,
				'erp_client_id' => $request->erp_client_id,
				'erp_client_secret_1' => $request->erp_client_secret_1,
				'erp_client_secret_2' => $request->erp_client_secret_1
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
        $resource = Company::find($id);
		$users_count = User::where(['company_id'=>$id])->count();
		if($resource and $users_count)
		{
			Session::flash('warning', __('trans.cant_delete_record'));
			return redirect()->route($this->main_redirection);
		}
		elseif($resource and !$users_count)
		{
			if(File::exists(public_path($this->main_redirection.'/images/'.$resource->logo))) File::delete(public_path($this->main_redirection.'/images/'.$resource->logo));
			
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
}
