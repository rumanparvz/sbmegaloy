@extends('layouts.base')

@section('login')
<div class="container">  
    <div class="row"> 
     
        <div class="col-md-12 ">
            <div style="margin-top: 5%;" class="text-center"> <h2> Create an Account </h2> </div>
     
            
<form class="loginform" >
    <div class="form-group">
      <label class="lead" for="fname">First Name</label>
      <input type="text" class="form-control frminput" id="fname" placeholder="Enter Your First Name">
    </div>
    <div class="form-group">
        <label class="lead" for="lname">Last Name</label>
        <input type="text" class="form-control frminput" id="lname" placeholder="Enter Your Last Name">
      </div>
      <div class="form-group">
        <label class="lead" for="number">Phone Number</label>
        <input  style="" type="text" class="form-control frminput" id="number" placeholder="Enter Phone Number">
       
      </div>
    <div class="form-group">
      <label class="lead" for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control frminput" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <label class="lead" for="exampleInputPassword1">Confirm Password</label>
        <input type="password" class="form-control frminput" id="exampleInputPassword1" placeholder="Password">
      </div>
  
    <button type="submit" class="btn btn-primary loginbtn btn-block">Create An Account </button>
    <div class="text-center s-area"> if You have Already an account? <span class="text-warning"> <a href="{{'fg'}}"> Login</a></span> </div>
    {{-- <div class="text-center s-area"> <span class="text-warning"> <a href="{{''}}">  </a></span> </div> --}}
  </form>
        </div>
    </div>
</div>
    
@endsection
