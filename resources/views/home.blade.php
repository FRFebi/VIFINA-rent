@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <form action="" method="post">
        <div class="col-md-6 wrap-right">
            <div class="input-group dates-wrap">                                              
                <input id="datepicker2" class="dates form-control" id="exampleAmount" placeholder="Date & time" type="text">                        
                <div class="input-group-prepend">
                    <span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
                </div>                                          
            </div>
        </div>
        <div class="col-md-6 wrap-right">
            <div class="input-group dates-wrap">                                              
                <input id="datepicker2" class="dates form-control" id="exampleAmount" placeholder="Date & time" type="text">                        
                <div class="input-group-prepend">
                    <span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
                </div>                                          
            </div>
        </div>
        <div class="form-group">
            <label for="email">Rental</label>
            <input type="email" class="form-control" id="email disabled">
        </div>
        <div class="form-group">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
              <span class="caret"></span></button>
              <ul class="dropdown-menu">
                <li><a href="#">Avanza</a></li>
                <li><a href="#">Grand Livina</a></li>
                <li><a href="#">Beat</a></li>
            </ul>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
@endsection
