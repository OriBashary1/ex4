   
   document.getElementById("submit").onclick = function () {
        return CheckBoxCount();
    };

    function CheckBoxCount() {
        var inputList = document.getElementsByName("interests[]");
        var numChecked = 0;

        for (var i = 0; i < inputList.length; i++) {
            if (inputList[i].type == "checkbox" && inputList[i].checked) {
                numChecked = numChecked + 1;
            }
        }
        if (numChecked < 2) {
            alert("Pick atleast 2 hobbies!");
            return false;
        }
        return true;
    }

