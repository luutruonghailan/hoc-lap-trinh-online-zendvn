#include <iostream>
#include "zvn.h"

using namespace std;

int main()
{
    /*
    ====+
    ===++
    ==+++
    =++++
    +++++
    */
    const int HEIGHT = 5;
    int number = 1;
    string shape = "";

    for (int i = HEIGHT; i >= number; i--)
    {
        string charater = myRepeat("=", i - 1);
        string mark = myRepeat("+", HEIGHT - i + 1);
        string record = charater + mark;
        shape += record + "\n";
    }
    cout << shape << "\n";
}