@extends('layout.master')


@section('style')
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />

@endsection

@section('content')

@include('inc.navbar')

@include('inc.StoreSideNav') 
@include('inc.error')



<div id="content">

    <h4>Add Product Page</h4>

    
    <form  method="post" enctype="multipart/form-data" class="form-horizontal">
   
       <!--Product Title   -->
       <div class="form-group">
        <div class="col-sm-3"><label for="ProdTitleI" class="form-label">Product Title:</label></div>
        <div class="col-sm-9"><input type="text" name='ProdTitleI' class="form-control" required></div>
       </div> 

       <!-- Product Descreption -->
       <div class="form-group">
           <div class="col-sm-3"><label for="ProdDescI">Product Description:</label></div>
           <div class="col-sm-9"><textarea name="ProdDescI" class="form-control"  rows="5" required></textarea></div>
       </div>
     
       <!-- Product Thumbnail -->
       <div class="form-group">
        <div class="col-sm-3"><label for="ProdThumbI" class="form-label">Prod Thumbnail:</label></div>
        <div class="col-sm-9"><input type="file" name="ProdThumbI"  class="form-control"></div>
       </div>
      
       <!-- Prod  Category  -->
       <div class="form-group">
        <div class="col-sm-3"><label for="ProdCategoryI" class="form-label">Prod Category:</label></div>
        <div class="col-sm-6"><select  name="ProdCategoryI" class='singleSelect BookSelect form-control' required>
         @foreach ($Categories as $Category)
           <option value="{{ $Category['id'] }}">{{ $Category['CategoryName'] }}</option>
         @endforeach
        </select>
        </div>
       </div>
     
     
     
       <!-- Prod  author  -->
       <div class="form-group">
        <div class="col-sm-3"><label for="ProdBrandI" class="form-label">Prod Brand:</label></div>
        <div class="col-sm-6"><select  name="ProdBrandI" class='singleSelect form-control BookSelect' required >
         @foreach ($Brands as $Brand)
             <option value="{{ $Brand['id'] }}">{{ $Brand['AuthorName'] }}</option>
         @endforeach
        </select>
        </div>
       </div>
       
       <!-- Prod Tags -->
       <div class="form-group">
        <div class="col-sm-3"><label for="ProdPriceI">Prod Price:</label></div>
        <div class="col-sm-6"><input type="text" name="ProdPriceI" class="form-control" required></div>
       </div>
     
     
       <!-- Prod Body  -->
       <div class="form-group">
        <div class="col-sm-2"><label for="ProdBodyI" class="form-label">Prod  Body:</label></div>
        <div class="col-sm-12"><textarea name="ProdBodyI" class='form-control'  rows="30" required></textarea></div>
       </div>

       <!-- Save submit  -->
       <div class="form-group">
        <div class="col-sm-1 "><input type="submit" name='ProdStatusI' value='save'  class="btn btn-success"></div>
        <div class="col-sm-2 col-sm-offset-1"><input type="submit" name='ProdStatusI' value='draft' value='Save As Draft'  class="btn btn-primary"></div>
       </div>
     
       {{  csrf_field()  }}
     
      </form>
</div>
@endsection

@section('script')

  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
  <script src="https://cdn.tiny.cloud/1/bw4hy6l0h1tug88e1mfiyq0w9ljdyqutrwgqk00e1se72zxy/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    $(document).ready(function() {
        $('.singleSelect').select2();
    });
  
  
    tinymce.init({ selector:'textarea',
                         plugins: "link image preview media table codesample emoticons lists toc",
                         link_default_protocol: "https",
                         image_uploadtab: true,
                         file_picker_types: 'image',
                         images_upload_handler:function (blobInfo, success, failure) {
                            var xhr, formData;
                            xhr = new XMLHttpRequest();
                            xhr.withCredentials = false;
                            xhr.open('POST', '{{ route("SaveImage",["SiteType"=>$SiteType,"SiteId"=>$SiteId]) }}');
                            var token = '{{ csrf_token() }}';
                            xhr.setRequestHeader("X-CSRF-Token", token);
                            xhr.onload = function() {
                                var json;
                                if (xhr.status != 200) {
                                    failure('HTTP Error: ' + xhr.status);
                                    
                                    return;
                                }
                                json = JSON.parse(xhr.responseText);
                                console.log(xhr)
                                success(json.location);
                            };
                            formData = new FormData();
                            formData.append('file', blobInfo.blob(), blobInfo.filename());
                            xhr.send(formData);
                        },
                        setup : function(ed) {
                        ed.on('KeyDown', function (e) {

                        if ((e.keyCode == 8 || e.keyCode == 46) && tinymce.activeEditor.selection) { // delete & backspace keys

                            var selectedNode = tinymce.activeEditor.selection.getNode() // get the selected node (element) in the editor

                            if (selectedNode && selectedNode.nodeName == 'IMG') {

                                 $.ajax({
                                     "url":"{{ route('DelImage',['SiteType'=>$SiteType,'SiteId'=>$SiteId]) }}",
                                     "method":"POST",
                                     "data":{ Src:selectedNode.src,
                                              _token:"{{ csrf_token()}}"
                                        },
                                        success:function(data){
                                        console.log(data)
                                        }
                                 })
                            }
                        }
                        });
                        }
   });</script>


@endsection


