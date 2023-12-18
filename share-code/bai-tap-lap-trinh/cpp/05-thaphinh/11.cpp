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
    int number           = HEIGH;
    while (number >= 1)
    {
        string charater      = "";
        string mark          = "";
        string shape         = "";
        string record        = "";

        for (int i = 1; i <= number - 1; i++)
        {
            charater += "=";
        }
        for (int j = 1; j <= HEIGH - number +1; j++)
        {
            mark += "+";
        }
        number--;

        record = charater + mark;
        shape  += record;
        cout << shape << "\n";
    }
}