<?php namespace App\Http\Requests;

class StoreBankDetailPostrequest extends Request
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
        return [

            'bankName' => 'required|max:50',
            'accountNo' => 'required|max:50'
        ];
    }

}
