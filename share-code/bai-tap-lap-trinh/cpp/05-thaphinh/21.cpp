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
    const int HEIGHT = 5;
    for (int i = number; i <= HEIGHT; i++)
    {
        string space    = "";
        string number     = "";
        string record      = "";
        string shape       = "";
      for (int j = 1; j <= HEIGHT - i; j++)
        {
           space += " " ;
        }
        for (int k = i; k >=1; k--)
        {
            number += to_string(k) ;
        }
        record = space  + number;
        shape += record;
        cout << shape << "\n";
    }
}