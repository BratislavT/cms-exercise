{{-- email form --}}

<div class="col-md-8" style="margin:0 auto; float:none;">
    <form action="/admin/mail" method="post">
        {{ csrf_field() }}

        <input type="hidden" name="user_id" >

        <div class="form-group {{ $errors->has('recipient') ? 'has-error' : ''}}">
            <label for="recipient">Recipient</label>
            <input 
                class="form-control"
                type="text"
                name="recipient"
                placeholder="Enter Recipient Email"
                value="{{ old('recipient') }}">
            {!! $errors->first('recipient', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="form-group {{ $errors->has('subject') ? 'has-error' : ''}}">
            <label for="subject">Subject</label>
            <input type="text" name="subject" class="form-control" placeholder="Enter Subject"  />
            {!! $errors->first('subject', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="form-group {{ $errors->has('message') ? 'has-error' : ''}}">
            <label for="message">Message</label>
            <textarea name="message" rows="5" class="form-control" placeholder="Enter Your Message Here"  ></textarea>
            {!! $errors->first('message', '<p class="help-block">:message</p>') !!}
        </div>

        <input type="hidden" name="status" >
        <input type="submit" class="btn btn-info" name="submit" value="Send email">
    </form>
</div>

