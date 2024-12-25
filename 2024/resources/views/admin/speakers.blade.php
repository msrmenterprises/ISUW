<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
<body>
@include('admin.adminHeader')
<h1>All Speakers <h3>(To Remove Speaker :-  Click Remove Button)</h3></h1>
<form method="POST" 
        action="{{url('remove-speaker')}}"
        enctype="multipart/form-data">
        @csrf
        <div class="admin_banner_div">
            @foreach ($speakers as $speaker)
            @if ($speaker->isActive==1)
              <div class="container">
                     <img src="{{$speaker->imageUrl}}" class="admin_banner_img" alt="{{$speaker->imageAlt}}">
                     <input name="speakerId" style="display:none;" value="{{$speaker->id}}"/>
                   <button type="submit">Remove</button>
             </div>
                     @endif
               @endforeach
               </div>
</form>
            <h1>Add New Speaker</h1>
<div id="content">
  
  <form method="POST" 
        action="{{url('upload-speaker')}}"
        enctype="multipart/form-data">
        @csrf
        <div class="margin_10">
        <label> Enter Name</label>
        <input type="text" name="name" id="name" />
</div>
        <div class="margin_10">
        <label> Enter Company : </label>
        <input type="text" name="company" id="company" />
        </div>
        <div class="margin_10">
        <label> Enter Description : </label>
        <textarea id="desc" name="desc" rows="4" cols="50"></textarea></div>
        <div class="margin_10"> Choose Image : 
      <input type="file" 
             name="uploadfile" 
             id="uploadfile" 
             accept="image/*" /></div>
           
             <div class="margin_10">
             <label> Image alt text </label>
<input type="text" name="altText" id="altText"  /></div>
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