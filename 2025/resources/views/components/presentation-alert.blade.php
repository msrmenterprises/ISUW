@extends('master')
@section('content')
<style>   
button {   
       background-color: #4CAF50;   
       width: 100%;  
        color: orange;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=email], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
    
</style>  
<div class="k_cheading">
		<h1>ISUW<span class="k_greencolor"> 2022 Presentations</span> </h1>
		<img src="/public/uploads/images/kborder_bottom.png" alt=""> 
	</div> 
<form method="POST" action="{{ url('presentation')}}"> 
@csrf 
        <div class="container">   
            <input type="password" name="password" id="password" placeholder="Enter Password" name="password" required>  
            <button type="submit">Login</button>   
            <!-- <input type="checkbox" checked="checked"> Remember me   
            <button type="button" class="cancelbtn"> Cancel</button>   
            Forgot <a href="#"> password? </a>    -->
        </div>   
    </form> 
@endsection