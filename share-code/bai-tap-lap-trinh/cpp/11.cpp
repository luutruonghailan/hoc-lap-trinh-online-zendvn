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
    int number = 5;
    while (number >= 1)
    {
        for (int i = 1; i <= number - 1; i++)
        {
            cout << "=";
        }
        for (int j = 1; j <= 6 - number; j++)
        {
            cout << "+";
        }
        cout << "\n";

        number--;
    }
}