<div class="col-md-12">
    <form method="post" action="{{route('add_city')}}">
        {{ csrf_field() }}
        <label for="package_name" class="col-md-6 control-label">City Name*</label>
        <input type="text" placeholder="City Name" id="city_name" name="city_name"
               required/>
        <label for="description" class="col-md-6 control-label">Description*</label>
        <textarea type="text" placeholder="Description" id="description" name="description" required
        ></textarea>
        <label for="star1price" class="col-md-6 control-label">Price of star 1*</label>
        <input type="text" placeholder="Price" id="star1price" name="star1price" required/>
        <label for="star2price" class="col-md-6 control-label">Price of star 2*</label>
        <input type="text" placeholder="Price" id="star2price" name="star2price" required/>
        <label for="star3price" class="col-md-6 control-label">Price of star 3*</label>
        <input type="text" placeholder="Price" id="star3price" name="star3price" required/>
        <label for="star4price" class="col-md-6 control-label">Price of star 4*</label>
        <input type="text" placeholder="Price" id="star4price" name="star4price" required/>
        <label for="star5price" class="col-md-6 control-label">Price of star 5*</label>
        <input type="text" placeholder="Price" id="star5price" name="star5price" required/>
        <label for="image1" class="col-md-6 control-label">Add image of the city*</label>
        <input type="text" id="image1" name="image1" required/>
        <label for="image2" class="col-md-6 control-label">Add image of the city*</label>
        <input type="text" id="image2" name="image2" required/>
        <label for="image3" class="col-md-6 control-label">Add image of the city</label>
        <input type="text" id="image3" name="image3"/>


        <input class="base-text-color" type="submit" value="Send"/>
    </form>

</div>