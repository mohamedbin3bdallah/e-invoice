<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use DB;
use App\Models\Language;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
		try
		{
			DB::connection()->getPdo();
			Schema::defaultStringLength(191);
			view()->composer('*',function($view){
				if(DB::connection()->getDatabaseName())
				{
					if(Schema::hasTable('languages'))
					{
						$def_lang = Language::where(['def'=>1])->first();
						if($def_lang)
						{
							$cur_lang_local = $def_lang->local;
							$cur_lang_dir = ($def_lang->dir)? 'rtl':'ltr';
							app()->setLocale($cur_lang_local);
						}
						else
						{
							$cur_lang_local = config('app.local');
							$cur_lang_dir = config('app.direction');
							app()->setLocale(config('app.local'));
						}
						$view->with([
							'cur_lang_local' => $cur_lang_local,
							'cur_lang_dir' => $cur_lang_dir,
						]);
					}
				}
			});
		}
		catch(\Exception $ex)
		{
			return redirect('/');
        }
    }
}
