// Some samples to try
import { StringValidator } from "./Validation";
import { ZipCodeValidator } from "./ZipCodeValidator";
import { LettersOnlyValidator } from "./LettersOnlyValidator";

import * as MModule from "./MModule";

// let strings = ["Hello", "98052", "101"];

// // Validators to use
// let validators: { [s: string]: StringValidator; } = {};
// validators["ZIP code"] = new ZipCodeValidator();
// validators["Letters only"] = new LettersOnlyValidator();

// // Show whether each string passed each validator
// for (let s of strings) {
//     for (let name in validators) {
//         console.log("ABC");
//     }
// }

let obj = new MModule.Abc();
obj.showInfo();
console.log("123");

MModule.printAbc();
