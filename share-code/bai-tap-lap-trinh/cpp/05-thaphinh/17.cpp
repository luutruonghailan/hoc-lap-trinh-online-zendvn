#include <iostream>
#include "zvn.h"

using namespace std;

int main()
{
    /*
    ===1===
    ==121==
    =12321=
    1234321
    */
    int number = 1;
    const int HEIGHT = 5;
    string shape = "";
    for (int i = number; i <= HEIGHT; i++)
    {
        string charater = myRepeat("=", HEIGHT - i);
        string left = createListNumber(1, i - 1);
        string right = createListNumberReverse(i, 1);
        string record = charater + left + right + charater;
        shape += record + "\n";
    }
    cout << shape << "\n";
}