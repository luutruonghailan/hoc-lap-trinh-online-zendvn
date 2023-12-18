#include <iostream>

using namespace std;
int main()
{
    /*
     * * * * * *   11 12 13 14 15 16
             *     21 22 23 24 25 26  n=2   i=5  2
          *        31 32 33 34 35 36  n=3   i=4  1
        *          41 42 43 44 45 46  n=4   i=3  -1
      *            51 52 53 54 55 56  n=5   i=2  -2
    * * * * * *
    */
    int number = 1;
    

    while (number <= 6)
    {
        
        for (int i = 1; i <= 6; i++)
        {
            if (number == 1  || number == 6)
            {
                cout << "*" ;
            }
            if (number == 2 && i == 5)
            {
                cout << "    " << "*" ;
            }
            
            if (number == 3 && i == 4)
            {
                 cout << "   " << "*" ;
            }
            if (number == 4 && i == 2)
            {
                 cout << "  " << "*" ;
            }
             if (number == 5 && i == 1)
            {
                 cout << " " << "*" ;
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