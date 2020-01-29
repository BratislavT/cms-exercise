{{-- display stored mails --}}

<table class="table">
    <thead>
        <th>No.</th>
        <th>Recipient</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Status</th>
    </thead>

    <tbody>
        @foreach($mails as $mail)
            @if (Auth::user()->id == $mail->user_id)
	        <tr>
                    <th>{{ $mail->id }}</th>
                    <td>{{ $mail->recipient}}</td>
                    <td>{{ $mail->subject }}</td>
                    <td>{{ $mail->message }}</td>
                    <td>{{ $mail->status }}</td>
                </tr>
            @endif
        @endforeach 
    </tbody>
</table>
 
