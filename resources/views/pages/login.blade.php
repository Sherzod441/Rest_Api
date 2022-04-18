@extends('layouts.app')

@section('active3')
active
@endsection

@section('content')

    <div class="container">

        @if(session('success'))
        <div class="alert alert-success">
        <ul>
            <li>{{session('success')}}</li>
        </ul>
        </div>
        @endif

        <div class="modal-dialog mt-5" role="document">
          <div class="modal-content rounded-5 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
              <h2 class="fw-bold mb-0">Sign up for free</h2>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        
            <div class="modal-body p-5 pt-0">
              <form action="{{ route('post') }}" method="POST">
                @csrf
                <div class="form-floating mb-3">
                  <input type="email" name="email" class="form-control rounded-4" id="floatingInput" value="{{old('email')}}" placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" name="password" class="form-control rounded-4" id="floatingPassword" value="{{ old('password') }}" placeholder="Password">
                  <label for="floatingPassword">Password</label>
                </div>
                <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Sign up</button>
              </form>
            </div>
          </div>
        </div>
    </div>  
@endsection

