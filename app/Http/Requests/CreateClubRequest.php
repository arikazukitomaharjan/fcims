<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateClubRequest extends Request {

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
            'est_date'=>'required',
            'CEO'=>'required',
            'location'=>'required',
            'contact_no'=>'required',
            'email_id'=>'required',
            'website'=>'required',
            'image'=>'required'*/
            
		];
	}

}
