@include('inc.header')
		<div class="container">
					<dic class="row">
                        <div class="col-md-6">

                        <form class="form-horizontal" method="post" action="{{url('/insert')}}">
                        {{csrf_field()}}
										  <fieldset>
										    <h5>Welcome :{{ Auth::user()->name }} </h5>
										    <legend>Create Post </legend>
										    @if(count($errors)>0)
										    @foreach($errors->all() as $error)
										      <div class="alert alert-danger">
                                                  {{$error}}
										      </div>
										    @endforeach
										    @endif
										    <div class="form-group">
										      <label for="exampleInputEmail1">Title</label>
										      <input type="text" name ="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
										    
										    </div>
										    <div class="form-group">
										      <label for="exampleInputPassword1">Description</label>
										      <textarea  name ="description" class="form-control" id="exampleInputPassword1" placeholder="Enter Description"></textarea>
										    </div>
										    <input type="hidden" name="user" value="{{Auth::user()->email}}"> 
										    
										   
										  
										    <button type="submit" class="btn btn-primary">Submit</button>
										    <a href="{{url('/home')}}" class="btn btn-primary">Back</a>

										  </fieldset>
										</form>
                        </div>
					</div>
		</div>

@include('inc.footer')