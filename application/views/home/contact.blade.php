<div id="ctr-contact" class="panel panel60 inset">
    <div class="content">
        <h2>Contact!</h2>
        <p>Want to get in touch with us?</p>
        <p>Fill out the contact form and we'll gladly return your inquiry, as quickly as possible.</p>

        {{ Form::open('contact', 'POST', array('id'=>'frm-contact')) }}

        <div class="form-row">
            <div class="form-label">{{ Form::label('con-name', 'Name', array('autocomplete'=>'off')) }}</div>
            <div class="form-input">{{ Form::text('con-name') }}</div>
        </div>

        <div class="form-row">
            <div class="form-label">{{ Form::label('con-email', 'Email', array('autocomplete'=>'off')) }}</div>
            <div class="form-input">{{ Form::text('con-email') }}</div>
        </div>

        <div class="form-row">
            <div class="form-label">{{ Form::label('con-inquiry', 'Inquiry') }}</div>
            <div class="form-input">{{ Form::select('con-inquiry', array(''=>'--', '1'=>'Ding', '2'=>'Farts', '3'=>'Awesomeness')) }}</div>
        </div>

        <div class="form-row">
            <div class="form-label">{{ Form::label('con-message', 'Message') }}</div>
            <div class="form-input">{{ Form::textarea('con-message') }}</div>
        </div>

        <div class="form-row">
            <div class="form-label">&nbsp;</div>
            <div class="form-input">{{ Form::checkbox('con-copy', 1, false, array('id'=>'con-copy')).Form::label('copy_me', 'Send a copy of this contact to myself') }}</div>
        </div>

        <div class="form-row controls">
            <div class="form-label">&nbsp;</div>
            <div class="form-input">{{ Form::button('Send', array('id'=>'btn-con-submit', 'class'=>'btn btn-primary')) }}</div>
        </div>

        {{ Form::close() }}
    </div>
</div>