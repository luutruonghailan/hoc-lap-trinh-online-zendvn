#include <iostream>

using namespace std;
int main()
{
    /*
          1
        2 1
      3 2 1
    4 3 2 1
  5 4 3 2 1
    */
    int number = 1;
    

    while (number <= 5)
    {
          for (int i = 1; i <= 5 - number; i++)
        {
            cout << " " ;
        }
        
        for (int i = number; i >=1; i--)
        {
            cout << i ;
        }
    cout  << "\n";
        // cout <<space << number<< space << "\n";

        number++;
    }
}