#include <iostream>
#include "zvn.h"

using namespace std;

int main()
{
    /*
    +++++
    =++++
    ==+++
    ===++
    ====+
    */

    int number = 1;
    const int HEIGHT = 5;
    string shape = "";
    for (int i = HEIGHT; i >= number; i--)
    {
        string charater = myRepeat("=", HEIGHT - i);
        string mark = myRepeat("+", i);
        string record = charater + mark;
        shape += record + "\n";
    }
    cout << shape << "\n";
}