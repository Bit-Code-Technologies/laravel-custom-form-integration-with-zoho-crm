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
            'client_id'     => config('app.cliet_id'),
            'client_secret' => config('app.cliet_secret'),
            'refresh_token' => config('app.refresh_token')
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
    public function store(CustomerStoreRequest $request)
    {
        $requestData = [
            'Practice_Name'                    => $request->Practice_Name,
            'Tax_ID_Number'                    => $request->Tax_ID_Number,
            'NPI_Number'                       => $request->NPI_Number,
            'First_Name'                       => $request->First_Name,
            'Last_Name'                        => $request->Last_Name,
            'Job_Title'                        => $request->Job_Title,
            'Phone'                            => $request->Phone,
            'Mobile'                           => $request->Mobile,
            'Fax'                              => $request->Fax,
            'Email'                            => $request->Email,
            'Street'                           => $request->Street,
            'City'                             => $request->City,
            'State'                            => $request->State,
            'Zip_Code'                         => $request->Zip_Code,
            'Country'                          => $request->Country,
            'Number_of_Locations'              => $request->Number_of_Locations,
            'Lead_Source'                      => $request->Lead_Source,
            'Website'                          => $request->Website,
            'Age_Groups_Seen'                  => $request->Age_Groups_Seen,
        ];

        if (count($request->Specialty)) {
            foreach ($request->Specialty as $item) {
                $requestData[$item] = true;
            }
        }
        if (count($request->Line_of_Business)) {
            foreach ($request->Line_of_Business as $item) {
                $requestData[$item] = true;
            }
        }

        $tokenDetails = $this->GenerateToken();
        if (!isset($tokenDetails['access_token'])) {
            return response()->json(['code'=>403, 'msg'=> 'Failed to generate token']);
        }

        $authorizationHeader['Authorization'] = 'Zoho-oauthtoken ' . $tokenDetails['access_token'];
        $data['data'][] = $requestData;
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
