#include <iostream>

using namespace std;
int main()
{
    /*
      * * * * * * *
        *       *
          *   *
            *
         *   *
       *       *
     * * * * * * *
    */
    int number = 1;
    

    while (number <= 7)
    {
        
        for (int i = 1; i <= 7; i++)
        {
            if (number == 1  || number == 7 ) 
            {
                cout << "*" ;
            }
            if (number == 2 && i == 1) 
            {
                cout << " *   *" ;
            }
            if (number == 3 && i == 1) 
            {
                cout << "  * *" ;
            }
            if (number == 4 && i == 1) 
            {
                cout << "   * " ;
            }
            if (number == 5 && i == 1) 
            {
                cout << "  * * " ;
            }
            if (number == 6 && i == 1) 
            {
                cout << " *   *" ;
            }
        }
       
    cout  << "\n";
        // cout <<space << number<< space << "\n";

        number++;
    }
}

//  if i == 0 or i == height - 1 or j == 0 or j == height - 1 or i == j or j == height - 1 - i:
//             result += "*"
//         else:
//             result += " "
/*
*****



*****


*/