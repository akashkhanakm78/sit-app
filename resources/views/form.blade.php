<div>
    <h1>Form</h1>

<form method="POST"  action="/submit">
@csrf
 <input type="text" name="name" value='{{old("name")}}' placeholder="Enter Your Name">
 <br>
 @error('name')
    <p style="color: red;">{{ $message }}</p>
 @enderror
 <br>
 <input type="text" name="age" value='{{old("age")}}' placeholder="Enter Your Age">
 <br>
 @error('age')
    <p style="color: red;">{{ $message }}</p>
 @enderror
 <br>
 <input type="email" name="email" value='{{old("email")}}' placeholder="Enter Your Email">
<br>
@error('email')
    <p style="color: red;">{{ $message }}</p>
 @enderror
<br>
<input type="password" name="password" placeholder="Enter Your Password">
<br>
@error('password')
    <p style="color: red;">{{ $message }}</p>
 @enderror
<br>
<input type="password" name="password_confirmation" placeholder="Confirm Your Password">
<br>
@error('password_confirmation')
    <p style="color: red;">{{ $message }}</p>
 @enderror
<br>
<button type="submit">Submit Form</button>
</form>
</div>
