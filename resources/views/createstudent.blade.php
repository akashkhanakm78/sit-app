<div>
        <form action="/create-studen" method="POST">  
        @csrf

        <input type="text" name="name" placeholder="Enter Your name" >
        <br>
        <input type="email" name="email" placeholder="Enter Your name" >
        <br>
            <button type="submit">Create Student</button>
        </form>
</div>
