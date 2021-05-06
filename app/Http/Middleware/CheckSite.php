<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use App\Models\BlaxkSite;

class CheckSite
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $SiteId=$request->route('SiteId');

        //Check Param

        //get SiteId
        $getSite=BlaxkSite::find($SiteId);

        if(!empty($getSite)){
       
            //Check Site Statues 
            if($getSite['PlanType'] === 0){
                return response()->json('Site Suspended', 402);
            }
            else{
                return $next($request);
            }

        }    
        
    }
}
