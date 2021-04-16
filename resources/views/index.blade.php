@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card p-5">
                    <h1>School Fee Calculator</h1> <br>
                    <i class="text-danger">Note School fees Must be 100,000</i> <br>
                    @include('layouts.messages')
                    <form action="/generate" method="POST">
                        @csrf
                        <input type="number" name="fees" class="form-control" placeholder="Enter Amount of School Fees PAid"> <br>
                        <input type="submit" class="btn btn-info text-light" value="Add School Fees">
                    </form>
                   
                </div>
            </div>
        </div>
    </div>    
@endsection