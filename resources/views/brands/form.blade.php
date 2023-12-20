<div class="form-group">
    {!! Form::label('id', '編號:') !!}
    {!! Form::text('id', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('bname', '名稱:') !!}
    {!! Form::text('bname', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('location', '地區:') !!}
    {!! Form::text('location', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('brand_time', '成立時間:') !!}
    {!! Form::text('brand_time', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>