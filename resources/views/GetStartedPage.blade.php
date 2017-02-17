@extends('layouts.master')

@section('content')

 <div class="form">
            
            <ul class="tab-group">
                <li class="tab active"><a href="#signup">Sign Up</a></li>
                <li class="tab"><a href="#login">Log In</a></li>
            </ul>
            
            <div class="tab-content">
                <div id="signup">   
                    <h1>Sign Up for Free</h1>
                    
                    <form action="/" method="post">
                    
                        <div class="top-row">
                            <div class="field-wrap">
                                <label>
                                    First Name<span class="req">*</span>
                                </label>
                                <input type="text" required autocomplete="off" />
                            </div>
                    
                            <div class="field-wrap">
                                <label>
                                    Last Name<span class="req">*</span>
                                </label>
                                <input type="text" required autocomplete="off"/>
                            </div>
                        </div>

<!-- Radio Buton Not Working

						<div class="field-wrap">
                            <label>
                                Sex<span class="req">*</span>
                            </label>
                            <input type="radio" name="gender" value="male" checked> Male
                            <input type="radio" name="gender" value="female"> Female
  							<input type="radio" name="gender" value="other"> Other

                        </div>
 -->
                        <div class="field-wrap">
                            <label>
                                Email Address<span class="req">*</span>
                            </label>
                            <input type="email" required autocomplete="off"/>
                        </div>
                        
                        <div class="field-wrap">
                            <label>
                                Set A Password<span class="req">*</span>
                            </label>
                            <input type="password" required autocomplete="off"/>
                        </div>
                       
<!-- Checkbox not working

                        <div class="field-wrap">
                            <label>
                                I Agree to all the Terms and Condtions<span class="req">*</span>
                            </label>
                        	<input type="checkbox" name="agree" value="agree">
                        </div> 

-->

                        <button type="submit" class="button button-block"/>Get Started</button>
                    
                    </form>

                </div>
                
                <div id="login">   
                    <h1>Welcome Back!</h1>
                    
                    <form action="/" method="post">
                    
                        <div class="field-wrap">
                            <label>
                                Email Address<span class="req">*</span>
                            </label>
                            <input type="email"required autocomplete="off"/>
                        </div>
                    
                        <div class="field-wrap">
                            <label>
                                Password<span class="req">*</span>
                            </label>
                            <input type="password"required autocomplete="off"/>
                        </div>
                    
                        <p class="forgot"><a href="#">Forgot Password?</a></p>
                    
                        <button class="button button-block"/>Log In</button>
                    
                    </form>

                </div>
                
            </div><!-- tab-content -->
            
    </div>

@endsection('content')