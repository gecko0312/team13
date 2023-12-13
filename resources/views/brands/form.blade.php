<div class="form-group">
    {!! Form::label('num', '編號:') !!}
    {!! Form::text('num', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('name', '名稱:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('local', '地區:') !!}
    {!! Form::text('local', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('time', '成立時間:') !!}
    {!! Form::text('time', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>