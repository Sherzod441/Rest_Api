@extends('layouts.app')

@section('active4')
active
@endsection

@section('content')
    <div class="container">
       <h1>Products page</h1>
         <div class="row mt-5">
          <div class="col-12">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Maxsulot nomi</th>
                  <th scope="col">Maxsulot narxi</th>
                  <th scope="col">Maxsulot soni</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($data as $el)
                <tr>
                  <th scope="row">{{ $el->id }}</th>
                  <td>{{ $el->product_name }}</td>
                  <td>{{ $el->product_price }}</td>
                  <td>{{ $el->product_how_many }}</td>
                </tr>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
   
@endsection


