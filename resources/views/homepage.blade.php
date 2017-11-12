@include('inc.header')
                  <div class="container">
	                  <legend>Laravel Application</legend>
	                  @if(session('info'))
	                  <div class="row">
			          <div class="col md-6 col-lg-6">
				                  <div class="alert alert-success">
				                  {{session('info')}}
				                  </div>
	                  </div>
	                  </div>
	                  @endif
						<table class="table table-striped table-hover table-bordered">
						  <thead class="thead-dark">
						    <tr>
						      
						      <th>ID</th>
						      <th>Title</th>
						      <th>Description</th>
						      <th>User</th>
						      <th>Option</th>
						    </tr>
						  </thead>
						  <tbody>
						  @if(count($articles)>0)
						  @foreach($articles->all() as $article)
						   <tr>
						              <td>{{$article->id}}</td>
								      <td>{{$article->title}}</td>
								      <td>{{$article->description}}</td>
								      <td>{{$article->user}}</td>
								      <td>
								      <a href="{{url('#')}}" class="btn btn-primary">Read</a>
								      <a href="{{url('#')}}" class="btn btn-warning">Update</a>
								      <a href="{{url('#')}}" class="btn btn-info">Delete</a>
								      </td>
						    </tr>
						  @endforeach
						  @endif
						   
						    
						  </tbody>
					</table> 
			</div>
@include('inc.footer')