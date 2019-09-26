<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Category Id Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Categories:') !!}
    {!! Form::number('category_id', null, ['class' => 'form-control']) !!}
    <select name="category_id" class="form-control">
        @foreach($categories as $category)
          <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
</div> --}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('categorySubs.index') !!}" class="btn btn-default">Cancel</a>
</div>
