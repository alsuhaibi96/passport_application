<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PassportStoreRequest extends FormRequest
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
            'applicationNumber' => 'required|numeric|digits:8',
            'passportNumber' => 'required|numeric',
            'nationality'=>'required',
            'dateOfBirth'=>'required',
            'sex'=>'required',
            'countryOfBirth'=>'required',
            'passportExpiryDate'=>'required',
            'englishName' => 'required|string',
            'arabicName' => 'required|string',
            'sponsorName' => 'required|string',
            'visaNumber'=>'required|numeric',
            'visaIssueDate'=>'required',
            'visaExpiryDate'=>'required',
            'visaStatus'=>'required',
            'periodOfStay'=>'required|numeric',
            'numberOfEntries'=>'required|numeric',

        ];
    }


       /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'applicationNumber.required' => 'Application Number is required!',
            'passportNumber.required' => 'passport Number is required!',
            'nationality.required' => 'Nationality  is required!',
            'dateOfBirth.required' => 'Date Of Birth is required!',
            'sex.required' => 'Sex is required!',
            'countryOfBirth.required' => 'Country Of Birth is required!',
            'passportExpiryDate.required' => 'Passport Expiry Date is required!',
            'englishName.required' => 'English Name is required!',
            'arabicName.required' => 'Arabic Name is required!',
            'sponsorName.required' => 'Sponsor Name is required!',
            'visaNumber.required' => 'Visa Number is required!',
            'visaIssueDate.required' => 'Visa Issue Date is required!',
            'visaExpiryDate.required' => 'Visa Expiry Date is required!',
            'visaStatus.required' => 'Visa Status is required!',
            'periodOfStay.required' => 'Period Of Stay is required!',
            'numberOfEntries.required' => 'Number Of Entries is required!',
            
            'applicationNumber.numeric' => 'Application Number should be a number!',

            'applicationNumber.digits' => 'Application Number should be 8 numbers!',

            'passportNumber.numeric' => 'passport Number should be a number!',
            'englishName.string' => 'English Name should be a string!',
            'arabicName.string' => 'Arabic Name should be a string!',
            'sponsorName.string' => 'Sponsor Name should be a string!',
            'visaNumber.numeric' => 'Visa Number should be a number !',
            'periodOfStay.numeric' => 'Period Of Stay is should be a number!',
            'numberOfEntries.numeric' => 'Number Of Entries should be a number!',

        ];
    }
}
