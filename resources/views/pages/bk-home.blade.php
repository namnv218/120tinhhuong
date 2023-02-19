@extends('layouts.app')
@section('content')  
<div class="container"> 

    <div class="d-flex gap-5 justify-content-center">
        <div class="list-group mx-0">
          <label class="list-group-item d-flex gap-2">
            <input class="form-check-input flex-shrink-0" type="checkbox" value="" checked="">
            <span>
              First checkbox
              <small class="d-block text-muted">With support text underneath to add more detail</small>
            </span>
          </label>
          <label class="list-group-item d-flex gap-2">
            <input class="form-check-input flex-shrink-0" type="checkbox" value="">
            <span>
              Second checkbox
              <small class="d-block text-muted">Some other text goes here</small>
            </span>
          </label>
          <label class="list-group-item d-flex gap-2">
            <input class="form-check-input flex-shrink-0" type="checkbox" value="">
            <span>
              Third checkbox
              <small class="d-block text-muted">And we end with another snippet of text</small>
            </span>
          </label>
        </div>
      
        <div class="list-group mx-0">
          <label class="list-group-item d-flex gap-2">
            <input class="form-check-input flex-shrink-0" type="radio" name="listGroupRadios" id="listGroupRadios1" value="" checked="">
            <span>
              First radio
              <small class="d-block text-muted">With support text underneath to add more detail</small>
            </span>
          </label>
          <label class="list-group-item d-flex gap-2">
            <input class="form-check-input flex-shrink-0" type="radio" name="listGroupRadios" id="listGroupRadios2" value="">
            <span>
              Second radio
              <small class="d-block text-muted">Some other text goes here</small>
            </span>
          </label>
          <label class="list-group-item d-flex gap-2">
            <input class="form-check-input flex-shrink-0" type="radio" name="listGroupRadios" id="listGroupRadios3" value="">
            <span>
              Third radio
              <small class="d-block text-muted">And we end with another snippet of text</small>
            </span>
          </label>
        </div>
      </div>
    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
          <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
          <div class="d-flex gap-2 w-100 justify-content-between">
            <div>
              <h6 class="mb-0">List group item heading</h6>
              <p class="mb-0 opacity-75">Some placeholder content in a paragraph.</p>
            </div>
            <small class="opacity-50 text-nowrap">now</small>
          </div>
        </a>
        <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
          <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
          <div class="d-flex gap-2 w-100 justify-content-between">
            <div>
              <h6 class="mb-0">Another title here</h6>
              <p class="mb-0 opacity-75">Some placeholder content in a paragraph that goes a little longer so it wraps to a new line.</p>
            </div>
            <small class="opacity-50 text-nowrap">3d</small>
          </div>
        </a>
        <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
          <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
          <div class="d-flex gap-2 w-100 justify-content-between">
            <div>
              <h6 class="mb-0">Third heading</h6>
              <p class="mb-0 opacity-75">Some placeholder content in a paragraph.</p>
            </div>
            <small class="opacity-50 text-nowrap">1w</small>
          </div>
        </a>
      </div>

    <div class="d-flex position-relative col-8">
        <img src="https://i1-vnexpress.vnecdn.net/2022/04/13/6-1649828617-4694-1649831361.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=HGBM_Dz6xH3ZeyLwOXpyyQ" class="flex-shrink-0 me-3 col-3" alt="...">
        <div>
          <h5 class="mt-0">Custom component with stretched link</h5>
          <p>This is some placeholder content for the custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
          <a href="#" class="stretched-link">Go somewhere</a>
        </div>
      </div>
    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight">Flex item 1</div>
        <div class="p-2 bd-highlight">Flex item 2</div>
        <div class="p-2 bd-highlight">Flex item 3</div>
      </div>
      <div class="d-flex flex-row-reverse bd-highlight">
        <div class="p-2 bd-highlight">Flex item 1</div>
        <div class="p-2 bd-highlight">Flex item 2</div>
        <div class="p-2 bd-highlight">Flex item 3</div>
      </div>
    <div class="box box-primary col-6">
        <div class="box-body box-profile col-12">
          <img class="profile-user-img img-responsive img-circle col-12" src="https://i1-vnexpress.vnecdn.net/2022/04/13/6-1649828617-4694-1649831361.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=HGBM_Dz6xH3ZeyLwOXpyyQ" alt="User profile picture">

          <h3 class="profile-username text-center">Nina Mcintire</h3>

          <p class="text-muted text-center">Software Engineer</p>

          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <b>Followers</b> <a class="pull-right">1,322</a>
            </li>
            <li class="list-group-item">
              <b>Following</b> <a class="pull-right">543</a>
            </li>
            <li class="list-group-item">
              <b>Friends</b> <a class="pull-right">13,287</a>
            </li>
          </ul>

          <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
        </div>
        <!-- /.box-body -->
      </div>

    <header>
        <div class="px-3 py-2 bg-dark text-white">
          <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
              </a>
    
              <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                <li>
                  <a href="#" class="nav-link text-secondary">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"></use></svg>
                    Home
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"></use></svg>
                    Dashboard
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#table"></use></svg>
                    Orders
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"></use></svg>
                    Products
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#people-circle"></use></svg>
                    Customers
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="px-3 py-2 border-bottom mb-3">
          <div class="container d-flex flex-wrap justify-content-center">
            <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto">
              <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>
    
            <div class="text-end">
              <button type="button" class="btn btn-light text-dark me-2">Login</button>
              <button type="button" class="btn btn-primary">Sign-up</button>
            </div>
          </div>
        </div>
      </header>
    <div class="main-content">     
        
        <nav aria-label="...">
            <ul class="pagination">
              <li class="page-item disabled">
                <a class="page-link">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>   
<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
    <h5 class="text-white h4">Collapsed content</h5>
    <span class="text-muted">Toggleable via the navbar brand.</span>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Library</a></li>
              <li class="breadcrumb-item active" aria-current="page"><a href="{{route('dashboard')}}"><i class="fa fa-home"></i> Admin dashboard</a></li>
            </ol>
          </nav>
          <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

        <div class="row">
            <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-4">
                  <label for="validationCustom01" class="form-label">First name</label>
                  <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom02" class="form-label">Last name</label>
                  <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustomUsername" class="form-label">Username</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                      Please choose a username.
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationCustom03" class="form-label">City</label>
                  <input type="text" class="form-control" id="validationCustom03" required>
                  <div class="invalid-feedback">
                    Please provide a valid city.
                  </div>
                </div>
                <div class="col-md-3">
                  <label for="validationCustom04" class="form-label">State</label>
                  <select class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">Choose...</option>
                    <option>...</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid state.
                  </div>
                </div>
                <div class="col-md-3">
                  <label for="validationCustom05" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="validationCustom05" required>
                  <div class="invalid-feedback">
                    Please provide a valid zip.
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                      Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                      You must agree before submitting.
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
              </form>
            <form class="row g-3">
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Email</label>
                  <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Password</label>
                  <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                  <label for="inputAddress2" class="form-label">Address 2</label>
                  <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">City</label>
                  <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                  <label for="inputState" class="form-label">State</label>
                  <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="col-md-2">
                  <label for="inputZip" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Check me out
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            <select class="form-select" multiple aria-label="multiple select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            <label for="exampleColorInput" class="form-label">Color picker</label>
<input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">
            <div class="mb-3">
                <label for="formFile" class="form-label">Default file input example</label>
                <input class="form-control" type="file" id="formFile">
              </div>
              <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple>
              </div>
              <div class="mb-3">
                <label for="formFileDisabled" class="form-label">Disabled file input example</label>
                <input class="form-control" type="file" id="formFileDisabled" disabled>
              </div>
              <div class="mb-3">
                <label for="formFileSm" class="form-label">Small file input example</label>
                <input class="form-control form-control-sm" id="formFileSm" type="file">
              </div>
              <div>
                <label for="formFileLg" class="form-label">Large file input example</label>
                <input class="form-control form-control-lg" id="formFileLg" type="file">
              </div>
            <form class="row g-3">
                <div class="col-auto">
                  <label for="staticEmail2" class="visually-hidden">Email</label>
                  <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
                </div>
                <div class="col-auto">
                  <label for="inputPassword2" class="visually-hidden">Password</label>
                  <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                </div>
                <div class="col-auto">
                  <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
                </div>
              </form>

            <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
                    <label class="form-check-label" for="defaultCheck2">
                      Disabled checkbox
                    </label>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputCity">City</label>
                      <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState">State</label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputZip">Zip</label>
                      <input type="text" class="form-control" id="inputZip">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-check-label" for="gridCheck">
                        Check me out
                      </label>
                    </div>
                  </div> 
                  <fieldset class="form-group">
                    <div class="row">
                      <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                      <div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                          <label class="form-check-label" for="gridRadios1">
                            First radio
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                          <label class="form-check-label" for="gridRadios2">
                            Second radio
                          </label>
                        </div>
                        <div class="form-check disabled">
                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                          <label class="form-check-label" for="gridRadios3">
                            Third disabled radio
                          </label>
                        </div>
                      </div>
                    </div>
                  </fieldset>

                  <div class="form-row align-items-center">
                    <div class="col-auto">
                      <label class="sr-only" for="inlineFormInput">Name</label>
                      <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Jane Doe">
                    </div>
                    <div class="col-auto">
                      <label class="sr-only" for="inlineFormInputGroup">Username</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                      </div>
                    </div>
                    <div class="col-auto">
                      <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                        <label class="form-check-label" for="autoSizingCheck">
                          Remember me
                        </label>
                      </div>
                    </div>
                    <div class="col-auto">
                      <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    </div>
                  </div> 
              </form>

        @if(Auth::check())
            @if(!empty($user))
                @foreach($user as $u)
                    <div class="col-sm-1">                      
                        <p >{{$u->id}}</p> 
                    </div>
                    <div class="col-sm-3">                      
                        <a href="{{ route('getdetail', ['id' => $u->id]) }}"><p>{{$u->name}}</p></a>
                    </div>
                    <div class="col-sm-3">                      
                        <p >{{$u->email}}</p> 
                    </div>
                    <div class="col-sm-3">    
                       <a href="{{ route('getedit', ['id' => $u->id]) }}">Edit</a>
                    </div>
                    <div class="col-sm-2">    
                        <form role="form" action="{{ route('postuserdel', ['id' => $u->id]) }}" method="post">
                                @csrf
                            <button type="submit" class="btn btn-primary"><i class="fa fa-times"></i> Delete</button>
                        </form>   
                    </div>
                @endforeach

                {{ $user->links() }}

            @endif
        @endif
        <br><br><br>
        </div> <!-- #main-content --> 
    </div> <!-- #content --> 
</div> 
@endsection