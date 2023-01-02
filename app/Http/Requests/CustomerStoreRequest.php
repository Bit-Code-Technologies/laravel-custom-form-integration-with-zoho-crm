<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'Practice_Name'                             => ['required', 'string'],
            'Tax_ID_Number'                             => ['required', 'string'],
            'NPI_Number'                                => ['required', 'string'],
            'First_Name'                                => ['required', 'string'],
            'Last_Name'                                 => ['required', 'string'],
            'Job_Title'                                 => ['required', 'string'],
            'Phone'                                     => ['required', 'string'],
            'Mobile'                                    => ['required', 'string'],
            'Fax'                                       => ['required', 'string'],
            'Email'                                     => ['required', 'string'],
            'Street'                                    => ['required', 'string'],
            'City'                                      => ['required', 'string'],
            'State'                                     => ['required', 'string'],
            'Zip_Code'                                  => ['required', 'string'],
            'County'                                    => ['required', 'string'],
            'Number_of_Locations'                       => ['required', 'integer'],
            'Specialty'                                 => ['required', 'array'],
            'Line_of_Business'                          => ['required', 'array'],
            'Age_Group_Seen'                            => ['required', 'array'],
            'Lead_Source'                               => ['required', 'string'],
            'Website'                                   => ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'Practice_Name.required'               => 'Practice Name is required!',
            'Tax_ID_Number.required'               => 'Tax ID Number is required!',
            'NPI_Number.required'                  => 'NPI Number is required!',
            'first_name.required'                  => 'First Name is required!',
            'last_name.required'                   => 'Last Name is required!',
            'Job_Title.required'                   => 'Job Title is required!',
            'Phone.required'                       => 'Office Phone is required!',
            'Mobile.required'                      => 'Mobile is required!',
            'Fax.required'                         => 'Fax is required!',
            'Email.required'                       => 'Email is required!',
            'Street.required'                      => 'Street Adress is required!',
            'City.required'                        => 'City is required!',
            'State.required'                       => 'State is required!',
            'Zip_Code.required'                    => 'Zip Code is required!',
            'County.required'                      => 'County is required!',
            'Number_of_Locations.required'         => 'Number of Locations is required!',
            'Specialty.required'                   => 'Specialty is required!',
            'Line_of_Business.required'            => 'Line of Business is required!',
            'Age_Group_Seen.required'              => 'Group Seen is required!',
            'Lead_Source.required'                 => 'Lead Source is required!',
            'Website.required'                     => 'Website is required!',
        ];
    }
}
