<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateCoachRequest extends Request {

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
			/*'name'=>'required',
            'address'=>'required',
            'contact_no'=>'required',
            'email_id'=>'required',
          
            'work'=>'required'*/
            
		];
	}

}
