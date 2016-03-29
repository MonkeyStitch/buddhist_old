<div class="row">
    <div class="col-md-12">
        @if($errors->any())
            @foreach($errors->all() as $value)
                <div class="alert alert-danger fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{--<strong>Danger!</strong> --}}
                    <strong>
                        <i class="glyphicon glyphicon-ban-circle"></i>
                    </strong>
                    {{ $value }}
                </div>
            @endforeach

        @endif
    </div>
</div>