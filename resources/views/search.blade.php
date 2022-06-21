{{-- author: rico --}}

<link href="{{ asset('/css/misc.css') }}" rel="stylesheet">

<div class="col py-1 d-flex justify-content-between w-100">

        {{-- box-former --}}
        <div class="d-flex align-items-end m-0 p-0 w-100">

            {{-- search section --}}
            <div class="searchField">
                <form action="/search" method="get">
                    <div class="input-group">
                        <div class="col-6 me-2 border">
                            <input type="search" size=5 class="form-control search2 rounded w-100" name="searchstring" placeholder="Search Game" aria-label="Search" aria-describedby="search-addon">
                        </div>

                        <div class="col-5 border">
                            <select class="form-select me-2 search2" aria-label="Search category" name="searchcat">
                                <option value="Game" selected>Name</option>
                                <option value="ReleaseDate">Release Date</option>
                                {{-- <option value="Developer">Developer</option>
                                <option value="Publisher">Publisher</option> --}}
                                <option value="Platform">Platform</option>
                                {{-- <option value="Rating">Rating 1-5</option> --}}
                                <option value="Sales">Sales</option>
                            </select>
                        </div>

                        <div class="col-2 d-flex align-items-center">
                            <button class="buttonColor ms-2" type="submit" class="btn btn-primary">Search</button>
                        </div>


                </div>
            </form>


        </div>
        <div class="col-3 d-flex justify-content-end">
            {{-- login/register section --}}
            <div class="loginRegisterLink">
                <div class="d-flex justify-content-end">
                    <div>Login</div>
                    <div>&nbsp;|&nbsp;</div>
                    <div>Register</div>
                </div>
            </div>
        </div>


    </div>

</div>
