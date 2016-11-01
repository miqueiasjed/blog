<?php

namespace App\Http\Requests;

use App\Services\Events\ServiceEvent;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class EventRequest extends FormRequest
{
    /**
     * @var ServiceEvent
     */
    private $serviceEvent;

    public function __construct(ServiceEvent $serviceEvent)
   {
       $this->serviceEvent = $serviceEvent;
   }

    /**
     * @return ServiceEvent
     */
    public function getServiceEvent()
    {
        return $this->serviceEvent;
    }


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
            $event = $this->getServiceEvent()->findById($request->id);
            if ($request->name === $event->name){
                return [
                    'owner' => 'required|min:3',
                    'name' => 'required|min:3',
                    'city_id' => 'required',
                    'address' => 'required',
                    'district' => 'required',
                    'statues_id' => 'required'
                ];
            }else{
                return [
                    'owner' => 'required|min:3',
                    'name' => 'required|min:3|unique:events',
                    'city_id' => 'required',
                    'address' => 'required',
                    'district' => 'required',
                    'statues_id' => 'required'
                ];
            }
        }
        else{
            return [
                'owner' => 'required|min:3',
                'name' => 'required|min:3|unique:events,name'.$this->get('id'),
                'city_id' => 'required',
                'address' => 'required',
                'district' => 'required'
            ];
        }

    }
}
