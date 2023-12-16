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
    while (number <= HEIGHT)
    {
        string charater      = "";
        string shape         = "";
        for (int i = 1; i <= number; i++)
        {
            charater += to_string(i);
        }
        number++;

        shape += charater;
        cout << shape << "\n";       
    }
}