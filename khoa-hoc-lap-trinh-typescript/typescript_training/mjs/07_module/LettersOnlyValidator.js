"use strict";
const lettersRegexp = /^[A-Za-z]+$/;
class LettersOnlyValidator {
    isAcceptable(s) {
        return lettersRegexp.test(s);
    }
}
exports.LettersOnlyValidator = LettersOnlyValidator;
