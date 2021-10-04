
window.onload = () => {
    console.log("loaded");

    var dropd = document.getElementById("oefs");
    var divList = document.getElementsByClassName("divv");


    $(dropd).change(function() {
        let $option = $(dropd).find('option:selected');
        for (let i = 0; i < divList.length; ++i) {
            if (divList[i].getAttribute('id') != $option.val()) {
                $(divList[i]).hide();
                // console.log(divList[i].getAttribute('id'));
            }
            else if(divList[i].getAttribute('id') == $option.val()){
                $(divList[i]).show();
            }

        }
    });




}