<div>
    <form action="/upload" method="POST" enctype="multipart/formdata">
 @csrf
 <input type="file" name="image" >

 <button type="submit">Upload</button>
</form>

@error('image')
{{$message}}
@enderror

</div>
