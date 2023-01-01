<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ZohoCRMController extends Controller
{
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function generateToken()
    {
        $requestParams = [
            'grant_type'    => 'refresh_token',
            'client_id'     => '1000.NC0AHNTLN15L22U6FYFACMEYR4LMNL',
            'client_secret' => '5eb4c1a644e7f5934f146962607d6bd1e5030ff524',
            'refresh_token' => '1000.d41e7eb33ba73a8cd40484e069721a49.8da1d8429958b739d13210ae1ac97405'
        ];
        $apiResponse = Http::asForm()->post('https://accounts.zoho.com/oauth/v2/token', $requestParams);
        return $apiResponse;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(CustomerStoreRequest $request)
    // {
    //     $requestData = [
    //         'practice_name'       => $request->practice_name,
    //         'tax_id_number'       => $request->tax_id_number,
    //         'npi_number'          => $request->npi_number,
    //         'first_name'          => $request->first_name,
    //         'last_name'           => $request->last_name,
    //         'job_title'           => $request->job_title,
    //         'phone'               => $request->phone,
    //         'mobile'              => $request->mobile,
    //         'fax'                 => $request->fax,
    //         'email'               => $request->email,
    //         'street_address'      => $request->street_address,
    //         'city'                => $request->city,
    //         'state'               => $request->state,
    //         'zip_code'            => $request->zip_code,
    //         'county'              => $request->county,
    //         'number_of_locations' => $request->number_of_locations,
    //         'specialty'           => implode(',', $request->specialty),
    //         'line_of_business'    => implode(',', $request->line_of_business),
    //         'group_seen'          => implode(',', $request->group_seen),
    //         'lead_source'         => $request->lead_source,
    //         'website'             => $request->website,
    //     ];
    //     $finalData = json_encode($requestData);
    //     $apiResponse = Http::post("https://www.zohoapis.com/crm/v2/functions/testshakhawat/actions/execute?auth_type=apikey&zapikey=1003.8f0fa8b58bd902778565545cc30d25c1.07d6c0c21473bc52b82103a9d2862406&test={$finalData}");
    //     $response = $apiResponse->json();
    //     if (isset($response['details']['output'])) {
    //         $output = json_decode($response['details']['output']);
    //         if (isset($output->status) && $output->status === 'error') {
    //             return redirect()->back()->with('failed', $output->message);
    //         } else {
    //             return redirect()->back()->with('success', 'Your data has been successfully submitted!');
    //         }
    //     }
    //     return redirect()->back()->with('failed', 'Data submitting failed!');
    // }

    public function store(CustomerStoreRequest $request)
    {
        dd($request->validated());

        $tokenDetails = $this->GenerateToken();
        if (!isset($tokenDetails['access_token'])) {
            return response()->json(['code'=>403, 'msg'=> 'Failed to generate token']);
        }

        $authorizationHeader['Authorization'] = 'Zoho-oauthtoken ' . $tokenDetails['access_token'];
        $data['data'][] = $request->validated();
        $apiResponse = Http::withHeaders($authorizationHeader)->post(
            'https://www.zohoapis.com/crm/v3/Leads',
            (object) $data
        );
        $response = $apiResponse->json();
        if (!empty($response['data'])
        && !empty($response['data'][0]['code'])
        && $response['data'][0]['code'] === 'SUCCESS') {
            return redirect()->back()->with('success', 'Your data has been successfully submitted!');
        } else {
            return redirect()->back()->with('failed', 'Data submitting failed!');
        }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
