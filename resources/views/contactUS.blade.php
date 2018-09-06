{{-- @extends('layouts.app') --}}
@section('content')
<div class="container">
</div>
<div>
  <br>
  <h2>Contact Us Today</h2>
<h3></h3>Yes, you can make Elavon Residences your new home! Simply make an appointment to see one of our professional leasing agents and let them help you find the perfect residence to meet your specific needs. Just fill out the form below and one of our leasing agents will contact you promptly.
</h3>
<br><br>
<p>8888 Cummings Vista Apt. <br> 101, Manhattan, NY 95473<br>
Phone: (512) 232-1111
</p>
</div>
@if(Session::has('success'))
   <div class="alert alert-success">
     {{ Session::get('success') }}
   </div>
@endif

{!! Form::open(['route'=>'contactus.store']) !!}

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
{!! Form::label('Name:') !!}
{!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
<span class="text-danger">{{ $errors->first('name') }}</span>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
{!! Form::label('Email:') !!}
{!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
<span class="text-danger">{{ $errors->first('email') }}</span>
</div>
<div class="form-group {{ $errors->has('Phone') ? 'has-error' : '' }}">
{!! Form::label('Phone:') !!}
{!! Form::text('phone', old('subject'), ['class'=>'form-control', 'placeholder'=>'Enter Phone']) !!}
<span class="text-danger">{{ $errors->first('phone') }}</span>
</div>
<div class="form-group {{ $errors->has('subject') ? 'has-error' : '' }}">
{!! Form::label('Subject:') !!}
{!! Form::text('subject', old('subject'), ['class'=>'form-control', 'placeholder'=>'Enter Subject']) !!}
<span class="text-danger">{{ $errors->first('subject') }}</span>
</div>

<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
{!! Form::label('Message:') !!}
{!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
<span class="text-danger">{{ $errors->first('message') }}</span>
</div>

<div class="form-group">
<button class="btn btn-success">Contact US!</button>
</div>

{!! Form::close() !!}

</div>

</body>
</html>
{{-- @extends('layouts.footer') --}}
@endsection