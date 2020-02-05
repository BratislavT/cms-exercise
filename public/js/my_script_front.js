var frontEndForm = JSON.parse(document.getElementById("frontEndJson").value);

renderForm(frontEndForm);

    function renderForm(form) {

        var i, v, lab, x, k, submit;

        $.each(form, function (i, v) {
            // console.log(i, v);

            //kreiranje natpisa iznad polja     
            if (form[i].type != "hidden") {
                lab = $("<label>").attr("for", form[i].type+String(i) ).text(form[i].label);
                $("#frm").append(lab);
            }

            //kreiranje polja za unos i izbor
            if (form[i].type == "select") {

                x = $("<select>").attr("id", form[i].type+String(i));
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
                        "value" : "SUBMIT"
                    });    
                    $("#frm").append(submit);

                } else {

                    x = $("<input>");
                    $(x).attr({
                        "type" : form[i].type,
                        "id" : form[i].type+String(i)
                    });
                    $("#frm").append(x);

                }
            }
        });	
    }