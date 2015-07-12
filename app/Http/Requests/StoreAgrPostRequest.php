<?php namespace App\Http\Requests;

class StoreAgrPostRequest extends Request
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
     * @return array
     */
    public function rules()
    {
        //validation will be done with javascript include theme
        return [

            'dateOfAgreement' => 'required|max:1',
        ];
    }

}
