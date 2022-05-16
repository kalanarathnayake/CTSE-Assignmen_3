<?php
namespace Modules\PaymentManagement\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePaymentRequest extends FormRequest
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
            'dob' => 'required|max:55',
            'nic' => 'required|max:55',
            'card_number' => 'required|max:55',
            'name_on_card' => 'required|max:55',
            'email' => 'required|max:55',
            'bank' => 'required|max:55',
            'cvc' => 'required|max:55',
            'address' => 'required|max:55',
            'amount' => 'required|max:55',
           
        ];
    }
}