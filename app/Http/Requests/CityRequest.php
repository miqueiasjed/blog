<?php

namespace App\Http\Requests;

use App\Entities\City;
use App\Services\Cities\ServiceCity;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CityRequest extends FormRequest
{
    /**
     * @var ServiceCity
     */
    private $serviceCity;

    /**
     * CityRequest constructor.
     */
    public function __construct(ServiceCity $serviceCity)
    {
        $this->serviceCity = $serviceCity;
    }

    /**
     * @return ServiceCity
     */
    public function getServiceCity()
    {
        return $this->serviceCity;
    }



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
    public function rules(Request $request)
    {
        if (isset($request->id))
        {
            $city = $this->getServiceCity()->findById($request->id);
            if ($request->name === $city->name){
                return [
                    'name' => 'required|min:3',
                    'state' => 'required'
                ];
            }else{
                return [
                    'name' => 'required|min:3|unique:cities',
                    'state' => 'required'
                ];
            }
        }
        else{
            return [
                'name' => 'required|min:3|unique:cities,name'.$this->get('id'),
                'state' => 'required'
            ];
        }

    }
}
