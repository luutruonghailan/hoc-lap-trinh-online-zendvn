#include <iostream>
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

    int number          = 1;
    const int HEIGHT    = 5;
    for (int i = number; i <= HEIGHT; i++)
    {
        string charater      = "";
        string shape         = "";
        for (int j = 1; j <= i; j++)
        {
            charater += to_string(j);
        }
        shape += charater;
        cout << shape << "\n";
    }
}