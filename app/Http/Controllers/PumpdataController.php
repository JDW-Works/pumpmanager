<?php

namespace App\Http\Controllers;

use App\Models\Pumpdata;
use Illuminate\Http\Request;

class PumpdataController extends Controller
{
    public function index()
    {
        $pumps = Pumpdata::select('pd_id','pd_arg','o_id','pd_idno','pd_name','pd_proptyorg','pd_mngorg')->paginate(10);

        return view('pumpdata.index', [
            'pumps' => $pumps,
        ]);
    }
}
