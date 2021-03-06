{{-- input location parameters --}}

<div class="row">
    <div class="col-md-8" style="margin:0 auto; float:none;">
        <form action="/admin/map" method="post">
            @csrf

            <p>
            <p>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Location Name"  />
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" placeholder="Enter Location Address"  />
            </div>

            <div class="field">
                <label for="lat">Latitude</label>

                <div class="form-group">
                    <input 
                        class="form-control @error('lat') is-danger @enderror"
                        type="number"
                        name="lat"
                        step=0.0000001
                        min="-90"
                        max="+90" 
                        placeholder="Enter Latitude Value in the range -90 and +90"
                        value={{ old('lat') }}  />
                    
                    @error('lat')
                        <p class="help is-danger">{{ $errors->first('lat') }}</p>
                    @enderror

                </div>

            </div>

            <div class="form-group {{ $errors->has('lng') ? 'has-error' : ''}}">
                <label for="lng">Longitude</label>
                <input type="number" step=0.0000001  min="-180"  max="+180" name="lng" class="form-control" placeholder="Enter Longitude Value in the range -180 and +180"  />
                {!! $errors->first('lng', '<p class="help-block">:message</p>') !!}
            </div>

            <input type="submit" class="btn btn-info" name="submit" value="Enter">
            <p>
            <p>
        </form>
    </div>

</div>
<!-- /.row -->

