<html lang="en">
<head>
  <title>Laravel Image Upload With Preview</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
  
  <div class="container">

    <h3 class="jumbotron">Laravel Image Upload With Preview</h3>
  <form method="post" action="{{url('preview-image-upload')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
          <input type="file" name="profile_image" id="profile_image" onchange="loadPreview(this);" class="form-control">

          <label for="profile_image"></label>
            <img id="preview_img" src="https://w3adda.com/wp-content/uploads/2019/09/No_Image-128.png" class="" width="200" height="150" style="display:none;" />
        

          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
          <button type="submit" class="btn btn-success" style="margin-top:10px">Upload Image</button>
          </div>
        </div>
        
  </form>
  </div>
</body>
</html>
<script>
  function loadPreview(input, id) {
    id = id || '#preview_img';
    if (input.files && input.files[0]) {
        var reader = new FileReader();
 
        reader.onload = function (e) {
            $(id)
                    .attr('src', e.target.result)
                    .width(200)
                    .height(150);
        };
        $("#preview_img").show();
        reader.readAsDataURL(input.files[0]);
    }
 }
</script>
