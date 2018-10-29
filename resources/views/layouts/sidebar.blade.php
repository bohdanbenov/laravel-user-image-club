<div class="col-sm-3 offset-sm-0 blog-sidebar">
    @if(auth()->check() && auth()->user()->admin)
        <form method="get" action="/admin/sort">
            {{ csrf_field() }}

            <div class="form-check">
                <input class="form-check-input" type="radio" value="firstname" id="firstname" name="radioGroup" checked>
                <label class="form-check-label" for="firstname">Firstname</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" value="lastname" id="lastname" name="radioGroup">
                <label class="form-check-label" for="lastname">Lastname</label>
            </div>

            <hr>

            <div class="form-group row">
                <label for="country" class="col-sm-2 col-form-label">Country</label>
                <div class="ml-auto col-sm-9">
                    <select class="custom-select mr-sm-2" id="country" name="country">
                        @foreach($countries as $country)
                            <option value="{{ $country }}">{{ $country }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <hr>

            <div class="form-group row">
                <label for="city" class="col-sm-2 col-form-label">City</label>
                <div class="ml-auto col-sm-9">
                    <select class="custom-select mr-sm-2" id="city" name="city">
                        @foreach($cities as $city)
                            <option value="{{ $city }}">{{ $city }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <hr>

            <div class="form-group row">
                <label for="sex" class="col-sm-2 col-form-label">Sex</label>
                <div class="ml-auto col-sm-9">
                    <select class="custom-select mr-sm-2" id="sex" name="sex">
                        @foreach($sexes as $sex)
                            <option value="{{ $sex }}">{{ $sex }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <hr>

            <div class="form-group row">
                <label for="fromAge" class="col-sm-2 col-form-label">From</label>
                <div class="ml-auto col-sm-9">
                    <input type="number" class="form-control" id="fromAge" name="fromAge" value="1">
                </div>
            </div>

            <div class="form-group row">
                <label for="toAge" class="col-sm-2 col-form-label">To</label>
                <div class="ml-auto col-sm-9">
                    <input type="number" class="form-control" id="toAge" name="toAge" value="120">
                </div>
            </div>

            <hr>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Sort</button>
            </div>

        </form>

    @else
        <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
        </div>

        <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
                <li><a href="#">GitHub</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Facebook</a></li>
            </ol>
        </div>
    @endif
</div>


