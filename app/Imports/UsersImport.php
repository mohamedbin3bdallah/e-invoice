<?php

namespace App\Imports;

use App\Models\User;
use App\Models\EinvoiceRole;
use App\Spatie\Permission\Models\Role;
use App\Models\UserDetail;
use App\Models\UserAddress;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Validators\Failure;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Hash;
use Auth;

class UsersImport implements ToModel, SkipsEmptyRows, WithHeadingRow, WithValidation, SkipsOnFailure
{
	use Importable, SkipsFailures;
	
    /**
     * @param array $row
     *
     * @return User|null
     */
    public function model(array $row)
    {
		$type = Role::where(['name'=>'Customer'])->first();
		if(!$type) $type = Role::create(['name'=>'Customer', 'company_id'=>Auth::user()->company_id]);
		
		$einvoice_type = EinvoiceRole::where(['name_en'=>$row['type']])->first();
		if(!$einvoice_type) $einvoice_type = EinvoiceRole::create(['type'=>substr($row['type'], 0, 1), 'name_en'=>$row['type'], 'name_ar'=>$row['type'], 'status'=>1]);
		
		$name = explode(' ',$row['name'],2);
        
		$user = User::create([
		   'company_id' => Auth::user()->company_id,
		   'branch_id' => Auth::user()->company_id,
		   'fname' => (isset($name[0]))? $name[0]:0,
		   'lname' => (isset($name[1]))? $name[1]:0,
		   'email' => $row['email'],
		   'password' => Hash::make($row['password']),
		   'gender' => ($row['gender'] == 'Male')? 1:2,
		   'group_id' => $type->id,
		   'einvoice_role_id' => $einvoice_type->id,
        ]);
		
		UserDetail::create([
		   'user_id' => $user->id,
		   'identity' => $row['identity'],
		   'status' => 1
        ]);
		
		return new UserAddress([
			'user_id' => $user->id,
			'city_id' => $row['cityid'],
			'street' => $row['street'],
			'building_number' => $row['buildingnumber'],
			'postal_code' => $row['postalcode'],
			'floor' => $row['floor'],
			'room' => $row['room'],
			'landmark' => $row['landmark'],
			'additional_information' => $row['additionalinformation'],
			'status' => 1
		]);
    }
	
	public function rules(): array
    {
        return [
            'name' => 'required|string|max:191',
			'email' => 'required|email|max:191|unique:users',
			'password' => 'required|max:50|min:8',
			'gender' => 'required|in:Male,Female',
			'type' => 'required|in:Business,Person,Foreigner',
			'identity' => 'required|string|max:191',
			'cityid' => 'required|integer',
			'street' => 'required|max:191',
			'buildingnumber' => 'required|max:191',
			'postalcode' => 'nullable|max:191',
			'floor' => 'nullable|max:191',
			'room' => 'nullable|max:191',
			'landmark' => 'nullable|string',
			'additionalinformation' => 'nullable|string'
        ];
    }
}