const uuidv4 = require('uuid/v4');

let items = [
    {
        id      : uuidv4(),
        name    : "Abc Lorem ipsum sit amet, consectetur adipisicing elit.",
        level   : 0 // 0 Small, 1 Medium, 2 High
    },
    {
        id      : uuidv4(),
        name    : "Def Lorem ipsum dolor sit amet, consectetur adipisicing elit.",
        level   : 1 // 0 Small, 1 Medium, 2 High
    },
    {
        id      : uuidv4(),
        name    : "Ghj Lorem ipsum sit amet, consectetur adipisicing elit.",
        level   : 2 // 0 Small, 1 Medium, 2 High
    }
    ,
    {
        id      : uuidv4(),
        name    : "123 Lorem ipsum dolor sit amet, consectetur adipisicing elit.",
        level   : 0 // 0 Small, 1 Medium, 2 High
    }
];

export default items;