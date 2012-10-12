<div class="container contact">
    {{ Form::open('contact') }}
    Name: {{ Form::text('name') }}<br />
    Email: {{ Form::text('email') }}<br />
    Reason: {{ Form::select('reason', array(''=>'--', '1'=>'Ding', '2'=>'Farts', '3'=>'Awesomeness')) }}<br />
    {{ Form::textarea('thebody') }}<br />
    {{ Form::submit('Send', array('class'=>'btn btn-primary')) }}
    {{ Form::close() }}
</div>