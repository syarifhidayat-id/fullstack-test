<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    /**
     * Middleware auth method
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('pages.profile.index', ['profile' => User::orderBy('id', 'desc')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid = Validator::make($request->all(), [
            'firstname' => 'required|unique:users,firstname',
            'lastname' => 'required|unique:users,lastname',
            // 'email' => 'required|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required|string|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required|numeric',
            'address' => 'required',
        ], [
            'firstname.required' => 'Please provide a firstname !!',
            'firstname.unique' => 'Please choose a unique valid firstname !!',
            'lastname.required' => 'Please provide a lastname !!',
            'lastname.unique' => 'Please choose a unique valid lastname !!',
            // 'email.required' => 'Please provide a email !!',
            // 'email.unique' => 'Please choose a unique valid email !!',
            'username.required' => 'Please provide a username !!',
            'username.unique' => 'Please choose a unique valid username !!',
            'password.required' => 'Please provide a password !!',
            'password.min' => 'Password minimum 8 length !!',
            'password.regex' => 'Password must contain uppercase, lowecase, special character !!',
            'city.required' => 'Please provide a city !!',
            'state.required' => 'Please provide a state !!',
            'zip.required' => 'Please provide a zip !!',
            'zip.numeric' => 'Please provide number format zip !!',
            'address.required' => 'Please provide a address !!',
        ]);

        if ($valid->fails()) {
            Alert::error('Error', 'There is an error !!');
            return redirect()->route('profile.create')->withErrors($valid)->withInput();
        }

        $users = new User();
        $users->firstname = $request->firstname;
        $users->lastname = $request->lastname;
        // $users->email = $request->email;
        $users->username = $request->username;
        $users->password = Hash::make($request->password);
        $users->city = $request->city;
        $users->state = $request->state;
        $users->zip = $request->zip;
        $users->address = $request->address;

        $users->save();

        Alert::success('Success', 'Data saved successfully !!');
        return redirect()->route('profile.create');
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
        return view('pages.profile.update', ['profile' => User::findOrFail(Crypt::decrypt($id))]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $users = User::findOrFail(Crypt::decrypt($id));

        $valid = Validator::make($request->all(), [
            'firstname' => 'required|unique:users,firstname,'.$users->id,
            'lastname' => 'required|unique:users,lastname,'.$users->id,
            'username' => 'required|unique:users,username,'.$users->id,
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'address' => 'required',
        ], [
            'firstname.required' => 'Please provide a firstname !!',
            'firstname.unique' => 'Please choose a unique valid firstname !!',
            'lastname.required' => 'Please provide a lastname !!',
            'lastname.unique' => 'Please choose a unique valid lastname !!',
            'username.required' => 'Please provide a username !!',
            'username.unique' => 'Please choose a unique valid username !!',
            'city.required' => 'Please provide a city !!',
            'state.required' => 'Please provide a state !!',
            'zip.required' => 'Please provide a zip !!',
            'address.required' => 'Please provide a address !!',
        ]);

        if ($valid->fails()) {
            Alert::error('Error', 'There is an error !!');
            return redirect()->back()->withErrors($valid)->withInput();
        }

        $users->firstname = $request->firstname;
        $users->lastname = $request->lastname;
        $users->username = $request->username;
        $users->city = $request->city;
        $users->state = $request->state;
        $users->zip = $request->zip;
        $users->address = $request->address;

        $users->save();

        Alert::success('Success', 'Data updated successfully !!');
        return redirect()->route('profile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail(Crypt::decrypt($id))->delete();

        Alert::success('Success', 'Data deleted successfully !!');
        return redirect()->route('profile.index');

    }
}
