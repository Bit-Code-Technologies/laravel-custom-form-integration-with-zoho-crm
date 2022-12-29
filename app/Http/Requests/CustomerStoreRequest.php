<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'practice_name'                        => ['required', 'string'],
            'tax_id_number'                        => ['required', 'string'],
            'npi_number'                           => ['required', 'string'],
            'first_name'                           => ['required', 'string'],
            'last_name'                            => ['required', 'string'],
            'job_title'                            => ['required', 'string'],
            'phone'                                => ['required', 'string'],
            'mobile'                               => ['required', 'string'],
            'fax'                                  => ['required', 'string'],
            'email'                                => ['required', 'string'],
            'street_address'                       => ['required', 'string'],
            'city'                                 => ['required', 'string'],
            'state'                                => ['required', 'string'],
            'zip_code'                             => ['required', 'string'],
            'county'                               => ['required', 'string'],
            'number_of_locations'                  => ['required', 'string'],
            'specialty'                            => ['required', 'array'],
            'line_of_business'                     => ['required', 'array'],
            'group_seen'                           => ['required', 'array'],
            'lead_source'                          => ['required', 'string'],
            'website'                              => ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'practice_name.required'          => 'Practice Name is required!',
            'tax_id_number.required'          => 'Tax ID Number is required!',
            'npi_number.required'             => 'NPI Number is required!',
            'first_name.required'             => 'First Name is required!',
            'last_name.required'              => 'Last Name is required!',
            'job_title.required'              => 'Job Title is required!',
            'phone.required'                  => 'Office Phone is required!',
            'mobile.required'                 => 'Mobile is required!',
            'fax.required'                    => 'Fax is required!',
            'email.required'                  => 'Email is required!',
            'street_address.required'         => 'Street Adress is required!',
            'city.required'                   => 'City is required!',
            'state.required'                  => 'State is required!',
            'zip_code.required'               => 'Zip Code is required!',
            'county.required'                 => 'County is required!',
            'number_of_locations.required'    => 'Number of Locations is required!',
            'specialty.required'              => 'Specialty is required!',
            'line_of_business.required'       => 'Line of Business is required!',
            'group_seen.required'             => 'Group Seen is required!',
            'lead_source.required'            => 'Lead Source is required!',
            'website.required'                => 'Website is required!',
        ];
    }
}
