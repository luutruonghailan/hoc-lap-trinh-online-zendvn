#include <iostream>

using namespace std;
int main()
{
    /*
    ===1===
    ==121==
    =12321=
    1234321
    */
    int number = 1;
    // string space = "";
    // string center = "";

    while (number <= 5)
    {
        for (int i = 1; i <= 5 - number; i++)
        {
            cout << "=" ;
        }
        for (int i = 1; i <= number; i++)
        {
            cout << i ;
        }
        for (int j = number; j > 1; j--)
        {
            cout << j - 1 ;
        }
         for (int i = 1; i <= 5 - number; i++)
        {
            cout << "=" ;
        }
        
    cout  << "\n";
        // cout <<space << number<< space << "\n";

        number++;
    }
}