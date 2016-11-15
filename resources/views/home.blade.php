@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>



  
    <div class="container">
    <div class="panel panel-primary">
   <div class="panel-heading">
    <h3 class="panel-title">Medicines</h3>
  </div>
  <form>
  <div class="panel-body">
        <div class="form-group">
    <label for="exampleInputEmail1">Medicine Name</label>
      <select class="form-control">
          <option>Napa</option>
            <option>Seclo</option>
            <option>NapaExtra</option>
            <option>Alactrol</option>
            <option>Injection</option>
</select>
  </div>
 
 
    <div class="form-group">
    <label for="DN">Quantity</label>
    <select class="form-control">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
    </select>
    </div>
   

  <div class="form-group">
        <label class="Amount" >Price</label>
        <input type="text" class="form-control" id="Price" placeholder="Price" >
      
   </div>
 
<div class="form-group">
        <label class="Discount" >Discount</label>
        <input type="text" class="form-control" id="Discount" placeholder="Discount" >
      
   </div>
  
 <div class="form-group">   
    <label for="DN">Remarks</label>
   
     <textarea class="form-control" rows="3"></textarea>
    
     
</div>   
     
  <div class="form-group">
      
      <button type="button" class="btn btn-success">Success</button>
    </div>    
</form>
  </div>
   <div class="panel-footer">Thanks Bro</div>
</div>

</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"  ></script>
</body>
</html> 




@endsection
