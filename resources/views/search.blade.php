<link href="{{ asset('/css/detail.css') }}" rel="stylesheet">

<div class="col search border border-1 border-dark py-1">

    {{-- box-former --}}
    <div class="d-flex align-items-center justify-content-between m-0 p-0">

        {{-- search section --}}
        <div class="searchField">
            <div class="input-group">
            <input type="search" class="form-control rounded" placeholder="Search Game" aria-label="Search" aria-describedby="search-addon" />
            <button type="button" class="btn btn-primary">Search</button>
            </div>
        </div>

        <div>
            {{-- login/register section --}}
            <div class="loginRegisterLink">
                <div class="d-flex justify-content-end">
                    <div>Login</div>
                    <div>&nbsp;|&nbsp;</div>
                    <div>Register</div>
                </div>
                <div class="text-end">Add Game</div>
            </div>

        </div>
    </div>

</div>
