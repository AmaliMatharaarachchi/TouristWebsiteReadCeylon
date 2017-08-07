{{--this is the form of for create tour package--}}

<form method="post" action="{{route('add_package')}}">
    {{ csrf_field() }}
    <label for="name" class="control-label">Package Name*</label>
    <input type="text" id="name" name="name" class="form-control"
           required/>
    <label for="description" class="control-label">Description*</label>
                                <textarea type="text" id="description" name="description" class="form-control"
                                          required></textarea>
    <label for="price" class=" control-label">Price($)*</label>
    <input type="text" id="price" name="price" class="form-control" required/>
    <label for="days" class=" control-label">Number of Days*</label>
    <input type="text" id="days" name="days" class="form-control" required/>
    <label for="cities" class=" control-label">Select cities*</label>
    <select name="cities[]" class="selectpicker" data-live-search="true" data-width="100%" multiple
            title="Select cities...">
        @foreach($cities as $city)
            <option value="{{$city->id}}">{{$city->name}}</option>
        @endforeach
    </select>


    <input class="base-text-color" type="submit" value="Send"/>
</form>
