#include <iostream>
#include "zvn.h"

using namespace std;

int main()
{
    /*              i
    ===1===         1   3
    ==222==         2   2
    =33333=         3   33
    4444444
    */
    int number = 1;
    const int HEIGHT = 4;
    string shape = "";
    for (int i = number; i <= HEIGHT; i++)
    {
        string charater = myRepeat("=", HEIGHT - i);
        string number = myRepeat(to_string(i), i * 2 - 1);
        string record = charater + number + charater;
        shape += record + "\n";
    }
    cout << shape << "\n";
}