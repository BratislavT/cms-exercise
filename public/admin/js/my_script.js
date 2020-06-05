var formSettings = JSON.parse(document.getElementById("formSettings").value);

renderForm(formSettings);

    function renderForm(form) {

        var i, v, lab, x, k;

        $.each(form, function(i, v) {
            //console.log(i,v); 
      
            $(lab).each(function(){
                $(this).nextUntil(lab).wrapAll(document.createElement('div'));
            });

            //kreiranje natpisa iznad polja    
            lab = $("<label>").text(form[i].label);
            $("#frm").append(lab);



            //kreiranje polja za unos i izbor
            if (form[i].type == "select") {

                x = $("<select>");
                $(x).attr({
                    "id" : form[i].type+String(i),
                    "name" : form[i].name
                });
                $("#frm").append(x);

                $.each(form[i].choices, function(k, v) {
                    x.append($("<option>").attr("value", form[i].choices[k].label).text(form[i].choices[k].label));
                });

            } else {

                if (form[i].type == "checkbox") {

                    x = $("<frm>");
                    $("#frm").append(x);

                    $.each(form[i].values, function(k, v) {
                        x = $("<input>");
                        $(x).attr({
                            "value" : form[i].values[k].value,
                            "type" : form[i].type, 
                            "name" :  form[i].values[k].name,
                            "checked" : form[i].values[k].checked
                        });    
                        $("#frm").append(x);

                        x = $("<label>").text(form[i].values[k].label);
                        $("#frm").append(x);
                    }); 

                } else if (form[i].type == "submit") {
                    submit = $("<input>");
                    $(submit).attr({
                        "type" : "submit",
                        "class" : "btn btn-success",
                        "value" : "CONFIRM CHOICE"
                    });    
                    $("#frm").append(submit);

                } else {

                    x = $("<input>");
                    $(x).attr({
                        "type" : form[i].type,
                        "name" : form[i].name,
                        "id"   : form[i].type+String(i)
                    });
                    $("#frm").append(x);

                }
            }
        });	
    }