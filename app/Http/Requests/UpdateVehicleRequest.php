<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVehicleRequest extends FormRequest
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
            'car_condition' => 'required',
            'car_type' => 'required',
            'car_vin' => 'required',
            'car_year' => 'required',
            'car_make' => 'required',
            'car_model' => 'required',
            'car_interior' => 'required',
            'car_exterior' => 'required',
            'car_drive_type' => 'required',
            'car_transmission' => 'required',
            'car_fuel' => 'required',
            'car_mileage' => 'required',
            'car_specification' => 'required',
            'car_engine' => 'required',
            'car_cylender' => 'required',
            'car_doors' => 'required',
            'car_drive_status' => 'required',
            'car_primary_damage' => 'required',
            'car_secondary_damage' => 'required',
            'car_keys' => 'required',
            'vehicle_type' => 'required',
            'auctionlist_id' => 'required',
        ];
    }
}
