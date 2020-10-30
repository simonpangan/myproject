<div>
    <div >
        {!! form::label('eventname','EventName')!!} 
    </div>
    <div> 
        <div>
            {!! Form::text('eventname',Null, ['class'=>'form-control', 'id'=>'eventname', 'placeholder'=>'eventname','required' => 'required']) !!}
        </div>
    <div>
</div>
<br/>
<div>
    <div >
    {!! form::label('date', 'Date') !!}
    </div>
    <div> 
        <div>
            {!! Form::text('date',Null, ['class'=>'form-control', 'id'=>'date', 'placeholder'=>'Date','required' => 'required']) !!}
        </div>
    <div>
</div>
<br/>
<div>
    <div >
    {!! form::label('time', 'Time') !!}
    </div>
    <div> 
        <div>
            {!! Form::text('time',Null, ['class'=>'form-control', 'id'=>'time', 'placeholder'=>'Time','required' => 'required']) !!}
        </div>
    <div>
</div>


<br/>
<div>
    <div >
        {!! form::label('bring','Things to bring (send through email)')!!} 
    </div>
    <div> 
        <div>
            {!! Form::text('bring',Null, ['class'=>'form-control', 'id'=>'bring', 'placeholder'=>'what to bring?','required' => 'required']) !!}
        </div>
    <div>
</div>

<br/>
<div>
    <div >
        {!! form::label('wear','Dress code (send through email))')!!} 
    </div>
    <div> 
        <div>
            {!! Form::text('wear',Null, ['class'=>'form-control', 'id'=>'wear', 'placeholder'=>'what to wear?','required' => 'required']) !!}
        </div>
    <div>
</div>

<br/>




<div class="form-group">
    {!! Form::button(isset($model)? 'Update' : 'Save' , ['class'=>'btn btn-success', 'type'=>'submit', 'onClick' => 'return confirm("Are you sure?") ;']) !!}