<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resources = Language::all();
		
        return view('dashboard.language.index')->with(['resources'=>$resources]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.language.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$validated = $request->validate([
			'name' => 'required|unique:languages|max:191',
			'local' => 'required|unique:languages|max:2',
			'dir' => 'required|in:0,1',
		]);
		
		if($request->def) Language::where(['def'=>1])->update(['def'=>0]);
		
		if(!is_dir('../resources/lang/'.$request->local)) mkdir('../resources/lang/'.$request->local);
		copy('../resources/lang/en/trans.php', '../resources/lang/'.$request->local.'/trans.php');
		
		Language::create([
			'name' => $request->name,
			'local' => $request->local,
			'dir' => $request->dir,
			'def' => ($request->def)? 1:0
		]);
		
		return redirect()->route('languages');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
	
	/**
     * Show the resource file.
     *
     * @return \Illuminate\Http\Response
     */
	public function fileShow($local)
	{
		$lang = Language::where('local', '=', $local)->first();
        if(isset($lang))
		{
			if(!file_exists('../resources/lang/'.$local.'/trans.php'))
			{
				if(!is_dir('../resources/lang/'.$local)) mkdir('../resources/lang/'.$local);
				copy('../resources/lang/en/trans.php', '../resources/lang/'.$local.'/trans.php');
			}
			$file = file_get_contents('../resources/lang/'.$local.'/trans.php');
			return view('dashboard.language.file')->with(['local'=>$local, 'file'=>$file]);
		}
		else return redirect()->route('languages');
	}
	
	/**
     * Edit the resource file.
     *
     * @param  \Illuminate\Http\Request  $request
	 * @param  $local
     * @return \Illuminate\Http\Response
     */
	public function fileUpdate(Request $request, $local)
    {
        $lang = Language::where('local', '=', $local)->first();
        if(isset($lang))
        {
			if(file_exists('../resources/lang/'.$local.'/trans.php'))
            file_put_contents('../resources/lang/'.$local.'/trans.php', $request->file . PHP_EOL);
		}
		
		return redirect()->route('languages');
	}
}
