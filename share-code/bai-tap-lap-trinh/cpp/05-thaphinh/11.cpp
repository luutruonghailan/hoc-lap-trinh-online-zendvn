#include <iostream>
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
    const int HEIGH      = 5;
    int number           = 1;

    for (int i = HEIGH; i >= number; i--)
    {
        string charater      = "";
        string mark          = "";
        string shape         = "";
        string record        = "";
        for (int j = 1; j <= i - 1; j++)
        {
            charater += "=";
        }
        for (int k = 1; k <= HEIGH - i +1; k++)
        {
            mark += "+";
        }

        record = charater + mark;
        shape  += record;
        cout << shape << "\n";
    }
}