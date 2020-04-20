@extends('users.base')
  
@section('content')
<<!-- The Modal -->
<div id="createUserModal" class="modal">
    <div class="modal-content">
        <span class="close"><a href="{{ route('users.index') }}"></a>&times;</span>
        <div class="wrapper">
            <div class="row">
                <div class="col-12">
                    <h4>Add new user</h4>
                    <hr><br>
                </div>            
            </div>

            <div class="row" style="padding-top:15px;">

                <div class="col-12">

                @if ($message = Session::get('error'))
                    <div class="alert" style="margin-bottom:10px;">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>  
                        {{ $message }}
                    </div>
                @endif
                    <form method="POST" action="{{ route('users.store') }}">
                        @csrf
                        <div class="form-group">    
                            <label for="name">First Name</label>
                            <input type="text" class="form-control" name="name"/>
                            @error('name')
                                <p style="color:red;font-weight:600;text-align:center;font-size:11px;">Please enter your name</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="surname">Last Name</label>
                            <input type="text" class="form-control" name="surname"/>
                            @error('surname')
                                <p style="color:red;font-weight:600;text-align:center;font-size:11px;">Please enter your last name</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email"/>
                            @error('email')
                                <p style="color:red;font-weight:600;text-align:left;font-size:11px;">Please enter a valid email address</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="city">Position</label>
                            <input type="text" class="form-control" name="position"/>
                            @error('position')
                                <p style="color:red;font-weight:600;text-align:left;font-size:11px;">Please enter your current position</p>
                            @enderror
                        </div>  
                        <div class="row" style="padding-top:15px;">
                            <div class="col-2"></div>

                            <div class="col-10 ">
                                <button type="button" id="createUserCancelButton" class="button2 right">Cancel</button>                    
                                <button type="submit" id="save_button" class="button right">Save</button>
                            <div>
                        </div>

                </form>
                </div>
            </div>
        </div>

        </div>
        </div>               
        
    </div>

</div>

<Script>
    var createUserModal = document.getElementById("createUserModal");
    createUserModal.style.display = "block";

    var closeUserModalSpan = document.getElementsByClassName("close")[0];
    closeUserModalSpan.onclick = function() {
        createUserModal.style.display = "none";
        window.location.href = "/users"
    }

    var cancelButton = document.getElementById("createUserCancelButton");
    cancelButton.onclick = function() {
        window.location.href = "/users"
    }

</Script>
@endsection