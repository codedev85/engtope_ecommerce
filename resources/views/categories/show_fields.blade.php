<!-- Id Field -->
{{-- <div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $category->id !!}</p>
</div> --}}

<!-- Name Field -->
<div class="form-group">
    {{-- {!! Form::label('name', 'Name:') !!} --}}
    <h3>{!! $category->name !!}</h3>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $category->created_at->format('D,m,Y') !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $category->updated_at->format('D,m,Y') !!}</p>
</div>

