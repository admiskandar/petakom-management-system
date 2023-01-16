<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
// use Spatie\Permission\Models\Role;
// use Spatie\Permission\Models\Permission;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;


    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'user_phonenum' => ['required', 'string', 'max:255'],
            'user_matric' => ['required', 'string', 'max:255'],
            'user_type' => ['required', 'string', 'max:255'],
            // 'user_pic' => ['required', 'string', 'max:2048'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'user_phonenum' => $input['user_phonenum'],
            'user_matric' => $input['user_matric'],
            'user_type' => $input['user_type'],
            // 'user_pic' => $input['user_pic'],
        ]);

        // $user = new User;
        //       // $picture = new UserPic;
        // if ($request->hasfile('candidate_picture')) {
        //     $file = $request->file('candidate_picture');
        //     $extention = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extention;
        //     $file->move('uploads/candidates/', $filename);
        //     $user->user_pic = $filename;
        // }

        // $user->save();
    


    }
}

    // public function store(Request $request)
    // {
    //     $request->validate(['user_pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']);

    //     // $picture = new UserPic;
    //     if ($request->hasfile('candidate_picture')) {
    //         $file = $request->file('candidate_picture');
    //         $extention = $file->getClientOriginalExtension();
    //         $filename = time() . '.' . $extention;
    //         $file->move('uploads/candidates/', $filename);
    //         $election->user_pic = $filename;
    //     }
    // }

    // protected function createRole(User $user) {
    //     $user->assignRole('user_type');
    // }
// }
