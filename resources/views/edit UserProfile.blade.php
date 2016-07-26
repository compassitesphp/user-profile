<!DOCTYPE html>
<html>
    <head>

        <style>
            /* .form-align{
              float:left;
             }*/
            .label-form{
                width:300px;
                float:left;
            }
        </style>
    </head>

    <body>

        <form action="/emplist" method="GET">
            <fieldset>
                <legend>Employee Profile</legend><br>
                <div class="form-align">
                    <label for="name" class="label-form">Name:</label>
                    <input type="text" id="name" name="name" value="{{$employeeName}}" >
                </div><br>

                <div class="form-align">
                    <label for="email" class="label-form">Email:</label>
                    <input type="text" id="email" name="email" value={{"$employeeEmail" }}>
                </div><br>

                <div class="form-align">
                    <label for="mobile_no" class="label-form">Mobile-No:</label>
                    <input type="text" id="mobile-No" name="mobile-No" value="{{$employeeMobile}}" >
                </div><br>

                <div class="form-align">
                    <label for="cur" class="label-form">Emergency-No:</label>
                    <input type="text" id="cur" name="cur" value="{{$employeeEmergencyNo}}" >
                </div><br>

                <div class="form-align">
                    <label for="address"  class="label-form">Address:</label>
                    <textarea name="comments" id="address" cols="50" rows="3" > </textarea>//////////////
                </div><br>

                <div class="form-align">
                    <label for="doj"  class="label-form">D.O.J: </label>
                    <input type="text" id="doj" name="doj" value="{{$employeeDoj}}" required>
                </div><br>

                <div class="form-align">
                    <label for="currentDesignation"  class="label-form">Current Designaton:</label>
                    <input type="text" id="currentDesignation" name="currentDesignation" value="$employeeDesignation">
                </div><br>
                <div class="container">
                    <div class="dropdown">
                        <div class="form-align">

                            <label for="sel1">Department:</label> {{-- Have a doubt regarding the default selected values in technologies --}}

                            <select class="form-control"  id="sel1" >
                                <br>
                                @foreach($response as $departmentData)
                               
                                    @if($departmentData->id== $_GET['dept_id'])
                                    {
                                    
                                    <option selected='selected' value="{{$departmentData->dept_name}}"> </option>
                                   
                                    }
                                    @else
                                    {
                                        <option value="{{$departmentData->dept_name}}"</option>

                                    }
                               
                                
                                    @endforeach

                            </select> <br>

                        </div>
                    </div>
                </div>
                </div><br>
                <div class="form-align">
                    <label for="currentDesignation"  class="label-form">Technologies:</label>

                    <div class="checkbox">
                        
                        @foreach($response1 as $technologyData)
                        @if(isset($technologyData->id))
                        {
                            <label><input type="checkbox" name="tech_id" value=" {{$technologyData->tech_name}} " checked ></label>
                        }
                        @else
                        {
                        
                            <label><input type="checkbox">{{$technologyData->tech_name}}</label>/////////////////////
                        }
                        @endif
                        @endforeach

                    </div>
                </div><br>

                <div class="form-align">
                    <label for="cur" class="label-form">Project:</label>
                    <input type="text" id="cur" name="cur" value="{{$employeeProject}}">
                </div><br>

                <div class="form-align">
                    <label for="mobile_no" class="label-form">Reporting Manager:</label>
                    <input type="text" id="mobile-No" name="mobile-No" value="{{$employeeProject}}">
                </div><br>
                <div id="userpic" class="userpic">
                    <div class="js-preview userpic__preview"></div>
                    <div class="btn btn-success js-fileapi-wrapper">
                        <div class="js-browse">
                            <span class="btn-txt">Upload Photo:</span>////////////////////////////
                            <input name="filedata" type="file">
                        </div>
                        <div class="js-upload" style="display: none;">
                            <div class="progress progress-success"><div class="js-progress bar"></div></div>
                            <span class="btn-txt">Uploading</span>
                        </div>
                    </div>
                </div><br>
                </form>

                <div class="submit">
                    <input type="submit" value="Submit">
                </div><br>

            </fieldset>
        </form>    

    </body>
</html>