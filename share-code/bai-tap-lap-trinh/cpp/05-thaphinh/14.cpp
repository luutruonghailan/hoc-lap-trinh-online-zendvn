#include <iostream>
#include "zvn.h"

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
    int number = 1;
    const int HEIGHT = 5;
    string shape = "";

    for (int i = number; i <= HEIGHT; i++)
    {
        string space = myRepeat(" ", HEIGHT - i);
        string left = createListNumberReverse(i, 2);
        string right = createListNumber(2, i);
        string record = space + left + "1" + right + space;
        shape += record + "\n";
    }
    cout << shape << "\n";
}