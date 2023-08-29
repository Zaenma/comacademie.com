@if (session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong></strong> {{ session('message') }}

    </div>
@endif

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong></strong> {{ session('success') }}

    </div>
@endif


@if (session('status'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong></strong> {{ session('status') }}

    </div>
@endif
@if (session('error'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong></strong> {{ session('error') }}

    </div>
@endif
