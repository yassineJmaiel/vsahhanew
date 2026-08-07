<?php

namespace App\Http\Controllers;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class PartnerController extends Controller
{

public function index()
{
    $countpartner=Partner::count();
    $partners = Partner::latest()->get();

    $countInsuranceProvider = Partner::where('partner_type', 'Insurance Provider')->count();

$countInsuranceBroker = Partner::where('partner_type', 'Insurance Broker')->count();

$countTPA = Partner::where('partner_type', 'Third Party Administrator')->count();

    $stats = [
        [
            'title' => 'Total Partners',
            'value' => Partner::count(),
            'color' => 'blue',
            'border' => '#0B4F8A',
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <path d="M9.16662 14.1675L10.8334 15.8342C10.9976 15.9984 11.1925 16.1286 11.407 16.2174C11.6215 16.3063 11.8514 16.352 12.0835 16.352C12.3157 16.352 12.5456 16.3063 12.7601 16.2174C12.9746 16.1286 13.1694 15.9984 13.3336 15.8342C13.4978 15.6701 13.628 15.4752 13.7168 15.2607C13.8057 15.0462 13.8514 14.8164 13.8514 14.5842C13.8514 14.3521 13.8057 14.1222 13.7168 13.9077C13.628 13.6932 13.4978 13.4984 13.3336 13.3342M11.667 11.6671L13.7505 13.7505C14.0821 14.082 14.5317 14.2683 15.0006 14.2683C15.4695 14.2683 15.9192 14.082 16.2507 13.7505C16.5823 13.419 16.7685 12.9693 16.7685 12.5005C16.7685 12.0316 16.5823 11.582 16.2507 11.2505L13.0171 8.01712C12.5483 7.54895 11.9129 7.28598 11.2503 7.28598C10.5877 7.28598 9.95228 7.54895 9.4835 8.01712L8.7501 8.75046C8.41856 9.08198 7.96888 9.26823 7.5 9.26823C7.03113 9.26823 6.58145 9.08198 6.2499 8.75046C5.91836 8.41893 5.7321 7.96929 5.7321 7.50045C5.7321 7.0316 5.91836 6.58196 6.2499 6.25044L8.59176 3.90876C9.35202 3.15054 10.3435 2.66755 11.4092 2.53623C12.4749 2.40491 13.554 2.63278 14.4756 3.18376L14.8673 3.41709C15.2221 3.63125 15.644 3.70552 16.0507 3.62543L17.5008 3.33376M17.5006 2.50081L18.334 11.6675H16.6672M2.49942 2.50081L1.66602 11.6675L7.08312 17.0842C7.41466 17.4158 7.86434 17.602 8.33322 17.602C8.80209 17.602 9.25177 17.4158 9.58332 17.0842C9.91486 16.7527 10.1011 16.3031 10.1011 15.8342C10.1011 15.3654 9.91486 14.9157 9.58332 14.5842M2.49942 3.33415H9.16662" stroke="white" stroke-width="2" stroke-linecap="round"/>
            </svg>',
        ],

        [
            'title' => 'Active Partners',
            'value' => Partner::where('status', 'Active')->count(),
            'color' => 'green',
            'border' => '#00A878',
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                <path d="M17.4989 7.66951C17.8795 9.53725 17.6082 11.479 16.7304 13.171C15.8526 14.863 14.4213 16.2029 12.6751 16.9673C10.929 17.7317 8.97357 17.8743 7.13496 17.3715C5.29636 16.8686 3.68571 15.7507 2.57161 14.204C1.45752 12.6574 0.907317 10.7755 1.01277 8.87233C1.11822 6.96912 1.87295 5.15958 3.15109 3.74548C4.42923 2.33138 6.15353 1.3982 8.03644 1.10155C9.91934 0.804903 11.847 1.16272 13.498 2.11534M6.83171 8.50244L9.33171 11.0024L17.665 2.66911" stroke="white" stroke-width="2" stroke-linecap="round"/>
            </svg>',
        ],

        [
            'title' => 'Pending Approvals',
            'value' => Partner::where('status', 'Pending')->count(),
            'color' => 'yellow',
            'border' => '#F59E0B',
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <path d="M10 4.99962V10L13.3336 11.6668M18.334 10C18.334 14.6028 14.6028 18.334 10 18.334C5.39727 18.334 1.66602 14.6028 1.66602 10C1.66602 5.39727 5.39727 1.66602 10 1.66602C14.6028 1.66602 18.334 5.39727 18.334 10Z" stroke="white" stroke-width="2" stroke-linecap="round"/>
            </svg>',
        ],

        [
            'title' => 'Incomplete',
            'value' => Partner::where('status', 'Incomplete')->count(),
            'color' => 'red',
            'border' => '#EF4444',
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <path d="M9.99996 7.49943V10.8328M9.99996 14.1661H10.0083M18.1086 14.9996L11.442 3.33295C11.2966 3.07645 11.0858 2.86311 10.8311 2.71467C10.5763 2.56624 10.2868 2.48804 9.99197 2.48804C9.69715 2.48804 9.4076 2.56624 9.15287 2.71467C8.89814 2.86311 8.68734 3.07645 8.54197 3.33295L1.87531 14.9996C1.72838 15.2541 1.65133 15.5429 1.65198 15.8367C1.65263 16.1305 1.73096 16.419 1.87901 16.6728C2.02707 16.9266 2.2396 17.1368 2.49505 17.282C2.75051 17.4272 3.03981 17.5023 3.33364 17.4996H16.667C16.9594 17.4993 17.2466 17.4221 17.4997 17.2757C17.7528 17.1293 17.963 16.9189 18.1091 16.6655C18.2551 16.4122 18.332 16.1249 18.3319 15.8325C18.3319 15.5401 18.2548 15.2529 18.1086 14.9996Z" stroke="white" stroke-width="2" stroke-linecap="round"/>
            </svg>',
        ],
    ];

   return view('partnermanagement', compact(
    'partners',
    'stats',
    'countpartner',
    'countInsuranceProvider',
    'countInsuranceBroker',
    'countTPA',
    
));
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

