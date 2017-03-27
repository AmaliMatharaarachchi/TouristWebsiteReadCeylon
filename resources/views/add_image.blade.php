<form method="post" enctype="multipart/form-data" action="{{route('upload')}}">

    {{ csrf_field() }}

    <label for="name" class="control-label">Image Name*</label>
    <input type="text" id="name" name="name" class="form-control"
           required/>
    <label for="description" class="control-label">Description*</label>
    <input type="text" id="description" name="description" class="form-control"
           required/>
    <label for="image" class="control-label">Upload Image*</label>
    <input type="file" id="image" name="image" class="form-control"
           required/>

    <br>
    <input class="base-text-color" type="submit" value="Send"/>
</form>