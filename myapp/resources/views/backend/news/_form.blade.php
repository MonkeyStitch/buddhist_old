@include('errors.list')
<div class="row">
    <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">

        <div class="form-group">
            {!! Form::label('title', 'หัวข้อข่าว :') !!}
            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'หัวข้อข่าว']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('category_id', 'ประเภทข่าว :') !!}
            {!! Form::select('category_id', $category_news, null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('date', 'วัน/เวลา ของข่าว :') !!}
            {!! Form::date('date', \Carbon\Carbon::now()->format('Y-m-d'), ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('picture', 'รูปภาพ :') !!}
            {!! Form::file('picture', null) !!}
        </div>

        <div class="form-group">
            {!! Form::label('details', 'รายละเอียด :') !!}
            {!! Form::textarea('details', null, ['class' => 'form-control', 'row' => 8]) !!}
            <script>
                CKEDITOR.replace( 'details' );
            </script>
        </div>

        <div class="form-group">
            {!! Form::label('reference', 'แหล่งที่มา :') !!}
            {!! Form::text('reference', null, ['class' => 'form-control', 'placeholder' => 'แหล่งที่มา']) !!}
        </div>

    </div>
</div>

{!! Form::submit($submit, ['class' => 'btn btn-default center-block']) !!}