{{-- author: rico --}}

<link href="{{ asset('/css/misc.css') }}" rel="stylesheet">

<div class="col py-1">

    {{-- box-former --}}
    <div class="d-flex align-items-end justify-content-between m-0 p-0">

        {{-- search section --}}
        <div class="searchField">
            <form action="/search" method="get">
                <div class="input-group">
                <input type="search" class="form-control rounded w-100" name="searchstring" placeholder="Search Game" aria-label="Search" aria-describedby="search-addon">

                <select class="form-select ms-2" aria-label="Search category" name="searchcat">
                    <option value="Game" selected>Name</option>
                    <option value="ReleaseDate">Release Date</option>
                    {{-- <option value="Developer">Developer</option>
                    <option value="Publisher">Publisher</option> --}}
                    <option value="Platform">Platform</option>
                    {{-- <option value="Rating">Rating 1-5</option> --}}
                    <option value="Sales">Sales</option>
                </select>

                <button class="buttonColor ms-2" type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>
        </div>

        <div>
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
