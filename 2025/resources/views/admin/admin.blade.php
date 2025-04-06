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
.admin_banner_div {  
  display: flex;
  flex-flow: row wrap; 
  height: 250px;
  overflow-y: scroll;
}

.admin_banner_img{
  width:250px;
  height:150px;
  margin: 10px;
}
.margin_10{
  margin:10px;
}

.container { position: relative; }
.container img { display: block; }
.container .fa-close { position: absolute; top:0; right:0; cursor: pointer;}
</style>
      <title>Admin</title>
    </head>
<body>
@include('admin.adminHeader')
<h1>All Banners <h3>(To Remove Banner :-  Click Remove Button)</h3></h1>

  <form method="POST" 
        action="{{url('remove-banner')}}"
        enctype="multipart/form-data">
        @csrf
        <div class="admin_banner_div">
            @foreach ($banners as $banner)
            @if ($banner->displayBanner==1)
              <div class="container">
                     <img src="{{$banner->BannerUrl}}" class="admin_banner_img" alt="{{$banner->ImageAltText}}">
                     <input name="bannerId" style="display:none;" value="{{$banner->bannerId}}"/>
                   <button type="submit">Remove</button>
             </div>
                     @endif
               @endforeach
            </div>
</form>
            <h1>Add New Banner</h1>
<div id="content">
  
  <form method="POST" 
        action="{{url('upload-banner')}}"
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