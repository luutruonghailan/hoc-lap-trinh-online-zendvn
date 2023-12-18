#include <iostream>
using namespace std;
int main()
{

    int number      = 1;
    int yourNumber  = 4;
    int multi       = 0;
    string result   = "";

    while (number <= yourNumber)
    {
        multi       += (number * number);
        string sign  = (number < yourNumber) ? " ^ 2 + " : " ^ 2 = ";
        result      +=  to_string(number) + sign;
        number++;
    }
    cout << result << multi;
    
}