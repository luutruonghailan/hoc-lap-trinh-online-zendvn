#include <iostream>
using namespace std;
int main()
{
    /*
    +
    + +
    + + +
    */
    int number = 1;
    while (number <= 3)
    {
        for (int i = 1; i <= number; i++)
        {
            cout << "+ ";
        }
        cout << "\n";

        number++;
    }
}