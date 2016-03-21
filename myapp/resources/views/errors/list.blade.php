<div class="row">
    <div class="col-md-12">
        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $value)
                    <li>{{ $value }}</li>
                @endforeach
            </ul>
        @endif
    </div>
</div>