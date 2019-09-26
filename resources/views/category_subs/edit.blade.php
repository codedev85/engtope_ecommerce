@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Category Sub
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($categorySub, ['route' => ['categorySubs.update', $categorySub->id], 'method' => 'patch']) !!}

                        @include('category_subs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection