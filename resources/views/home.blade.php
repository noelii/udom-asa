@extends('master')

@section('content')
<div class=" contains submission-form row">
    <div id="mapid" class="col-lg-7">
    </div>
    <div id="form-selection" class="col-lg-5">

      <div class="card">
        <div class="card-header">
          Report a Problem
        </div>
        <div class="card-body">
          <h5 class="card-title">How to Report a problem</h5>
          <p class="card-text">Drag a pin to the area where you want to report problem choose the problem attach evidence picture and submit for the authority to get it solved or you can search location and drag a pin on the specific area of the problem.</p>

          <form class="type">
            <p>
                <input type="radio" name="type" id="location" />
                <label for="location">use current location</label>
                <input type="radio" name="type" id="otherlocation" />
                <label for="otherlocation">use other location</label>
            </p>
        </form>
        </div>
      </div>

        <form  action="formUpload" method="POST">
          <select class="form-select" aria-label="Default select example">
            <option selected> SELECT THE PROBLEM TO ADDRESS</option>
            @foreach ($issues as $issue_item)
            <option value="{{$issue_item->pi_ID}}">{{$issue_item->p_issue}}</option>
            @endforeach
          </select>
          
          <input id="lng" type="text" name="longtude"/>
          <input id="lat" type="text" name="latitude"/>
          <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 imgUp">
              <div class="imagePreview"></div>
          <label class="btn btn-primary">
                                        Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                  </label>
            </div><!-- col-2 -->
            <div class="col-sm-3"></div>
           </div><!-- row -->
          
          <button class="btn btn-success" type="submit">SUBMIT PROBLEM REPORT</button>
        </form>
    </div>
</div> 
    
@endsection

