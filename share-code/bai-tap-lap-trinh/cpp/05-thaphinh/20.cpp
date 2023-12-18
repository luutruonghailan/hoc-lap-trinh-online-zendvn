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
    int number = 1;
    const int HEIGHT = 5;

    for (int i = HEIGHT; i >= number; i--)
    {
        string space    = "";
        string number     = "";
        string record      = "";
        string shape       = "";
        for (int j = 1; j <= HEIGHT - i; j++)
        {
            space += " " ;
        }
        for (int n = 1; n <= i; n++)
        {
            number += to_string(n);
        }

        record = space  + number;
        shape += record;
        cout << shape << "\n";
    }
}