<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
  
        <ul class="list-unstyled components">
            <p>Dummy Heading</p>
            <li class="">
                <a href="#ProdMenu" data-toggle="collapse" aria-expanded="false">products</a>
                <ul class="collapse list-unstyled" id="ProdMenu">
                    <li><a href="{{ route("ProductListGet",['SiteType'=>$SiteType,'SiteId'=>$SiteId]) }}">Products List</a></li>
                    <li><a href="{{ route("AddProductGet",['SiteType'=>$SiteType,'SiteId'=>$SiteId]) }}" >Add Product</a></li>
                </ul>
            </li>
            <li class="">
                <a href="#CategoriesMenu" data-toggle="collapse" aria-expanded="false">Categories</a>
                <ul class="collapse list-unstyled" id="CategoriesMenu">
                    <li><a href="{{ route("CategoryList",['SiteType'=>$SiteType,'SiteId'=>$SiteId]) }}">Category List</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#AddCategory" >Add Category</a></li>
                </ul>
            </li>
            <li class="">
                <a href="#Authors" data-toggle="collapse" aria-expanded="false">Brands</a>
                <ul class="collapse list-unstyled" id="Authors">
                    <li><a href="{{ route("AuthorList",['SiteType'=>$SiteType,'SiteId'=>$SiteId]) }}" >Brands List</a></li>
                    <li><a href="#"  data-toggle="modal" data-target="#AddAuthor" >Add Brand</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    



     <!-- Modal -->
  <div class="modal fade" id="AddCategory" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Category Modal</h4>
        </div>
        <div class="modal-body">
            <form action="{{ route("AddCategoryPost",['SiteType'=>$SiteType,'SiteId'=>$SiteId]) }}" method="post" class="form-horizontal">
            
             <div class="form-group">
                 <div class="col-sm-3"><label for="CategoryNameI">Category Name:</label></div>
                 <div class="col-sm-6"><input type="text" name="CategoryNameI" class="form-control"></div>
             </div>
             <div class="form-group">
              <div class="col-sm-3"><label for="CategoryNameI">Category Color:</label></div>
              <div class="col-sm-6"><input type="color" name="CategoryColorI" class="form-control"></div>
             </div>
             <div class='form-group'>
               <div class="col-sm-3"><label for="CategoryIconI">Category Icon:</label></div>
               <div class='col-sm-6'>
                <div class="input-group">
                  <input data-placement="bottomRight" class="form-control icp icp-auto" value="fas fa-archive" name='CategoryIconI' type="text"/>
                  <span class="input-group-addon"></span>
              </div>
               </div>
             </div>
        </div>
        <div class="modal-footer">
          {{ csrf_field() }}
          <input type="submit" value="Add Category" class="btn btn-primary">
          </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>





       <!-- Modal -->
       <div class="modal fade" id="AddAuthor" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Add Author Modal</h4>
            </div>
            <div class="modal-body">
                <form action="{{ route("AddAuthorPost",['SiteType'=>$SiteType,'SiteId'=>$SiteId]) }}" method="post" enctype='multipart/form-data' class="form-horizontal">
                
                 <div class="form-group">
                    <div class="col-sm-3"><label for="AuthorNameI">Author Name:</label></div>
                    <div class="col-sm-6"><input type="text" name="AuthorNameI" class="form-control"></div>
                 </div>
                 <div class="form-group">
                   <div class="col-sm-3"><label for="AuthorPicI">Author Pic:</label></div>
                   <div class="col-sm-6"><input type="file" name="AuthorPicI" class="form-control"></div>
                 </div>
                 <div class="form-group">
                   <div class="col-sm-3"><label for="AuthorDescI">Author Descreption </label></div>
                   <div class="col-sm-6"><textarea name="AuthorDescI" class='form-control' cols="30" rows="10"></textarea></div>
                 </div>
            </div>
            <div class="modal-footer">
              {{ csrf_field() }}
              <input type="submit" value="Add Category" class="btn btn-primary">
              </form>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
      </div>