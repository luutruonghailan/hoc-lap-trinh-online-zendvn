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
    int number = 3;
    while (number >= 1)
    {
        for (int j = 1; j <= 3-number; j++)
        {
            cout << "=";
        }
        for (int i = 1; i <= number; i++)
        {
            cout << "+";
        }
        
        cout << "\n";

        number--;
    }
}