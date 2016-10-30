function logErr() {
    document.getElementById('mistake').style.display = 'inline';
    document.getElementById('icon').style.display = 'inline';
    event.preventDefault();
}


/**
 * @return {boolean}
 */
function NaNumber (x) {
    var test = true;
    if(isNaN(parseInt(x.slice(6),10))) test = false;
    if(isNaN(parseInt(x.slice(3), 10))) test  = false;
    if(isNaN(parseInt(x, 10)))  test = false;
    return test;
}

function numNumber (x) {
    var test2 = true;
    var fullDate = new Date();
    if ((parseInt(x.slice(3), 10) > 12) || (parseInt(x.slice(3), 10) == 0)) test2 = false;
    if ((parseInt(x, 10) > 31) || (parseInt(x, 10) == 0) ) test2 = false;
    if ( (parseInt(x.slice(6), 10) > fullDate.getFullYear()) || (parseInt(x.slice(6), 10) < 731) || (parseInt(x.slice(6), 10) == 0) ) test2 = false;
    return test2;
}


function validateForm() {

    var x = document.forms["MyForm"]["Date"].value;
    var fullDate = new Date();

    if (NaNumber (x) == false) {
        logErr();
        console.log('date format is NaN');
        return false;
    }

    if (fullDate.getFullYear() < parseInt(x.slice(6),10)) {
        console.log('man could not be born in a year that has not come');
        logErr();
        return false;
    }
    if (numNumber(x) == false) {
        logErr();
        console.log('does not correspond to the date format');
        return false;
    }
    if ((fullDate.getFullYear()) >= x.slice(6)) {
        console.log('год равен или меньне');
        if ((fullDate.getMonth() + 1) < parseInt(x.slice(3), 10)) {
            //console.log('год равен или меньне');
            logErr();
            console.log('month');
            return false;
        }
        else if ((fullDate.getDate()) < parseInt(x, 10)) {
            logErr();
            console.log('day');
            return false;
        }
    }
}