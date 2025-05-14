@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div> 
@else
    <div class="alert alert-SUCCESS">
        <h3> successfully submitted </h3>
    </div>
@endif
