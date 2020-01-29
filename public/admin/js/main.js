$(function () {
    
    $("demo").sortable();

    $(".form-group").draggable({
	 helper:      'clone', 
	 cursor:      'move',
	 containment: '.container',
         revert:      'invalid'
    });

    $(".demo, .elements").droppable({    //pominjanjem .demo i .elements, omogućujemo da se elementi vrate iz drop zoneu početnu zonu 
         drop: function (event, ui) {
               $(this).find(".placeholder").remove();    //kada prebacimo polje u drop zonu, izgubi se label drop zone "Drag Elements in this area..."
	       $(ui.draggable).clone().appendTo(this);   //valjda "kloniramo" polja iz prve zone u drop zonu.
               $(ui.draggable).remove();	         //Ukidamo prethodnu liniju. Kada jednom prebacimo element u drop zonu, to je to. Nema nazad.

	       $(".form-group").draggable({  //ovim drugim draggable blokom, omogućavamo dragg-ovanje u okviru drop zone
                 containment : '.container',
                 helper :      'clone',
                 revert :      'invalid'
	       });
         }

    
    });

//    function _(id){
//        return document.getElementById(id);	
//    }

//    window.readDropZone = function() {
//    	for(var i=0; i <_("demo").children.length; i++){
//        	alert(_("demo").children[i].id+" is in the drop zone");
//        }
//    }

    window.saveAndDisplay = function() {   
	    //  This gives you an HTMLElement object
//            var result = $('#print')[0];
//	    var list = $('#demo')[0];

  	    var result = document.getElementById('print');
            var list = document.getElementById('demo');
	    
	    //  This gives you a string representing of that element and its content
//            var html = list.outerHTML;       

            //  This gives you a JSON object that you can send with jQuery.ajax's `data`
            // option, you can rename the property to whatever you want.
//            var data = { html: html }; 

	    //  This gives you a string in JSON syntax of the object above that you can 
	    // send with XMLHttpRequest.
//	    var json = JSON.stringify(data);

//            document.getElementById("print").innerHTML = json;
	    

	
	    while (list.children.length > 0) {
        	result.appendChild(list.children[0]);
                
   	    }
        
           var html = result.outerHTML;
           var data = { html: html }; 
	   var json = JSON.stringify(data);

	   document.getElementById("print").innerHTML = json;


    }


});
