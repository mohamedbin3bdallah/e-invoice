<?php

namespace App\Imports;

use App\Models\Item;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Validators\Failure;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ItemsImport implements ToModel, SkipsEmptyRows, WithHeadingRow, WithValidation, SkipsOnFailure
{
	use Importable, SkipsFailures;
	
    /**
     * @param array $row
     *
     * @return User|null
     */
    public function model(array $row)
    {
        return new Item([
           'codeType' => $row['codetype'],
		   'parentCode' => $row['parentcode'],
		   'itemCode' => $row['itemcode'],
		   'codeName' => $row['codename'],
		   'codeNameAr' => $row['codenamear'],
		   'activeFrom' => $row['activefrom'],
		   'activeTo' => $row['activeto'],
		   'description' => $row['description'],
		   'descriptionAr' => $row['descriptionar'],
		   'requestReason' => $row['requestreason'],
		   'linkedCode' => $row['linkedcode']
        ]);
    }
	
	public function rules(): array
    {
        return [
            'codetype' => 'required|string|in:GS1,EGS',
			'parentcode' => 'required',
			'itemcode' => 'required|string|unique:items',
			'codename' => 'required|string|unique:items',
			'codenamear' => 'required|string|unique:items',
			'activefrom' => 'required|string',
			'activeto' => 'nullable|string',
			'description' => 'nullable|string',
			'descriptionar' => 'nullable|string',
			'requestreason' => 'nullable|string',
			'linkedcode' => 'nullable|string'
        ];
    }
}