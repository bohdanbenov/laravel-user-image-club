<div class="col-sm-3 offset-sm-0 blog-sidebar">
    <form method="get" action="/admin/sort">
        {{ csrf_field() }}

        <div class="form-row">
            <div class="form-group col-md-9">
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="firstname" id="firstname" name="radioGroup" checked>
                    <label class="form-check-label" for="firstname">Firstname</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" value="lastname" id="lastname" name="radioGroup">
                    <label class="form-check-label" for="lastname">Lastname</label>
                </div>
            </div>

            <div class="form-group col-md-3">
                <button type="submit" class="btn btn-primary">Sort</button>
            </div>
        </div>
    </form>

    <hr>

    <form method="get" action="/admin/filter/country">
        {{ csrf_field() }}

        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="country" class="col-form-label">Country</label>
            </div>

            <div class="form-group col-md-6">
                <select class="custom-select" id="country" name="country">--}}
                    @foreach($countries as $country)
                        <option value="{{ $country }}">{{ $country }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-3">
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </div>
    </form>

    <hr>

    <form method="get" action="/admin/filter/city">
        {{ csrf_field() }}

        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="city" class="col-form-label">City</label>
            </div>

            <div class="form-group col-md-7">
                <select class="custom-select mr-sm-2" id="city" name="city">
                    @foreach($cities as $city)
                        <option value="{{ $city }}">{{ $city }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-3">
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </div>
    </form>

    <hr>


    <form method="get" action="/admin/filter/sex">
        {{ csrf_field() }}

        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="sex" class="col-form-label">Sex</label>
            </div>

            <div class="form-group col-md-7">
                <select class="custom-select mr-sm-2" id="sex" name="sex">
                    @foreach($sexes as $sex)
                        <option value="{{ $sex }}">{{ $sex }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-3">
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </div>
    </form>

    <hr>

    <form method="get" action="/admin/filter/age">
        {{ csrf_field() }}


        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="fromAge" class="col-form-label">From</label>
                <label for="toAge" class="col-form-label">To</label>
            </div>

            <div class="form-group col-md-7">
                <div class="ml-auto">
                    <input type="number" class="form-control" id="fromAge" name="fromAge" value="1">
                </div>

                <div class="ml-auto">
                    <input type="number" class="form-control" id="toAge" name="toAge" value="120">
                </div>
            </div>

            <div class="form-group col-md-3">
                <button type="submit" class="btn btn-primary my-btn">Filter</button>
            </div>
        </div>
    </form>

    <hr>

    <div class="form-check">
        <a href="/admin" class="btn btn-primary">Reset filters</a>
    </div>
</div>


