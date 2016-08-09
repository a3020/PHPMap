<?php

namespace PHPMap\Http\Controllers\Users;

use Illuminate\Http\Request;

use PHPMap\Http\Requests;
use PHPMap\Http\Controllers\Controller;
use PHPMap\Models\UserPost;
use PHPMap\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        abort(404);
    }

    /**
     * Display the specified resource.
     * @param $username
     * @return \Illuminate\Http\Response
     */
    public function show($username)
    {
        $user = User::findByUsername($username);
        $allUsers = User::all();

        if ($allUsers->count() > 3) {
            $users = User::all()->random(3);
        } else {
            $users = User::all();
        }

        if (!$user) {
            abort(404);
        }

        return view('users.show', compact('user', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort(404);
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
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort(404);
    }
}