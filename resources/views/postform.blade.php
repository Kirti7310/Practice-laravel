<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Form</title>
    <style>
.input-error{
    background-color: red;
}
    </style>
</head>
<body>
<h1> Register Here </h1>


<form action="{{route('save')}}" method="POST">
@csrf
<div class="input-wrapper">
    <label for="name">Name:</label>
    <input type="text" name="name" placeholder="Enter Your Name" value= "{{ old('name') }}" class="{{$errors->first('name') ? 'input-error' :''}}">
    <span>@error('name'){{$message}}@enderror</span>
</div>

<div class="input-wrapper">
    <label for="email">Email:</label>
    <input type="email" name="email" placeholder="Enter Your Email" value ="{{ old('email') }}">
</div>

<div class="input-wrapper">
    <label for="Password">Password:</label>
    <input type="text" name="password" placeholder="Enter Your Password" value ="{{ old('password') }}">
    <span>@error('password'){{$message}}@enderror</span>
</div>

<div class="input-wrapper">
    <label for="Confirm-Password">Confirm Password:</label>
    <input type="text" name="confirmpass" placeholder="Re-Enter Your Password" value ="{{ old('confirmpass') }}">
    <span>@error('password'){{$message}}@enderror</span>

</div>

<div class="input-wrapper">

<input type="checkbox" name="cond" placeholder="" id="confirm">
    <label for="confirm">I agree to the Terms & Conditions Provided Below:</label>
</div>

<button type="submit">Submit</button>



</form>
    
</body>
</html>
