@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">You are logged in!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if($message = Session::get('success'))
                        <div class="alert alert-success alert-block" role="alert">
                            <button type="button" class="close" data-dismiss="alert" style='color:green'>x</button>
                            <strong style='color:green'>{{ $message }}</strong>
                        </div>
                    @endif
                    @if(count($errors) > 0)
                        <div class="alert alert danger">
                            <button type="button" class="close" data-dismiss="alert" style='color:red'>x</button>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li style='color:red'>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ url('home/send') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="txtDate" class="col-md-4 col-form-label text-md-right">Desired Schedule</label>

                            <div class="col-md-6">
                                <input id="txtDate" type="date" name="schedule" /> 
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">Phone Number</label>

                            <div class="col-md-6">
                                <input type="number" id="phone" name="phone">
                            </div>
                            
                        </div>

                        <div class="form-group row">
                            <label for="message" class="col-md-4 col-form-label text-md-right">How Can I Help?</label>

                            <div class="col-md-6">
                                <textarea id="message" name="message" class="form-control"> </textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <input type="submit" name="send" class="btn btn-primary" value="Send"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
