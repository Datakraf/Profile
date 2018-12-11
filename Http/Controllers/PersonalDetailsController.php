<?php

namespace Modules\Profile\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Datakraf\User;
use Modules\Profile\Entities\PersonalDetail;

class PersonalDetailsController extends Controller
{
    protected $personalDetail;

    public function __construct(PersonalDetail $personalDetail)
    {
        $this->personalDetail = $personalDetail;
    }

    /**
     * fetch personal details
     * 
     */

    public function index()
    {
        $personalDetail = $this->personalDetail->where('user_id', auth()->id())->first();
        return view('profile::forms.personal-details.index', compact('personalDetail'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        PersonalDetail::updateOrCreate(['user_id' => auth()->id()], $data);
        return redirect()->back();
    }
}
