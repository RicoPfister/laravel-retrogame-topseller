{{-- author: rico --}}

<link href="{{ asset('/css/misc.css') }}" rel="stylesheet">

<div class="col py-1">

    {{-- box-former --}}
    <div class="d-flex align-items-end justify-content-between m-0 p-0">

        {{-- search section --}}
        <div class="searchField">
            <form action="search" method="get">
                <div class="input-group">
                <input type="search" class="form-control rounded w-100" name="searchstring" placeholder="Search Game" aria-label="Search" aria-describedby="search-addon">

                <select class="form-select ms-2" aria-label="Search category" name="searchcat">
                    <option selected>Name</option>
                    <option value="1">Release Date</option>
                    <option value="2">Developer</option>
                    <option value="2">Publisher</option>
                    <option value="3">Rating 1-5</option>
                    <option value="3">Sales</option>
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
