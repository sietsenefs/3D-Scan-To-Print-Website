@extends('layouts.defaultlayout')
@section('content')



    <div class="flex justify-content-around">

        {{-- left side --}}
        <div class="col-md-8 block block1">

            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class=" nav-item nav-link version1 active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Version 1</a>
                  <a class="nav-item nav-link version2 " id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Version 2</a>
                  <a class="version3 nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Version 3</a>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                    <model-viewer ondblclick="addHotspot()" onclick="selected()" style="background-color:#fffff2;" class="commentmodel" id="modelblock" src="{{asset('models/iphone-xr-case.gltf')}}" class="onClick testcubes testcubebig col-md-12"
                    ar
                    auto-rotate 
                    camera-controls
                    
                    shadow-intensity="1"
                    
                  alt="A 3D model of a test cube">
                  <div slot="progress-bar"></div>
                  <button slot="hotspot-0" class="hotspot" data-position="1.0731413083850803m 4.187490154939494m 5.626263159808076e-7m" data-normal="-7.675218260174282e-16m 1.343588356110743e-7m -0.9999999999999911m">
                    <div class="annotation">Screw on the scanner here</div></button>

                    
        </model-viewer>



                </div>




                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                    <model-viewer  ondblclick="addHotspot()" onclick="selected()" style="background-color:#f9f9f9;" class="commentmodel" id="modelblock2" src="{{asset('models/iphone-xr-case.gltf')}}" class="onClick testcubes testcubebig col-md-12"
                    ar
                    auto-rotate 
                    camera-controls
                    background-color="#254441"
                    shadow-intensity="1"
                  alt="A 3D model of a test cube">
                  <div slot="progress-bar"></div>
                  
                  <button slot="hotspot-0" class="hotspot" data-position="1.0731413083850803m 4.187490154939494m 5.626263159808076e-7m" data-normal="-7.675218260174282e-16m 1.343588356110743e-7m -0.9999999999999911m">
                    <div class="annotation">Screw on the scanner here</div></button>

                    
        </model-viewer>

                </div>




                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">


                    <model-viewer  ondblclick="addHotspot()" onclick="selected()" style="background-color:#f9f1f1;" class="commentmodel" id="modelblock3" src="{{asset('models/benchyFirst2.glb')}}" class="onClick testcubes testcubebig col-md-12"
                    ar
                    auto-rotate 
                    camera-controls
                    background-color="#254441"
                    shadow-intensity="1"
                  alt="A 3D model of a test cube">
                  <div slot="progress-bar"></div>
                  
                 

                    
        </model-viewer>



                </div>



              </div>

           
        

                    

        </div>


 {{-- right side --}}
        <div class="col-md-4 block block2">


            <div class="col-md-12 col-sm-offset-4 frame">
      
                <ul class="textinsert"></ul>
                <div>
                    <div class="msj-rta macro" style="margin:auto">                        
                        <div class="text text-r" >
                            <input class="mytext" placeholder="Type a message"/>
                        </div> 
                    </div>
                
            </div>    
          </div>




          <div class="input-group addhotspot">
            <div class="input-group-prepend">
              <button type="button" onclick="removeHotspot()" class="btn btn-outline-secondary">Remove hotspot</button>
              <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </div>
            <input type="text" id="hotspottext" name="hotspottext" class="form-control" placeholder="Input text for hotspot" aria-label="Text input with segmented dropdown button">
        

          </div>



        </div>
      </div>




 


  <script>
    //script to hightlight selected hotspot
    function selected(){
            // Add active class to the current button (highlight it)
var header = document.getElementById("modelblock");
var hotspots = header.getElementsByClassName("hotspot");
for (var i = 0; i < hotspots.length; i++) {
  hotspots[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("selected");
  if (current.length > 0) { 
    current[0].className = current[0].className.replace(" selected", "");
  }
  this.className += " selected";
  });
}

    }


    </script>
        
<script>
    //script to add an hotspot on doubleclick
    //hotspot counter so we can keep track of how many we added on 3 because we already have hotspot-0 and hotspot-1 (set to 0 if you start with 0 hotspots)
    var hotspotCounter = 2;
    function addHotspot(MouseEvent) {
        var inputtext = document.querySelector('#hotspottext').value;

        // if input = nothing then alert error if it isnt then add the hotspot
        if (inputtext == ""){
    alert("Put in text first to add hotspots.");
}else{
       
      const viewer = document.querySelector('#modelblock');
    const rect = viewer.getBoundingClientRect();

const x = event.clientX - rect.left;
const y = event.clientY - rect.top;
const positionAndNormal = viewer.positionAndNormalFromPoint(x, y);

// if the model is not clicked return the position in the console
if (positionAndNormal == null) {
console.log('no hit result: mouse = ', x, ', ', y);
return;
}
const {position, normal} = positionAndNormal;

// create the hotspot
const hotspot = document.createElement('button');
hotspot.slot = `hotspot-${hotspotCounter ++}`;
hotspot.classList.add('hotspot');
hotspot.id = `hotspot-${hotspotCounter}`;
hotspot.dataset.position = position.toString();
if (normal != null) {
hotspot.dataset.normal = normal.toString();
}
viewer.appendChild(hotspot);
console.log('mouse = ', x, ', ', y, positionAndNormal);


// adds the text to last hotspot
var element = document.createElement("div");
element.classList.add('annotation');
element.appendChild(document.createTextNode(inputtext));
document.getElementById(`hotspot-${hotspotCounter}`).appendChild(element);

document.querySelector('#hotspottext').value = "";
}
}
</script>



<script>
    // script to remove last hotspot
    function removeHotspot(){
    var el = document.getElementById(`hotspot-${hotspotCounter}`);
    
    if (el == null){
        alert("No hotspots to delete");
    }else{
        hotspotCounter --;
el.remove()}; // Removes the last added hotspot
}
</script>


<script>
  var me = {};

var you = {};

function formatAMPM(date) {
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var ampm = hours >= 12 ? 'PM' : 'AM';
    hours = hours % 12;
    hours = hours ? hours : 12; // the hour '0' should be '12'
    minutes = minutes < 10 ? '0'+minutes : minutes;
    var strTime = hours + ':' + minutes + ' ' + ampm;
    return strTime;
}            

//-- No use time. It is a javaScript effect.
function insertChat(who, text, time = 0){
    var control = "";
    var date = formatAMPM(new Date());
   
    var sender = " / Sietse - Makerpoint";
    var you = " / you";
    
    if (who == "you"){
        
        control = '<li style="width:100%">' +
                        '<div class="msj macro bubble">' +
                            '<div class="text text-l">' +
                                '<p>'+ text +'</p>' +
                                '<p><small>'+date+sender+'</small></p>' +
                            '</div>' +
                        '</div>' +
                    '</li>';                    
    }else{
        control = '<li style="width:100%;">' +
                        '<div class="msj-rta macro bubble">' +
                            '<div class="text text-r">' +
                                '<p>'+text+'</p>' +
                                '<p><small>'+date+you+'</small></p>' +
                            '</div>' +
                        '<div class="avatar" style="padding:0px 0px 0px 10px !important"></div>' +                                
                  '</li>';
    }
    setTimeout(
        function(){                        
            $(".textinsert").append(control);

        }, time);
    
}

function resetChat(){
    $(".textinsert").empty();
}

$(".mytext").on("keyup", function(e){
    if (e.which == 13){
        var text = $(this).val();
        if (text !== ""){
            insertChat("me", text);              
            $(this).val('');
        }
    }
});

//-- Clear Chat
resetChat();

//-- Print Messages
// insertChat("me", "Hello Tom...", 0);  
insertChat("you", "Hallo..., dit is de eerste versie van het 3D model heb je er nog aanmerkingen over?", 1500);
insertChat("you", "als dat het geval is kun je door dubbel te klikken op het model of door hier te typen een aanmerking achter laten.",2000);
insertChat("me", "Yes i do have some things", 3500);

// insertChat("me", "Spaceman: Computer! Computer! Do we bring battery?!", 9500);
// insertChat("you", "LOL", 12000);


//-- NOTE: No use time on insertChat.
</script>
@endsection