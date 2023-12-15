#include <iostream>

using namespace std;
int main()
{
    /*
    ====1====
    ===212===
    ==32123==
    =4321234=
    543212345
    */
    int number = 1;
    

    while (number <= 5)
    {
        
        for (int i = 1; i <= 5 - number; i++)
        {
            cout << "=" ;
        }

        for (int i = number; i >= 1; i--)
        {
            cout << i ;
        }
        for (int i = 2; i <= number; i++)
        {
            cout << i ;
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