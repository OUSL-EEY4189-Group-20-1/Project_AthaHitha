<?php

namespace App\Admin\Controllers;

use App\Models\DonatedGoods;
use App\Models\Projects;
use App\Models\UserProject;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Donation;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Unique;
use OpenAdmin\Admin\Controllers\AuthController as BaseAuthController;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\Session;

class AuthController extends BaseAuthController
{
    public function guest()
    {
        if (Auth::check()) {
            return redirect(route('home'));
        }
        return view('guest');
    }

    public function register()
    {
        if (Auth::check()) {
            return redirect(route('home'));
        }
        return view('register');
    }

    public function home()
    {
        return view('home');
    }

    public function postRegister(\Illuminate\Http\Request $request)
    {
        //dd($request->all());
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'contact' => 'required',
            'address' => 'required',
            'postal_code' => 'required',
            'organization' => '',
            'password' => 'required|min:6|confirmed', // Add 'confirmed' rule
            'agree' => 'accepted',
        ]);

        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['email'] = $request->email;
        $data['contact'] = $request->contact;
        $data['address'] = $request->address;
        $data['postal_code'] = $request->postal_code;
        $data['organization'] = $request->organization;
        $data['password'] = $request->password;
        $data['agree'] = $request->has('agree');


        $user = User::create($data);

        if (!$user) {
            return redirect(route('userRegistration'))->with('fail', 'Registration failed!');
        }
        return redirect(route('userLogin'))->with('success', 'Registered Successfully!');
    }

    public function postLogin(\Illuminate\Http\Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if (auth()->user()->is_admin == 0) {
                return redirect()->route("home");
            } elseif (auth()->user()->is_admin == 1) {
                return redirect()->route("admin.home");
            }
        } else {
            return redirect(route('userLogin'))->with('fail', 'Check email or password again to login.');
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('userLogin'));
    }

    public function educational()
    {

        $projects = Projects::where('category', 'education')->get();
        return view('educational_projects')->with("projects", $projects);
    }

    public function health()
    {
        $projects = Projects::where('category', 'health')->get();
        return view('health_projects')->with("projects", $projects);
    }

    public function cleanWater()
    {
        $projects = Projects::where('category', 'water')->get();
        return view('cleanwater')->with("projects", $projects);
    }

    public function nutrition()
    {
        $projects = Projects::where('category', 'nutrition')->get();
        return view('nutrition_projects')->with("projects", $projects);
    }

    public function donateMoney()
    {
        return view('donateMoney');
    }

    public function donateGoods()
    {
        return view('donategood');
    }

    public function donateForm()
    {
        $currentRoute = \Route::currentRouteName();
        return view('donateMoney', compact('currentRoute'));
    }

    //project info page and join
    public function EducationalprojectDetails($id)
    {
        $project = Projects::find($id);
        return view("EducationProjectDetails", ['project' => $project]);
    }

    //assign project
    public function assignProject(Request $request)
    {

        try {
            $data = $request->only(['project_id', 'user_id']);
            $assignMember = UserProject::create($data);

            if ($assignMember) {
                // Set a success flash message
                Session::flash('success', 'You assign to project successfully');
            } else {
                // Set an error flash message
                Session::flash('error', 'Error assigning to project.');
            }
        } catch (Exception $e) {
            Session::flash('error', 'You Have already assigned to this Project');
        }


        return redirect()->route("userprofile");
    }


    public function makeDonation(Request $request)
    {
        // Validate the form data here if necessary
        $validatedData = $request->validate([
            'options' => 'required', // Adjust the validation rules according to your requirements
            'amount' => 'required|numeric',
            // Add more fields and validation rules as needed
        ]);
        // Assuming you have a User model and Donation model
        $user = Auth::user();

        $donation = new Donation();
        $donation->user_id = $user->id;
        $donation->category = $request->input('options');
        $donation->amount = $request->input('amount');
        // Add more fields as per your database schema

        $donation->save();

        // Redirect or return a response
        if ($donation) {
            return redirect()->intended(route('userprofile'));
        }
        return back()->withInput()->with('fail', 'Failed to make a donation. Please try again.');
    }

    public function makeGoodDonation(Request $request)
    {
        // Validate the form data here if necessary
        $validatedData = $request->validate([
            'options' => 'required',
            'description' => 'required',
        ]);

        $user = Auth::user();

        $gooddonation = new DonatedGoods();
        $gooddonation->user_id = $user->id;
        $gooddonation->category = $request->input('options');
        $gooddonation->description = $request->input('description');

        $gooddonation->save();

        // Redirect or return a response
        if ($gooddonation) {
            return redirect()->intended(route('userprofile'));
        }
        return back()->withInput()->with('fail', 'Failed to make a donation. Please try again.');

    }

    public function uploadProfilePic(Request $request)
    {
        $user = Auth::user();

        if ($request->has('croppedImage')) {
            $croppedImage = $request->input('croppedImage');
            $image_parts = explode(";base64,", $croppedImage);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];

            $image_base64 = base64_decode($image_parts[1]);
            $file = 'profile_' . time() . '.' . $image_type;

            // Save image to storage
            Storage::disk('public')->put('profile_pictures/' . $file, $image_base64);

            // Save file path to the database
            $user->profile_image = 'profile_pictures/' . $file;
            $user->save();

            return response()->json(['message' => 'Profile picture uploaded successfully']);
        }

        return response()->json(['error' => 'Failed to upload profile picture']);
    }

    public function updateFName(Request $request)
    {
        $newName = $request->input('name');
        $user = Auth::user();
        $user->first_name = $newName;
        $user->save();

        return response()->json(['message' => 'Name updated successfully']);
    }

    public function updateLName(Request $request)
    {
        $newName = $request->input('last_name');
        $user = Auth::user();
        $user->last_name = $newName;
        $user->save();

        return response()->json(['message' => 'Name updated successfully']);
    }

    //update phone number function
    public function updatePhone(Request $request)
    {
        $newPhone = $request->input('phone');
        $user = Auth::user();
        $user->contact = $newPhone;
        $user->save();

        return response()->json(['message' => 'Phone number updated successfully']);
    }

    public function updateAddress(Request $request)
    {
        $newAddress = $request->input('address');
        $user = Auth::user();
        $user->address = $newAddress;
        $user->save();

        return response()->json(['message' => 'Address updated successfully']);
    }

    public function getMoneyDonations($id)
    {
        $info = DB::select('select category, amount, created_at from donations where user_id = ?', [$id]);
        return view('userprofile', ['info' => $info]);
    }

}
