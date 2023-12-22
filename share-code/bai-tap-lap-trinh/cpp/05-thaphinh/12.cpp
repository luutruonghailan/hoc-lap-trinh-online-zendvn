#include <iostream>
#include "zvn.h"

using namespace std;

int main()
{
    /*
    1
    12
    123
    1234
    12345
    */

    int number = 1;
    const int HEIGHT = 5;
    string shape = "";
    for (int i = number; i <= HEIGHT; i++)
    {
        shape += createListNumber(1, i) + "\n";
    }
    cout << shape << "\n";
}