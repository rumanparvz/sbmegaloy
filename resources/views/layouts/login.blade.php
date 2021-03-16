@extends('layouts.base')

@section('login')
<div class="container">  
    <div class="row"> 
     
        <div class="col-md-12 ">
            <div class="text-center"> <h2> Login </h2> <br> <span> Via</span></div>
          <div class="d-flex text-center"> 
            <input class="btn btn-lg bg-primary" value="Facebook" type="button">
            <input style="background: rgb(66 133 244);color: white;margin-left: 7%;" class="btn btn-lg ml-5" value="Google" type="button">
          </div>
            
<form class="loginform" >
    <div class="form-group">
      <label class="lead" for="number">Phone Number</label>
      <input  style="" type="text" class="form-control frminput" id="number" placeholder="Enter Phone Number">
     
    </div>
    <div class="form-group">
      <label class="lead" for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control frminput" id="exampleInputPassword1" placeholder="Password">
    </div>
  
    <button type="submit" class="btn btn-primary loginbtn btn-block">Login</button>
    <div class="text-center s-area"> Don't have an account? <span class="text-warning"> <a href="{{'fg'}}"> Sign up</a></span> </div>
    <div class="text-center s-area"> <span class="text-warning"> <a href="{{''}}"> Forget Password</a></span> </div>
  </form>
        </div>
    </div>
</div>
    
@endsection
