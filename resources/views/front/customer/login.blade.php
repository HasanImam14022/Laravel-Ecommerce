@extends('front.master')

@section('body')




<div class="loginCheck">
                <!-- header lists -->
                <div class="loginMsg">
                    <h4><b><marquee>If you have already an account please SignIn Otherwise create an account using sign up</marquee></b></h4>
                </div>
                <div class="errorMsg">
                <h3 style="color:red">
                  <?php
                  $error = Session::get('error');
                  if($error)
                  {
                    echo $error;
                    Session::put('error','');
                  }
                  ?>
                  </h3>
                </div>
            <div class="signInSignUp">    
				<div class="signIn">
				
					
					
						<a href="#" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal1">
							<span class="fa fa-unlock-alt" aria-hidden="true"></span> Sign In </a>
                    
                    
                </div> 
                <div class="signUp">  
					
						<a href="#" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal2">
							<span class="fa fa-pencil-square-o" aria-hidden="true"></span> Sign Up </a>
                    
                    
                </div>    
            </div>    
				
				<!-- //header lists -->
                </div>
                
                

@endsection

