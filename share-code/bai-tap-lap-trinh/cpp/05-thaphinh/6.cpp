#include <iostream>
#include "zvn.h"

using namespace std;

int main()
{
    /*
    +
    + +
    + + +
    */
    int number = 1;
    string shape = "";
    string character = "+";
    const int HEIGHT = 5;

    for (int i = number; i <= HEIGHT; i++)
    {
        shape += myRepeat(character, i) + "\n";
    }
    cout << shape << "\n";
}