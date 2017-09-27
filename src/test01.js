

var Howmanynum = Math.floor(Math.random()*(7-4+1)+4);

for(var i=0; i < Howmanynum ; i++){

   // document.write(Math.floor(Math.random()*10));

  var red = Math.floor(Math.random()*(255-0+1)+0);
  var green = Math.floor(Math.random()*(255-0+1)+0);
  var blue = Math.floor(Math.random()*(255-0+1)+0);

   document.write('<div style=','"color:rgba(',red,',',green,',',blue,',1);font-size:60px;"','>',Math.floor(Math.random()*10),'</div><br>');

}








