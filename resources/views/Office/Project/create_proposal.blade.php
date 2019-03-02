@extends("Layout.office")


@section("content")
<div class="project_cycle">
    <div class="title">project cycle</div>
    <div class="row cover">
        <div class="col active"><span></span>Proposal</div>
        <div class="col">Authorization</div>
        <div class="col">Funds</div>
        <div class="col">Implementation</div>
        <div class="col">Documentation</div>
        <div class="col">Report</div>
        <div class="col">Review</div>
    </div>
</div>


<div class="proposal_form">
    <h3>NEW PROJECT</h3>
    @if ($errors->any())
    <div class="">
       
            @foreach ($errors->all() as $error)
                @if($error=="complete")
                <div class="alert alert-success">project successfuly created check project list</div>
                @else
                <div class="alert alert-danger">{{ $error }}</div>
                @endif
               
            @endforeach
    
    </div>
    @endif
    <form class="custom_form" action="{{ route("office_create_proposal_post") }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" name="project_name" class="form-control"  placeholder="Enter project name">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="introduction" placeholder="Introduction: Give brief summary and background information on ">{{ old("introduction") }}</textarea>
        </div>

        <h5>Provide detailed project location:</h5>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" value="{{ old("region") }}" name="region"  class="form-control"  placeholder="Region">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="district" value="{{ old("district") }}"  class="form-control"  placeholder="District">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="city"  value="{{ old("city") }}" class="form-control"  placeholder="City">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" value="{{ old("village") }}" name="village"class="form-control"  placeholder="Village">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" value="{{ old("gps_longitude") }}" name="gps_longitude" class="form-control"  placeholder="GPS longitude">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" value="{{ old("gps_latitude") }}" name="gps_latitude" class="form-control"  placeholder="GPS latitude">
                </div>
            </div>
        </div>

        <div class="form-group">
            <textarea class="form-control" value="{{ old("goal") }}"   name="goal" placeholder="What are the overall goals and objective for this project? "></textarea>
        </div>


        <h5>Provide detailed project location:</h5>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <input type="text" name="objective[]" class="form-control"  placeholder="Objective #1">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <textarea name="activity[]" class="form-control" placeholder="1st Activity to accomplish objective #1"></textarea>                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <textarea name="indicator[]" class="form-control" placeholder="What would be an indicator  of success for objective #1 "></textarea>       </div>
            </div>
        </div>
       <div class="row" id="added_area">

       </div>
        
        <div class="row">
        
            <div class="col-md-6">
                <div class="form-group">
                    <button type="button" class="btn  btn-block add_btn  bnt-block" id="add_activity_btn"><i class="fa fa-plus"></i>Add an activity </button>          
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <button class="btn  btn-block add_btn  " id="add_indicator_btn" type="button"><i class="fa fa-plus"></i>Add an indicator</button>          
              </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                <button type="button" class="btn  btn-block add_btn  " id="add_objective_btn"><i class="fa fa-plus"></i>Add an Objective </button>          
              </div>
            </div>
            <div class="col-md-12"> 
                <div class="form-group">
                    <textarea class="form-control" value="{{ old("impact") }}"  name="impact" placeholder="What are the expected impact from this project? "></textarea>
                </div>
            </div>
            <div class="col-md-12"> 
                <div class="form-group">
                    <textarea  name="community" value="{{ old("community") }}" class="form-control" placeholder="What are the community contribution; if any? "></textarea>
                </div>
            </div>
            <div class="col-md-12"> 
                <div class="form-group">
                    <textarea  name="evaluate" value="{{ old("evaluate") }}"   class="form-control" placeholder="How will you monitor and evaluate this project? "></textarea>
                </div>
            </div>


            <div class="col-md-12"> 
                <div class="form-group">
                    <table class="table table-striped table-bordered" style="    background: #fff;">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Quantity</th>
                                <th>cost</th>
                                <th>Total</th>
                            </tr>
                        </thead>    
                        <tbody id="items_body">
                            <tr>
                                <td><a href=""><i class="fa fa-plus addplusicon"></i>ADD</a></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>

                        <h5>Estimated budget </h5>
                    </table>
                </div>
            </div>



            <div class="col-md-12"> 
                <div class="row">
                    <div class="col-md-6 col-offset-2 text-center">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">SUBMIT</button>   
                       </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="btn btn-info btn-block btn-lg">SAVE DRAFT</div>   

                        </div>
                    </div>
                </div>
            </div>

            



        </div>

        


    </form>
</div>
@endsection


@section("styles")
<link rel="stylesheet" href="{{ asset(env('APP_ASSETS_FOLDER').'office/project.css') }}">
@endsection


@section("scripts")

@endsection