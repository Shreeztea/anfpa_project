var bf = document.getElementsByClassName('btn-file');
for (i=0; i<bf.length; i++){
    bf[i].addEventListener('click', function(e){
      var br = this.childNodes[3].click();
    });
};

function preview_image(filelist, x){
    if(filelist){
        var l = filelist.length;
    };
    for (i=0; i<l; i++){  
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById(x);
            var image = document.createElement('img');
            image.setAttribute('src', event.target.result); 
            image.setAttribute('height', '200px');
            output.appendChild(image);
        }
        reader.readAsDataURL(filelist[i]);
    }
}
function preview_image_single(filelist, x){
  var reader = new FileReader();
  reader.onload = function(){
    var output = document.getElementById(x);
    console.log(x);
    output.setAttribute('src', event.target.result);
  }
  reader.readAsDataURL(filelist[0]);
}