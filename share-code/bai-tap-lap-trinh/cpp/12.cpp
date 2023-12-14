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
    while (number <= 4)
    {
        for (int i = 1; i <= number; i++)
        {
            cout << i;
        }
        cout << "\n";

        number++;
    }
}