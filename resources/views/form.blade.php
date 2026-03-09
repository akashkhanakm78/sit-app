<div>
    <h1>Form</h1>
<form method="POST"  action="/submit">
@csrf
 <input type="text" name="name" placeholder="Enter Your Name">
 <br>
 <br>
 <input type="text" name="age" placeholder="Enter Your Age">
 <br>
 <br>
 <input type="email" name="email" placeholder="Enter Your Email">
<br>
<br>
<button type="submit">Submit Form</button>
</form>
</div>
