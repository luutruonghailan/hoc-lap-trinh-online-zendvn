"use strict";
class Abc {
    showInfo() {
        console.log("Abc.showInfo");
    }
}
exports.Abc = Abc;
function printAbc() {
    console.log("Abc.printAbc");
}
exports.printAbc = printAbc;
