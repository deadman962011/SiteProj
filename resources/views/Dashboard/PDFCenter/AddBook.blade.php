@extends('layout.master')
@include('inc.navbar')

@section('content')
@include('inc.PDFCenterSideNav')
@include('inc.error')

<div id="content">
    <h4>Add Book VIew</h4>


    
 <form  method="post" enctype="multipart/form-data" class="form-horizontal">

    <!--Book name  -->
    <div class="form-group">
     <div class="col-sm-3"><label for="BookNameI" class="form-label">Book Name:</label></div>
     <div class="col-sm-8"><input type="text" name='BookNameI' class="form-control"></div>
    </div> 
  
    <!-- Book Pic -->
    <div class="form-group">
     <div class="col-sm-3"><label for="BookPicI" class="form-label">Book Cover:</label></div>
     <div class="col-sm-8"><input type="file" name="BookPicI"  class="form-control"></div>
    </div>

    <!-- Book File Upload -->
    <div class="form-group">
      <div class="col-sm-3"><label for="BookFileI" class="form-label">Book File Upload:</label></div>
      <div class="col-sm-8"><input type="file" name="BookFileI"  class="form-control"></div>
     </div>

  
  
    <!-- Book link -->
    <div class="form-group">
     <div class="col-sm-3"><label for="BookLinkI" class="form-label">Book Link:</label></div>
     <div class="col-sm-8"><input type="text" name="BookLinkI"  class="form-control"></div>
    </div>
  
  
    <!-- Book Category  -->
    <div class="form-group">
     <div class="col-sm-3"><label for="BookCategoryI" class="form-label">Book Category:</label></div>
     <div class="col-sm-6"><select name="BookCategoryI" class='BookSelect form-control'>
      @foreach ($Categories as $Category)
        <option value="{{ $Category['id'] }}">{{ $Category['CategoryName'] }}</option>
      @endforeach
     </select>
     </div>
    </div>
  
  
  
    <!-- Book author  -->
    <div class="form-group">
     <div class="col-sm-3"><label for="BookAuthorI" class="form-label">Book Author:</label></div>
     <div class="col-sm-6"><select  name="BookAuthorI" class='form-control BookSelect ' >
      @foreach ($Authors as $Author)
          <option value="{{ $Author['id'] }}">{{ $Author['AuthorName'] }}</option>
      @endforeach
     </select>
     </div>
    </div>
  
  
      <!-- Book Review -->
      <div class="form-group">
     <div class="col-sm-3"><label for="BookReviewI" class="form-label">Review:</label></div>
     <div class="col-sm-6"><select name="BookReviewI" class='form-control' >
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
     </select>
     </div>
    </div>
  
  
    <!-- Book Descreption  -->
    <div class="form-group">
     <div class="col-sm-3"><label for="BookDescI" class="form-label">Book Descreption:</label></div>
     <div class="col-sm-8"><textarea name="BookDescI" class='form-control'  rows="10"></textarea></div>
    </div>
  
  
  
  
  
  
    <!-- book Language -->
    <div class="form-group">
     <div class="col-sm-3"><label for="BookLangI" class="form-label">Book Language:</label></div>
     <div class="col-sm-8"><input type="text" name='BookLangI' class="form-control"></div>
    </div>
  
   <!-- Pages Number -->
   <div class="form-group">
     <div class="col-sm-3"><label for="BookPagesNumI" class="form-label">Book Pages Number:</label></div>
     <div class="col-sm-8"><input type="text" name='BookPagesNumI' class="form-control"></div>
    </div>
  
      <!-- Book size -->
    <div class="form-group">
     <div class="col-sm-3"><label for="BookSizeI" class="form-label">Book Size:</label></div>
     <div class="col-sm-8"><input type="text" name='BookSizeI' class="form-control"></div>
    </div>  
  
      <!-- Book Relase Date  -->
      <div class="form-group">
     <div class="col-sm-3"><label for="BookRelaseDateI" class="form-label">Book relase Date:</label></div>
     <div class="col-sm-8"><input type="date" name='BookRelaseDateI' class="form-control"></div>
    </div>
    <!-- submit  -->
    <div class="form-group">
     <div class="col-sm-3 col-sm-offset-3"><input type="submit"  class="btn btn-primary"></div>
    </div>
  
    {{  csrf_field()  }}
  
   </form>
  
</div>

@endsection


