@extends('master')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
    <ul>
    @foreach($errors->all() as $error)

        <li>{{ $error }}</li>

    @endforeach
    </ul>
</div>
@endif
<style>
     .content{
        width: 50%;
        margin: auto;
    }
    .content-header{
        text-align: center;
        font-size: 40px;
        font-family: 'Courier New', Courier, monospace;
    }
    .content-input{
        font-size: 25px;
        margin: 10px 0px;
    }
    .inputs input{
        height: 40px;
        width: 100%;
        margin: 10px 0px;
        font-size: 25PX;
    }
    .add-employee input{
        font-size: 25px;
        border: none;
        background-color: lightblue;
        padding: 10px;
    }
</style>
<div class="content">
    <div class="content-header">Add Employee</div>
    <div class="content-body">
        <form action="{{route('employees.store')}}" method="Post" enctype="multipart/form-data">
        @csrf
            <div class="content-input">
                Employee Name 
                <div class="inputs">
                    <input type="text" name="name" class="form-control" />
                </div>
            </div>

            <div class="content-input">
                Employee Address
                <div class="inputs">
                    <input type="text" name="address" class="form-control" />
                </div>
            </div>

            <div class="content-input">
                Employee Phone Number
                <div class="inputs">
                    <input type="text" name="phone_number" class="form-control" />
                </div>
            </div>

            <div class="add-employee">
                <input type="submit" class="btn btn-primary" value="Add" />
            </div>
        </form>
    </div>
</div>

@endsection('content')