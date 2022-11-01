<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Language;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	public $cur_lang;
	
	public function __construct()
    {
        $cur_lang = Language::where(['def'=>1])->first();
		$this->cur_lang = ($cur_lang)? $cur_lang->local:'en';
    }
}
