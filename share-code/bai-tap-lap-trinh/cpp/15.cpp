#include <iostream>

using namespace std;
int main()
{
    /*              i
    * * * * *       1       
          *         2
        *           3
      *             4
    * * * * *       5
    */
    int number = 1;
    while (number <=5)
    {
        
        for (int i = 1; i <= number; i++)
        {
            cout << " * " ;
        }
        // for (int i = 5; i >= number; i--)
        // {
        //     cout << " * " ;
        // }
         cout  << "\n";
        number++;
    }
}