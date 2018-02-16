<?php

namespace App\Http\Controllers;
use App\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StaffController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth:admin');
	}

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	protected function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|string|max:255',
			'email' => 'required|string|email|max:255|unique:users',
			'password' => 'required|string|min:6|confirmed',
		]);
	}

   public function index()
	{
		$staffs=Staff::all();
		return view('admin.staff.index',compact('staffs'));
	}

	/**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {
        $staff = Staff::find($id);
        return view('admin.staff.detail',compact('staff'));
    }
	public function create()
	{
		return view('admin.staff.create');
	}

	public function store(Request $request)
	{
		$this->validator($request->all())->validate();
		$request['password']=bcrypt($request->password);
		Staff::create($request->all());

		return redirect()->route('staff.index');
	}

	public function edit($id)
	{
		$staffs = Staff::findOrFail($id);
		 return view('admin.staff.edit',compact('staffs'));
	}

	public function update(Request $request,$id)
	{
		$staff=Staff::find($id);
		$staff->update($request->all());
		return redirect()->route('staff.index');
	}

	public function destory($id)
	{
		$staff=Staff::find($id);
		$staff->delete();
		return redirect()->route('staff.index');
	}
}
