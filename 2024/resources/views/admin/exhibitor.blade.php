<!DOCTYPE html>
<html>
<head>
<style>
  .header_wrapper{
margin: 10px;
  }

.admin_ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.admin_li {
  margin: 10px;
  display: inline;
}
.admin_banner_img{
  width:250px;
  height:150px;
  margin: 10px;
}
.margin_10{
  margin:10px;
}
.admin_banner_div {  
  display: flex;
  flex-flow: row wrap; 
  height: 250px;
  overflow-y: scroll;
}
.container { position: relative; }
.container img { display: block; }
.container .fa-close { position: absolute; top:0; right:0; cursor: pointer;}
</style>
      <title>Admin</title>
    </head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
@include('admin.adminHeader')


<h1>All Exhibitors <h3>(To Remove Exhibitor :-  Click Remove Button)</h3></h1>
<form method="POST" 
        action="{{url('remove-exhibitor')}}"
        enctype="multipart/form-data">
        @csrf
        <div class="admin_banner_div">
            @foreach ($exhibitors as $image)
            @if ($image->isActive==1)
              <div class="container">
                     <img src="{{$image->imageUrl}}" class="admin_banner_img" alt="{{$image->altText}}">
                     <input name="exhibitorId" style="display:none;" value="{{$image->id}}"/>
                   <button type="submit">Remove</button>
             </div>
                     @endif
               @endforeach
               </div>
</form>
            <h1>Add New exhibitor</h1>

<div id="content">
  
  <form method="POST" 
        action="{{url('upload-exhibitor')}}"
        enctype="multipart/form-data">
        @csrf
        <div class="margin_10">
Choose Image : <input type="file" 
             name="uploadfile" 
             id="uploadfile" 
             accept="image/*" />
</div>
<div class="margin_10">
Alt Text :
<input type="text" name="altText" id="altText"  />
</div>
<div class="margin_10">
Redirect Url:
<input type="text" name="redirectUrl" id="redirectUrl"  />
</div>
      <div>
          <button type="submit"
                  name="upload">
            UPLOAD
          </button>
      </div>
  </form>
</div>
</body>
</html>