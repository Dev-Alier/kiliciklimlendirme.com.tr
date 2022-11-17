@if ($errors->any())
<div class="alert alert-danger alert-dismissible show text-start" role="alert" style="width: 100%;color: black;">
    <ul style="text-align:start">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
