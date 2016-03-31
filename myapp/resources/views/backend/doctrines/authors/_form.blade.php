{{--@include('errors.list')--}}
<div class="row">
    <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">

        <div class="form-group has-feedback @if($errors->any()) {!! $errors->has('general_name') ? 'has-error' : 'has-success' !!}@endif">
            {!! Form::label('general_name', 'นามหรือฉายา :', ['class' => 'control-label']) !!}
            {!! Form::text('general_name', null, ['class' => 'form-control ']) !!}
            @if($errors->any())
                @if($errors->has('general_name'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                @else
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                @endif
            @endif
        </div>

        <div class="form-group has-feedback @if($errors->any()) {!! $errors->has('first_name') ? 'has-error' : 'has-success' !!}@endif">
            {!! Form::label('first_name', 'ชื่อ :', ['class' => 'control-label']) !!}
            {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
            @if($errors->any())
                @if($errors->has('first_name'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                @else
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                @endif
            @endif
        </div>

        <div class="form-group has-feedback @if($errors->any()) {!! $errors->has('picture') ? 'has-error' : 'has-success' !!}@endif">
            {!! Form::label('picture', 'รูปภาพ :', ['class' => 'control-label']) !!}
            {!! Form::file('picture', null) !!}
            @if($errors->any())
                @if($errors->has('picture'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                @else
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                @endif
            @endif
        </div>

        <div class="form-group">
            {!! Form::label('note', 'หมายเหตุ :', ['class' => 'control-label']) !!}
            {!! Form::textarea('note', null, ['class' => 'form-control', 'row' => 8]) !!}
        </div>

        <div class="form-group text-center">
            {!! Form::reset('ล้างข้อมูล', ['class' => 'btn btn-default']) !!}
            {!! Form::submit($submit, ['class' => 'btn btn-primary']) !!}
        </div>

    </div>
</div>

