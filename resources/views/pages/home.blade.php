    @extends('main')
    @section('title'|'HOME')

    @section('content')

    <div class="row"> 
      <div class="col-md-12">
        <div class="jumbotron">
          <h2>
            Welcome to Zack Ogoma Blog
            
          </h2>
          <button class="btn-primary">Popular Post</button>
          
        </div>
        
      <div class="row">
        <div class="col-md-8">
          
          
        
          @foreach($posts as $post);
        

        
                  <h4>{{$post->title}}</h4>
                   <p>{{$post->body}} </p>
                    <button class="btn-primary">Read More</button>

                  </hr>

            @endforeach
        </div>
        <div class="col-md-4 offset=1">
          <h5>NavBar</h5>

          <p>
            find ~/.m2  -name "*.lastUpdated" -exec grep -q "Could not transfer" {} \; -print -exec rm {} \;
            find ~/.m2  -name "*.lastUpdated" -exec grep -q "Could not transfer" {} \; -print -exec rm {} \;
            find ~/.m2  -name "*.lastUpdated" -exec grep -q "Could not transfer" {} \; -print -exec rm {} \;
          </p>


          
        </div>

      </div>

      <div>
        <script >


</script>   
        
      </div>
      
    </div>
   @endsection

    
