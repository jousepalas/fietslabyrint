<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CustomerController extends Controller
{
    public function index () {
return view('customers.index', ['customers' => Customer::all()]);
    }

    public function show (Customer $customer) {
return view('customers.show', ['customer' => $customer]);
    }

    public function create() {
        return view('customers.create');
    }

    public function store(Request $request) {
// dd($request);
$formFields = $request->validate([
    'company_name' =>'required',
    'street' =>'required',
    'street_nr' =>'required',
    'zip' =>'required',
    'city' =>'required',
    'contact_person' =>'required',
    'email' => ['required', 'email', Rule::unique('customers', 'email')],
    'phone' =>'required',
    'photo' =>'required',
]);

if($request->hasFile('photo')) {
    $formFields['photo'] = $request->file('photo')->store('photos', 'public');
}

Customer::create($formFields);
return redirect('/index')->with('message', 'Customer created successfully!');
    }

    public function edit(Customer $customer) {
        return view('customers.edit', ['customer' => $customer]);
    }

    public function update(Request $request, Customer $customer) {
        $formFields = $request->validate([
            'company_name' =>'sometimes',
            'street' =>'sometimes',
            'street_nr' =>'sometimes',
            'zip' =>'sometimes',
            'city' =>'sometimes',
            'contact_person' =>'sometimes',
            'phone' =>'sometimes',
            'photo' =>'sometimes',
       ]);

            if($request->hasFile('photo')) {
                $formFields['photo'] = $request->file('photo')->store('photos', 'public');
            } else {
                $formFields['photo'] = $customer->photo;
            }

            $customer->update($formFields);
            return redirect('/index')->with('message', 'Customer updated successfully!');    
    }

    public function showDeleted () {
        return view('customers.showDeleted', ['customers' => Customer::onlyTrashed()->get()]);
    }

    public function restoreCustomer ( $customer) {
        Customer::where('id', $customer)->restore();
        // return view('customers.showDeleted', ['customers' => Customer::onlyTrashed()->get()]);
        return redirect('/softDeleted')->with('message', 'Customer restore successfully!');
    }

    public function delete (Customer $customer) {
        $customer->delete();
        return redirect('/index')->with('message', 'Customer deleted successfully');
    }

    public function destroy($customer) {
        Customer::where('id', $customer)->forceDelete();
        return redirect('/index')->with('message', 'Customer destroied successfully');
    }
}
