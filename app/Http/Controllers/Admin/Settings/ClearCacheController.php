<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;


class ClearCacheController extends Controller
{   
    /**
     * Dispaly activation index page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.settings.clear.index');
    }


    /**
     * Start cache clearing process
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function cache(Request $request)
    {		
		try {
            Artisan::call('config:clear');
            Artisan::call('cache:clear');
            Artisan::call('view:clear');

		} catch (\Exception $e) {
			Log::info('Cache was not cleared correctly: ' . $e->getMessage());
            toastr()->error(__('Cache was not cleared properly'));  
            return redirect()->back(); 
		}

        toastr()->success(__('Application cache was cleared successfully'));      
        return redirect()->back();  
 
    }


    /**
     * Run symlink command
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createStorageLink()
    {		
		// try {
            
        //     Artisan::call('storage:link');

		// } catch (\Exception $e) {
		// 	Log::info('Symlink failed to run: ' . $e->getMessage());
        //     toastr()->error(__('Symlink command did not run'));  
        //     return redirect()->back(); 
		// }

        // toastr()->success(__('Symlink command run successfully'));      
        // return redirect()->back();
        
        try {
            $output = Artisan::call('storage:link');
            
            // Check if the command was successful.
            if ($output === 0) {
                toastr()->success(__('Storage link created successfully'));      
            } else {
                toastr()->error(__('Failed to create storage link'));
            }
    
        } catch (\Exception $e) {
            Log::error('Symlink failed to run: ' . $e->getMessage());
            
            toastr()->error(__('Failed to create storage link'.$e->getMessage()));
        }
    
        return redirect()->back();  
 
    }

   


}
