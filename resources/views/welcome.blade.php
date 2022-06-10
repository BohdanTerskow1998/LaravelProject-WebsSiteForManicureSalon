@extends('template')
@section('form-control')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
     @endif
    <form name="form" id="contactForm" action="{{route('users')}}" method="POST">
    @csrf
        <div class="form-floating mb-3">
            <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
            <label style="font-size: 15px;" for="name">Name</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="email" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
            <label style="font-size: 15px;" for="email">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" name="text" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
            <label style="font-size: 15px;" for="message">Message</label>
        </div>
        <button class="btn btn-primary" class="save" id="submitButton" name="btn" type="submit">Send</button>
    </form>
    <br /><br />
    <ul>
        @foreach($new_models as $user)
            <li>{{$user->name}}:<br />"<i>{{$user->text}}</i>"</li> <br />
        @endforeach
    </ul>
    <div style="text-align: center;">{{ $new_models->links('vendor.pagination.simple-tailwind') }}</div>
@endsection