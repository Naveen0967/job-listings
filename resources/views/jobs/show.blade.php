@extends('layouts.main')

@section('banner', 'Job: '.$job->title)

@section('content')
<div class="col-lg-8 post-list">

    <div class="single-post d-flex flex-row">
        <div class="thumb">
            @if($job->company && $job->company->logo)
                <img src="{{ $job->company->logo->getUrl() }}" alt="{{ $job->company->name }}">
            @endif
        </div>
        <div class="details">
            <div class="title d-flex flex-row justify-content-between">
                <div class="titles">
                    <a href="#"><h4>{{ $job->title }}</h4></a>
                    @if($job->company)
                        <h6>{{ $job->company->name }}</h6>		
                    @endif			
                </div>
            </div>
            <p>
                {{ $job->short_description }}
            </p>
            <h5>Job Nature: {{ $job->job_nature }}</h5>
            <p class="address"><span class="lnr lnr-map"></span> {{ $job->address }} </p>
            <p class="address"><span class="lnr lnr-database"></span> {{ $job->salary }}</p>
            @if($job->isApplied)
             <input id="apply" type="button" class="btn btn-success" user-id="{{Auth::check() ? Auth::user()->id : null}}" style="margin:0 0 0 25pc" value="Applied" disabled job-id={{ $job->id }} ></input>
             @else
             <input id="apply" type="button" class="btn btn-success" user-id="{{Auth::check() ? Auth::user()->id : null}}" style="margin:0 0 0 25pc" value="Apply Now" job-id={{ $job->id }} ></input>
            @endif
        </div>
    </div>	
    <div class="single-post job-details">
        <h4 class="single-title">Whom we are looking for</h4>
        <p>
            {{ $job->full_description }}
        </p>
    </div>
    <!-- provide the csrf token -->
<input type="hidden" name="csrf-token" content="{{ csrf_token() }}" ></input>
    <div class="single-post job-experience">
        <h4 class="single-title">Experience Requirements</h4>
        <p>
            {{ $job->requirements }}
        </p>
    </div>	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
    
        $(document).ready(function(){

        $(document).on('click', '#apply', function(event) {
        event.preventDefault();
        var userId = document.getElementById("apply").getAttribute("user-id")
        if(userId){
         applyJob();
        }
        else{
            alert("Please LogIn or SignUp to Continue")
        }
        });

        var applyJob   =    function (){
            var jobId = document.getElementById("apply").getAttribute("job-id");
            var userId = document.getElementById("apply").getAttribute("user-id");
            var CSRF_TOKEN = $('input[name="csrf-token"]').attr('content');
            document.getElementById("apply").value = "Applying...";
            var sendData = {
                "jobId" : jobId,
                "userId" : userId
            }
            $.ajax({
                    /* the route pointing to the post function */
                    url: 'apply',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {_token: CSRF_TOKEN, message:sendData},
                    dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        document.getElementById("apply").value = "Applied";
                        document.getElementById("apply").disabled = true;
                    }
                }); 
            }
        });

</script>												
</div>
@endsection