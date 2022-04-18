@extends('layouts.app')

@section('active2')
active
@endsection

@section('content')

 

    <div class="container">

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


        <div class="modal-dialog mt-5" role="document">
            <div class="modal-content rounded-5 shadow">
              <div class="modal-header p-5 pb-4 border-bottom-0">
                <!-- <h5 class="modal-title">Modal title</h5> -->
                <h2 class="fw-bold mb-0">Register for free</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
          
              <div class="modal-body p-5 pt-0">
                <form action="{{ route('addProduct') }}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" name="product_name" class="form-control rounded-4" id="floatingname" placeholder="name">
                        <label for="floatingname">Maxsulot nomini kiriting</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="number" name="product_price" class="form-control rounded-4" id="floatingsurname" placeholder="surname">
                        <label for="floatingsurname">Maxsulot narxini kiriting</label>
                      </div>
                  <div class="form-floating mb-3">
                    <input type="number" name="product_how_many" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Maxsulotni nechta ekanligini kiriting</label>
                  </div>
                  <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Mahsulot qo'shish</button>
                </form>
              </div>
            </div>
          </div>
    </div>   
@endsection

