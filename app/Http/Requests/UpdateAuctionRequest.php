<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAuctionRequest extends FormRequest
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
            'auction_date' => 'required',
            'auction_time' => 'required',
            'auction_location' => 'required',
            'total_vehicle' => 'required',
            'run_drive' => 'required',
            'bid_increment' => 'required',
            'with_keys' => 'required',
        ];
    }
}
