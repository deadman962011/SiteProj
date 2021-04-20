<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="{{ route('LogOut') }}"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
        </ul>
      </div>
    </div>
  </nav>



   <!-- Del Category Modal -->
   <div class="modal fade" id="DelCategory" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Delete Category Modal</h4>
        </div>
        <div class="modal-body">
          <form action="{{ route('DelCategoryPost',['SiteType'=>$SiteType,'SiteId'=>$SiteId]) }}" method='POST' class="">
              <div class="form-group">
                 <input type="text" name="DelPassI" placeholder=" Enter Your Password"  class="form-control">
              </div>
           
             <input type="hidden" name="CategoryDelId"  class="form-control">
            {{ csrf_field() }}
        </div>
        <div class="modal-footer">
        <input type="submit" value="Delete" class="btn btn-danger">
        </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


     <!-- Del Author Modal -->
     <div class="modal fade" id="DelAuthor" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Delete Author Modal</h4>
          </div>
          <div class="modal-body">
            <form action="{{ route('DelAuthorPost',['SiteType'=>$SiteType,'SiteId'=>$SiteId]) }}" method='POST' class="">
                <div class="form-group">
                   <input type="text" name="DelPassI" placeholder=" Enter Your Password"  class="form-control">
                </div>
             
               <input type="hidden" name="AuthorDelId"  class="form-control">
              {{ csrf_field() }}
          </div>
          <div class="modal-footer">
          <input type="submit" value="Delete" class="btn btn-danger">
          </form>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>