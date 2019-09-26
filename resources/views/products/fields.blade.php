<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('specification', 'Specification:') !!}
        {!! Form::textarea('specification', null, ['class' => 'form-control']) !!}
    </div>
    

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image 1:') !!}
    {!! Form::file('image[]', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image 2:') !!}
    {!! Form::file('image[]', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image 3:') !!}
    {!! Form::file('image[]', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::number('amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Category Sub Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_sub_id', 'Category Sub Id:') !!}
    {!! Form::number('category_sub_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('products.index') !!}" class="btn btn-default">Cancel</a>
</div>
