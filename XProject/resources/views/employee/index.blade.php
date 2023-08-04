@extends('master')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
    {{ $message }}
</div>

@endif
<style>
    .content{
        width: 100%;
    }
    .content-header{
        text-align: center;
        font-size: 40px;
        font-family: 'Courier New', Courier, monospace;
    }
    table {
        width: 70%;
        
        margin: auto;
        border: 1px solid black;
    }
    th,td{
        height: 40px;
        border: 1px solid black;
        font-size: 18px;
        font-family: 'Courier New', Courier, monospace;
        padding-left: 10px;
    }
    input {
        border: none;
        height: 25px;
        background-color: red;
        color: white;
    }
    /* a{
        text-decoration: none;
        padding: 2.5px;
    } */
    .add-employee{
        text-align: center;
        font-size: 20px;
        margin: 15px 0px;

    }
    .add-employee a{
        text-decoration: none;
        color: black;
        background-color: lightblue;
        padding: 5px;
        font-family: 'Courier New', Courier, monospace;
    }
</style>

<div class="content">
    <div class="content-header">
        Employees Data
    </div>
    <div class="add-employee">
        <a href="{{ route('employees.create') }}" > Add Employees</a>
    </div>
    <div class="content-body">
        <table class="table-bordered">
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Other</th>
            </tr>
            @if(count($data) > 0)

                @foreach($data as $row)
                    <tr>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->address }}</td>
                        <td>{{ $row->phone_number }}</td>
                        <td>
                     
                        <form method="post" action="{{ route('employees.destroy', $row->id) }}">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('employees.show',$row->id ) }}" class="btn btn-primary btn-sm" 
                                style="background-color: blue;color:white; "><i class="bi bi-eye"></i></a>
                                <a href="{{ route('employees.edit',$row->id ) }}" class="btn btn-warning btn-sm"
                                style="background-color: green ;color:black;"><i class="bi bi-pencil"></i></a>
                                <i class="bi bi-trash3" value="Delete" ></i> 
                            </form>
                        </td>
                    </tr>
                    @endforeach

                @else
                    <tr>
                        <td colspan="5" class="text-center">No Data Found</td>
                    </tr>
            @endif
        </table>
        {!! $data->links() !!}
    </div>
</div>

@endsection