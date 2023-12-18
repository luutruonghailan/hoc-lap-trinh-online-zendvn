#include <iostream>
using namespace std;
int main()
{
    /*
       1        1
      212       2
     32123      32
    4321234
   543212345
    */
    int number          = 1;
    const int HEIGHT    = 5;


for (int i = number; i <= HEIGHT; i++)
{
    string space       = "";
    string left        = "";
    string right       = "";
    string record      = "";
    string shape       = "";

    for (int s = 1; s <= HEIGHT - i; s++)
        {
            space += " ";
        }
        for (int l = i; l >= 2; l--)
        {
            left += to_string(l);
        }
        for (int r = 2; r <= i; r++)
        {
            right += to_string(r);
        } 
        record = space + left + "1" + right;
        shape += record;
        cout << shape << "\n";
    }
}