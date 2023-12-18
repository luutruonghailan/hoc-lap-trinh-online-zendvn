

#include <iostream>
using namespace std;
int main()
{
    int number      = 1;
    int yourNumber  = 4;
    int multi       = 1;
    string result   = "";

    while (number <= yourNumber)
    {
        multi *= number;
        string sign  = (number < yourNumber) ? " * " : " = ";
        result      +=  to_string(number) + sign;
        number++;
    }
    cout << result << multi;  
}