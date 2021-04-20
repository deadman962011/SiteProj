<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
  
        <ul class="list-unstyled components">
            <p>Dummy Heading</p>
            <li class="">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Sites</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li><a href="#" data-toggle="modal" data-target="#AddSiteModal">Add Site</a></li>
                    <li><a href="#" >Delete Site</a></li>
                    <li><a href="#">Update Site</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    
 <!-- Modal -->
  <div class="modal fade" id="AddSiteModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Site Modal</h4>
        </div>
        <div class="modal-body">
          <form action="{{ route("BigAddSite") }}" method='POST' class="form-horizontal">
              <div class="form-group">
                  <div class="col-sm-3"><label for="SiteNameI">Site Name:</label></div>
                  <div class="col-sm-6"><input type="text" name="SiteNameI"  class="form-control"></div>
              </div>
              <div class="form-group">
                  <div class="col-sm-3"><label for="SiteTypeI">Site Type:</label></div>
                  <div class="col-sm-6"><select name="SiteTypeI" class='form-control'><option value="PDFCenter">PDF Center</option><option value="Blogger">Blogger</option><option value="Store">Store</option></select></div>
              </div>
              <div class="form-group">
                  <div class="col-sm-3"><label for="SiteUserI">Site Username:</label></div>
                  <div class="col-sm-6"><input type="text" name="SiteUserI"  class="form-control"></div>
              </div>
              <div class="form-group">
                <div class="col-sm-3"><label for="SitePassI">Site User Password:</label></div>
                <div class="col-sm-6"><input type="text" name="SitePassI"  class="form-control"></div>
            </div>
            <div class="form-group">
                <div class="col-sm-3"><label for="SitePlanI">Site Type:</label></div>
                <div class="col-sm-6"><select name="SitePlanI" class='form-control'><option value="1">Plan 1</option><option value="2">Plan 2</option><option value="3">Plan 3</option><option value="4">Plan 4</option></select></div>
            </div>
            {{ csrf_field() }}
        </div>
        <div class="modal-footer">
        <input type="submit" value="Add Site" class="btn btn-primary">
        </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
   