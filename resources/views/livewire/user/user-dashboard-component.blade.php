<div class="container"> 
  <div class="row"> 
    <div class="col-md-4"> 
      <div class="card"> 
        <div class="text-center">
          <img style="width: 41%" class="img-circle rounded-circle" src="{{asset('img/userimg/index1.jpg')}}" class="rounded" alt="...">
          <h3> Md Noman Parvej</h3>
          <h5> 01706691048</h5>
        </div>
      </div>
          <div> 
         <div class=" menu-web relative menu-bg-white border no-border-t">
                                <ul>
                                    <li><a href="#"><p>Basic Information</p></a></li>
                                    <li><a href="#"><p>Address</p></a></li>                       
                                    <li><a href="#"><p>Order List</p></a></li>                       
                                    <li><a href="#"><p>Change Password</p></a></li>                       
                                    <li><a href="#"><p>Transction</p></a></li>                       
                                </ul>
                            </div>
          </div>
     
    </div>
    <div class="col-md-8"> 
       <div class="mt-5"> 
         <h3> Personal information</h3> <hr class="hr">
       </div>
      <div class="mt-5"> 
        <div class="d"> 
          <p > <strong class="f-18"> SBMegaloy Number : </strong>   <span class="ml-52"> 01706691048</span></p>
        </div>
        <div class="d-flex" style="display: flex" > 
          <p style="width: 24%"> <strong class="f-18"> Name : </strong> </p> 
           <p class="ml-52"> {{Auth::user()->name}}</p>
        </div>
        <div class="d-flex"style="display: flex"> 
          <p style="width: 24%"> <strong class="f-18"> Father's Name : </strong></p> 
            <p class="ml-52"> Md Shahar Uddin Mir</p>
        </div>
        <div class="d" style="display: flex"> 
          <p style="width: 24%"> <strong class="f-18"> Contact Number : </strong> </p>  
          <p class="ml-52"> 01706691048</p>
        </div>
        <div class="d" style="display: flex"> 
          <p style="width: 24%"> <strong class="f-18"> Email : </strong> </p>  
          <p class="ml-52"> {{Auth::user()->email}} </p>
        </div>
       
        <div class="d" style="display: flex"> 
          <p style="width: 24%"> <strong class="f-18"> Gender : </strong> </p>  
          <p class="ml-52"> Male</p>
        </div>

        <div class="d" style="display: flex"> 
          <p style="width: 24%"> <strong class="f-18"> Date of Birth: : </strong> </p>  
          <p class="ml-52"> 10 april 2020</p>
        </div>

        <div class="d" style="display: flex"> 
          <p style="width: 24%"> <strong class="f-18"> Member Since : </strong> </p>  
          <p class="ml-52"> 10 april 2020</p>
        </div>

         <div class="d" style="display: flex"> 
          <p style="width: 24%"> <strong class="f-18"> Occupation : </strong> </p>  
          <p class="ml-52"> Developer</p>
        </div>

      </div>
    </div>
  </div>
</div>