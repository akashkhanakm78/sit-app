<div>
  <form action="/create-class" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter your Name" >
    <br><br>
    <input type="email" name="email" placeholder="Enter your Email" >
    <br><br>
    <input type="text" name="dpt" placeholder="Enter your Dpt" >
    <br><br>
    <input type="number" name="age" placeholder="Enter your age" >
    <br><br>
    <input type="number" name="roll" placeholder="Enter your Roll no." >
    <br><br>
    <input type="text" name="phone" placeholder="Enter your phone number" >
    <br><br>

    <br><br>
    <button type="submit">Create</button>

  </form>

 

<table>
  <tr >
    <td>Name</td>
    <td>Email</td>
    <td>Dpt</td>
    <td>Age</td>
    <td>Roll</td>
    <td>Phone Number</td>
    <td>action</td>
</tr>

 @foreach($classes as $class)

   <tr>
    <td>{{$class->name}}</td>
    <td>{{$class->email}}</td>
    <td>{{$class->dpt}}</td>
    <td>{{$class->age}}</td>
    <td>{{$class->roll}}</td>
    <td>{{$class->phone}}</td>
    <td>
      <form action="/delete-class/{{$class->id}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
      </form>
    </td>
</tr>

 @endforeach

</table>



</div>
