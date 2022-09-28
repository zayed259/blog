@include('partial.flash')
@include("partial.error")



{{-- <div class="form-group">
    <p>Select Category</p>
    @foreach($categories as $category)
        <label class="checkbox-inline">
            {!! Form::checkbox('categories[]', $category->id, null) !!} {{ $category->name }}
        </label>
    @endforeach
</div> --}}


<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        {!! Form::label('title', 'Text:', ['class' => 'form-label']) !!}
        {!! Form::text('title', null, ['required', 'class'=>'form-control', 'id'=>'title', 'placeholder'=>'Title']) !!}    
    </div>
    <div class="col-sm-6">
        {!! Form::label('email', 'Email:', ['class' => 'form-label']) !!}
        {!! Form::email('email', null, ['required', 'class'=>'form-control', 'id'=>'email', 'placeholder'=>'Email']) !!}
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        {!! Form::label('tel', 'Tel:', ['class' => 'form-label']) !!}
        {!! Form::tel('tel', null, ['required', 'class'=>'form-control', 'id'=>'tel', 'placeholder'=>'Tel']) !!}  
    </div>
    <div class="col-sm-6 mb-3">
        {!! Form::label('password', 'Password:', ['class' => 'form-label']) !!}
        {!! Form::password('password', ['required', 'class'=>'form-control', 'id'=>'password', 'placeholder'=>'Password']) !!}
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        {!! Form::label('image', 'Image:', ['class' => 'form-label']) !!}
        {!! Form::file('image', null, ['required', 'class'=>'form-control', 'id'=>'image', 'placeholder'=>'Image']) !!}   
    </div>
    <div class="col-sm-6">
        {!! Form::label('file', 'File:', ['class' => 'form-label']) !!}
        {!! Form::file('file', null, ['required', 'class'=>'form-control', 'id'=>'file', 'placeholder'=>'File']) !!}
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-12 mb-3 mb-sm-0">
        {!! Form::label('text', 'Textarea:', ['class' => 'form-label']) !!}
        {!! Form::textarea('description', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'description', 'placeholder'=>'Description']) !!} 
    </div>
    
</div>
<div class="form-group row">
    <div class="col-sm-4 mb-3 mb-sm-0">
        {!! Form::label('time', 'Time:', ['class' => 'form-label']) !!}
        {!! Form::time('time', null, ['required', 'class'=>'form-control', 'id'=>'time', 'placeholder'=>'Time']) !!}  
    </div>
    <div class="col-sm-4">
        {!! Form::label('date', 'Date:', ['class' => 'form-label']) !!}
        {!! Form::date('date', null, ['required', 'class'=>'form-control', 'id'=>'date', 'placeholder'=>'Date']) !!}
    </div>
    <div class="col-sm-4">
        {!! Form::label('week', 'Week:', ['class' => 'form-label']) !!}
        {!! Form::week('week', null, ['required', 'class'=>'form-control', 'id'=>'week', 'placeholder'=>'Week']) !!}
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-4 mb-3 mb-sm-0">
        {!! Form::label('month', 'Month:', ['class' => 'form-label']) !!}
        {!! Form::month('month', null, ['required', 'class'=>'form-control', 'id'=>'month', 'placeholder'=>'Month']) !!}
    </div>
    <div class="col-sm-4">
        {!! Form::label('datetime', 'Datetime:', ['class' => 'form-label']) !!}
        {!! Form::datetime('datetime', null, ['required', 'class'=>'form-control', 'id'=>'datetime', 'placeholder'=>'Datetime']) !!}
    </div>
    <div class="col-sm-4">
        {!! Form::label('datetime-local', 'Datetime-local:', ['class' => 'form-label']) !!}
        {!! Form::datetimeLocal('datetime-local', null, ['required', 'class'=>'form-control', 'id'=>'datetime-local', 'placeholder'=>'Datetime-local']) !!}
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-12 mt-3 mb-sm-0">
        {!! Form::label('text', 'Radio Option:', ['class' => 'form-label']) !!}
    {{ Form::radio('category', 1, true, ['class'=>'form-check-input', 'id' => 'inlineRadio1']) }}
    {{ Form::label('inlineRadio1', 'Web Development', ['class' => 'form-check-label']) }}

    {{ Form::radio('category', 2, '', ['class'=>'form-check-input', 'id' => 'inlineRadio2']) }}
    {{ Form::label('inlineRadio2', 'Web Design', ['class' => 'form-check-label']) }}
    
    {{ Form::radio('category', 3, '', ['class'=>'form-check-input', 'id' => 'inlineRadio3']) }}
    {{ Form::label('inlineRadio3', 'SEO', ['class' => 'form-check-label']) }}

    {{ Form::radio('category', 4, '', ['class'=>'form-check-input', 'id' => 'inlineRadio4']) }}
    {{ Form::label('inlineRadio4', 'Other', ['class' => 'form-check-label']) }}
        </div>
      
    
</div>
<div class="form-group row">
    <div class="col-sm-12 mb-3 mb-sm-0">
    {!! Form::label('select-multiple', 'Select-multiple-checkbox:', ['class' => 'form-label']) !!}
    {!! Form::checkbox('checkbox', 'value', true) !!}
    {!! Form::label('checkbox', 'Checkbox: ', ['class' => 'form-label']) !!}
   
    {!! Form::checkbox('checkbox', 'value', false) !!}
    {!! Form::label('checkbox', 'Checkbox: ', ['class' => 'form-label']) !!}
  
    {!! Form::checkbox('checkbox', 'value', false) !!}
    {!! Form::label('checkbox', 'Checkbox: ', ['class' => 'form-label']) !!}
    
    {!! Form::checkbox('checkbox', 'value', false) !!}
    {!! Form::label('checkbox', 'Checkbox: ', ['class' => 'form-label']) !!}
    </div>
  
    
    
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        {!! Form::label('select', 'Select:', ['class' => 'form-label']) !!}
        {!! Form::select('select', ['1' => 'One', '2' => 'Two', '3' => 'Three'], null, ['required', 'class'=>'form-control', 'id'=>'select', 'placeholder'=>'Select']) !!}   
    </div>
    <div class="col-sm-6 mb-3">
        {!! Form::label('select-multiple', 'Select-multiple:', ['class' => 'form-label']) !!}
        {!! Form::select('select-multiple[]', ['1' => 'One', '2' => 'Two', '3' => 'Three'], null, ['required', 'class'=>'form-control', 'id'=>'select-multiple', 'placeholder'=>'Select-multiple', 'multiple']) !!}
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-3 mb-3 mb-sm-0">
        {!! Form::label('number', 'Number:', ['class' => 'form-label']) !!}
        {!! Form::number('number', null, ['required', 'class'=>'form-control', 'id'=>'number', 'placeholder'=>'Number']) !!}
    </div>
    <div class="col-sm-3 mb-3">
        {!! Form::label('range', 'Range:', ['class' => 'form-label']) !!}
        {!! Form::range('range', null, ['required', 'class'=>'form-control', 'id'=>'range', 'placeholder'=>'Range']) !!}
    </div>
    <div class="col-sm-3 mb-3">
        {!! Form::label('url', 'Url:', ['class' => 'form-label']) !!}
        {!! Form::url('url', null, ['required', 'class'=>'form-control', 'id'=>'url', 'placeholder'=>'Url']) !!}
    </div>
    <div class="col-sm-3 mb-3">
        {!! Form::label('hidden', 'Hidden:', ['class' => 'form-label']) !!}
        {!! Form::hidden('hidden', null, ['required', 'class'=>'form-control', 'id'=>'hidden', 'placeholder'=>'Hidden']) !!}
    </div>
   
</div>
<div class="form-group row">
     
    <div class="col-sm-4 mb-3 mb-sm-0">
        {!! Form::label('type', 'Date:', ['class' => 'control-label']) !!}
        {!! Form::date('name', \Carbon\Carbon::now()) !!}
    </div>

    <div class="col-sm-4 mb-3 mb-sm-0">
        {!! Form::label('type', 'Select Range:', ['class' => 'control-label']) !!}
        {!!  Form::selectRange('number', 10, 20);!!}
    </div>
    <div class="col-sm-4 mb-3">
        {!! Form::label('type', 'Select Month:', ['class' => 'control-label']) !!}
        {!!  Form::selectMonth('month')!!}
    </div>
</div>













