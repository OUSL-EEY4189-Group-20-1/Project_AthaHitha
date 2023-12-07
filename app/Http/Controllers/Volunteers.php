<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Volunteers extends Controller
{
    function VolunteerInfo()
    {

        $volunteers = DB::select('select users.id as "volunteer_id",users.first_name,users.last_name,users.contact,projects.id  as "project_id" ,projects.title
from _user_projects
inner join users on users.id = _user_projects.user_id
inner join projects on projects.id = _user_projects.project_id;');

        return view("VolunteerInfo")->with("volunteers", $volunteers);
    }

    public function getUserDetailsById($id)
    {
        $users = User::find($id);
        return view("UserDetails")->with("users", $users);
    }


    function VolunteerInfoByCategory(Request $request)
    {
        $category = $request->input('category');

        if ($category == "Filter By Project Category") {
            $volunteers = DB::select('select users.id as "volunteer_id",users.first_name,users.last_name,users.contact,projects.id  as "project_id" ,projects.title
from _user_projects
inner join users on users.id = _user_projects.user_id
inner join projects on projects.id = _user_projects.project_id;');
        } else {
            $volunteers = DB::select('select users.id as "volunteer_id",users.first_name,users.last_name,users.contact,projects.id  as "project_id" ,projects.title
from _user_projects
inner join users on users.id = _user_projects.user_id
inner join projects on projects.id = _user_projects.project_id
where projects.category = :category', ['category' => $category]);
        }

        return view("VolunteerInfo")->with("volunteers", $volunteers);

    }

}
