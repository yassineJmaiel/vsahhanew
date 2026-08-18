<?php

namespace App\Http\Controllers;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::latest()->get();

        $countpartner = Partner::count();
        $countInsuranceProvider = Partner::where('partner_type', 'Insurance Provider')->count();
        $countInsuranceBroker = Partner::where('partner_type', 'Insurance Broker')->count();
        $countTPA = Partner::where('partner_type', 'Third Party Administrator')->count();

        $totalPartners = $partners->count();
        $activePartners = $partners->where('status', 'active')->count();
        $pendingPartners = $partners->where('status', 'pending')->count();
        $inactivePartners = $partners->where('status', 'inactive')->count();

        // ── Trend badges (month-over-month deltas) ─────────────────────────────
        $now   = now();
        $start = $now->copy()->startOfMonth();
        $prevStart = $now->copy()->subMonth()->startOfMonth();
        $prevEnd   = $now->copy()->subMonth()->endOfMonth();

        $prevTotal   = Partner::whereBetween('created_at', [$prevStart, $prevEnd])->count();
        $prevActive  = Partner::where('status', 'active')->whereBetween('created_at', [$prevStart, $prevEnd])->count();
        $prevPending = Partner::where('status', 'pending')->whereBetween('created_at', [$prevStart, $prevEnd])->count();
        $prevInactive= Partner::where('status', 'inactive')->whereBetween('created_at', [$prevStart, $prevEnd])->count();

        $calcTrend = function(int $current, int $previous): array {
            if ($previous === 0) {
                return ['label' => $current > 0 ? 'New' : '—', 'dir' => $current > 0 ? 'up' : 'neutral'];
            }
            $pct = round((($current - $previous) / $previous) * 100);
            return [
                'label' => ($pct >= 0 ? '+' : '') . $pct . '%',
                'dir'   => $pct > 0 ? 'up' : ($pct < 0 ? 'down' : 'neutral'),
            ];
        };

        $stats = [
            [
                'title' => 'Total Partners',
                'value' => $totalPartners,
                'default_color' => 'blue',
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M9.16662 14.1675L10.8334 15.8342C10.9976 15.9984 11.1925 16.1286 11.407 16.2174C11.6215 16.3063 11.8514 16.352 12.0835 16.352C12.3157 16.352 12.5456 16.3063 12.7601 16.2174C12.9746 16.1286 13.1694 15.9984 13.3336 15.8342C13.4978 15.6701 13.628 15.4752 13.7168 15.2607C13.8057 15.0462 13.8514 14.8164 13.8514 14.5842C13.8514 14.3521 13.8057 14.1222 13.7168 13.9077C13.628 13.6932 13.4978 13.4984 13.3336 13.3342M11.667 11.6671L13.7505 13.7505C14.0821 14.082 14.5317 14.2683 15.0006 14.2683C15.4695 14.2683 15.9192 14.082 16.2507 13.7505C16.5823 13.419 16.7685 12.9693 16.7685 12.5005C16.7685 12.0316 16.5823 11.582 16.2507 11.2505L13.0171 8.01712C12.5483 7.54895 11.9129 7.28598 11.2503 7.28598C10.5877 7.28598 9.95228 7.54895 9.4835 8.01712L8.7501 8.75046C8.41856 9.08198 7.96888 9.26823 7.5 9.26823C7.03113 9.26823 6.58145 9.08198 6.2499 8.75046C5.91836 8.41893 5.7321 7.96929 5.7321 7.50045C5.7321 7.0316 5.91836 6.58196 6.2499 6.25044L8.59176 3.90876C9.35202 3.15054 10.3435 2.66755 11.4092 2.53623C12.4749 2.40491 13.554 2.63278 14.4756 3.18376L14.8673 3.41709C15.2221 3.63125 15.644 3.70552 16.0507 3.62543L17.5008 3.33376M17.5006 2.50081L18.334 11.6675H16.6672M2.49942 2.50081L1.66602 11.6675L7.08312 17.0842C7.41466 17.4158 7.86434 17.602 8.33322 17.602C8.80209 17.602 9.25177 17.4158 9.58332 17.0842C9.91486 16.7527 10.1011 16.3031 10.1011 15.8342C10.1011 15.3654 9.91486 14.9157 9.58332 14.5842M2.49942 3.33415H9.16662" stroke="white" stroke-width="2" stroke-linecap="round"/></svg>',
                'border' => '#0B4F8A',
                'active_bg' => '#0B4F8A',
                'filter' => 'all',
                'trend' => $calcTrend($totalPartners, $prevTotal),
            ],
            [
                'title' => 'Active Partners',
                'value' => $activePartners,
                'default_color' => 'green',
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none"><path d="M17.4989 7.66951C17.8795 9.53725 17.6082 11.479 16.7304 13.171C15.8526 14.863 14.4213 16.2029 12.6751 16.9673C10.929 17.7317 8.97357 17.8743 7.13496 17.3715C5.29636 16.8686 3.68571 15.7507 2.57161 14.204C1.45752 12.6574 0.907317 10.7755 1.01277 8.87233C1.11822 6.96912 1.87295 5.15958 3.15109 3.74548C4.42923 2.33138 6.15353 1.3982 8.03644 1.10155C9.91934 0.804903 11.847 1.16272 13.498 2.11534M6.83171 8.50244L9.33171 11.0024L17.665 2.66911" stroke="white" stroke-width="2" stroke-linecap="round"/></svg>',
                'border' => '#00A878',
                'active_bg' => '#10B981',
                'filter' => 'Active',
                'trend' => $calcTrend($activePartners, $prevActive),
            ],
            [
                'title' => 'Pending Approvals',
                'value' => $pendingPartners,
                'default_color' => 'yellow',
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M10 4.99962V10L13.3336 11.6668M18.334 10C18.334 14.6028 14.6028 18.334 10 18.334C5.39727 18.334 1.66602 14.6028 1.66602 10C1.66602 5.39727 5.39727 1.66602 10 1.66602C14.6028 1.66602 18.334 5.39727 18.334 10Z" stroke="white" stroke-width="2" stroke-linecap="round"/></svg>',
                'border' => '#F59E0B',
                'active_bg' => '#F59E0B',
                'filter' => 'Pending',
                'trend' => $calcTrend($pendingPartners, $prevPending),
            ],
            [
                'title' => 'Incomplete',
                'value' => $inactivePartners,
                'default_color' => 'red',
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M9.99996 7.49943V10.8328M9.99996 14.1661H10.0083M18.1086 14.9996L11.442 3.33295C11.2966 3.07645 11.0858 2.86311 10.8311 2.71467C10.5763 2.56624 10.2868 2.48804 9.99197 2.48804C9.69715 2.48804 9.4076 2.56624 9.15287 2.71467C8.89814 2.86311 8.68734 3.07645 8.54197 3.33295L1.87531 14.9996C1.72838 15.2541 1.65133 15.5429 1.65198 15.8367C1.65263 16.1305 1.73096 16.419 1.87901 16.6728C2.02707 16.9266 2.2396 17.1368 2.49505 17.282C2.75051 17.4272 3.03981 17.5023 3.33364 17.4996H16.667C16.9594 17.4993 17.2466 17.4221 17.4997 17.2757C17.7528 17.1293 17.963 16.9189 18.1091 16.6655C18.2551 16.4122 18.332 16.1249 18.3319 15.8325C18.3319 15.5401 18.2548 15.2529 18.1086 14.9996Z" stroke="white" stroke-width="2" stroke-linecap="round"/></svg>',
                'border' => '#EF4444',
                'active_bg' => '#EF4444',
                'filter' => 'Inactive',
                'trend' => $calcTrend($inactivePartners, $prevInactive),
            ],
        ];

        $mappedPartners = $partners->map(function($partner) {
            $address = array_filter([$partner->address_line1, $partner->address_line2]);
            $cityCountry = array_filter([$partner->city, $partner->country]);

            return [
                'id' => $partner->id,
                'internal_code' => $partner->internal_code ?? 'N/A',
                'logo' => strtoupper(substr($partner->name, 0, 2)),
                'logo_url' => $partner->logo ? asset('storage/' . $partner->logo) : null,
                'name' => $partner->name,
                'desc' => $partner->description ?? 'No description provided.',
                'contact_name' => $partner->contact_name ?? 'N/A',
                'contact_email' => $partner->contact_email ?? 'N/A',
                'contact_phone' => $partner->contact_phone ?? 'N/A',
                'coverage' => $partner->country ?? 'N/A',
                'specialty' => $partner->partner_type ?? 'N/A',
                'policies' => 'N/A',
                'members' => 'N/A',
                'type' => $partner->partner_type ?? 'N/A',
                'type_icon' => 'bi-shield',
                'city' => $partner->city ?? 'N/A',
                'country' => $partner->country ?? 'N/A',
                'location' => implode(', ', $cityCountry) ?: 'N/A',
                'address' => implode(', ', $address) ?: 'N/A',
                'status' => ucfirst($partner->status),
                'contract' => $partner->contract_start ? 'Started: ' . $partner->contract_start : 'N/A',
                'contract_start' => $partner->contract_start ?? 'N/A',
                'contract_end' => $partner->contract_end ?? 'N/A',
                'contract_file_url' => $partner->contract_file ? asset('storage/' . $partner->contract_file) : null,
                'contract_file_name' => $partner->contract_file
                    ? ($partner->internal_code ?? 'contract') . '.' . pathinfo($partner->contract_file, PATHINFO_EXTENSION)
                    : null,
                'website' => $partner->website ?? 'N/A',
                // Raw fields for the edit form
                'address_line1' => $partner->address_line1 ?? '',
                'address_line2' => $partner->address_line2 ?? '',
                'state' => $partner->state ?? '',
                'postal_code' => $partner->postal_code ?? '',
                'logo_link' => $partner->logo_link ?? '',
                'linkedin' => $partner->linkedin ?? '',
                'description' => $partner->description ?? '',
                'country_code' => $partner->country_code ?? '',
                'contract_notes' => $partner->contract_notes ?? '',
                'partner_type' => $partner->partner_type ?? '',
                'status_raw' => $partner->status ?? '',
            ];
        });

        $insuranceProviders = $partners->where('partner_type', 'Insurance Provider')->count();
        $brokers = $partners->where('partner_type', 'Insurance Broker')->count();
        $tpas = $partners->where('partner_type', 'Third Party Administrator')->count();

        $quickStats = [
            [
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9.25499 16.4627C12.3747 15.3752 14.9994 13.5001 14.9994 9.74999V4.49982C14.9994 4.30091 14.9204 4.11013 14.7798 3.96948C14.6391 3.82882 14.4484 3.7498 14.2495 3.7498C12.7496 3.7498 10.8823 2.85727 9.56995 1.70973C9.41108 1.57398 9.20897 1.49939 9.00001 1.49939C8.79105 1.49939 8.58894 1.57398 8.43007 1.70973C7.1252 2.84977 5.25039 3.7498 3.75054 3.7498C3.55164 3.7498 3.3609 3.82882 3.22026 3.96948C3.07962 4.11013 3.00061 4.30091 3.00061 4.49982V9.74999C3.00061 13.5001 5.62535 15.3752 8.75254 16.4552C8.91417 16.5154 9.09162 16.5181 9.25499 16.4627Z" stroke="#2563EB" stroke-width="2" stroke-linecap="round"/></svg>',
                'color' => 'blue',
                'name' => 'Insurance Providers',
                'count' => $insuranceProviders . ($insuranceProviders === 1 ? ' partner' : ' partners'),
                'pct' => $totalPartners > 0 ? round(($insuranceProviders / $totalPartners) * 100) . '%' : '0%',
                'frac' => $insuranceProviders . ' / ' . $totalPartners,
                'bg' => '#DBEAFE',
                'text' => '#2563EB'
            ],
            [
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M12.0002 14.9994V2.99939C12.0002 2.60156 11.8422 2.22003 11.5609 1.93873C11.2795 1.65742 10.898 1.49939 10.5001 1.49939H7.49987C7.10201 1.49939 6.72045 1.65742 6.43912 1.93873C6.1578 2.22003 5.99975 2.60156 5.99975 2.99939V14.9994M2.99951 4.49939H15.0005C15.829 4.49939 16.5006 5.17096 16.5006 5.99939V13.4994C16.5006 14.3278 15.829 14.9994 15.0005 14.9994H2.99951C2.17102 14.9994 1.49939 14.3278 1.49939 13.4994V5.99939C1.49939 5.17096 2.17102 4.49939 2.99951 4.49939Z" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg>',
                'color' => 'green',
                'name' => 'Brokers',
                'count' => $brokers . ($brokers === 1 ? ' partner' : ' partners'),
                'pct' => $totalPartners > 0 ? round(($brokers / $totalPartners) * 100) . '%' : '0%',
                'frac' => $brokers . ' / ' . $totalPartners,
                'bg' => '#D1FAE5',
                'text' => '#10B981'
            ],
            [
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M7.49987 9H10.5001M7.49987 6H10.5001M10.5001 15.75V13.5C10.5001 13.1022 10.3421 12.7206 10.0607 12.4393C9.77941 12.158 9.39785 12 8.99999 12C8.60213 12 8.22057 12.158 7.93924 12.4393C7.65792 12.7206 7.49987 13.1022 7.49987 13.5V15.75M4.49963 7.5H2.99951C2.60165 7.5 2.22009 7.65804 1.93876 7.93934C1.65744 8.22064 1.49939 8.60218 1.49939 9V14.25C1.49939 14.6478 1.65744 15.0294 1.93876 15.3107C2.22009 15.592 2.60165 15.75 2.99951 15.75H15.0005C15.3983 15.75 15.7799 15.592 16.0612 15.3107C16.3425 15.0294 16.5006 14.6478 16.5006 14.25V6.75C16.5006 6.35218 16.3425 5.97064 16.0612 5.68934C15.7799 5.40804 15.3983 5.25 15.0005 5.25H13.5003M4.49963 15.75V3.75C4.49963 3.35218 4.65768 2.97064 4.939 2.68934C5.22033 2.40804 5.60189 2.25 5.99975 2.25H12.0002C12.3981 2.25 12.7796 2.40804 13.061 2.68934C13.3423 2.97064 13.5003 3.35218 13.5003 3.75V15.75" stroke="#F59E0B" stroke-width="2" stroke-linecap="round"/></svg>',
                'color' => 'yellow',
                'name' => 'TPAs',
                'count' => $tpas . ($tpas === 1 ? ' partner' : ' partners'),
                'pct' => $totalPartners > 0 ? round(($tpas / $totalPartners) * 100) . '%' : '0%',
                'frac' => $tpas . ' / ' . $totalPartners,
                'bg' => '#FFFBEB',
                'text' => '#F59E0B'
            ],
        ];

        $latestPartners = Partner::orderBy('updated_at', 'desc')->take(3)->get();
        $activities = [];

        foreach ($latestPartners as $partner) {
            $isNew = $partner->created_at && $partner->updated_at && $partner->created_at->eq($partner->updated_at);

            if ($isNew) {
                $title = 'Partner added: ' . $partner->name;
                $svg = '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M3.74939 8.99999H14.2506M8.99999 3.74939V14.2506" stroke="#2563EB" stroke-width="2" stroke-linecap="round"/></svg>';
                $bg = '#DBEAFE';
            } elseif ($partner->status === 'pending') {
                $title = 'Approval pending: ' . $partner->name;
                $svg = '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none"><g clip-path="url(#clip0_49_1834)"><path d="M8.99999 4.49975V9.00011L12.0002 10.5002M16.5006 9.00011C16.5006 13.1426 13.1425 16.5007 8.99999 16.5007C4.85752 16.5007 1.49939 13.1426 1.49939 9.00011C1.49939 4.85764 4.85752 1.49951 8.99999 1.49951C13.1425 1.49951 16.5006 4.85764 16.5006 9.00011Z" stroke="#F59E0B" stroke-width="2" stroke-linecap="round"/></g><defs><clipPath id="clip0_49_1834"><rect width="18" height="18" fill="white"/></clipPath></defs></svg>';
                $bg = '#FFFBEB';
            } else {
                $title = 'Contract updated: ' . $partner->name;
                $svg = '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none"><g clip-path="url(#clip0_49_1827)"><path d="M9.75013 15.7491H15.7507M15.8811 5.10861C16.2777 4.71219 16.5005 4.17448 16.5006 3.61378C16.5007 3.05308 16.278 2.51531 15.8815 2.11879C15.485 1.72226 14.9473 1.49946 14.3865 1.49939C13.8257 1.49932 13.2879 1.72199 12.8914 2.11841L2.88096 12.13C2.70681 12.3036 2.57802 12.5174 2.50593 12.7525L1.51509 16.0164C1.49571 16.0813 1.49424 16.1502 1.51085 16.2158C1.52747 16.2814 1.56154 16.3413 1.60945 16.3892C1.65736 16.437 1.71733 16.471 1.78298 16.4875C1.84864 16.504 1.91755 16.5024 1.98238 16.4829L5.24742 15.4929C5.48232 15.4215 5.69609 15.2935 5.86998 15.1202L15.8811 5.10861Z" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></g><defs><clipPath id="clip0_49_1827"><rect width="18" height="18" fill="white"/></clipPath></defs></svg>';
                $bg = '#D1FAE5';
            }

            $activities[] = [
                'svg' => $svg,
                'bg' => $bg,
                'title' => $title,
                'time' => $partner->updated_at ? $partner->updated_at->diffForHumans() : 'Just now'
            ];
        }

        return view('partnermanagement', [
            'partners' => $mappedPartners,
            'stats' => $stats,
            'quickStats' => $quickStats,
            'totalPartners' => $totalPartners,
            'activities' => $activities,
            'countpartner' => $countpartner,
            'countInsuranceProvider' => $countInsuranceProvider,
            'countInsuranceBroker' => $countInsuranceBroker,
            'countTPA' => $countTPA,
        ]);
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

public function update(Request $request, Partner $partner)
{
    $request->validate([
        'name'           => 'required|string|max:255',
        'partner_type'   => 'required',
        'status'         => 'required',
        'address_line1'  => 'required',
        'city'           => 'required',
        'country'        => 'required',
        'contract_start' => 'required',
        'logo'           => 'nullable|image|max:2048',
        'contract_file'  => 'nullable|mimes:pdf,doc,docx|max:5000',
    ]);

    $logoPath = $partner->logo;
    if ($request->hasFile('logo')) {
        $logoPath = $request->file('logo')->store('partners/logos', 'public');
    }

    $contractPath = $partner->contract_file;
    if ($request->hasFile('contract_file')) {
        $contractPath = $request->file('contract_file')->store('partners/contracts', 'public');
    }

    $partner->update([
        'name'           => $request->name,
        'internal_code'  => $request->internal_code ?: $partner->internal_code,
        'partner_type'   => $request->partner_type,
        'status'         => $request->status,
        'logo_link'      => $request->logo_link,
        'logo'           => $logoPath,
        'website'        => $request->website,
        'linkedin'       => $request->linkedin,
        'description'    => $request->description,
        'address_line1'  => $request->address_line1,
        'address_line2'  => $request->address_line2,
        'city'           => $request->city,
        'state'          => $request->state,
        'country'        => $request->country,
        'postal_code'    => $request->postal_code,
        'contact_name'   => $request->contact_name,
        'contact_email'  => $request->contact_email,
        'contact_phone'  => $request->contact_phone,
        'country_code'   => $request->country_code,
        'contract_start' => $request->contract_start,
        'contract_end'   => $request->contract_end,
        'contract_file'  => $contractPath,
        'contract_notes' => $request->contract_notes,
    ]);

    return response()->json([
        'success' => true,
        'partner' => $partner->fresh(),
        'date'    => now()->format('F d, Y h:i A')
    ]);
}

    public function insurance()
    {
        $countpartner = Partner::count();
        $totalProviders = Partner::where('partner_type', 'Insurance Provider')->count();
        $totalBrokers = Partner::where('partner_type', 'Insurance Broker')->count();
        $totalTpas = Partner::where('partner_type', 'Third Party Administrator')->count();
        $totalBroker = $totalBrokers;

        $totalInsurance = $totalProviders;
        $activeInsurance = Partner::where('partner_type', 'Insurance Provider')->where('status', 'active')->count();
        $awaitingInsurance = Partner::where('partner_type', 'Insurance Provider')->where('status', 'pending')->count();

        $insurancePartners = Partner::where('partner_type', 'Insurance Provider')->latest()->get()->map(function($partner) {
            $cityCountry = array_filter([$partner->city, $partner->country]);
            $address = array_filter([$partner->address_line1, $partner->address_line2]);

            return [
                'id' => $partner->id,
                'internal_code' => $partner->internal_code ?? 'N/A',
                'logo' => strtoupper(substr($partner->name, 0, 2)),
                'logo_url' => $partner->logo ? asset('storage/' . $partner->logo) : null,
                'name' => $partner->name,
                'desc' => $partner->description ?? 'No description provided.',
                'contact_name' => $partner->contact_name ?? 'N/A',
                'contact_email' => $partner->contact_email ?? 'N/A',
                'contact_phone' => $partner->contact_phone ?? 'N/A',
                'location' => implode(', ', $cityCountry) ?: 'N/A',
                'address' => implode(', ', $address) ?: 'N/A',
                'type' => $partner->partner_type ?? 'N/A',
                'partner_type' => $partner->partner_type ?? '',
                'city' => $partner->city ?? '',
                'country' => $partner->country ?? '',
                'status' => ucfirst($partner->status),
                'status_raw' => $partner->status ?? '',
                'website' => $partner->website ?? 'N/A',
                // Raw fields for the edit form
                'address_line1' => $partner->address_line1 ?? '',
                'address_line2' => $partner->address_line2 ?? '',
                'state' => $partner->state ?? '',
                'postal_code' => $partner->postal_code ?? '',
                'logo_link' => $partner->logo_link ?? '',
                'linkedin' => $partner->linkedin ?? '',
                'description' => $partner->description ?? '',
                'country_code' => $partner->country_code ?? '',
                'contract_start' => $partner->contract_start ?? '',
                'contract_end' => $partner->contract_end ?? '',
                'contract_notes' => $partner->contract_notes ?? '',
            ];
        });

        return view('insurance', compact(
            'countpartner', 'totalProviders', 'totalBrokers', 'totalTpas', 'totalBroker',
            'totalInsurance', 'activeInsurance', 'awaitingInsurance', 'insurancePartners'
        ));
    }

    public function brokers()
    {
        $countpartner = Partner::count();
        $totalProviders = Partner::where('partner_type', 'Insurance Provider')->count();
        $totalBrokers = Partner::where('partner_type', 'Insurance Broker')->count();
        $totalTpas = Partner::where('partner_type', 'Third Party Administrator')->count();

        $activeBroker = Partner::where('partner_type', 'Insurance Broker')->where('status', 'active')->count();
        $awaitingBroker = Partner::where('partner_type', 'Insurance Broker')->where('status', 'pending')->count();
        $totalBroker = $totalBrokers;

        $brokerPartners = Partner::where('partner_type', 'Insurance Broker')->get()->map(function($partner) {
            $cityCountry = array_filter([$partner->city, $partner->country]);
            return [
                'id' => $partner->id,
                'logo' => strtoupper(substr($partner->name, 0, 2)),
                'logo_url' => $partner->logo ? asset('storage/' . $partner->logo) : null,
                'name' => $partner->name,
                'desc' => $partner->description ?? 'No description provided.',
                'location' => implode(', ', $cityCountry) ?: 'N/A',
                'status' => ucfirst($partner->status),
            ];
        });

        return view('brokers', compact(
            'countpartner', 'totalProviders', 'totalBrokers', 'totalTpas',
            'activeBroker', 'awaitingBroker', 'totalBroker', 'brokerPartners'
        ));
    }
}


