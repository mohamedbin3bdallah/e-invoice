<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use Session;

class PlaceController extends Controller
{
	/**
     * Get the resources.
     *
     * @param  \Illuminate\Http\Request  $request
	 * @param  $id
     * @return \Illuminate\Http\Response
     */
	public function getStatesFromCountry(Request $request, $id)
    {
        $resource = Country::find($id);
        if($resource)
        {
			$return = ['code'=>1];
			
			$name = ($this->cur_lang == 'en')? 'name':'name_'.$this->cur_lang;
			$return['states'] = State::where(['country_id'=>$id])->pluck($name,'id')->toArray();
		}
		else
		{
			$return = ['code'=>0, 'message'=>__('trans.record_not_found')];
		}
		
		return response()->json($return);
	}
	
	/**
     * Get the resources.
     *
     * @param  \Illuminate\Http\Request  $request
	 * @param  $id
     * @return \Illuminate\Http\Response
     */
	public function getCitiesFromState(Request $request, $id)
    {
        $resource = State::find($id);
        if($resource)
        {
			$return = ['code'=>1];
			
			$name = ($this->cur_lang == 'en')? 'name':'name_'.$this->cur_lang;
			$return['cities'] = City::where(['state_id'=>$id])->pluck($name,'id')->toArray();
		}
		else
		{
			$return = ['code'=>0, 'message'=>__('trans.record_not_found')];
		}
		
		return response()->json($return);
	}
}
