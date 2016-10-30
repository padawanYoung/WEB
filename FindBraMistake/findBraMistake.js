function findBracketMistake(eql) {
    if (eql == "") return "string is empty";
    var str = "";
    if (~eql.indexOf("()") || ~eql.indexOf("[]") || ~eql.indexOf("{}")) return "mistake was found";
    for (var i = 0; i < eql.length; i++) {
        if (eql[i] == "(" || eql[i] == ")") str += eql[i];
        if (eql[i] == "[" || eql[i] == "]") str += eql[i];
        if (eql[i] == "{" || eql[i] == "}") str += eql[i];
    }
    var item = "() [] {}";
    var item2 = item.split(' ');
    var check = -1, i = 0, str2 = "";

    while (true) {
        str2 = "";
        i = 0;
        check = -1;
        while (check == -1 && i < item2.length) {
            check = str.indexOf(item2[i]);
            i++;
        }
        if (check == -1) return "mistake was found";
        for (var j = 0; j < str.length; j++) {
            if ((j != check) && (j != (check + 1))) {
                str2 += str[j];
            }
        }
        str = str2;
        if (str2 == "") return "not found";
    }
}
console.log(findBracketMistake("(5+5([4*2]*2+{6-5}))"));
