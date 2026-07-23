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
  height: 500px;
  overflow-y: scroll;
}

.admin_banner_img{
  /* width:250px; */
  height:150px;
  margin: 10px;
}
.admin_banner_card{
  border: 1px solid #ddd;
  padding: 8px;
  margin: 10px;
}
.status_badge{
  display: inline-block;
  padding: 4px 8px;
  margin: 4px 0;
  border-radius: 10px;
  font-size: 12px;
  font-weight: bold;
}
.status_active{
  background: #d4edda;
  color: #155724;
}
.status_disabled{
  background: #f8d7da;
  color: #721c24;
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
<h1>All Banners <h3>(Use Disable to hide a banner from homepage, and Enable to show it again)</h3></h1>

        <div class="admin_banner_div">
            @foreach ($banners as $banner)
              <div class="container admin_banner_card">
                     <img src="{{$banner->BannerUrl}}" class="admin_banner_img" alt="{{$banner->ImageAltText}}">
                     <div>
                       <strong>Banner ID:</strong> {{$banner->bannerId}}
                     </div>
                     <div>
                       <strong>Status:</strong>
                       @if ($banner->displayBanner==1)
                        <span class="status_badge status_active">Active</span>
                       @else
                        <span class="status_badge status_disabled">Disabled</span>
                       @endif
                     </div>

                     @if ($banner->displayBanner==1)
                     <form method="POST" action="{{url('disable-banner')}}" enctype="multipart/form-data">
                       @csrf
                       <input type="hidden" name="bannerId" value="{{$banner->bannerId}}"/>
                       <input type="hidden" name="displayBanner" value="0"/>
                       <button type="submit">Disable</button>
                     </form>
                     @else
                     <form method="POST" action="{{url('enable-banner')}}" enctype="multipart/form-data">
                       @csrf
                       <input type="hidden" name="bannerId" value="{{$banner->bannerId}}"/>
                       <input type="hidden" name="displayBanner" value="1"/>
                       <button type="submit">Enable</button>
                     </form>
                     @endif
             </div>
               @endforeach
            </div>
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