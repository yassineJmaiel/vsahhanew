<?php

namespace App\Http\Controllers;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class PartnerController extends Controller
{
    public function index()
    {
        return view('partnermanagement');
    }



public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'partner_type' => 'required',
        'status' => 'required',

        'address_line1' => 'required',
        'city' => 'required',
        'country' => 'required',

        'contract_start' => 'required',
        'logo' => 'nullable|image|max:2048',
        'contract_file' => 'nullable|mimes:pdf,doc,docx|max:5000',
    ]);


    // Generate internal code if empty
    if(!$request->internal_code){

        $prefix = strtoupper(
            substr(
                preg_replace('/\s+/', '', $request->name),
                0,
                3
            )
        );

        $random = rand(10000,99999);

        $internal_code = $prefix . '-' . $random;

    } else {

        $internal_code = $request->internal_code;

    }


    // Upload logo
    $logoPath = null;

    if($request->hasFile('logo')){

        $logoPath = $request->file('logo')
            ->store('partners/logos','public');

    }


    // Upload contract
    $contractPath = null;

    if($request->hasFile('contract_file')){

        $contractPath = $request->file('contract_file')
            ->store('partners/contracts','public');

    }



    $partner=Partner::create([

        'name' => $request->name,

        'internal_code' => $internal_code,

        'partner_type' => $request->partner_type,

        'status' => $request->status,


        'logo_link' => $request->logo_link,

        'logo' => $logoPath,

        'website' => $request->website,

        'linkedin' => $request->linkedin,

        'description' => $request->description,


        // Address
        'address_line1' => $request->address_line1,

        'address_line2' => $request->address_line2,

        'city' => $request->city,

        'state' => $request->state,

        'country' => $request->country,

        'postal_code' => $request->postal_code,


        // Contact
        'contact_name' => $request->contact_name,

        'contact_email' => $request->contact_email,

        'contact_phone' => $request->contact_phone,

        'country_code' => $request->country_code,


        // Contract
        'contract_start' => $request->contract_start,

        'contract_end' => $request->contract_end,

        'contract_file' => $contractPath,

        'contract_notes' => $request->contract_notes,


    ]);


     return response()->json([
    'success' => true,
    'partner' => $partner,
    'date' => now()->format('F d, Y h:i A')
]);
}
}

