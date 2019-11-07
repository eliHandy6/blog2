  @extends('main')
  @section('content')
   <form>
    <div class="form-group">
      <label for="formGroupExampleInput">Email</label>
      <input type="email" class="form-control" id="formGroupExampleInput" placeholder="Example input">
    </div>

    <div class="form-group">
      <label for="formGroupExampleInput">Subject</label>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
    </div>
    <div class="form-group">

      <label for="formGroupExampleInput2">Message</label>

      <textarea type="text" class="form-control">Text Here</textarea>
 
    </div>
    <button class="btn-success">SUBMIT</button>
  </form>
  </div>

  @endsection