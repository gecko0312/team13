<div class="form-group">
    {!! Form::label('id', '編號：') !!}
    {!! Form::text('id', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('bid', '廠牌：') !!}
    {!! Form::select('bid', $brands, $brandsSelected, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('product_model', '產品型號:') !!}
    {!! Form::text('product_model', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('size', '尺寸：') !!}
    {!! Form::text('size', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('nits', '亮度：') !!}
        {!! Form::text('nits', null, ['class' => 'form-control']) !!}
    </div>
<div class="form-group">
{!! Form::label('hz', '更新率：') !!}
{!! Form::text('hz', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('panel', '面板：') !!}
{!! Form::text('panel', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('speaker', '喇叭：') !!}
{!! Form::text('speaker', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('resolution', '解析度：') !!}
{!! Form::text('resolution', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('price', '價錢：') !!}
{!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>
