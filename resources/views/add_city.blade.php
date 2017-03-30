{{--this is the form for create cities--}}
<form method="post" action="{{route('create_city')}}">
    {{ csrf_field() }}
    <label for="name" class="control-label">City Name*</label>
    <input type="text" id="name" name="name"  class="form-control"
           required/>
    <label for="description" class="control-label">Description*</label>
    <textarea type="text" id="description" name="description"  class="form-control"
           required></textarea>
    <label for="star3price" class="control-label">Price of 3 star hotels($)</label>
    <input type="star3price" id="star3price" name="star3price"  class="form-control"/>
    <label for="star4price" class="control-label">Price of 4 star hotels($)</label>
    <input type="text" id="star4price" name="star4price"  class="form-control"/>
    <label for="star5price" class="control-label">Price of 5 star hotels($)</label>
    <input type="text" id="star5price" name="star5price"  class="form-control"/>
    <label for="images" class=" control-label">Select Images*</label>

    <div class="picker">
        <select data-max-options="3" name="images[]" class="image-picker show-labels masonry show-html selectpicker" data-live-search="true" title="Select cities..." data-width="100%" data-limit="3" name="images[]" multiple="multiple">

            @foreach($images as $image)
                {{--@foreach($images as $key => $image)--}}
                <option data-img-label='{{$image->name}}' data-img-src='img\{{$image->url}}' value='{{$image->id}}'>{{$image->name}}</option>
                {{--<option data-img-label='{{$image->name}}' data-img-src='img\{{$image->url}}' value='{{$key+1}}'>{{$image->name}}</option>--}}

            @endforeach
        </select>
    </div>
    {{--<input type="hidden" class="control-label" name="images" value=("select").imagepicker() />--}}

    <input class="base-text-color" type="submit" value="Send"/>
</form>





