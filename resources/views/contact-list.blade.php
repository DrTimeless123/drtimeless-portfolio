<h1> All Message-Inbox Boss</h1>
@foreach ($contact as $contact) 
<div style="border:1px solid black;margin:10px; padding:10px">
    <b>Name:</b> {{$contact->name}} <br>
    <b>Email:</b>{{$contact->email}} <br>
    <b>Message:</b> {{$contact->message}} <br>
    <small>{{$contact->create_at}}</small>
</div>
@endforeach
<a href="/contact">Go back to form</a>