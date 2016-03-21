@include('errors.list')
<div class="row">
    <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">

        <div class="form-group">
            <label for="title">หัวข้อข่าว :</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="หัวข้อข่าว">
        </div>

        <div class="form-group">
            <label for="category_id">ประเภทข่าว :</label>
            <select id="category_id" name="category_id" class="form-control">
                <option value="0">เลือกประเภทข่าว</option>
                @foreach($category_news as $value)
                    <option value="{{ $value->id }}">{{ $value->category }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="date">วัน/เวลา ของข่าว :</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>

        <div class="form-group">
            <label for="picture">รูปภาพ :</label>
            <input type="file" class="form-control" id="picture" name="picture">
        </div>

        <div class="form-group">
            <label for="details">รายละเอียด :</label>
            <textarea class="form-control" rows="8" id="details" name="details"></textarea>
            <script>
                CKEDITOR.replace( 'details' );
            </script>
        </div>

        <div class="form-group">
            <label for="reference">แหล่งที่มา :</label>
            <input type="text" class="form-control" id="reference" name="reference" placeholder="แหล่งที่มา">
        </div>

    </div>
</div>

<button type="submit" class="btn btn-default center-block">{{ $submit }}</button>