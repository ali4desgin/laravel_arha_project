<?php

namespace App\Http\Controllers\OfficeEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project,App\Models\ProjectActivity,App\Models\ProjectIndicator,App\Models\ProjectObjective;
class ProjectController extends Controller
{
    //

    public function create_proposal(Request $request){
        return view("Office.Project.create_proposal");
    }

    public function create_proposal_post(Request $request){

        $request->validate(
            [
                "project_name"=>"required|string|min:5",
                "introduction"=>"required|string|min:5",
                "region"=>"required|string|min:5",
                "goal"=>"required|string|min:5",
                "district"=>"required|string|min:5",
                "city"=>"required|string|min:5",
                "village"=>"required|string|min:5",
                "gps_longitude"=>"required|string",
                "gps_latitude"=>"required|string",
                "goal"=>"required|string",
                "objective"=>"required|array|min:1",
                "activity"=>"required|array|min:1",
                "indicator"=>"required|array|min:1",
                "evaluate"=>"required|string|min:1",
                "community"=>"required|string|min:1",
                "impact"=>"required|string|min:1"

            ]
        );

        $project = new  Project();
        $project->project_type = "education";
        $project->status = "pending";
        $project->name = $request->input("project_name");
        $project->introduction = $request->input("introduction");
        $project->region = $request->input("region");
        $project->district = $request->input("district");
        $project->city = $request->input("city");
        $project->village = $request->input("village");
        $project->longitude = $request->input("gps_longitude");
        $project->latitude = $request->input("gps_latitude");
        $project->goals = $request->input("goal");
        $project->expected_impact = $request->input("impact");
        $project->community = $request->input("community");
        $project->evaluate_project = $request->input("evaluate");
        if($project->save()){
            $project_id =  $project->id;

            foreach($request->input("activity") as $activity){
                if(!empty($activity)){
                    $pactivity = new ProjectActivity();
                    $pactivity->project_id = $project_id;
                    $pactivity->activity = $activity;
                    $pactivity->save();

                }
            }

        
            foreach($request->input("objective") as $objective){
                if(!empty($objective)){
                    $pobjective = new ProjectObjective();
                    $pobjective->project_id = $project_id;
                    $pobjective->activity = $objective;
                    $pobjective->save();

                }
            }

            foreach($request->input("indicator") as $indicator){
                if(!empty($activity)){
                    $pindicator = new ProjectIndicator();
                    $pindicator->project_id = $project_id;
                    $pindicator->indicator = $indicator;
                    $pindicator->save();

                }
            }

            return back()->withErrors([
                "complete"
            ]);


        }
        
        return back()->withErrors([
            "internal error please try later"
        ]);
    }



}
