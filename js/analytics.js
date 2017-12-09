/*global $*/
/*global status $*/
$(function()	{
    $("#country"). click(function() {
var	url	= "Service/service-topCountries.php";
$("#result").html("<select></select>")
  if (status == "success"){ 
    $.get(url,	function (data,	status)	{
    $.each(data, function (index, value){
        $("#country").append("<option value =" + 
            "value.CountryCode  >" + 
            "value.CountryName" + " </option>" )
    
        
    });
    });
  }
});       
});    
    
    
/*    
    if	(status	==	"success")	{
        var	list =	"";
//	loop	through	JSON	data	and	add	each	city	to	list-->
for	(var i=0; i	< data.length; i++)	{
    list +=	data[i].name + "<br>";
}
}
$("#results").html(list);
        });
});		
});    */