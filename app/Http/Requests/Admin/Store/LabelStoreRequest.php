<?php

namespace App\Http\Requests\Admin\Store;

use Illuminate\Foundation\Http\FormRequest;

class LabelStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'profile_image'                             => 'required|mimes:png,jpg,jpeg|max:2048',
            'firstname'                                 => 'required|max:255',
            'lastname'                                  => 'required|max:255',
            'date_of_birth'                             => 'required',
            'gender'                                    => 'required',
            'username'                                  => 'required|alpha_num|max:255',
            'email'                                     => 'required|email:rfc,dns|unique:users,email|max:255',
            'password'                                  => 'required|min:8|max:255',
            'country'                                   => 'required',
            'labelArtist.*.artist_firstname'            => 'required|max:255',
            'labelArtist.*.artist_lastname'             => 'required|max:255',
            'labelArtist.*.artist_username'             => 'required|alpha_num|max:255',
        ];

        $labelArtistEmails = $this->input('labelArtist.*.artist_email');
        if(is_array($labelArtistEmails)) {
            foreach($labelArtistEmails as $index => $email) {
                $rules["labelArtist.$index.artist_email"] = [
                    'required',
                    'email:rfc,dns',
                    function ($attribute, $value, $fail) use ($labelArtistEmails, $index) {
                        $duplicates = array_diff_assoc($labelArtistEmails, [$index => $value]);
                        if (in_array($value, $duplicates)) {
                            $fail("The Artist Email field has already been taken.");
                        }
                    },
                    'max:255',
                ];
            }
        }
        
        return $rules;
    }
    
    public function messages(): array
    {
        $messages = [
            'profile_image.required'                    => 'The Profile Image field is required.',
            'firstname.required'                        => 'The First name field is required.',
            'lastname.required'                         => 'The Last name field is required.',
            'date_of_birth.required'                    => 'The Date Of Birth field is required.',
            'gender.required'                           => 'The Gender field is required.',
            'username.required'                         => 'The User name field is required.',
            'email.required'                            => 'The Email field is required.',
            'password.required'                         => 'The Password field is required.',
            'country.required'                          => 'The Country field is required.',
            'labelArtist.*.artist_firstname.required'   => 'The Artist Firstname field is required.',
            'labelArtist.*.artist_lastname.required'    => 'The Artist Lastname field is required.',
            'labelArtist.*.artist_username.required'    => 'The Artist Username field is required.',
        ];

        $labelArtistEmails = $this->input('labelArtist.*.artist_email');
        if (is_array($labelArtistEmails)) {
            foreach ($labelArtistEmails as $index => $email) {
                $messages["labelArtist.$index.artist_email.required"]   = "The Artist Email field is required.";
                $messages["labelArtist.$index.artist_email.unique"]     = "The Artist Email field has already been taken.";
                $messages["labelArtist.$index.artist_email.email"]      = "The Artist Email field must be a valid email address.";
                $messages["labelArtist.$index.artist_email.max"]        = "The Artist Email field may not be greater than :max characters.";
            }
        }

        return $messages;
    }
}
