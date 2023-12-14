#include <iostream>
using namespace std;
int main()
{
    /*
    1+
    2xx
    3+++
    */
    int number = 1;
    while (number <= 3)
    {
        cout << number;
        for (int i = 1; i <= number; i++)
        {
            if (number % 2 == 0)
            {
                cout << "x";
            }
            else
            {
                cout << "+";
            }
                }
        cout << "\n";

        number++;
    }
}