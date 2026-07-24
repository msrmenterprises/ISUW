<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class admincontroller extends Controller
{
    public function __construct()
    {
     
        $this->middleware(['auth']);
       
    }
        public function show(Request $request)
      {
        $selectedFilter = strtolower((string) $request->query('filter', 'all'));
        if (!in_array($selectedFilter, ['all', 'active', 'disabled'], true)) {
          $selectedFilter = 'all';
        }

        $query = DB::table('banners');
        if ($selectedFilter === 'active') {
          $query->where('displayBanner', 1);
        } elseif ($selectedFilter === 'disabled') {
          $query->where('displayBanner', 0);
        }

        $banners = $query->get();
        $totalCount = DB::table('banners')->count();
        $activeCount = DB::table('banners')->where('displayBanner', 1)->count();
        $disabledCount = DB::table('banners')->where('displayBanner', 0)->count();

         return view('admin.admin',compact('banners', 'totalCount', 'activeCount', 'disabledCount', 'selectedFilter'));
  
      }
}
