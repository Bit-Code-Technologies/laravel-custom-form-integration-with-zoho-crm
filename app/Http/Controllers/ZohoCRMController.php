<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ZohoCRMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerStoreRequest $request)
    {
        $requestData = [
            'practice_name'       => $request->practice_name,
            'tax_id_number'       => $request->tax_id_number,
            'npi_number'          => $request->npi_number,
            'first_name'          => $request->first_name,
            'last_name'           => $request->last_name,
            'job_title'           => $request->job_title,
            'phone'               => $request->phone,
            'mobile'              => $request->mobile,
            'fax'                 => $request->fax,
            'email'               => $request->email,
            'street_address'      => $request->street_address,
            'city'                => $request->city,
            'state'               => $request->state,
            'zip_code'            => $request->zip_code,
            'county'              => $request->county,
            'number_of_locations' => $request->number_of_locations,
            'specialty'           => implode(',', $request->specialty),
            'line_of_business'    => implode(',', $request->line_of_business),
            'group_seen'          => implode(',', $request->group_seen),
            'lead_source'         => $request->lead_source,
            'website'             => $request->website,
        ];
        $finalData = json_encode($requestData);
        $apiResponse = Http::post("https://www.zohoapis.com/crm/v2/functions/testshakhawat/actions/execute?auth_type=apikey&zapikey=1003.8f0fa8b58bd902778565545cc30d25c1.07d6c0c21473bc52b82103a9d2862406&test={$finalData}");
        $response = $apiResponse->json();
        if (isset($response['details']['output'])) {
            $output = json_decode($response['details']['output']);
            if (isset($output->status) && $output->status === 'error') {
                return redirect()->back()->with('failed', $output->message);
            } else {
                return redirect()->back()->with('success', 'Your data has been successfully submitted!');
            }
        }
        return redirect()->back()->with('failed', 'Data submitting failed!');
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
