let selector = document.querySelector("#file");

  selector.onchange = function handleFiles( event ) {
    fileReader.readAsDataURL ( event.target.files [0] )
    fileReader.onload = function ( event ) {
        picture.src = event.target.result
    }
  }

    var picture = document.querySelector("#ava");
    picture.style.width = '200px';
    picture.style.height = '200px';


  let fileReader = new FileReader ();
  console.log(picture);