<html>
	<head>
		<head>
			<title>Hello Test</title>
			<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
			<link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>
			<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>		
		</head>

	</head>
	<body>
		<div class="container">
			{!! Form::open(['method' => 'POST', 'route' => 'course.store', 'class'=>'form-horizontal']) !!}
			{!! Form::token(); !!}
			  <div class="form-group">
			    <label for="Name">Name</label>
			    <input type="text" class="form-control" name="name">
			  </div>
			  <div class="form-group">
			    <label for="Price">Price</label>
			    <input type="text" class="form-control" name="price">
			  </div>		  
			  <button type="submit" class="btn btn-default">Submit</button>
			 {!! Form::close() !!}

			{{--   THIS IS THE PART OF AUTOCOMPLETE SEARCH TEST --}}
			 <h3> Search Name </h3>
				 <div class="control-group cus-info">
		              <label class="control-label">Name :</label>
		              <div class="controls cus-serch">
		                  <input type="text" id="searchName" placeholder="Search here...">                     
		              </div>
		          </div>  


		    {{-- THIS IS THE PART TO SHOW VALUE BASED ON SEARCH ON INPUT BOX 
		          <div class="form-group">
        			 <label class="control-label">Course Name</label>
        			 <input type="text" name="name" id="name" class="form-control"  >
        		  </div> 
        	--}}
        	{{-- IN THIS SECTION I HAVE SHOWN THE VALUE ON BASED ON SELECTION --}}
    			  <table  class="table table-striped table-bordered"  id="example">
			        <thead>
			          <tr>			            
			            <td>ID</td>
			            <td>Name</td>
			            <td>Price</td> 
			            <td>Quantity</td>
			            <td>Total</td>                     
			          </tr>
			        </thead>
			        <tbody>
			       	</tbody>
			      </table>  
	    </div>       
	</body>
	<script>
        $('#searchName').autocomplete({
                source: '{!! asset('nameAutocomplete') !!}',
                select:function(suggestion,ui){
                    event.preventDefault();
             //     var $tbody = $('#example tbody').empty();
            //      console.log(ui.item.id);  // For print the id in console
           // 		$('#name').val(ui.item.value); //	For print the name inside input box
        				var $tbody = $('#example tbody');
				        $tbody.append('<tr><td class="id">' + ui.item.id +
				        '</td><td class="name">' + ui.item.value +
				        '</td><td class="price">' + ui.item.price +
				        '</td><td><input type="text" class="quantity" value="1"/></td><td><input type="text" class="total" readonly value="'+ui.item.price+'" class="readonly"/></td></tr>');
				        $('.quantity').on('keyup',function(){
				            var tot = $(this).parent().prev().html() * this.value;
				           $(this).parent().next().find('.total').val(tot);      
       					});
                   }                   
            });
    </script>
</html>
