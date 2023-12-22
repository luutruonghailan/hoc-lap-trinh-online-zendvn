#include <iostream>
#include <string>
#include "zvn.h"

using namespace std;

string createRecord(int index, int height)
{
    int countCharacter = index * 2 - 1;
    int countSpace = (height - countCharacter) / 2;

    string strCharacter = myRepeat("* ", countCharacter);
    string strSpace = myRepeat("  ", countSpace);

    return strSpace + strCharacter + strSpace + "\n";
}

int main()
{
    // 5
    //      *              1     " ".r(2)   "*".r(1)     " ".r(2)
    //    * * *            2     " ".r(1)   "*".r(3)     " ".r(1)
    //  * * * * *          3     " ".r(0)   "*".r(5)     " ".r(0)
    //    * * *            2     " ".r(1)   "*".r(3)     " ".r(1)
    //      *              1     " ".r(2)   "*".r(1)     " ".r(2)

    // 6
    //      *
    //    * * *
    //  * * * * *
    //  * * * * *
    //    * * *
    //      *

    int height = 6;
    int top = height / 2;
    int bottom = height - top;
    string shape = "";

    for (int i = 1; i <= top; i++)
    {
        shape += createRecord(i, height);
    }

    for (int j = bottom; j >= 1; j--)
    {
        shape += createRecord(j, height);
    }

    cout << shape << endl;
}