#include <iostream>

using namespace std;
int main()
{
    /*
     1 2 3 4 5
       1 2 3 4
         1 2 3
           1 2
              1
    */
    int number = 5;
    

    while (number >= 1)
    {
        
        for (int i = 1; i <= 5 - number; i++)
        {
            cout << " " ;
        }
        for (int i = 1; i <= number; i++)
        {
            cout << i ;
        }

    cout  << "\n";
        // cout <<space << number<< space << "\n";

        number--;
    }
}