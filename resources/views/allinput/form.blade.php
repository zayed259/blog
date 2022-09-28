@include('partial.flash')
@include("partial.error")

<div class="form-group">
    {!! Form::label('title', 'Text:', ['class' => 'form-label']) !!}
    {!! Form::text('title', null, ['required', 'class'=>'form-control', 'id'=>'title', 'placeholder'=>'Title']) !!}
</div>



<div class="form-group">
    {!! Form::label('checkbox', 'Checkbox: ', ['class' => 'form-label']) !!}
    {!! Form::checkbox('checkbox', 'value', true) !!}
</div>
{{-- <div class="form-group">
    <p>Select Category</p>
    @foreach($categories as $category)
        <label class="checkbox-inline">
            {!! Form::checkbox('categories[]', $category->id, null) !!} {{ $category->name }}
        </label>
    @endforeach
</div> --}}
<div class="form-group">
    {!! Form::label('image', 'Image:', ['class' => 'form-label']) !!}
    {!! Form::file('image', null, ['required', 'class'=>'form-control', 'id'=>'image', 'placeholder'=>'Image']) !!}
</div>
<div class="form-group">
    {!! Form::label('file', 'File:', ['class' => 'form-label']) !!}
    {!! Form::file('file', null, ['required', 'class'=>'form-control', 'id'=>'file', 'placeholder'=>'File']) !!}
</div>
<div class="form-group">
    {!! Form::label('date', 'Date:', ['class' => 'form-label']) !!}
    {!! Form::date('date', null, ['required', 'class'=>'form-control', 'id'=>'date', 'placeholder'=>'Date']) !!}
</div>
<div class="form-group">
    {!! Form::label('time', 'Time:', ['class' => 'form-label']) !!}
    {!! Form::time('time', null, ['required', 'class'=>'form-control', 'id'=>'time', 'placeholder'=>'Time']) !!}
</div>
<div class="form-group">
    {!! Form::label('datetime', 'Datetime:', ['class' => 'form-label']) !!}
    {!! Form::datetime('datetime', null, ['required', 'class'=>'form-control', 'id'=>'datetime', 'placeholder'=>'Datetime']) !!}
</div>
<div class="form-group">
    {!! Form::label('datetime-local', 'Datetime-local:', ['class' => 'form-label']) !!}
    {!! Form::datetimeLocal('datetime-local', null, ['required', 'class'=>'form-control', 'id'=>'datetime-local', 'placeholder'=>'Datetime-local']) !!}
</div>
<div class="form-group">
    {!! Form::label('month', 'Month:', ['class' => 'form-label']) !!}
    {!! Form::month('month', null, ['required', 'class'=>'form-control', 'id'=>'month', 'placeholder'=>'Month']) !!}
</div>
<div class="form-group">
    {!! Form::label('week', 'Week:', ['class' => 'form-label']) !!}
    {!! Form::week('week', null, ['required', 'class'=>'form-control', 'id'=>'week', 'placeholder'=>'Week']) !!}
</div>
<div class="form-group">
    {!! Form::label('number', 'Number:', ['class' => 'form-label']) !!}
    {!! Form::number('number', null, ['required', 'class'=>'form-control', 'id'=>'number', 'placeholder'=>'Number']) !!}
</div>
<div class="form-group">
    {!! Form::label('range', 'Range:', ['class' => 'form-label']) !!}
    {!! Form::range('range', null, ['required', 'class'=>'form-control', 'id'=>'range', 'placeholder'=>'Range']) !!}
</div>
<div class="form-group">
    {!! Form::label('color', 'Color:', ['class' => 'form-label']) !!}
    {!! Form::color('color', null, ['required', 'class'=>'form-control', 'id'=>'color', 'placeholder'=>'Color']) !!}
</div>
<div class="form-group">
    {!! Form::label('url', 'Url:', ['class' => 'form-label']) !!}
    {!! Form::url('url', null, ['required', 'class'=>'form-control', 'id'=>'url', 'placeholder'=>'Url']) !!}
</div>
<div class="form-group">
    {!! Form::label('search', 'Search:', ['class' => 'form-label']) !!}
    {!! Form::search('search', null, ['required', 'class'=>'form-control', 'id'=>'search', 'placeholder'=>'Search']) !!}
</div>
<div class="form-group">
    {!! Form::label('tel', 'Tel:', ['class' => 'form-label']) !!}
    {!! Form::tel('tel', null, ['required', 'class'=>'form-control', 'id'=>'tel', 'placeholder'=>'Tel']) !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'Email:', ['class' => 'form-label']) !!}
    {!! Form::email('email', null, ['required', 'class'=>'form-control', 'id'=>'email', 'placeholder'=>'Email']) !!}
</div>
<div class="form-group">
    {!! Form::label('password', 'Password:', ['class' => 'form-label']) !!}
    {!! Form::password('password', ['required', 'class'=>'form-control', 'id'=>'password', 'placeholder'=>'Password']) !!}
</div>
<div class="form-group">
    {!! Form::label('hidden', 'Hidden:', ['class' => 'form-label']) !!}
    {!! Form::hidden('hidden', null, ['required', 'class'=>'form-control', 'id'=>'hidden', 'placeholder'=>'Hidden']) !!}
</div>
<div class="form-group">
    {!! Form::label('textarea', 'Textarea:', ['class' => 'form-label']) !!}
    {!! Form::textarea('textarea', null, ['required', 'class'=>'form-control', 'id'=>'textarea', 'placeholder'=>'Textarea']) !!}
</div>
<div class="form-group">
    {!! Form::label('select', 'Select:', ['class' => 'form-label']) !!}
    {!! Form::select('select', ['1' => 'One', '2' => 'Two', '3' => 'Three'], null, ['required', 'class'=>'form-control', 'id'=>'select', 'placeholder'=>'Select']) !!}
</div>
<div class="form-group">
    {!! Form::label('select-multiple', 'Select-multiple:', ['class' => 'form-label']) !!}
    {!! Form::select('select-multiple[]', ['1' => 'One', '2' => 'Two', '3' => 'Three'], null, ['required', 'class'=>'form-control', 'id'=>'select-multiple', 'placeholder'=>'Select-multiple', 'multiple']) !!}
</div>
<div class="form-group">
    {!! Form::label('file', 'File:', ['class' => 'form-label']) !!}
    {!! Form::file('file', ['required', 'class'=>'form-control', 'id'=>'file', 'placeholder'=>'File']) !!}
</div>
<p>Select radio button</p>
<div class="form-group">
    {!! Form::label('radio', 'Radio:', ['class' => 'form-label']) !!}
    {!! Form::radio('radio', '1', true, ['required', 'class'=>'form-control', 'id'=>'radio', 'placeholder'=>'Radio']) !!}
</div>
<div class="form-group">

    {{ Form::radio('category', 1, true, ['class'=>'form-check-input', 'id' => 'inlineRadio1']) }}
    {{ Form::label('inlineRadio1', 'Web Development', ['class' => 'form-check-label']) }}

    {{ Form::radio('category', 2, '', ['class'=>'form-check-input', 'id' => 'inlineRadio2']) }}
    {{ Form::label('inlineRadio2', 'Web Design', ['class' => 'form-check-label']) }}
    
    {{ Form::radio('category', 3, '', ['class'=>'form-check-input', 'id' => 'inlineRadio3']) }}
    {{ Form::label('inlineRadio3', 'SEO', ['class' => 'form-check-label']) }}

    {{ Form::radio('category', 4, '', ['class'=>'form-check-input', 'id' => 'inlineRadio4']) }}
    {{ Form::label('inlineRadio4', 'Other', ['class' => 'form-check-label']) }}

</div>
<div class="form-group">
    {!! Form::label('type', 'Number:', ['class' => 'form-label']) !!}
    {!! Form::number('serialnumber', null, ['required', 'class'=>'form-control', 'id'=>'serialnumber', 'placeholder'=>'Serial No.']) !!} 
</div>
<div class="form-group">
    {!! Form::label('type', 'Date:', ['class' => 'control-label']) !!}
    {!! Form::date('name', \Carbon\Carbon::now()) !!} 
</div>

<div class="form-group">
    {!! Form::label('type', 'Select Range:', ['class' => 'control-label']) !!}
    {!!  Form::selectRange('number', 10, 20);!!}
</div>
<div class="form-group">
    {!! Form::label('type', 'Select Month:', ['class' => 'control-label']) !!}
    {!!  Form::selectMonth('month')!!}       
</div>










