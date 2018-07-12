   
    
      $('#go').click(function(e){
      e.preventDefault();
        if($('#address').val()!=""){
      
        var flag =0;
          $.ajax({
      url : "https://maps.googleapis.com/maps/api/geocode/json?address="+encodeURIComponent($('#address').val())+"&key=AIzaSyBZqeVD4BL5TrYn6GOw7_6PFwNni-yrLlQ",
      type : "GET",
        success : function(data){
           // console.log(data); Uncomment to see full json data that is returned.
      if(data["status"]=="OK"){
     $.each(data["results"][0]["address_components"],function(key,value){
       
  
       if(value["types"]=="postal_code"){
      
         $("#msg").html('<div class="alert alert-success" role="alert">The postcode is :'+value["long_name"]+'  </div>');
      flag=1;
         $('#address').val("");
       }
      
       })
      }
          if(data["status"]!="OK"){
      
      $("#msg").html('<div class="alert alert-danger" role="alert">The result could not be found for entered data</div>');
       $('#address').val("");
            flag=1;
      }
          if(flag==0){
                $("#msg").html('<div class="alert alert-danger" role="alert">Please enter addresses like : "XYZ apartments , Surat , India" and not city , state or country names individually.</div>');
          }
      } 
     })
    }else{
    
      $("#msg").html('<div class="alert alert-danger" role="alert">Please enter something. Address field was empty.</div>');
    
    }
      
     
})
    
