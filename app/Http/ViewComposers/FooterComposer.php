<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\view;
use App\Models\Settings\SettingModel;
use App\Models\Posts\PostModel;
use App\Models\Posts\PostTypeModel;

class FooterComposer{

	 public function __construct()
    {
        // Dependencies automatically resolved by service container...
    }

	public function compose(View $view){

		$view->with('navigations', PostTypeModel::where(['is_menu'=>'1'])
			->orderBy('ordering','asc')
			->get());

		$view->with('services',PostModel::where(['post_category'=>'3'])
				->get());

		$view->with('quick_links',PostModel::where(['post_category'=>'2'])
				->get());

        $view->with('settings',SettingModel::where(['id'=>'1'])
            ->first());
        $view->with('hospital',PostModel::where(['post_type'=>'2'])
            ->get());
        $view->with('media',PostModel::where(['post_type'=>'5','post_parent'=>0])
            ->get());
        $view->with('service',PostModel::where('post_type','3')->where('post_parent','!=',0)
            ->get());
		}
}
