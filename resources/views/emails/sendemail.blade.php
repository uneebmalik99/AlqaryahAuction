@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-lg-6 col-10 d-block mx-auto">
                <form action="{{ url('sendmail') }}" method="POST">
                    @csrf
                    @if (session('success'))
                        <p class="alert alert-success">{{ session('success') }}</p>
                    @endif
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control @error('title') is-valid @enderror">
                        @error('title')>
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea name="response" id="response" rows="5"
                            class="form-control @error('message') is-invalid @enderror"></textarea>
                        @error('message')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button class="btn btn-primary" type="submit">Send</button>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection
