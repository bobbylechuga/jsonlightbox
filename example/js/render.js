 $(document).ready(function(){
   $.get('alexis100.json', function(data) {
       for (var i =0; i < data.length;i++) {
       	 var description = data[i].Desc;
       	 var fecha = description.split('.')[0];
       	 var descriptionSinFecha = description.split('.')[1];
         var html = '<li data-src="img/fullscreen/'+data[i].Imagen+'" data-sub-html="<h4>'+fecha+'</h4> '+descriptionSinFecha+'" style="background-image: url(img/thumbnails/'+data[i].Imagen+');"><a><img src="img/thumbnails/'+data[i].Imagen+'"></a> </li>';
         //if (i < 10) {
         $("#aniimated-thumbnials").append(html);
     	//}
         //console.log(html);
       }
    });
   	//setTimeout ('iniciargaleria()', 100);
 });


function iniciargaleria() {
	$('#aniimated-thumbnials').lightGallery();
}
