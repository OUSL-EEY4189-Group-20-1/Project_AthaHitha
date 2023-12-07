<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class Project extends Controller
{


    public function createProject(Request $request)
    {

        $data = $request->only(['title', 'category', 'province', 'city', 'address', 'description',"startDate","EndDate"]);

        $request->validate([
            'title' => 'required',
            'category' =>  ['required', 'not_in:default'],
            'province' => ['required', 'not_in:default'],
            'city' => ['required', 'not_in:default'],
            'address' => 'required',
            'description' => 'required',
            'startDate'=> 'required',
            'EndDate'=>'required'
        ]);





        $imageFile = $request->file('imagePath');
        if ($imageFile != null){
            $imageName = time() . '-' . 'img' . '.' . $imageFile->getClientOriginalExtension();
            $imageFile->move('ProjectImages', $imageName);

            $data['imagePath'] = 'ProjectImages/' . $imageName;
        }



        $newProject = Projects::create($data);

        if ($newProject) {
            // Set a success flash message
            Session::flash('success', 'Project created successfully!');
        } else {
            // Set an error flash message
            Session::flash('error', 'Error creating the project.');
        }

        return redirect()->route("admin.allProjects");
    }

    public function getAllProjects()
    {
        $projects = Projects::all();

        return view("allProjects")->with("project", $projects);
    }

    public function editProject($id)
    {
        $projects = Projects::find($id);
        return view("editProject")->with("project", $projects);
    }

    public function getProjectDetails($id)
    {
        $projects = Projects::find($id);
        return view("viewProject")->with("project", $projects);
    }

    public function update(Request $request, $id)
    {
        $project = Projects::find($id);
        $input = $request->all();

        $input2 = $request->only("imagePath");

        $imageFile = $request->file('imagePath');
        if ($imageFile != null){
            $imageName = time() . '-' . 'img' . '.' . $imageFile->getClientOriginalExtension();
            $imageFile->move('ProjectImages', $imageName);

            $input2['imagePath'] = 'ProjectImages/' . $imageName;
        }





        $project->update($input);
        DB::update('UPDATE projects SET imagePath = ? WHERE id = ?', [$imageFile,$id]);

        return redirect()->route("admin.allProjects")->with('flash_message', 'student Updated!');
    }

    public function deleteProject($id)
    {
        Projects::destroy($id);
        return redirect()->route("admin.allProjects")->with('flash_message', 'Student deleted!');
    }

    public function projectInfo(Request $request, $id){
        $projects = Projects::find($id);
        return view("projectInfo")->with("project", $projects);
    }


    //route to all projects


}
