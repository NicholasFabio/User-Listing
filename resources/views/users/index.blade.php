@extends('users.base')
 
@section('content')

<div class="wrapper">

    <div class="row" style="padding-top:15px;">
        <div class="col-2"></div>
        <div class="col-8">
            <!-- <button class="" id="addNewUser"> Add new user</button> -->
            <a class="button right" href="{{ route('users.create') }}"> Add new user</a>
        </div>
    </div>
</div>
   

<div class="wrapper">
    

    <div class="row" style="padding-top:10px;">
        <div class="col-2"></div>
        <div class="col-8">
            @if ($message = Session::get('success'))
                <div class="alert" style="margin-bottom:15px;">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>  
                    {{ $message }}
                </div>
            @endif
        
            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>FWfwf</th>
                    <th width="80px"></th>
                </tr>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->surname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>    
                        <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
            
                            <button type="submit" class="button-delete"> <i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="col-2"></div>   
    </div>

    
</div>

  
    {!! $users->links() !!}
      
@endsection