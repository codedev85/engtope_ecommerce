<!-- Id Field -->
{{-- <div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $product->id !!}</p>
</div> --}}
<div class="container-fluid">
<!-- Name Field -->
<div class="col-md-6">
        <div class="form-group">
            {{-- {!! Form::label('name', 'Product Name:') !!} --}}
            <h3>{!! Ucfirst($product->name) !!}</h3>
        </div>

          <!-- Amount Field -->
          <div class="form-group">
            {!! Form::label('amount', 'Amount:') !!}
            <p>&#8358; {!! number_format($product->amount, 2 ,'.',',') !!}</p>
        </div>

        <!-- Description Field -->
        <div class="form-group">
            {!! Form::label('description', 'Description:') !!}
           
            <p>{!! $product->description !!}</p>
        </div>

        <!-- Image Field -->


      

        <!-- Category Sub Id Field -->
        <div class="form-group">
            {!! Form::label('category_sub_id', 'Category Sub Id:') !!}
            <p>{!! $product->category_sub_id !!}</p>
        </div>
</div>
<?php 
 $product_img = json_decode($product->image);
//  dd($product_img);

 ?>


  <div class="col-md-2"></div>
    <div class="col-md-3">
        <div class="form-group">
            {{-- {!! Form::label('image', 'Image:') !!} --}}
        <img src="{{ url('storage/'.$product_img [0])}}" width="200" height="200"/>
        <img src="{{ url('storage/'.$product_img [1])}}" width="200" height="200"/>
        <img src="{{ url('storage/'.$product_img [2])}}" width="200" height="200"/>
        </div>
        {{-- <div class="form-group">
            {!! Form::label('image', 'Image:') !!}
            <p>{!! $product->image !!}</p>
        </div>
        <div class="form-group">
            {!! Form::label('image', 'Image:') !!}
            <p>{!! $product->image !!}</p>
        </div> --}}
    </div>
 </div>

<!-- Created At Field -->
{{-- <div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $product->created_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $product->deleted_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $product->updated_at !!}</p>
</div> --}}

