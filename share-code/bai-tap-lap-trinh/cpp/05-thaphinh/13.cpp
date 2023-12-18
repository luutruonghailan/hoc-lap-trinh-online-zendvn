#include <iostream>
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

    int number          = 1;
    const int HEIGHT    = 5;
    for (int i = HEIGHT; i >= number; i--)
    {
        string charater      = "";
        string mark          = "";
        string shape         = "";
        string record        = "";
        for (int j = 1; j <= HEIGHT-i; j++)
        {
            charater += "=";
        }
        for (int k = 1; k <= i; k++)
        {
            mark += "+";
        }

        record = charater + mark;
        shape  += record;
        cout << shape << "\n";
    }
}