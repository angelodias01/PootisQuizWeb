<?php

namespace App\Http\Controllers;

use App\Models\UserCurrency;
use Illuminate\Http\Request;

class UserCurrencyController extends Controller
{
    // Show a list of user currencies
    public function index()
    {
        $userCurrencies = UserCurrency::all();
        return view('admin.user_currencies.index', compact('userCurrencies'));
    }

    // Show the form to create a new user currency
    public function create()
    {
        return view('admin.user_currencies.create');
    }

    // Store a newly created user currency in the database
    public function store(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required',
            'amount' => 'required|integer',
        ]);

        UserCurrency::create($request->all());

        return redirect()->route('admin.user_currencies.index')
            ->with('success', 'User currency created successfully!');
    }

    // Show details of a specific user currency
    public function show(UserCurrency $userCurrency)
    {
        return view('admin.user_currencies.show', compact('userCurrency'));
    }

    // Show the form to edit a user currency
    public function edit(UserCurrency $userCurrency)
    {
        return view('admin.user_currencies.edit', compact('userCurrency'));
    }

    // Update a user currency after the form is submitted
    public function update(Request $request, UserCurrency $userCurrency)
    {
        $this->validate($request, [
            'user_id' => 'required',
            'amount' => 'required|integer',
        ]);

        $userCurrency->update($request->all());

        return redirect()->route('admin.user_currencies.index')
            ->with('success', 'User currency updated successfully!');
    }

    // Delete a user currency
    public function destroy(UserCurrency $userCurrency)
    {
        $userCurrency->delete();
        return redirect()->route('admin.user_currencies.index')
            ->with('success', 'User currency deleted successfully!');
    }

}
